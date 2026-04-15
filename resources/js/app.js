import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.querySelector('#contact-form');
    const contactStatus = document.querySelector('#contact-status');

    if (!contactForm || !contactStatus) {
        return;
    }

    contactForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const submitButton = contactForm.querySelector('button[type="submit"]');

        submitButton.disabled = true;
        submitButton.classList.add('opacity-70', 'cursor-not-allowed');
        contactStatus.classList.remove('hidden');
        contactStatus.textContent = 'Thanks! Your message is set — we’ll reply soon.';

        window.setTimeout(() => {
            submitButton.disabled = false;
            submitButton.classList.remove('opacity-70', 'cursor-not-allowed');
            contactForm.reset();
            contactStatus.textContent = 'Your message is ready to send.';
        }, 1200);
    });
});
