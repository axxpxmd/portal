  <!-- Header start -->
<header class="uc-header header-seven uc-navbar-sticky-wrap z-999" data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
    <nav class="uc-navbar-container text-gray-900 dark:text-white fs-6 z-1">
        <div class="uc-center-navbar panel hstack z-2 min-h-48px d-none lg:d-flex"
            data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
            <div class="container max-w-xl">
                <div class="hstack">
                    <div class="uc-navbar-left gap-2 lg:gap-3">
                        <div class="uc-navbar-item dark:text-white dark:text-opacity-70 d-none sm:d-flex">
                            <div class="uc-weather-mini hstack gap-1 fs-7 lg:fs-6 fw-bold">
                                <!-- <i class="icon icon-1 fw-medium unicon-cloud-lightning"></i> -->
                                <span id="cuaca-tangsel"></span>
                            </div>
                        </div> 
                        <div class="vr h-24px my-auto d-none sm:d-block"></div>
                        <div class="uc-navbar-item dark:text-white dark:text-opacity-70 d-none sm:d-flex">
                            <div class="uc-weather-mini hstack gap-1 fs-7 lg:fs-6 fw-bold">
                                <!-- <i class="icon icon-1 fw-medium unicon-cloud-lightning"></i> -->
                                <span id="datetime-wib"></span>
                            </div>
                        </div>
                    </div>
                    <div class="uc-navbar-right gap-2 lg:gap-3">
                        <div class="uc-navbar-item">
                            <ul class="nav-x gap-2">
                                <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" target="_blank" href="#fb"><i class="icon icon-1 unicon-logo-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" target="_blank" href="https://www.instagram.com/humaskotatangsel/"><i class="icon icon-1 unicon-logo-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="text-gray-900 dark:text-white hover:text-primary" target="_blank" href="https://x.com/humastangsel"><i class="icon icon-1 unicon-logo-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navbar-container hstack border-bottom">
                    <div class="uc-navbar-center gap-2 lg:gap-3 flex-1">
                        <ul class="uc-navbar-nav gap-3 justify-between flex-1 fs-6 fw-bold" style="--uc-nav-height: 48px">
                            <li>
                                <a href="#"><span class="icon-1 unicon-finance"></span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}" wire:navigate>Home</a>
                            </li>
                            <li>
                                <a href="#">Profil Kota<span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset fs-6 fw-medium p-3 rounded-0 hide-scrollbar w-auto" data-uc-drop=" offset: 0; boundary: !.navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        <li><a href="{{ route('lambangDaerah') }}" wire:navigate>Lambang Daerah</a></li>
                                        <li><a href="#">Sejarah</a></li>
                                        <li><a href="#">Visi Misi</a></li>
                                        <li><a href="#">Peta Tangsel</a></li>
                                        <li><a href="#">Kontak</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Pemerintahan <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset fs-6 fw-medium p-3 rounded-0 hide-scrollbar w-auto" data-uc-drop=" offset: 0; boundary: !.navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        <li><a href="{{ route('strukturPemerintahan') }}" wire:navigate>Struktur Pemerintahan</a></li>
                                        <li><a href="#">Nama-Nama Pejabat</a></li>
                                        <li><a href="#">SKPD</a></li>
                                        <li><a href="#">LHKPN</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Pelayanan Publik <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset fs-6 fw-medium p-3 rounded-0 hide-scrollbar w-auto" data-uc-drop=" offset: 0; boundary: !.navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        <li><a href="#">LPSE</a></li>
                                        <li><a href="#">E-MUSRENBANG</a></li>
                                        <li><a href="#">DPMPTSP</a></li>
                                        <li><a href="#">E-SPPT</a></li>
                                        <li><a href="#">E-SPTPD</a></li>
                                        <li><a href="#">PBB dan BPHTB</a></li>
                                        <li><a href="#">RSUD</a></li>
                                        <li><a href="#">Produk hukum (JDIH)</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="">Perencanaan <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset fs-6 fw-medium p-3 rounded-0 hide-scrollbar w-auto" data-uc-drop=" offset: 0; boundary: !.navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        <li><a href="#">APBD</a></li>
                                        <li><a href="#">RPJMD</a></li>
                                        <li><a href="#">RENSTRA</a></li>
                                        <li><a href="#">RKPD</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Laporan <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset fs-6 fw-medium p-3 rounded-0 hide-scrollbar w-auto" data-uc-drop=" offset: 0; boundary: !.navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        <li><a href="#">SAKIP</a></li>
                                        <li><a href="#">Pengaduan</a></li>
                                        <li><a href="#">Saran</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Data & Statistik <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset fs-6 fw-medium p-3 rounded-0 hide-scrollbar w-auto" data-uc-drop=" offset: 0; boundary: !.navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        <li><a href="#">Bidang Ekonomi</a></li>
                                        <li><a href="#">Bidang Sosial</a></li>
                                        <li><a href="#">Bidang Politik</a></li>
                                        <li><a href="#">Bidang Hukum dan HAM</a></li>
                                        <li><a href="#">Bidang TIK</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="https://e-ppid.tangerangselatankota.go.id/" target="_blank">Informasi Publik</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uc-bottom-navbar panel z-1">
            <div class="container max-w-xl">
                <div class="uc-navbar min-h-72px lg:min-h-100px" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="uc-navbar-left">
                        <div>
                            <a class="uc-menu-trigger icon-2" href="#uc-menu-panel" data-uc-toggle></a>
                        </div>
                        <div class="uc-logo d-block md:d-none">
                            <a href="index.html">
                                <img class="w-100px text-dark dark:text-white" style="width: 40px !important" src="{{ asset('images/logo/tangsel.png') }}" alt="News5" data-uc-svg>
                            </a>
                        </div>
                    </div>
                    <div class="uc-navbar-center">
                        <div class="uc-logo d-none md:d-block">
                            <a href="index.html">
                                <img class="w-100px text-dark dark:text-white" style="width: 60px !important" src="{{ asset('images/logo/tangsel.png') }}" alt="News5" data-uc-svg>
                            </a>
                        </div>
                    </div>
                    <div class="uc-navbar-right gap-2 lg:gap-3">
                        <div class="uc-navbar-item d-none lg:d-inline-flex">
                            <a class="uc-search-trigger cstack text-none text-dark dark:text-white" href="#uc-search-modal" data-uc-toggle>
                                <i class="icon icon-2 fw-medium unicon-search"></i>
                            </a>
                        </div>
                        <div class="uc-navbar-item d-none lg:d-inline-flex">
                            <div class="uc-modes-trigger btn btn-xs w-32px h-32px p-0 border fw-normal rounded-circle dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900" data-darkmode-toggle="">
                                <label class="switch">
                                    <span class="sr-only">Dark toggle</span>
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script>
    function updateDateTimeWIB() {
        const now = new Date();
        const options = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false,
            timeZone: 'Asia/Jakarta'
        };
        // Format: Sel, 17 Jun 2025, 09:20:06
        const formatter = new Intl.DateTimeFormat('id-ID', options);
        let str = formatter.format(now);

        // Ubah format agar sesuai contoh: Sel, 17 Jun 2025, 09:20:06
        // Intl output: "Sel, 17 Jun 2025 09.20.06"
        // Ganti titik jadi titik dua pada jam
        str = str.replace(/(\d{2})\.(\d{2})\.(\d{2})/, '$1:$2:$3');
        // Ganti spasi sebelum jam jadi koma
        str = str.replace(/(\d{4}) (\d{2}:\d{2}:\d{2})/, '$1, $2');

        document.getElementById('datetime-wib').textContent = str;
    }
    setInterval(updateDateTimeWIB, 1000);
    updateDateTimeWIB();

    // CUACA TANGERANG SELATAN
    async function updateCuacaTangsel() {
        // Ganti YOUR_API_KEY dengan API key OpenWeatherMap Anda
        const API_KEY = '3dea601a402499896caa11e7d7eb5ebe';
        const url = `https://api.openweathermap.org/data/2.5/weather?q=Tangerang%20Selatan,ID&appid=${API_KEY}&units=metric&lang=id`;
        try {
            const res = await fetch(url);
            if (!res.ok) throw new Error('Gagal fetch cuaca');
            const data = await res.json();
            const suhu = Math.round(data.main.temp);
            const icon = data.weather[0].icon;
            const deskripsi = data.weather[0].description;
            const iconUrl = `https://openweathermap.org/img/wn/${icon}.png`;
            document.getElementById('cuaca-tangsel').innerHTML = `<img src="${iconUrl}" alt="${deskripsi}" style="vertical-align:middle;width:22px;height:22px;"> ${suhu}&deg;C, ${deskripsi}`;
        } catch (e) {
            document.getElementById('cuaca-tangsel').textContent = 'Cuaca tidak tersedia';
        }
    }
    updateCuacaTangsel();
    // Optional: update cuaca setiap 10 menit
    setInterval(updateCuacaTangsel, 600000);
</script>