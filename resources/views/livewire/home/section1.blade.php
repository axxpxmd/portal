<div class="block-slider block-slider-miniposts panel swiper-parent uc-dark">
    <div class="swiper-main swiper" wire:ignore data-uc-swiper="connect: .swiper-thumbs; items: 1; autoplay: 5000; active: 1; gap: 0; dots: .swiper-pagination; disable-class: opacity-30; effect: fade; fade: true;">
        <div class="swiper-wrapper">
            @php
                $dataGambar = [
                    'https://admin-berita.tangerangselatankota.go.id/uploads/berita/5427/9074.jpg',
                    'https://admin-berita.tangerangselatankota.go.id/uploads/berita/5427/9076.jpg',
                    'https://admin-berita.tangerangselatankota.go.id/uploads/berita/5426/9073.jpg',
                    'https://admin-berita.tangerangselatankota.go.id/uploads/berita/5429/9081.jpg',
                    'https://admin-berita.tangerangselatankota.go.id/uploads/berita/5428/9080.jpg'
                ];
            @endphp
            @foreach ($datas as $key => $i)
            <div class="swiper-slide">
                <article class="post type-post">
                    <figure hidden class="post-featured-image panel m-0">
                        <canvas class="h-300px sm:h-400px lg:h-500px"></canvas>
                        <img class="media-cover image" src="{{ $dataGambar[$key] }}" alt="Hidden Gems: Underrated Travel Destinations Around the World" data-uc-scrollspy="cls: uc-animation-kenburns; repeat: true">
                        <a href="blog-details.html" class="position-cover"></a>
                    </figure>
                    <div class="featured-image bg-gray-25 dark:bg-gray-800">
                        <canvas class="min-h-300px lg:min-h-500px"></canvas>
                        <img class="media-cover image" src="{{ asset('assets/images/common/img-fallback.png') }}" data-src="{{ $dataGambar[$key] }}" alt="Hidden Gems: Underrated Travel Destinations Around the World" data-uc-img="loading: lazy">
                    </div>
                    <div class="d-block position-cover bg-gradient-to-r from-black to-transparent z-1 opacity-60"></div>
                    <div class="panel max-w-xl mx-auto px-2 z-3">
                        <div class="post-header panel position-absolute bottom-0 vstack justify-between gap-2 xl:gap-4 max-w-600px mb-4 xl:mb-8">
                            <div class="post-top hstack gap-narrow">
                                <div class="post-category hstack gap-narrow fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                    <a class="text-none" href="blog-category.html">AI Powered</a>
                                </div>
                            </div>
                            <h3 class="post-title h4 lg:h3 xl:h2 m-0 text-truncate-2" data-swiper-parallax="-48">
                                <a class="text-none" href="blog-details.html">{{ $i->n_news }}</a>
                            </h3>
                            <div>
                                <div class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                    <div class="meta">
                                        <div class="hstack gap-2">
                                            <div>
                                                <div class="post-author hstack gap-1">
                                                    <span>Oleh</span>
                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">{{ $i->n_user }}</a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="post-date hstack gap-narrow">
                                                    <span>Feb 14, 2025</span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                    <i class="icon-narrow unicon-chat"></i>
                                                    <span>15</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="hstack gap-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>

        <!-- Add Arrows -->
        <div class="swiper-navigation position-cover panel max-w-xl mx-auto px-2 mt-2 xl:mt-8">
            <div class="hstack justify-end md:justify-start gap-1">
                <div class="swiper-nav swiper-prev btn w-40px lg:w-48px h-40px lg:h-48px p-0 border-0 bg-white bg-opacity-30 hover:bg-primary hover:bg-opacity-100 text-white rounded-circle shadow-xs z-1">
                    <i class="unicon-chevron-left icon-1"></i>
                </div>
                <div class="swiper-nav swiper-next btn w-40px lg:w-48px h-40px lg:h-48px p-0 border-0 bg-white bg-opacity-30 hover:bg-primary hover:bg-opacity-100 text-white rounded-circle shadow-xs z-1">
                    <i class="unicon-chevron-right icon-1"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute top-0 end-0 bottom-0 w-1/2 bg-gradient-to-l from-black to-transparent opacity-70 z-1 d-none lg:d-block"></div>
    <div class="slider-thumbs-wrap d-none lg:d-block">
        <div class="container container-2xl">
            <div class="panel">
                <div wire:ignore class="swiper swiper-thumbs position-absolute end-0 bottom-0 max-h-300px max-w-300px mb-4 xl:mb-8 z-2" data-uc-swiper="items: 3; gap: 16; direction: vertical; mousewheel: true; freeMode: true;">
                    <div class="swiper-wrapper">
                        @foreach ($datas as $i)
                        <div class="swiper-slide">
                            <article class="post type-post">
                                <div class="post-header panel vstack justify-between gap-1 lg:gap-2">
                                    <div>
                                        <div class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                            <div class="meta">
                                                <div class="hstack gap-2">
                                                    <div>
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>Mar 8, 2025</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="hstack gap-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="h6 m-0 text-truncate-2">{{ $i->n_news }}</h3>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>