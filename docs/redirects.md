# Redirect System

Short URLs for use in QR codes and printed materials. Destinations managed in one file — no code changes needed.

## How to add a redirect

Edit `redirects.json` in the project root:

```json
{
  "card": "https://litteraworks.com/",
  "event": "https://example.com/event-page",
  "newslug": "https://example.com/whatever"
}
```

Then deploy:

```bash
git add redirects.json
git commit -m "redirects: add newslug"
git push
```

On the server:

```bash
git pull
```

Done. `/go/newslug` is live immediately.

## How to change a destination

Same process — update the URL value in `redirects.json`, commit, push, pull.

## Slug rules

- Lowercase letters, numbers, hyphens, underscores only
- No spaces
- Examples: `card`, `event`, `spring-sale`, `qr_2026`

## Fallback behavior

- Unknown slug → redirects to `/`
- Missing or broken `redirects.json` → redirects to `/`

## Files

| File | Purpose |
|---|---|
| `redirects.json` | Slug → URL mapping (edit this) |
| `go/index.php` | Redirect logic (don't touch) |
| `.htaccess` | Routes `/go/*` to the PHP file (don't touch) |
