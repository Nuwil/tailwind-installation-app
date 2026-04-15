<x-app-layout :title="'Contact - Tailwind Notes'">
    <section class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-[2rem] border border-white/10 bg-slate-900/85 p-8 shadow-2xl shadow-slate-950/20 sm:p-10">
            <span class="inline-flex rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-emerald-300">Contact</span>
            <h1 class="mt-6 text-4xl font-semibold text-white sm:text-5xl">Let’s make something modern.</h1>
            <p class="mt-6 text-lg leading-8 text-slate-300">Reach out with your idea, question, or project brief, and I’ll help make the UI feel modern and enjoyable.</p>

            <form id="contact-form" class="mt-10 space-y-6 rounded-[1.5rem] border border-white/10 bg-slate-950/80 p-6 shadow-lg shadow-slate-950/30">
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-300">Name</label>
                    <input id="name" name="name" type="text" placeholder="Your name" class="mt-3 w-full rounded-3xl border border-slate-800 bg-slate-900 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-300">Email</label>
                    <input id="email" name="email" type="email" placeholder="you@example.com" class="mt-3 w-full rounded-3xl border border-slate-800 bg-slate-900 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required>
                </div>
                <div>
                    <label for="message" class="block text-sm font-semibold text-slate-300">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell me what you need" class="mt-3 w-full rounded-3xl border border-slate-800 bg-slate-900 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required></textarea>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <p id="contact-status" class="text-sm text-slate-400 hidden">Your message is ready to send.</p>
                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-sky-400">Send message</button>
                </div>
            </form>
        </div>

        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
            <div class="space-y-6">
                <div class="rounded-3xl bg-slate-950/90 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Email</p>
                    <p class="mt-3 text-xl font-semibold text-white">hello@example.com</p>
                </div>
                <div class="rounded-3xl bg-slate-950/90 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Location</p>
                    <p class="mt-3 text-xl font-semibold text-white">Remote / Anywhere</p>
                </div>
                <div class="rounded-3xl bg-slate-950/90 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Availability</p>
                    <p class="mt-3 text-xl font-semibold text-white">Mon–Fri, 9am–6pm</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
