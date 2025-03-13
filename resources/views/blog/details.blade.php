<!doctype html>
<html lang="es">

<head>
    @include('partials.head')
 </head>

 <body>

 @include('partials.loading')

    <!-- Header -->
@include('partials.header')

    <main class="main">
        <!--post-default-->
        <section class="mt-130 mb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 side-content">
                        <div class="theiaStickySidebar">
                            <!--Post-single-->
                               <div class="post-single">
                                   <div class="post-single__image">
                                       <img src="{{ asset('storage/' . $post->main_image) }}" alt="{{ $post->title }}" class="post-single__image-img">
                                   </div>

                                   <div class="post-single__content">
                                       <a href="{{ route('category.posts', $post->categories->first()->slug ?? '#') }}" class="category">
                                           {{ $post->categories->first()->name ?? 'Sin categoría' }}
                                       </a>
                                       <h2 class="post-single__title">{{ $post->title }}</h2>
                                       <ul class="post-single__meta list-inline">
                                           <li class="post-single__meta-item">
                                               <a href="{{ route('author.posts', $post->user->id) }}">
                                                   <img src="{{ asset('assets/img/author/logo-deverom.jpg' . $post->user->avatar) }}" alt="{{ $post->user->name }}" class="post-single__meta-img">
                                               </a>
                                           </li>
                                           <li class="post-single__meta-item">
                                               <a href="{{ route('author.posts', $post->user->id) }}" class="post-single__meta-link">{{ $post->user->name }}</a>
                                           </li>
                                           <li class="post-single__meta-item">
                                               <span class="dot"></span> {{ $post->created_at->translatedFormat('d \d\e F \d\e Y') }}
                                           </li>
                                       </ul>
                                   </div>

                                   <div class="post-single__body">
                                        {{--{!! nl2br(e($post->content)) !!}--}}
                                       <p>{!! $post->content !!}</p>
                                   </div>
                               </div>

                            <!--Related-posts-->
                            <div class="row">
                                <!-- Post Anterior -->
                                @if ($previousPost)
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget__related-post">
                                                <div class="widget__related-post__image">
                                                    <a href="{{ route('post.show', ['id' => $previousPost->id, 'slug' => $previousPost->slug]) }}">
                                                        <img src="{{ asset('storage/' . $previousPost->main_image) }}" alt="{{ $previousPost->title }}" class="widget__related-post__img">
                                                    </a>
                                                </div>
                                                <div class="widget__related-post__content">
                                                    <a class="btn-link" href="{{ route('post.show', ['id' => $previousPost->id, 'slug' => $previousPost->slug]) }}">
                                                        <i class="bi bi-arrow-left"></i> Post anterior
                                                    </a>
                                                    <p class="widget__related-post__title">
                                                        <a href="{{ route('post.show', ['id' => $previousPost->id, 'slug' => $previousPost->slug]) }}" class="widget__related-post__link">
                                                            {{ $previousPost->title }}
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- Post Posterior -->
                                @if ($nextPost)
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget__related-post">
                                                <div class="widget__related-post__image">
                                                    <a href="{{ route('post.show', ['id' => $nextPost->id, 'slug' => $nextPost->slug]) }}">
                                                        <img src="{{ asset('storage/' . $nextPost->main_image) }}" alt="{{ $nextPost->title }}" class="widget__related-post__img">
                                                    </a>
                                                </div>
                                                <div class="widget__related-post__content">
                                                    <a class="btn-link" href="{{ route('post.show', ['id' => $nextPost->id, 'slug' => $nextPost->slug]) }}">
                                                        Siguiente post <i class="bi bi-arrow-right"></i>
                                                    </a>
                                                    <p class="widget__related-post__title">
                                                        <a href="{{ route('post.show', ['id' => $nextPost->id, 'slug' => $nextPost->slug]) }}" class="widget__related-post__link">
                                                            {{ $nextPost->title }}
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 max-width side-sidebar">
                        <div class="theiaStickySidebar">
                            <!--widget-author-->
                            <div class="widget">
                                <div class="widget__author">
                                    <div class="widget__author-top">
                                        <a href="author.html" class="widget__author-link">
                                            <img src="assets/img/author/1.jpg" alt="" class="widget__author-img">
                                        </a>
                                    </div>
                                    <div class="widget__author-content">
                                        <h6 class="widget__author-name" > Hi, I'm David Smith</h6>
                                        <p class="widget__author-bio">
                                            I'm David Smith, husband and father ,
                                            I love Photography,travel and nature. I'm working as a writer and blogger with experience
                                            of 5 years until now.
                                        </p>
                                        <ul class="list-inline social-media social-media--layout-two">
                                            <li class="social-media__item">
                                                <a href="#" class="social-media__link color-facebook" ><i class="bi bi-facebook"></i></a>
                                            </li>

                                            <li class="social-media__item">
                                                <a href="#" class="social-media__link color-instagram"><i class="bi bi-instagram"></i></a>
                                            </li>
                                            <li class="social-media__item">
                                                <a href="#" class="social-media__link color-twitter"><i class="bi bi-twitter-x"></i></a>
                                            </li>
                                            <li class="social-media__item">
                                                <a href="#" class="social-media__link color-youtube"><i class="bi bi-youtube"></i></a>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>

                            <!--widget-Latest-Posts-->
                            <div class="widget">
                                <h5 class="widget__title">Latest Posts</h5>
                                <ul class="widget__latest-posts">
                                    <!--post 1-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="assets/img/latest/1.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">1</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>

                                    <!--post 2-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="assets/img/latest/2.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">2</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">Everything you need to know about visiting the Amazon.</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>

                                        <!--post 3-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="assets/img/latest/3.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">3</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">How to spend interesting vacation after hard work?</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>

                                    <!--post 4-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="assets/img/latest/4.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">4</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">10 Best and Most Beautiful Places to Visit in Italy</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--widget-categories-->
                            <div class="widget">
                                <h5 class="widget__title">Categories</h5>
                                <ul class="widget__categories">
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">Livestyle</a>
                                        <span class="ml-auto widget__categories-number">22 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">travel</a>
                                        <span class="ml-auto widget__categories-number">25 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">food</a>
                                        <span class="ml-auto widget__categories-number">15 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">fashion</a>
                                        <span class="ml-auto widget__categories-number">18 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">interior</a>
                                        <span class="ml-auto widget__categories-number">21 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">art & design</a>
                                        <span class="ml-auto widget__categories-number">14 Posts</span>
                                    </li>



                                </ul>
                            </div>


                            <!--widget-tags-->
                            <div class="widget">
                                <h5 class="widget__title">Tags</h5>
                                <ul class="list-inline widget__tags">
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">Travel</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">nature</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">tips</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">forest</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">Torism</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">fashion</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">livestyle</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">health</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">food</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">breakfast</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">hacks</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">interior</a>
                                    </li>
                                </ul>
                            </div>

                            <!--widget-ads-->
                            <div class="widget">
                                <h5  class="widget__title">ads</h5>
                                <div class="widget__ads">
                                    <a href="#" class="widget__ads-link">
                                        <img src="assets/img/ads/ads3.jpg" alt="" class="widget__ads-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/-->

        <!--newslettre-->
        @include('partials.newlettre')
    </main>

    <!--footer-->
@include('partials.footer')


@include('partials.script')
</body>
</html>