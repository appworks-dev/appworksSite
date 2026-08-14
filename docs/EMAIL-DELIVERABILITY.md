# Email deliverability findings — app-works.app

**T11** in [TASKS-TECH.md](TASKS-TECH.md). Investigated 14 Aug 2026. **Report only —
nothing was changed, and no test message was sent.** The Mailgun event log turned
out to answer the delivery question directly, so the live submission the task
allowed (with your OK) was not needed.

Everything below is measured: DNS via 1.1.1.1, domain state and event history via
the Mailgun EU API, the reply path by connecting to the mail server.

---

## Verdict

**Contact-form mail is being delivered today.** Nothing is bouncing.

**But it passes DMARC on SPF alone, with no DKIM to fall back on** — and
`app-works.dev` publishes `p=reject`. The moment a notification is forwarded
(a `.forward` rule, an alias, a mailing list, a Google Groups address), SPF
breaks, there is no second leg, and the message is **rejected rather than
junked**. It is one forwarding rule away from silent loss.

One DNS change fixes it.

---

## What actually sends

`js/contact.js` posts to `https://tarkin.mwtatooine.net/contact` → `app.py:1348`
→ `Helpers/mailgun_helper.py` → Mailgun EU.

| | |
|---|---|
| Mailgun domain | **`app-works.dev`** (`MAILGUN_DOMAIN` in `/home/tarkin/.env` on QIRA) |
| From | `noreply@app-works.dev` |
| To | `info@app-works.app` |
| Cc | `nikola@weareappworks.app` — a real Google Workspace domain, not a typo |
| Reply-To | the visitor's address |
| Region | `api.eu.mailgun.net` |

Last 30 days, tag `contact-form`:

```
delivered  info@app-works.app          x2     250 2.0.0 Ok: queued as 2E66848EDF
delivered  nikola@weareappworks.app    x2
failed     info@app-works.app          x1     451 4.7.1 Greylisted, please try again later
```

The one failure is a **temporary** greylist that retried successfully. Not a
deliverability fault.

## The DKIM gap

`app-works.dev` DMARC: `p=reject; sp=reject; adkim=s; aspf=s; pct=100`.
Strict alignment on both legs, reject on failure.

**SPF leg — passes.**
`v=spf1 ip4:91.98.154.99 include:mailgun.org -all` covers Mailgun's senders, and
the envelope sender is `noreply@app-works.dev`, so `aspf=s` is satisfied.

**DKIM leg — fails.** Mailgun's own API reports the DKIM record for this domain
as unverified, and the records simply are not in DNS:

| record Mailgun expects | in Cloudflare? |
|---|---|
| `mta._domainkey.app-works.dev` | **no** (Mailgun: `valid=unknown`) |
| `pdk1._domainkey.app-works.dev` | **no** |
| `pdk2._domainkey.app-works.dev` | **no** |

The reason is a **second, duplicate Mailgun domain**. The account holds both
`app-works.dev` and `mail.app-works.dev`, both "active", and the DKIM CNAMEs were
published for the *subdomain*:

```
CNAME  pdk1._domainkey.mail.app-works.dev  ->  pdk1._domainkey.1f947.dkim2.eu.mgsend.org
CNAME  pdk2._domainkey.mail.app-works.dev  ->  pdk2._domainkey.1f947.dkim2.eu.mgsend.org
CNAME  email.mail.app-works.dev            ->  eu.mailgun.org
MX     mail.app-works.dev                  ->  mxa/mxb.eu.mailgun.org
```

`mail.app-works.dev` has **zero events** — nothing uses it. Tarkin sends through
the bare domain, which has no DKIM.

(The `dkim._domainkey.app-works.dev` TXT that does exist is the self-hosted mail
server's key, a different selector from the one Mailgun signs with.)

### Fix — pick one

**A. Publish Mailgun's DKIM for the bare domain (recommended).**
In Mailgun → Sending → Domains → `app-works.dev` → DNS records, copy the two
`pdk1`/`pdk2._domainkey` CNAME values and add them to the `app-works.dev`
Cloudflare zone (`5f8b82558631e19822456a1742016e35`), DNS-only, not proxied. No
code change, no restart, From address unchanged. Verify in Mailgun, then confirm
`dig TXT pdk1._domainkey.app-works.dev` resolves.

**B. Point Tarkin at the subdomain that is already set up.**
Set `MAILGUN_DOMAIN=mail.app-works.dev` in `/home/tarkin/.env`, then
`touch /home/tarkin/tarkin.wsgi` (a plain `systemctl reload apache2` does not
reload the Python). Zero DNS work — but the From becomes
`noreply@mail.app-works.dev`, which reads worse to a human.

**Then, either way:** delete the unused Mailgun domain so this cannot recur.

## Reply path (info@app-works.app) — healthy

When someone replies from `info@app-works.app`, the mail is *from* app-works.app,
so that domain's `p=reject; adkim=s; aspf=s` applies. It holds up:

| check | result |
|---|---|
| MX | `mailserver.mwtatooine.net` → 91.98.154.99 |
| PTR | `91.98.154.99` → `mailserver.mwtatooine.net` |
| Forward-confirmed rDNS | **valid** (PTR name resolves back to the same IP) |
| SPF | `v=spf1 ip4:91.98.154.99 -all` — authorises that exact IP, strictly aligned |
| DKIM selectors published | `dkim._domainkey`, `google._domainkey` |
| TLS on :25 | valid cert, `CN=mailserver.mwtatooine.net`, expires **9 Oct 2026** |
| SMTP banner | `220 mailserver.mwtatooine.net ESMTP Postcow` |
| bl.spamcop.net | not listed |
| b.barracudacentral.org | not listed |
| zen.spamhaus.org | **could not query** — Spamhaus refuses lookups from public resolvers (`127.255.255.254` is that refusal code, *not* a listing). Check manually at spamhaus.org/ip-reputation. |

**One thing left unconfirmed:** whether Postcow actually signs outbound mail with
the published `dkim` selector. The selector exists in DNS, but a published key
proves nothing about whether the server uses it. Confirming needs either the mail
server's config or one outbound test to a `mail-tester.com` address. Say the word
and I will run that test — it sends *from* the mailbox, so it is your call.

## Two things worth knowing

**`app-works.app` can only ever send from that one IP.** Its SPF is
`ip4:91.98.154.99 -all` — no Mailgun, no SES, no Google. That is correct and
tight today. But it means any future "send the newsletter as
`hello@app-works.app`" plan needs the SPF updated *first*, or `p=reject` will
bounce every message.

**`google._domainkey.app-works.app` looks stale.** The MX is the self-hosted
server, not Google, so nothing appears to sign with it. Harmless, but it is one
more key that could be reused if the Workspace tenant is ever compromised. Worth
removing if nobody can say what it is for.

**`app-works.dev` has three senders configured** — Mailgun, Resend
(`resend._domainkey`), and Amazon SES (`send.app-works.dev`). If Resend and SES
are not in use, retiring them shrinks the surface for a spoofing attempt that
would otherwise inherit the domain's reputation.
