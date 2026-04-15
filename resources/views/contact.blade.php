<x-app-layout :title="'Contact - Tailwind Notes'">
    <section class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Contact</span>
            <h1 class="mt-6 text-4xl font-semibold text-slate-900 sm:text-5xl">Get in touch with a clean UI approach.</h1>
            <p class="mt-6 text-slate-600">Send a quick message and I’ll get back to you with the next step.</p>

            <form id="contact-form" class="mt-10 space-y-6 rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
                    <input id="name" name="name" type="text" placeholder="Your name" class="mt-3 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:ring-4 focus:ring-slate-200" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                    <input id="email" name="email" type="email" placeholder="you@example.com" class="mt-3 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:ring-4 focus:ring-slate-200" required>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell me what you need" class="mt-3 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:ring-4 focus:ring-slate-200" required></textarea>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <p id="contact-status" class="text-sm text-slate-500 hidden">Your message is ready to send.</p>
                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Send message</button>
                </div>
            </form>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <div class="space-y-6">
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Email</p>
                    <p class="mt-3 text-lg font-semibold text-slate-900">noeljgaddi.com</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Location</p>
                    <p class="mt-3 text-lg font-semibold text-slate-900">Asin Road, Baguio City</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Availability</p>
                    <p class="mt-3 text-lg font-semibold text-slate-900">Mon–Fri, 9am–6pm</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
