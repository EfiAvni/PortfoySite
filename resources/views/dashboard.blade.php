<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
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
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-black bg-white px-4 py-3 font-medium shadow-soft transition hover:bg-slate-100">
                        <span>Anasayfa</span>
                        <span>01</span>
                    </a>
                    <a href="contactMessages" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
                        <span>İletişim Mesajları</span>
                        <span>02</span>
                    </a>
                    <a href="#" class="flex items-center justify-between rounded-2xl border border-white/60 bg-white/45 px-4 py-3 transition hover:bg-white/70">
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
                </div>
            </aside>

            <main class="flex-1">
                <header class="rounded-[2rem] border border-white/55 bg-white/35 px-5 py-5 shadow-glass backdrop-blur-2xl sm:px-7">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <p class="text-sm font-medium uppercase tracking-[0.32em] text-black">Dashboard</p>
                            <h2 class="mt-2 text-3xl font-semibold text-black sm:text-4xl">Yönetim paneline hoş geldin</h2>
                            <p class="mt-3 max-w-2xl text-sm leading-7 text-black">
                                Bu alan; mesajları, projeleri ve ayarları tek bir yerden yönetebilmen için hazırlandı.
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="rounded-full border border-black bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-slate-100">
                                Yeni Proje Ekle
                            </a>
                            <a href="/contactMessages" class="rounded-full border border-white/60 bg-white/45 px-5 py-3 text-sm font-medium text-black transition hover:bg-white/70">
                                Mesajları Gör
                            </a>
                        </div>
                    </div>
                </header>

                <section class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Toplam Mesaj</p>
                        <p class="mt-3 text-3xl font-semibold text-black">{{ $message_count }}</p>
                        <p class="mt-2 text-sm text-black">Bekleyen ve okunmuş mesajlar</p>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Toplam Proje</p>
                        <p class="mt-3 text-3xl font-semibold text-black">{{ $project_count }}</p>
                        <p class="mt-2 text-sm text-black">Yayında olan proje kayıtları</p>
                    </div>
                    

                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Yeni Mesaj</p>
                        <p class="mt-3 text-3xl font-semibold text-black">yapım aşamasında</p>
                        <p class="mt-2 text-sm text-black">Cevap bekleyen talepler</p>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                        <p class="text-sm text-black">Sistem Durumu</p>
                        <p class="mt-3 text-3xl font-semibold text-black">Aktif</p>
                        <p class="mt-2 text-sm text-black">Panel kullanıma hazır görünüyor</p>
                    </div>
                </section>

                <!-- <section class="mt-6 grid gap-6 xl:grid-cols-[1.15fr_0.85fr]">
                    <div class="rounded-[2rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-black">Genel Bakış</p>
                                <h3 class="mt-3 text-2xl font-semibold text-black">Son hareketler</h3>
                            </div>
                            <a href="#" class="text-sm font-medium text-black underline underline-offset-4">Tümünü Gör</a>
                        </div>

                        <div class="mt-6 space-y-4">
                            <div class="rounded-[1.5rem] border border-white/60 bg-white/55 p-5">
                                <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-base font-semibold text-black">Yeni iletişim mesajı</p>
                                        <p class="mt-1 text-sm text-black">Form üzerinden yeni bir talep geldi.</p>
                                    </div>
                                    <span class="rounded-full border border-black bg-white px-4 py-2 text-xs font-medium text-black">Bugün</span>
                                </div>
                            </div>

                            <div class="rounded-[1.5rem] border border-white/60 bg-white/55 p-5">
                                <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-base font-semibold text-black">Proje içeriği güncellendi</p>
                                        <p class="mt-1 text-sm text-black">Portföy alanındaki proje açıklamalarında değişiklik yapıldı.</p>
                                    </div>
                                    <span class="rounded-full border border-black bg-white px-4 py-2 text-xs font-medium text-black">Dün</span>
                                </div>
                            </div>

                            <div class="rounded-[1.5rem] border border-white/60 bg-white/55 p-5">
                                <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-base font-semibold text-black">Ayarlar kontrol edildi</p>
                                        <p class="mt-1 text-sm text-black">Genel görünüm ve yönetim paneli düzeni hazır durumda.</p>
                                    </div>
                                    <span class="rounded-full border border-black bg-white px-4 py-2 text-xs font-medium text-black">Bu Hafta</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-6">
                        <div class="rounded-[2rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Durum</p>
                                    <h3 class="mt-3 text-2xl font-semibold text-black">Panel hazır</h3>
                                </div>
                                <span class="mt-1 inline-flex h-3 w-3 rounded-full bg-emerald-400"></span>
                            </div>

                            <div class="mt-6 rounded-[1.5rem] border border-white/60 bg-white/55 p-5">
                                <p class="text-sm text-black">Açıklama</p>
                                <p class="mt-2 text-sm leading-7 text-black">
                                    Bu ekran yalnızca ön yüz olarak hazırlandı. İçerik kutuları ve bağlantılar sonradan senin ekleyeceğin route yapısına göre güncellenebilir.
                                </p>
                            </div>
                        </div>

                        <div class="rounded-[2rem] border border-white/55 bg-white/55 p-6 shadow-glass">
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Hızlı Erişim</p>
                            <div class="mt-6 space-y-3">
                                <a href="#" class="flex items-center justify-between rounded-[1.5rem] border border-white/60 bg-white/65 px-4 py-3 text-sm text-black transition hover:bg-white">
                                    <span>İletişim mesajlarına git</span>
                                    <span>Aç</span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-[1.5rem] border border-white/60 bg-white/65 px-4 py-3 text-sm text-black transition hover:bg-white">
                                    <span>Proje listesini görüntüle</span>
                                    <span>Aç</span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-[1.5rem] border border-white/60 bg-white/65 px-4 py-3 text-sm text-black transition hover:bg-white">
                                    <span>Ayarları düzenle</span>
                                    <span>Aç</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section> -->

                <section class="mt-6 rounded-[2rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Ön İzleme</p>
                            <h3 class="mt-3 text-2xl font-semibold text-black">Mesaj ve proje alanları için örnek görünüm</h3>
                        </div>
                        <p class="max-w-2xl text-sm leading-7 text-black">
                            Buradaki kutular örnek yerleşim amacıyla bırakıldı. İçlerini daha sonra istediğin sayfa içeriği ile doldurabilirsin.
                        </p>
                    </div>

                    <div class="mt-6 grid gap-5 lg:grid-cols-2">
                        <div class="rounded-[1.75rem] border border-white/60 bg-white/55 p-5">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <p class="text-sm text-black">İletişim Mesajları</p>
                                    <h4 class="mt-2 text-xl font-semibold text-black">Son gelen mesajlar</h4>
                                </div>
                                <span class="rounded-full border border-black bg-white px-4 py-2 text-xs font-medium text-black">Liste</span>
                            </div>
                            <div class="mt-5 space-y-3">
                                <div class="rounded-2xl border border-white/60 bg-white/70 px-4 py-3 text-sm text-black">Ahmet Yılmaz - Teklif talebi</div>
                                <div class="rounded-2xl border border-white/60 bg-white/70 px-4 py-3 text-sm text-black">Ayşe Demir - İş birliği mesajı</div>
                                <div class="rounded-2xl border border-white/60 bg-white/70 px-4 py-3 text-sm text-black">Mehmet Kaya - Proje sorusu</div>
                            </div>
                        </div>

                        <div class="rounded-[1.75rem] border border-white/60 bg-white/55 p-5">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <p class="text-sm text-black">Projeler</p>
                                    <h4 class="mt-2 text-xl font-semibold text-black">Yayındaki projeler</h4>
                                </div>
                                <span class="rounded-full border border-black bg-white px-4 py-2 text-xs font-medium text-black">Kart</span>
                            </div>
                            <div class="mt-5 grid gap-3 sm:grid-cols-2">
                                <div class="rounded-2xl border border-white/60 bg-white/70 p-4">
                                    <p class="text-sm text-black">Kurumsal Site</p>
                                    <p class="mt-2 text-xs text-black">Yayında</p>
                                </div>
                                <div class="rounded-2xl border border-white/60 bg-white/70 p-4">
                                    <p class="text-sm text-black">Yönetim Paneli</p>
                                    <p class="mt-2 text-xs text-black">Taslak</p>
                                </div>
                                <div class="rounded-2xl border border-white/60 bg-white/70 p-4">
                                    <p class="text-sm text-black">E-Ticaret Sayfası</p>
                                    <p class="mt-2 text-xs text-black">Yayında</p>
                                </div>
                                <div class="rounded-2xl border border-white/60 bg-white/70 p-4">
                                    <p class="text-sm text-black">Blog Düzeni</p>
                                    <p class="mt-2 text-xs text-black">Hazırlanıyor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
