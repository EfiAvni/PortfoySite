<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giris Yap - Muhammet Avni Kucuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        panel: '0 30px 80px rgba(15, 23, 42, 0.16)',
                    },
                },
            },
        };
    </script>
</head>
<body class="min-h-screen overflow-hidden bg-slate-950 font-sans text-black antialiased">
    <div class="relative flex min-h-screen items-center justify-center px-4 py-10 sm:px-6 lg:px-8">
        <div class="absolute inset-0 bg-[linear-gradient(135deg,_#020617,_#0f172a_45%,_#111827)]"></div>
        <div class="absolute left-12 top-12 h-32 w-32 rounded-full bg-cyan-400/10 blur-3xl"></div>
        <div class="absolute bottom-12 right-12 h-40 w-40 rounded-full bg-blue-500/10 blur-3xl"></div>

        <div class="relative w-full max-w-md rounded-[2rem] bg-white p-6 shadow-panel sm:p-8 md:p-10">
            <div class="mx-auto w-full max-w-md">
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-black">
                        Login
                    </span>
                    <h2 class="mt-4 text-3xl font-semibold text-black">Giriş Yap</h2>
                </div>

                <form action="/login" method="POST" class="mt-8 space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-black">E-posta</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            placeholder="ornek@mail.com"
                            class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-black outline-none transition placeholder:text-black/50 focus:border-sky-400 focus:bg-white focus:ring-4 focus:ring-sky-100"
                        >
                    </div>

                    <div>
                        <div class="mb-2 flex items-center justify-between gap-3">
                            <label for="password" class="block text-sm font-medium text-black">Sifre</label>
                        </div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            placeholder="••••••••"
                            class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-black outline-none transition placeholder:text-black/50 focus:border-sky-400 focus:bg-white focus:ring-4 focus:ring-sky-100"
                        >
                    </div>

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center rounded-2xl border border-black bg-white px-4 py-3 text-sm font-semibold text-black transition hover:bg-slate-100 focus:outline-none focus:ring-4 focus:ring-slate-200"
                    >
                        Giriş Yap
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
