<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portal Berita Seputar Kota Tangerang Selatan</title>
    <link rel="icon" href="{{ asset('images/logo/tangsel.png') }}" type="image/x-icon">

    <meta name="description" content="News5 a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
    <meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
    <link rel="canonical" href="https://unistudio.co/html/News5">
    <meta name="theme-color" content="#2757fd">

    <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="News5">
    <meta property="og:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
    <meta property="og:url" content="https://unistudio.co/html/news5/">
    <meta property="og:site_name" content="News5">
    <meta property="og:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">
    <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:image:type" content="image/png">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="News5">
    <meta name="twitter:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
    <meta name="twitter:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">

    <link rel="canonical" href="https://unistudio.co/html/news5/">

    <!-- preload head styles -->
    <link rel="preload" href="{{ asset('assets/css/unicons.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/css/swiper-bundle.min.css') }}" as="style">

    <!-- preload footer scripts -->
    <link rel="preload" href="{{ asset('assets/js/libs/jquery.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/libs/scrollmagic.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/libs/swiper-bundle.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/libs/anime.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/helpers/data-attr-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/helpers/swiper-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/helpers/anime-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/uikit-components-bs.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/app.js') }}" as="script">

    <!-- app head for bootstrap core -->
    <script src="{{ asset('assets/js/app-head-bs.js') }}"></script>

    <!-- include uni-core components -->
    <link rel="stylesheet" href="{{ asset('assets/js/uni-core/css/uni-core.min.css') }}">

    <!-- include styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/unicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prettify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- include main style -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme/demo-six.min.css') }}">

    <!-- include scripts -->
    <script src="{{ asset('assets/js/uni-core/js/uni-core-bundle.min.js') }}"></script>

    @livewireStyles
</head>

<body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">
    <!--  Search modal -->
    <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
        <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">
            <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                <i class="unicon-close"></i>
            </button>
            <div class="panel w-100 sm:w-500px px-2 py-10">
                <h3 class="h1 text-center">Pencarian</h3>
                <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="?">
                    <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                    <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Ketikan kata kunci..." aria-label="Search" autofocus>
                </form>
            </div>
        </div>
    </div>

    <!--  Menu panel -->
    <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
        <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
            <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                <div class="uc-logo">
                    <a href="index.html" class="h5 text-none text-gray-900 dark:text-white">
                        <img class="w-32px" src="{{ asset('images/logo/tangsel.png') }}" alt="News5" data-uc-svg>
                    </a>
                </div>
                <button class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
            </header>

            <div class="panel">
                <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                    <input type="email" class="form-control form-control-md fs-6" placeholder="Pencarian..">
                    <span class="form-icon text-gray">
                        <i class="unicon-search icon-1"></i>
                    </span>
                </form>
                <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                    <li><a href="#">Home</a></li>
                    <li class="uc-parent">
                        <a href="#">Profil Kota</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="../main/index.html">Main</a></li>
                            <li><a href="../demo-two/index.html">Classic News</a></li>
                            <li><a href="../demo-three/index.html">Tech</a></li>
                        </ul>
                    </li>
                    <li class="uc-parent">
                        <a href="#">Pemerintahan</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="../main/index.html">Main</a></li>
                            <li><a href="../demo-two/index.html">Classic News</a></li>
                            <li><a href="../demo-three/index.html">Tech</a></li>
                        </ul>
                    </li>
                    <li class="uc-parent">
                        <a href="#">Pelayanan Publik</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="../main/index.html">Main</a></li>
                            <li><a href="../demo-two/index.html">Classic News</a></li>
                            <li><a href="../demo-three/index.html">Tech</a></li>
                        </ul>
                    </li>
                    <li class="uc-parent">
                        <a href="#">Perencanaan</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="../main/index.html">Main</a></li>
                            <li><a href="../demo-two/index.html">Classic News</a></li>
                            <li><a href="../demo-three/index.html">Tech</a></li>
                        </ul>
                    </li>
                    <li class="uc-parent">
                        <a href="#">Laporan</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="../main/index.html">Main</a></li>
                            <li><a href="../demo-two/index.html">Classic News</a></li>
                            <li><a href="../demo-three/index.html">Tech</a></li>
                        </ul>
                    </li>
                    <li class="uc-parent">
                        <a href="#">Data & Statistik</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="../main/index.html">Main</a></li>
                            <li><a href="../demo-two/index.html">Classic News</a></li>
                            <li><a href="../demo-three/index.html">Tech</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Informasi Publik</a></li>
                </ul>
                <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                    <div class="vstack gap-1">
                        <span class="fs-7 opacity-60">Pilih Tema :</span>
                        <div class="darkmode-trigger" data-darkmode-switch="">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider fs-5"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Bottom Actions Sticky -->
    <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
        <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
            <label class="switch">
                <span class="sr-only">Dark mode toggle</span>
                <input type="checkbox">
                <span class="slider fs-5"></span>
            </label>
        </div>
        <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
            <i class="icon-2 unicon-chevron-up"></i>
        </a>
    </div>

    @include('layouts.header')

    <!-- Wrapper start -->
    {{-- <livewire:navigate /> --}}
    <main>
        <div id="wrapper" class="wrap overflow-hidden-x">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer start -->
    {{-- @include('layouts.footer') --}}

@livewireScripts
<!-- include jquery & bootstrap js -->
<script defer src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
<script defer src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>

<!-- include scripts -->
<script defer src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
<script defer src="{{ asset('assets/js/libs/swiper-bundle.min.js') }}"></script>
<script defer src="{{ asset('assets/js/libs/scrollmagic.min.js') }}"></script>
<script defer src="{{ asset('assets/js/helpers/data-attr-helper.js') }}"></script>
<script defer src="{{ asset('assets/js/helpers/swiper-helper.js') }}"></script>
<script defer src="{{ asset('assets/js/helpers/anime-helper.js') }}"></script>
<script defer src="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
<script defer src="{{ asset('assets/js/uikit-components-bs.js') }}"></script>

<!-- include app script -->
<script defer src="{{ asset('assets/js/app.js') }}"></script>
@push('scripts')
<script>
    function initSwiper() {
        new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 6000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.nav-next',
                prevEl: '.nav-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    document.addEventListener('livewire:navigated', () => {
        initSwiper();
    });

    // Inisialisasi awal saat pertama kali halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        initSwiper();
    });
</script>
@endpush
@stack('scripts')
</body>
</html>