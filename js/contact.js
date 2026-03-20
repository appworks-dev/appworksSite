document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    const form = e.target;
    const btn = form.querySelector('button[type=submit]');
    const msg = document.getElementById('contact-msg');
    btn.disabled = true;
    msg.className = 'text-center text-sm font-semibold hidden';
    try {
        const res = await fetch('https://tarkin.mwtatooine.net/contact', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                name: form.name.value,
                email: form.email.value,
                subject: form.subject.value,
                message: form.message.value + '\n\nSent from app-works.app'
            })
        });
        const data = await res.json();
        if (data.success) {
            msg.textContent = 'Message sent! We\'ll be in touch soon.';
            msg.className = 'text-center text-sm font-semibold text-green-400';
            form.reset();
        } else {
            msg.textContent = data.message || 'Something went wrong. Please try again.';
            msg.className = 'text-center text-sm font-semibold text-red-400';
        }
    } catch (err) {
        msg.textContent = 'Failed to send. Please check your connection and try again.';
        msg.className = 'text-center text-sm font-semibold text-red-400';
    } finally {
        btn.disabled = false;
    }
});
