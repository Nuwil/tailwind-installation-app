<x-app-layout :title="'Contact - Tailwind Notes'">
    <section class="grid gap-10 lg:grid-cols-[1.2fr_0.8fr]">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">Get in touch</span>
            <h1 class="mt-6 text-4xl font-semibold text-slate-900 sm:text-5xl">Let’s build something easy to use.</h1>
            <p class="mt-6 text-lg leading-8 text-slate-600">Send a quick note and I’ll get back to you with a clean, simple solution.</p>

            <form id="contact-form" class="mt-10 space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
                    <input id="name" name="name" type="text" placeholder="Your name" class="mt-2 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm focus:border-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-100" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                    <input id="email" name="email" type="email" placeholder="you@example.com" class="mt-2 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm focus:border-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-100" required>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell me what you need" class="mt-2 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm focus:border-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-100" required></textarea>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <p id="contact-status" class="text-sm text-slate-500 hidden">Your message is ready to send.</p>
                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Send message</button>
                </div>
            </form>
        </div>

        <div class="space-y-6 rounded-3xl border border-slate-200 bg-slate-950 p-8 text-white shadow-sm sm:p-10">
            <div>
                <h2 class="text-2xl font-semibold">More ways to connect</h2>
                <p class="mt-4 text-slate-300">Prefer a short chat? Use the form or connect through email, and I’ll respond quickly.</p>
            </div>
            <div class="space-y-4 rounded-3xl bg-white/5 p-6">
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-slate-400">Email</p>
                    <p class="mt-2 text-lg font-medium text-white">hello@example.com</p>
                </div>
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-slate-400">Location</p>
                    <p class="mt-2 text-lg font-medium text-white">Remote / Anywhere</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
