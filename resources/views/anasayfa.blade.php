<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yazılımcı Portföyü</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
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
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#eef2ff] font-sans text-black antialiased">
        <div class="relative isolate">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <header class="rounded-[2rem] border border-white/55 bg-white/35 px-5 py-4 shadow-glass backdrop-blur-2xl sm:px-7">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/60 bg-white/60 text-lg font-semibold shadow-soft backdrop-blur-xl">
                                MK
                            </div>
                            <div>
                                <p class="text-sm font-medium uppercase tracking-[0.35em] text-black">Portföy</p>
                                <h1 class="text-lg font-semibold text-black">Muhammet Avni Küçük</h1>
                            </div>
                        </div>

                        <nav class="flex flex-wrap items-center gap-2 text-sm text-black">
                            <a href="#hakkimda" class="rounded-full border border-white/55 bg-white/45 px-4 py-2 transition hover:bg-white/70">Hakkımda</a>
                            <a href="#projeler" class="rounded-full border border-white/55 bg-white/45 px-4 py-2 transition hover:bg-white/70">Projeler</a>
                            <a href="#yetenekler" class="rounded-full border border-white/55 bg-white/45 px-4 py-2 transition hover:bg-white/70">Yetenekler</a>
                            <a href="#iletisim" class="rounded-full border border-black bg-white px-4 py-2 font-medium text-black transition hover:bg-slate-100">İletişim</a>
                        </nav>
                    </div>
                </header>

                <main class="pb-16 pt-6 sm:pt-8">
                    <section class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                        <div class="relative overflow-hidden rounded-[2.5rem] border border-white/55 bg-white/32 p-6 shadow-glass backdrop-blur-3xl sm:p-8 lg:p-10">
                            <div class="max-w-2xl">
                                <span class="inline-flex rounded-full border border-white/60 bg-white/55 px-4 py-2 text-xs font-medium uppercase tracking-[0.3em] text-black">
                                    Web Geliştirici ve Ağ Uzmanı
                                </span>
                                <h2 class="mt-6 text-4xl font-semibold leading-tight text-black sm:text-5xl lg:text-6xl">
                                    Bilgisayar ağları ve web geliştirme alanında temiz, hızlı ve etkileyici ürünler geliştiriyorum.
                                </h2>
                                <p class="mt-6 max-w-xl text-base leading-8 text-black sm:text-lg">
                                    Temiz mimari, etkileyici arayüzler ve performans odaklı ürünler geliştiriyorum.
                                    Modern web teknolojileri ile markalar için akıcı, rafine ve güven veren dijital deneyimler tasarlıyorum.
                                </p>

                                <div class="mt-8 flex flex-wrap gap-3">
                                    <a href="#projeler" class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black shadow-soft transition hover:bg-slate-100">
                                        Projeleri İncele
                                    </a>
                                    <a href="#iletisim" class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black transition hover:bg-slate-100">
                                        Birlikte Çalışalım
                                    </a>
                                </div>

                                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-4 backdrop-blur-2xl">
                                        <p class="text-3xl font-semibold text-black">5+</p>
                                        <p class="mt-2 text-sm text-black">Yıllık geliştirme deneyimi</p>
                                    </div>
                                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-4 backdrop-blur-2xl">
                                        <p class="text-3xl font-semibold text-black">24</p>
                                        <p class="mt-2 text-sm text-black">Tamamlanan ürün ve sistem</p>
                                    </div>
                                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-4 backdrop-blur-2xl">
                                        <p class="text-3xl font-semibold text-black">%96</p>
                                        <p class="mt-2 text-sm text-black">Müşteri memnuniyeti odağı</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-6">
                            <div class="rounded-[2.25rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm uppercase tracking-[0.3em] text-black">Canlı Durum</p>
                                        <h3 class="mt-3 text-2xl font-semibold text-black">Yeni ürünler için hazırım</h3>
                                    </div>
                                    <span class="mt-1 inline-flex h-3 w-3 rounded-full bg-emerald-400"></span>
                                </div>
                                <div class="mt-6 rounded-[1.75rem] border border-white/60 bg-gradient-to-br from-white/70 to-white/25 p-5">
                                    <p class="text-sm text-black">Odak alanım</p>
                                    <p class="mt-2 text-lg font-medium text-black">Laravel, Tailwind CSS, modern ön yüz deneyimi ve performanslı panel sistemleri.</p>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2 text-sm text-black">
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">Arayüz Geliştirme</span>
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">Arka Uç Mimarisi</span>
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">API Tasarımı</span>
                                </div>
                            </div>

                            <div class="relative overflow-hidden rounded-[2.25rem] border border-white/55 bg-white/55 p-6 text-black shadow-glass">
                                <div class="relative">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Kullandığım Teknolojiler</p>
                                    <div class="mt-6 space-y-4">
                                        <div class="flex items-center justify-between rounded-[1.5rem] border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-xl">
                                            <span>Laravel</span>
                                            <span class="text-black">Temel</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-[1.5rem] border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-xl">
                                            <span>Tailwind CSS</span>
                                            <span class="text-black">Görsel</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-[1.5rem] border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-xl">
                                            <span>REST API</span>
                                            <span class="text-black">Ölçek</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="hakkimda" class="mt-6 grid gap-6 lg:grid-cols-[0.95fr_1.05fr]">
                        <div class="rounded-[2.25rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Yaklaşım</p>
                            <h3 class="mt-4 text-3xl font-semibold text-black">Estetik ile performansı aynı üründe buluşturuyorum.</h3>
                            <p class="mt-5 text-base leading-8 text-black">
                                Her projede yalnızca güzel görünen değil, hızlı çalışan ve sürdürülebilir kalan sistemler üretmeyi hedefliyorum.
                                Tasarım dili, kod kalitesi ve kullanıcı akışı benim için aynı zincirin parçası.
                            </p>
                            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-[1.5rem] border border-white/60 bg-white/50 p-4">
                                    <p class="text-sm text-black">Öncelik</p>
                                    <p class="mt-2 text-lg font-medium text-black">Temiz mimari ve net kullanıcı deneyimi</p>
                                </div>
                                <div class="rounded-[1.5rem] border border-white/60 bg-white/50 p-4">
                                    <p class="text-sm text-black">Çalışma biçimi</p>
                                    <p class="mt-2 text-lg font-medium text-black">Hızlı iletişim, rafine detaylar, ölçülen kalite</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-[2.25rem] border border-white/55 bg-white/30 p-4 shadow-glass backdrop-blur-3xl sm:p-5">
                            <div class="grid gap-4 md:grid-cols-2">
                                <div class="rounded-[2rem] border border-white/60 bg-gradient-to-b from-white/70 to-white/35 p-6">
                                    <p class="text-sm uppercase tracking-[0.28em] text-black">Ön Yüz</p>
                                    <h4 class="mt-4 text-2xl font-semibold text-black">Akıcı, kaliteli ve etkileyici arayüzler</h4>
                                    <p class="mt-4 text-sm leading-7 text-black">
                                        Duyarlı bölümler, cam efektleri, güçlü hiyerarşi ve yüksek algı kalitesi.
                                    </p>
                                </div>
                                <div class="rounded-[2rem] border border-white/60 bg-gradient-to-b from-white/70 to-white/35 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.28em] text-black">Arka Uç</p>
                                    <h4 class="mt-4 text-2xl font-semibold">Güvenilir altyapı ve düzenli veri akışı</h4>
                                    <p class="mt-4 text-sm leading-7 text-black">
                                        Laravel tabanlı sistemler, ölçeklenebilir API katmanı ve bakımı kolay kod düzeni.
                                    </p>
                                </div>
                                <div class="rounded-[2rem] border border-white/60 bg-white/55 p-6 md:col-span-2">
                                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                        <div>
                                            <p class="text-sm uppercase tracking-[0.28em] text-black">Kullandığım süreç</p>
                                            <h4 class="mt-3 text-2xl font-semibold text-black">Keşif, tasarım, geliştirme ve iyileştirme</h4>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="rounded-full border border-black bg-white px-4 py-2 text-sm font-medium text-black">Keşif</span>
                                            <span class="rounded-full border border-black bg-white px-4 py-2 text-sm font-medium text-black">Teslim</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="projeler" class="mt-6 rounded-[2.5rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-black">Seçili İşler</p>
                                <h3 class="mt-4 text-3xl font-semibold text-black sm:text-4xl">Üretime alınmış, ölçeklenebilir projeler</h3>
                            </div>
                            <p class="max-w-2xl text-sm leading-7 text-black">
                                Her kartta kaliteli yüzeyler, yumuşak ışık geçişleri ve cam derinliği hissi hedeflendi.
                            </p>
                        </div>

                        <div class="mt-8 grid gap-5 xl:grid-cols-3">
                            <article class="group rounded-[2rem] border border-white/60 bg-white/55 p-5 transition hover:-translate-y-1 hover:bg-white/70">
                                <div class="rounded-[1.75rem] border border-white/60 bg-white/70 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">SaaS Paneli</p>
                                    <h4 class="mt-10 text-2xl font-semibold">Finans ve operasyon kontrol paneli</h4>
                                </div>
                                <p class="mt-5 text-sm leading-7 text-black">
                                    Raporlama, yetkilendirme ve veri yoğun ekranlar için net hiyerarşiye sahip yönetim paneli deneyimi.
                                </p>
                            </article>

                            <article class="group rounded-[2rem] border border-white/60 bg-white/55 p-5 transition hover:-translate-y-1 hover:bg-white/70">
                                <div class="rounded-[1.75rem] border border-white/60 bg-white/70 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">E-Ticaret</p>
                                    <h4 class="mt-10 text-2xl font-semibold">Kaliteli ürün vitrini ve ödeme akışları</h4>
                                </div>
                                <p class="mt-5 text-sm leading-7 text-black">
                                    Dönüşüm odaklı sayfa yapısı, modern ürün sunumu ve hızlı mobil deneyim için optimize edildi.
                                </p>
                            </article>

                            <article class="group rounded-[2rem] border border-white/60 bg-white/55 p-5 transition hover:-translate-y-1 hover:bg-white/70">
                                <div class="rounded-[1.75rem] border border-white/60 bg-white/70 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Kurumsal Web</p>
                                    <h4 class="mt-10 text-2xl font-semibold">Kurumsal güveni yükselten açılış sayfası yapısı</h4>
                                </div>
                                <p class="mt-5 text-sm leading-7 text-black">
                                    Hız, sadelik ve kaliteli algıyı aynı zeminde birleştiren sunum odaklı arayüzler.
                                </p>
                            </article>
                        </div>
                    </section>

                    <section id="yetenekler" class="mt-6 grid gap-6 lg:grid-cols-[0.85fr_1.15fr]">
                        <div class="rounded-[2.25rem] border border-white/55 bg-white/45 p-6 text-black shadow-glass sm:p-8">
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Yetenekler</p>
                            <h3 class="mt-4 text-3xl font-semibold">Teknik güç + görsel hassasiyet</h3>
                            <p class="mt-5 text-sm leading-8 text-black">
                                Ürünün hem arka plandaki iş mantığını hem de ön yüzdeki algısını aynı ciddiyetle ele alıyorum.
                            </p>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">01</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">Laravel</h4>
                                <p class="mt-3 text-sm leading-7 text-black">MVC yapısı, panel sistemleri, API ve rol bazlı mimari.</p>
                            </div>
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">02</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">Tailwind CSS</h4>
                                <p class="mt-3 text-sm leading-7 text-black">Cam hissi veren yüzeyler, net boşluklar ve kaliteli duyarlı katmanlar.</p>
                            </div>
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">03</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">JavaScript</h4>
                                <p class="mt-3 text-sm leading-7 text-black">Akıcı etkileşimler, bileşen mantığı ve kullanıcı odaklı akışlar.</p>
                            </div>
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">04</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">SQL</h4>
                                <p class="mt-3 text-sm leading-7 text-black">Düzenli veri tasarımı, optimizasyon ve sağlam sorgu yapısı.</p>
                            </div>
                        </div>
                    </section>

                    <section id="iletisim" class="mt-6">
                        <div class="relative overflow-hidden rounded-[2.5rem] border border-white/55 bg-white/35 p-6 shadow-glass backdrop-blur-3xl sm:p-8 lg:p-10">
                            <div class="relative grid gap-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                                <div class="max-w-2xl">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">İletişim</p>
                                    <h3 class="mt-4 text-3xl font-semibold text-black sm:text-4xl">
                                        Markanız için sade, hızlı ve etkileyici bir dijital yüz oluşturalım.
                                    </h3>
                                    <p class="mt-5 text-base leading-8 text-black">
                                        Yeni bir web sitesi, yönetim paneli veya kaliteli bir açılış sayfası ihtiyacınız varsa beraber çalışabiliriz.
                                    </p>

                                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                        <a href="mailto:avnikucukzade@icloud.com" class="rounded-full border border-black bg-white px-6 py-3 text-center text-sm font-medium text-black transition hover:bg-slate-100">
                                            avnikucukzade@icloud.com
                                        </a>
                                        <a href="tel:+905366902746" class="rounded-full border border-black bg-white px-6 py-3 text-center text-sm font-medium text-black transition hover:bg-slate-100">
                                            +90 536 690 2746
                                        </a>
                                    </div>
                                </div>

                                <form action="/" method="POST" class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl sm:p-6">
                                    @if(session('mesaj'))
                                        <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700 shadow-sm">
                                            {{ session('mesaj') }}
                                        </div>
                                    @endif

                                    <div class="grid gap-4 sm:grid-cols-2">
                                        <div>
                                            <label for="name" class="mb-2 block text-sm font-medium text-black">Ad Soyad</label>
                                            <input
                                                name="name"
                                                id="name"
                                                type="text"
                                                placeholder="Adınızı yazın"
                                                class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            />
                                        </div>
                                        <div>
                                            <label for="email" class="mb-2 block text-sm font-medium text-black">E-posta</label>
                                            <input
                                                name="email"
                                                id="email"
                                                type="email"
                                                placeholder="mail@ornek.com"
                                                class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            />
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="subject" class="mb-2 block text-sm font-medium text-black">Konu</label>
                                            <input
                                                name="subject"
                                                id="subject"
                                                type="text"
                                                placeholder="Projeniz hakkında kısa bir başlık"
                                                class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            />
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="message" class="mb-2 block text-sm font-medium text-black">Mesajınız</label>
                                            <textarea
                                                name="message"
                                                id="message"
                                                rows="5"
                                                placeholder="İhtiyacınızı ve hedefinizi kısaca anlatın"
                                                class="w-full resize-none rounded-[1.5rem] border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            ></textarea>
                                        </div>
                                    </div>

                                    <div class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"> 
                                        <button
                                            type="submit"
                                            class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black transition hover:bg-slate-100"
                                        >
                                            Mesajı Gönder
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </body>
</html>
