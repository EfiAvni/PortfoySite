<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yazilimci Portfoy</title>
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
                                <p class="text-sm font-medium uppercase tracking-[0.35em] text-black">Portfolio</p>
                                <h1 class="text-lg font-semibold text-black">Muhammet Avni Küçük</h1>
                            </div>
                        </div>

                        <nav class="flex flex-wrap items-center gap-2 text-sm text-black">
                            <a href="#hakkimda" class="rounded-full border border-white/55 bg-white/45 px-4 py-2 transition hover:bg-white/70">Hakkimda</a>
                            <a href="#projeler" class="rounded-full border border-white/55 bg-white/45 px-4 py-2 transition hover:bg-white/70">Projeler</a>
                            <a href="#yetenekler" class="rounded-full border border-white/55 bg-white/45 px-4 py-2 transition hover:bg-white/70">Yetenekler</a>
                            <a href="#iletisim" class="rounded-full border border-black bg-white px-4 py-2 font-medium text-black transition hover:bg-slate-100">Iletisim</a>
                        </nav>
                    </div>
                </header>

                <main class="pb-16 pt-6 sm:pt-8">
                    <section class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                        <div class="relative overflow-hidden rounded-[2.5rem] border border-white/55 bg-white/32 p-6 shadow-glass backdrop-blur-3xl sm:p-8 lg:p-10">
                            <div class="max-w-2xl">
                                <span class="inline-flex rounded-full border border-white/60 bg-white/55 px-4 py-2 text-xs font-medium uppercase tracking-[0.3em] text-black">
                                    Web Devoloper & Network Engineer
                                </span>
                                <h2 class="mt-6 text-4xl font-semibold leading-tight text-black sm:text-5xl lg:text-6xl">
                                    Bilgisayar ağları ve web gelistirme alanında temiz, hızlı ve etkileyici ürünler geliştiriyorum.
                                </h2>
                                <p class="mt-6 max-w-xl text-base leading-8 text-black sm:text-lg">
                                    Temiz mimari, etkileyici arayüzler ve performans odaklı ürünler gelistiriyorum.
                                    Modern web teknolojileri ile markalar için akıcı, rafine ve güven veren dijital deneyimler tasarlıyorum.
                                </p>

                                <div class="mt-8 flex flex-wrap gap-3">
                                    <a href="#projeler" class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black shadow-soft transition hover:bg-slate-100">
                                        Projeleri İncele
                                    </a>
                                    <a href="#iletisim" class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black transition hover:bg-slate-100">
                                        Birlikte Calisalim
                                    </a>
                                </div>

                                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-4 backdrop-blur-2xl">
                                        <p class="text-3xl font-semibold text-black">5+</p>
                                        <p class="mt-2 text-sm text-black">Yillik gelistirme deneyimi</p>
                                    </div>
                                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-4 backdrop-blur-2xl">
                                        <p class="text-3xl font-semibold text-black">24</p>
                                        <p class="mt-2 text-sm text-black">Tamamlanan urun ve sistem</p>
                                    </div>
                                    <div class="rounded-[1.75rem] border border-white/60 bg-white/45 p-4 backdrop-blur-2xl">
                                        <p class="text-3xl font-semibold text-black">%96</p>
                                        <p class="mt-2 text-sm text-black">Musteri memnuniyet odagi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-6">
                            <div class="rounded-[2.25rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm uppercase tracking-[0.3em] text-black">Canli Durum</p>
                                        <h3 class="mt-3 text-2xl font-semibold text-black">Yeni urunler icin hazirim</h3>
                                    </div>
                                    <span class="mt-1 inline-flex h-3 w-3 rounded-full bg-emerald-400"></span>
                                </div>
                                <div class="mt-6 rounded-[1.75rem] border border-white/60 bg-gradient-to-br from-white/70 to-white/25 p-5">
                                    <p class="text-sm text-black">Odak alanim</p>
                                    <p class="mt-2 text-lg font-medium text-black">Laravel, Tailwind CSS, modern frontend deneyimi ve performansli dashboard sistemleri.</p>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2 text-sm text-black">
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">UI Engineering</span>
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">Backend Architecture</span>
                                    <span class="rounded-full border border-white/60 bg-white/55 px-3 py-2">API Design</span>
                                </div>
                            </div>

                            <div class="relative overflow-hidden rounded-[2.25rem] border border-white/55 bg-white/55 p-6 text-black shadow-glass">
                                <div class="relative">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Signature Stack</p>
                                    <div class="mt-6 space-y-4">
                                        <div class="flex items-center justify-between rounded-[1.5rem] border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-xl">
                                            <span>Laravel</span>
                                            <span class="text-black">Core</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-[1.5rem] border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-xl">
                                            <span>Tailwind CSS</span>
                                            <span class="text-black">Visuals</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-[1.5rem] border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-xl">
                                            <span>REST API</span>
                                            <span class="text-black">Scale</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="hakkimda" class="mt-6 grid gap-6 lg:grid-cols-[0.95fr_1.05fr]">
                        <div class="rounded-[2.25rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Yaklasim</p>
                            <h3 class="mt-4 text-3xl font-semibold text-black">Estetik ile performansi ayni urunde bulusturuyorum.</h3>
                            <p class="mt-5 text-base leading-8 text-black">
                                Her projede yalnizca guzel gorunen degil, hizli calisan ve surdurulebilir kalan sistemler uretmeyi hedefliyorum.
                                Tasarim dili, kod kalitesi ve kullanici akisi benim icin ayni zincirin parcasi.
                            </p>
                            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-[1.5rem] border border-white/60 bg-white/50 p-4">
                                    <p class="text-sm text-black">Oncelik</p>
                                    <p class="mt-2 text-lg font-medium text-black">Temiz mimari ve net kullanici deneyimi</p>
                                </div>
                                <div class="rounded-[1.5rem] border border-white/60 bg-white/50 p-4">
                                    <p class="text-sm text-black">Calisma bicimi</p>
                                    <p class="mt-2 text-lg font-medium text-black">Hizli iletisim, rafine detaylar, olculen kalite</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-[2.25rem] border border-white/55 bg-white/30 p-4 shadow-glass backdrop-blur-3xl sm:p-5">
                            <div class="grid gap-4 md:grid-cols-2">
                                <div class="rounded-[2rem] border border-white/60 bg-gradient-to-b from-white/70 to-white/35 p-6">
                                    <p class="text-sm uppercase tracking-[0.28em] text-black">Frontend</p>
                                    <h4 class="mt-4 text-2xl font-semibold text-black">Akici, premium ve etkileyici arayuzler</h4>
                                    <p class="mt-4 text-sm leading-7 text-black">
                                        Responsive bolumler, cam efektleri, guclu hiyerarsi ve yuksek algi kalitesi.
                                    </p>
                                </div>
                                <div class="rounded-[2rem] border border-white/60 bg-gradient-to-b from-white/70 to-white/35 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.28em] text-black">Backend</p>
                                    <h4 class="mt-4 text-2xl font-semibold">Guvenilir altyapi ve duzenli veri akisi</h4>
                                    <p class="mt-4 text-sm leading-7 text-black">
                                        Laravel tabanli sistemler, olceklenebilir API katmani ve bakimi kolay kod duzeni.
                                    </p>
                                </div>
                                <div class="rounded-[2rem] border border-white/60 bg-white/55 p-6 md:col-span-2">
                                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                        <div>
                                            <p class="text-sm uppercase tracking-[0.28em] text-black">Kullandigim surec</p>
                                            <h4 class="mt-3 text-2xl font-semibold text-black">Kesif, tasarim, gelistirme ve iyilestirme</h4>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="rounded-full border border-black bg-white px-4 py-2 text-sm font-medium text-black">Discovery</span>
                                            <span class="rounded-full border border-black bg-white px-4 py-2 text-sm font-medium text-black">Delivery</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="projeler" class="mt-6 rounded-[2.5rem] border border-white/55 bg-white/34 p-6 shadow-glass backdrop-blur-3xl sm:p-8">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-black">Secili Isler</p>
                                <h3 class="mt-4 text-3xl font-semibold text-black sm:text-4xl">Uretime alinmis, olceklendirilebilir projeler</h3>
                            </div>
                            <p class="max-w-2xl text-sm leading-7 text-black">
                                Her kartta premium yuzeyler, yumusak isik gecisleri ve Apple benzeri cam derinligi hissi hedeflendi.
                            </p>
                        </div>

                        <div class="mt-8 grid gap-5 xl:grid-cols-3">
                            <article class="group rounded-[2rem] border border-white/60 bg-white/55 p-5 transition hover:-translate-y-1 hover:bg-white/70">
                                <div class="rounded-[1.75rem] border border-white/60 bg-white/70 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">SaaS Dashboard</p>
                                    <h4 class="mt-10 text-2xl font-semibold">Finans ve operasyon kontrol paneli</h4>
                                </div>
                                <p class="mt-5 text-sm leading-7 text-black">
                                    Raporlama, yetkilendirme ve veri yogun ekranlar icin net hiyerarsiye sahip yonetim paneli deneyimi.
                                </p>
                            </article>

                            <article class="group rounded-[2rem] border border-white/60 bg-white/55 p-5 transition hover:-translate-y-1 hover:bg-white/70">
                                <div class="rounded-[1.75rem] border border-white/60 bg-white/70 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">E-Commerce</p>
                                    <h4 class="mt-10 text-2xl font-semibold">Premium urun vitrini ve odeme akisları</h4>
                                </div>
                                <p class="mt-5 text-sm leading-7 text-black">
                                    Donusum odakli sayfa yapisi, modern urun sunumu ve hizli mobil deneyim icin optimize edildi.
                                </p>
                            </article>

                            <article class="group rounded-[2rem] border border-white/60 bg-white/55 p-5 transition hover:-translate-y-1 hover:bg-white/70">
                                <div class="rounded-[1.75rem] border border-white/60 bg-white/70 p-6 text-black">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Corporate Web</p>
                                    <h4 class="mt-10 text-2xl font-semibold">Kurumsal guveni yukselten landing page yapisi</h4>
                                </div>
                                <p class="mt-5 text-sm leading-7 text-black">
                                    Hiz, sadelik ve premium algiyi ayni zeminde birlestiren sunum odakli arayuzler.
                                </p>
                            </article>
                        </div>
                    </section>

                    <section id="yetenekler" class="mt-6 grid gap-6 lg:grid-cols-[0.85fr_1.15fr]">
                        <div class="rounded-[2.25rem] border border-white/55 bg-white/45 p-6 text-black shadow-glass sm:p-8">
                            <p class="text-sm uppercase tracking-[0.3em] text-black">Yetenekler</p>
                            <h3 class="mt-4 text-3xl font-semibold">Teknik guc + gorsel hassasiyet</h3>
                            <p class="mt-5 text-sm leading-8 text-black">
                                Urunun hem arka plandaki is mantigini hem de on yuzdeki algisini ayni ciddiyetle ele aliyorum.
                            </p>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">01</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">Laravel</h4>
                                <p class="mt-3 text-sm leading-7 text-black">MVC yapisi, panel sistemleri, API ve role-based mimari.</p>
                            </div>
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">02</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">Tailwind CSS</h4>
                                <p class="mt-3 text-sm leading-7 text-black">Liquid glass, net spacing ve premium responsive katmanlar.</p>
                            </div>
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">03</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">JavaScript</h4>
                                <p class="mt-3 text-sm leading-7 text-black">Akici etkileşimler, component mantigi ve kullanici odakli akıslar.</p>
                            </div>
                            <div class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl">
                                <p class="text-sm text-black">04</p>
                                <h4 class="mt-5 text-xl font-semibold text-black">SQL</h4>
                                <p class="mt-3 text-sm leading-7 text-black">Duzenli veri tasarimi, optimizasyon ve saglam sorgu yapisi.</p>
                            </div>
                        </div>
                    </section>

                    <section id="iletisim" class="mt-6">
                        <div class="relative overflow-hidden rounded-[2.5rem] border border-white/55 bg-white/35 p-6 shadow-glass backdrop-blur-3xl sm:p-8 lg:p-10">
                            <div class="relative grid gap-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                                <div class="max-w-2xl">
                                    <p class="text-sm uppercase tracking-[0.3em] text-black">Iletisim</p>
                                    <h3 class="mt-4 text-3xl font-semibold text-black sm:text-4xl">
                                        Markaniz icin sade, hizli ve etkileyici bir dijital yuz olusturalim.
                                    </h3>
                                    <p class="mt-5 text-base leading-8 text-black">
                                        Yeni bir web sitesi, yonetim paneli veya premium landing page ihtiyaciniz varsa beraber calisabiliriz.
                                    </p>

                                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                        <a href="mailto:hello@example.com" class="rounded-full border border-black bg-white px-6 py-3 text-center text-sm font-medium text-black transition hover:bg-slate-100">
                                            hello@example.com
                                        </a>
                                        <a href="tel:+900000000000" class="rounded-full border border-black bg-white px-6 py-3 text-center text-sm font-medium text-black transition hover:bg-slate-100">
                                            +90 000 000 00 00
                                        </a>
                                    </div>
                                </div>

                                <form class="rounded-[2rem] border border-white/60 bg-white/45 p-5 shadow-soft backdrop-blur-2xl sm:p-6">
                                    <div class="grid gap-4 sm:grid-cols-2">
                                        <div>
                                            <label for="name" class="mb-2 block text-sm font-medium text-black">Ad Soyad</label>
                                            <input
                                                id="name"
                                                type="text"
                                                placeholder="Adinizi yazin"
                                                class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            />
                                        </div>
                                        <div>
                                            <label for="email" class="mb-2 block text-sm font-medium text-black">E-posta</label>
                                            <input
                                                id="email"
                                                type="email"
                                                placeholder="mail@ornek.com"
                                                class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            />
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="subject" class="mb-2 block text-sm font-medium text-black">Konu</label>
                                            <input
                                                id="subject"
                                                type="text"
                                                placeholder="Projeniz hakkinda kisa bir baslik"
                                                class="w-full rounded-2xl border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            />
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="message" class="mb-2 block text-sm font-medium text-black">Mesajiniz</label>
                                            <textarea
                                                id="message"
                                                rows="5"
                                                placeholder="Ihtiyacinizi ve hedefinizi kisaca anlatin"
                                                class="w-full resize-none rounded-[1.5rem] border border-white/70 bg-white/70 px-4 py-3 text-sm text-black outline-none backdrop-blur-xl placeholder:text-black/50 focus:border-sky-300"
                                            ></textarea>
                                        </div>
                                    </div>

                                    <div class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                        <p class="text-sm leading-6 text-black">
                                            Form gorsel amaclidir. Istersen sonraki adimda backend baglantisini da ekleyebiliriz.
                                        </p>
                                        <button
                                            type="submit"
                                            class="rounded-full border border-black bg-white px-6 py-3 text-sm font-medium text-black transition hover:bg-slate-100"
                                        >
                                            Mesaji Gonder
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
