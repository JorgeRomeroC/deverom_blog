<!doctype html>
<html lang="es">

<head>
@include('partials.head')
</head>

<body>

@include('partials.loading')

    <!-- Header -->
@include('partials.header')
    <!--/-->

    <!--main-->
    <main class="main">
        <!--slider-one-->
@if ($latestPosts->count() > 0)
    <div class="slider slider--one">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($latestPosts as $post)
                    <div class="slider__item swiper-slide" style="background-image: url('{{ asset('storage/' . ltrim($post->main_image, '/') ) }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="slider__item-content">
                                        @foreach ($post->categories as $category)
                                            <a href="{{ route('category.posts', $category->slug) }}" class="category">
                                                {{ $category->name }}
                                            </a>
                                        @endforeach

                                        <h1 class="slider__title">
                                            <a href="{{ route('post.show', ['id' => $post->id, 'slug' => $post->slug]) }}" class="slider__title-link">
                                                {{ $post->title }}
                                            </a>
                                        </h1>

                                        <ul class="slider__meta list-inline">
                                            <li class="slider__meta-item">
                                                <a href="{{ route('author.posts', $post->user->id) }}" class="slider__meta-link">
                                                    <img src="{{ asset('assets/img/author/logo-deverom.jpg' . $post->user->profile_image) }}" alt="{{ $post->user->name }}" class="slider__meta-img">
                                                </a>
                                            </li>
                                            <li class="slider__meta-item">
                                                <a href="{{ route('author.posts', $post->user->id) }}" class="slider__meta-link">{{ $post->user->name }}</a>
                                            </li>
                                            <li class="slider__meta-item"><span class="dot"></span> {{ $post->created_at->translatedFormat('d \d\e F \d\e Y') }}</li>
                                            <li class="slider__meta-item"><span class="dot"></span> {{ rand(5, 20) }} min Read</li>
                                            <li class="slider__meta-item"><span class="dot"></span> {{ $post->comments_count ?? 0 }} comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
@endif

        <!--blog-Masonry-->
        <section class="mt-90">
            <div class="container-fluid">
                <div class="row masonry-items">
                    @foreach ($paginatedPosts as $post)
                        <div class="col-xl-4 col-lg-6 col-md-6 masonry-item">
                            <div class="post-card post-card--default">
                                <div class="post-card__image">
                                    <a href="{{ route('post.show', ['id' => $post->id, 'slug' => $post->slug]) }}">
                                           <img src="{{ $post->main_image ? asset('storage/' . $post->main_image) : asset('images/default.jpg') }}" alt="{{ $post->title }}">
                                    </a>
                                </div>

                                <div class="post-card__content">
                                    @foreach ($post->categories as $category)
                                        <a href="{{ route('category.posts', $category->slug) }}" class="category">
                                            {{ $category->name }}
                                        </a>
                                    @endforeach

                                    <h5 class="post-card__title">
                                        <a href="{{ route('post.show', ['id' => $post->id, 'slug' => $post->slug]) }}" class="post-card__title-link">
                                            {{ $post->title }}
                                        </a>
                                    </h5>

                                    <p class="post-card__exerpt">
                                        {{ Str::limit($post->content, 100) }}
                                    </p>

                                    <ul class="post-card__meta list-inline">
                                        <li class="post-card__meta-item">
                                            <a href="{{ route('author.posts', $post->user->id) }}" class="post-card__meta-link">
                                                <img src="{{ asset('assets/img/author/logo-deverom.jpg') }}" alt="{{ $post->user->name }}" class="post-card__meta-img">
                                            </a>
                                        </li>
                                        <li class="post-card__meta-item">
                                            <a href="{{ route('author.posts', $post->user->id) }}" class="post-card__meta-link">
                                                {{ $post->user->name }}
                                            </a>
                                        </li>
                                        <li class="post-card__meta-item">
                                            <span class="dot"></span> {{ $post->created_at->translatedFormat('d \d\e F \d\e Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Paginación -->
                @if ($paginatedPosts->hasPages())
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination list-inline">
                                {{-- Botón Anterior --}}
                                @if ($paginatedPosts->onFirstPage())
                                    <li class="pagination__item disabled">
                                        <span class="pagination__link"><i class="bi bi-arrow-left pagination__icon"></i></span>
                                    </li>
                                @else
                                    <li class="pagination__item">
                                        <a href="{{ $paginatedPosts->previousPageUrl() }}" class="pagination__link">
                                            <i class="bi bi-arrow-left pagination__icon"></i>
                                        </a>
                                    </li>
                                @endif

                                {{-- Números de Página --}}
                                @foreach ($paginatedPosts->links()->elements as $element)
                                    @if (is_string($element))
                                        <li class="pagination__item disabled"><span class="pagination__link">{{ $element }}</span></li>
                                    @endif

                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $paginatedPosts->currentPage())
                                                <li class="pagination__item pagination__item--active">
                                                    <span class="pagination__link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="pagination__item">
                                                    <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Botón Siguiente --}}
                                @if ($paginatedPosts->hasMorePages())
                                    <li class="pagination__item">
                                        <a href="{{ $paginatedPosts->nextPageUrl() }}" class="pagination__link">
                                            <i class="bi bi-arrow-right pagination__icon"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="pagination__item disabled">
                                        <span class="pagination__link"><i class="bi bi-arrow-right pagination__icon"></i></span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!--/-->

        <!--newslettre-->
        @include('partials.newlettre')
    </main>

@include('partials.footer')


@include('partials.script')


</body>

</html>