<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Mesajları</title>
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
                        glass: '0 24px 80px rgba(15, 23, 42, 0.18)',
                        soft: '0 10px 40px rgba(148, 163, 184, 0.22)',
                    },
                },
            },
        };
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen overflow-x-hidden bg-[#eef2ff] font-sans text-black antialiased">
    <div class="relative isolate min-h-screen">
        <div class="absolute inset-x-0 top-0 -z-10 h-[420px] bg-gradient-to-br from-white/70 via-[#f4f7ff] to-[#eef2ff]"></div>
        <div class="absolute left-10 top-12 -z-10 h-44 w-44 rounded-full bg-white/70 blur-3xl"></div>
        <div class="absolute right-12 top-20 -z-10 h-60 w-60 rounded-full bg-indigo-100/60 blur-3xl"></div>
        <div class="absolute bottom-12 left-1/3 -z-10 h-52 w-52 rounded-full bg-sky-100/50 blur-3xl"></div>

        <div class="mx-auto flex min-h-screen max-w-7xl flex-col gap-6 px-4 py-6 sm:px-6 lg:flex-row lg:px-8">
            <aside class="w-full rounded-[2rem] border border-white/55 bg-white/35 p-5 shadow-glass backdrop-blur-2xl lg:sticky lg:top-6 lg:h-[calc(100vh-3rem)] lg:w-72 lg:shrink-0 lg:p-6">
                <div class="flex items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/60 bg-white/60 text-lg font-semibold shadow-soft backdrop-blur-xl">
                        MK
                    </div>
                    <div>
                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-black">Panel</p>
                        <h1 class="text-lg font-semibold text-black">Yönetim Alanı</h1>
                    </div>
                </div>

                <nav class="mt-8 space-y-2 text-sm text-black">
                    <a href="dashboard" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>Anasayfa</span>
                        <span>01</span>
                    </a>
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-black bg-white px-4 py-3 font-medium shadow-soft transition hover:bg-slate-100">
                        <span>İletişim Mesajları</span>
                        <span>02</span>
                    </a>
                    <a href="projects" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>Projeler</span>
                        <span>03</span>
                    </a>
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>Ayarlar</span>
                        <span>04</span>
                    </a>
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>Çıkış</span>
                        <span>05</span>
                    </a>
                </nav>

                <div class="mt-8 rounded-[1.75rem] border border-white/60 bg-white/50 p-5">
                    <p class="text-sm uppercase tracking-[0.24em] text-black">DESTEK</p>
                    <p class="mt-3 text-sm leading-7 text-black">
                        Panel ile ilgili herhangi bir problem yaşarsan veya yardıma ihtiyaç duyarsan, bizimle iletişime geçmekten çekinme. Her zaman destek olmaya hazırız!
                    </p>
                    <br>
                    <a href="https://wa.me/905319452746" class="fa-brands fa-whatsapp text-green-500 text-2xl rounded-full border border-black bg-white px-6 py-3 text-center text-sm font-medium text-black transition hover:bg-slate-100">
                        WhatsApp
                    </a>
                </div>
            </aside>

            <main class="flex-1 rounded-[2rem] border border-white/55 bg-white/35 p-5 shadow-glass backdrop-blur-2xl lg:p-6">
                <div class="flex items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/60 bg-white/60 text-lg font-semibold shadow-soft backdrop-blur-xl">
                        MK
                    </div>
                    <div>
                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-black">Yönetici</p>
                        <h1 class="text-lg font-semibold text-black">İletişim Mesajları</h1>
                    </div>
                </div>

                <div class="mt-8 overflow-hidden rounded-[1.75rem] border border-white/60 bg-white/50">
                    <table class="w-full table-auto border-collapse text-left text-sm text-black">
                        <thead class="bg-white/70">
                            <tr>
                                <th class="px-6 py-3">Ad</th>
                                <th class="px-6 py-3">E-posta</th>
                                <th class="px-6 py-3">Konu</th>
                                <th class="px-6 py-3">Mesaj</th>
                                <th class="px-6 py-3">Tarih</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tumMesajlar as $mesaj)
                                <tr>
                                    <td class="px-6 py-3">{{ $mesaj['name'] }}</td>
                                    <td class="px-6 py-3">{{ $mesaj['email'] }}</td>
                                    <td class="px-6 py-3">{{ $mesaj['subject'] }}</td>
                                    <td class="px-6 py-3">{{ $mesaj['message'] }}</td>
                                    <td class="px-6 py-3">{{ $mesaj['created_at'] }}</td>
                                </tr>
                            @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
        </div>
    </div>
</body>
</html>
