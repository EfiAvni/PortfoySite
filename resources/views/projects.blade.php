<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeler</title>
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
            <aside class="w-full rounded-[2rem] border border-white/55 bg-white/35 p-5 shadow-glass backdrop-blur-2xl lg:sticky lg:top-6 lg:h-[calc(100vh-3rem)] lg:w-72 lg:p-6">
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
                    <a href="/dashboard" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>Anasayfa</span>
                        <span>01</span>
                    </a>
                    <a href="/contactMessages" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>İletişim Mesajları</span>
                        <span>02</span>
                    </a>
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-black bg-white px-4 py-3 font-medium shadow-soft transition hover:bg-slate-100">
                        <span>Projeler</span>
                        <span>03</span>
                    </a>
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>Ayarlar</span>
                        <span>04</span>
                    </a>
                    <a href="/logout" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
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

            <main class="flex-1">
                <header class="rounded-[2rem] border border-white/55 bg-white/35 px-5 py-5 shadow-glass backdrop-blur-2xl sm:px-7">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <p class="text-sm font-medium uppercase tracking-[0.32em] text-black">Projeler</p>
                            <h2 class="mt-2 text-3xl font-semibold text-black sm:text-4xl">Proje yönetim ekranı</h2>
                            <p class="mt-3 max-w-2xl text-sm leading-7 text-black">
                                Buradan projeleri eklemek, düzenlemek, silmek ve detaylarını görüntülemek için hazır bir arayüz kullanabilirsin.
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <a href="#proje-ekle" class="rounded-full border border-black bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-slate-100">
                                Yeni Proje Ekle
                            </a>
                            <a href="#proje-listesi" class="rounded-full border border-white/60 bg-white/45 px-5 py-3 text-sm font-medium text-black transition hover:bg-white/70">
                                Proje Listesi
                            </a>
                        </div>
                    </div>
                </header>

                <section class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Toplam Proje</p>
                        <p class="mt-3 text-3xl font-semibold text-black">{{ $project_count }}</p>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Yayındaki Projeler</p>
                        <p class="mt-3 text-3xl font-semibold text-black">{{ $onair_count }}</p>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Taslak Projeler</p>
                        <p class="mt-3 text-3xl font-semibold text-black">{{ $draft_count }}</p>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Son Güncelleme</p>
                        <p class="mt-3 text-3xl font-semibold text-black">Bugün</p>
                    </div>
                </section>

                <section class="mt-6 grid gap-6 xl:grid-cols-[0.95fr_1.05fr]">
                    <div id="proje-ekle" class="rounded-[2rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <a href="#proje-ekle"></a>
                                <p class="text-sm uppercase tracking-[0.3em] text-black">Proje Ekle</p>
                                <h3 class="mt-3 text-2xl font-semibold text-black">Yeni proje formu</h3>
                            </div>
                        </div>

                        <form action="projects" method="POST" class="mt-6 space-y-4">
                            @if(session('mesaj'))
                                <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700 shadow-sm">
                                    {{ session('mesaj') }}
                                </div>
                            @endif
                            <div>
                                <label for="project_title" class="mb-2 block text-sm font-medium text-black">Proje Başlığı</label>
                                <input name="project_title" id="project_title" type="text" placeholder="Proje adını yazın" class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300" required>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="project_category" class="mb-2 block text-sm font-medium text-black">Kategori</label>
                                    <select def name="project_category" id="project_category" class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl focus:border-sky-300" required>
                                        <option value="">Seçiniz</option>
                                        <option>Website</option>
                                        <option>Panel</option>
                                        <option>E-Ticaret</option>
                                        <option>Blog</option>
                                        <option>Web Uygulama</option>
                                        <option>Masaüstü Uygulama</option>
                                        <option>Grafik Tasarım</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="project_status" class="mb-2 block text-sm font-medium text-black">Durum</label>
                                    <select name="project_status" id="project_status" class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl focus:border-sky-300" required>
                                        <option value="">Seçiniz</option>
                                        <option>Yayında</option>
                                        <option>Taslak</option>
                                        <option>Hazırlanıyor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="project_url" class="mb-2 block text-sm font-medium text-black">Proje Linki</label>
                                    <input name="project_url" id="project_url" type="text" placeholder="https://ornek.com" class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300">
                                </div>

                                <div>
                                    <label for="project_image" class="mb-2 block text-sm font-medium text-black">Görsel Yolu</label>
                                    <input name="project_image" id="project_image" type="text" placeholder="/images/proje.jpg" class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300">
                                </div>
                            </div>

                            <div>
                                <label for="project_description" class="mb-2 block text-sm font-medium text-black">Açıklama</label>
                                <textarea name="project_description" id="project_description" rows="5" placeholder="Proje hakkında kısa bilgi girin" class="w-full resize-none rounded-[1.5rem] border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300" required></textarea>
                            </div>

                            <div class="flex flex-wrap gap-3 pt-2">
                                <button type="submit" class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black transition hover:bg-slate-100">
                                    Projeyi Kaydet
                                </button>
                                <button type="reset" class="rounded-full border border-white/60 bg-white/45 px-6 py-3 text-sm font-medium text-black transition hover:bg-white/70">
                                    Temizle
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="grid gap-6">
                        <div class="rounded-[2rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Ön İzleme</p>
                                    <h3 class="mt-3 text-2xl font-semibold text-black">Seçili proje kartı</h3>
                                </div>
                                <span class="mt-1 inline-flex h-3 w-3 rounded-full bg-emerald-400"></span>
                            </div>

                            <div class="mt-6 rounded-[1.75rem] border border-black/60 bg-gradient-to-br from-white/70 to-white/25 p-5">
                                <p class="text-sm text-black">Örnek Proje</p>
                                <h4 class="mt-3 text-xl font-semibold text-black">Kurumsal Web Sitesi</h4>
                                <p class="mt-3 text-sm leading-7 text-black">
                                    Proje ekleme alanına gireceğin bilgiler burada kart yapısı gibi gösterilebilir. Şimdilik ön yüz düzeni hazır.
                                </p>
                                <div class="mt-5 flex flex-wrap gap-2 text-sm text-black">
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">Kurumsal</span>
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">Yayında</span>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </section>

                <section id="proje-listesi" class="mt-6 rounded-[2rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Proje Listesi</p>
                            <h3 class="mt-3 text-2xl font-semibold text-black">Eklenen projeler</h3>
                        </div>
                        <p class="max-w-2xl text-sm leading-7 text-black">
                            Aşağıdaki satırlarda projeleri görüntüleyebilir, düzenle ve sil butonlarını bağlayarak işlem yaptırabilirsin.
                        </p>
                    </div>

                    <div class="mt-6 overflow-hidden rounded-[1.75rem] border border-white/60 bg-white/50">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left text-sm text-black">
                                <thead class="bg-white/70">
                                    <tr>
                                        <th class="px-5 py-4 font-semibold">Proje</th>
                                        <th class="px-5 py-4 font-semibold">Kategori</th>
                                        <th class="px-5 py-4 font-semibold">Durum</th>
                                        <th class="px-5 py-4 font-semibold">Tarih</th>
                                        <th class="px-5 py-4 font-semibold">İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                        <tr class="border-t border-white/60">
                                        <td class="px-5 py-4 align-top">
                                            <p class="font-semibold text-black">{{ $project["title"] }}</p>
                                            <p class="mt-1 max-w-md text-xs leading-6 text-black/70">
                                                {{ $project["description"] }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-4">{{ $project["category"] }}</td>
                                        <td class="px-5 py-4">
                                            <span class="rounded-full border border-black bg-white px-3 py-2 text-xs font-medium text-black">
                                                {{ $project["status"] }}
                                            </span>
                                        </td>
                                        <td class="px-5 py-4">{{ date("d.m.Y", strtotime($project["created_at"]))}}</td>
                                        <td class="px-5 py-4">
                                            <div class="flex flex-wrap gap-2">
                                                <a href="#" class="rounded-full border border-black/60 bg-white/70 px-4 py-2 text-xs font-medium text-black transition hover:bg-white">
                                                    Görüntüle
                                                </a>
                                                <a href="#" class="rounded-full border border-black/60 bg-white/70 px-4 py-2 text-xs font-medium text-black transition hover:bg-white">
                                                    Düzenle
                                                </a>
                                                <a href="#" class="rounded-full border border-red-200 bg-red-50 px-4 py-2 text-xs font-medium text-red-700 transition hover:bg-red-100">
                                                    Sil
                                                </a>
                                            </div>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
