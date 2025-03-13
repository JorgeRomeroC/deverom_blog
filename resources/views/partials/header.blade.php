<header class="header fixed-top navbar-expand-xl">
        <div class="container-fluid">
            <div class="header__main">
                <!-- logo -->
                <div class="logo">
                    <a class="logo__link logo--dark" href="index.html">
                        <img src="{{asset('assets/img/logo/logo-dark.png')}}" alt="" class="logo__img">
                    </a>
                    <a class="logo__link logo--light" href="index.html">
                        <img src="{{asset('assets/img/logo/logo-white.png')}}" alt="" class="logo__img">
                    </a>
                </div><!--/-->

                <div class="header__navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <!--Homes -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="javascript:void(0)" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item active" href="index.html">homepage 1 </a></li>
                                    <li><a class="dropdown-item" href="index-2.html">homepage 2</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">homepage 3</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">homepage 4 </a></li>
                                    <li><a class="dropdown-item" href="index-5.html">homepage 5 </a></li>
                                    <li><a class="dropdown-item" href="index-6.html">homepage 6 </a></li>
                                    <li><a class="dropdown-item" href="index-7.html">homepage 7 </a></li>
                                    <li><a class="dropdown-item" href="index-8.html">homepage 8 </a></li>
                                    <li><a class="dropdown-item" href="index-9.html">homepage 9</a></li>
                                    </ul>
                                </li>

                                <!--Posts features -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Post features</a>
                                    <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item " href="post-default.html">post default </a></li>
                                    <li><a class="dropdown-item" href="post-left-sidebar.html">post left sidebar </a></li>
                                    <li><a class="dropdown-item" href="post-no-sidebar.html">post no sidebar</a></li>
                                    <li><a class="dropdown-item" href="post-video.html">post video </a></li>
                                    <li><a class="dropdown-item" href="post-audio.html">post audio </a></li>
                                    <li><a class="dropdown-item" href="post-gallery.html">post gallery </a></li>
                                    </ul>
                                </li>

                                <!--Blogs-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false"> blogs </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item " href="blog-grid.html">Blog grid</a></li>
                                        <li><a class="dropdown-item" href="blog-masonry.html">Blog masonry</a></li>
                                        <li><a class="dropdown-item" href="blog-list.html">Blog list</a></li>
                                        <li><a class="dropdown-item" href="blog-classic.html">Blog classic</a></li>
                                    </ul>
                                </li>

                                <!--Pages-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false"> pages </a>
                                    <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="author.html">author </a></li>
                                    <li><a class="dropdown-item" href="about.html">about us </a> </li>
                                    <li><a class="dropdown-item" href="contact.html">contact us</a></li>
                                    <li><a class="dropdown-item" href="login.html">login</a></li>
                                    <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                                    <li><a class="dropdown-item" href="page404.html">404 page</a></li>
                                    </ul>
                                </li>

                                <!--contact -->
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html"> contact </a>
                                </li>
                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!-- header actions -->
                <div class="header__action-items">
                    <!--header-social-->
                    <ul class="list-inline social-media social-media--layout-one">
                        <li class="social-media__item">
                            <a href="#" class="social-media__link" >
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>

                        <li class="social-media__item">
                            <a href="#" class="social-media__link">
                                <i class="bi bi-instagram"></i>
                            </a>
                            </li>
                        <li class="social-media__item">
                            <a href="#" class="social-media__link"><i class="bi bi-twitter-x"></i></a>
                        </li>
                        <li class="social-media__item">
                            <a href="#" class="social-media__link"><i class="bi bi-youtube"></i></a>
                        </li>
                    </ul>

                    <!--theme-switch-->
                    <div class="theme-switch">
                        <label class="theme-switch__label" for="checkbox">
                            <input type="checkbox" id="checkbox" class="theme-switch__checkbox">
                            <span class="theme-switch__slider round ">
                                <i class="bi bi-sun icon-light theme-switch__icon theme-switch__icon--light"></i>
                                <i class="bi bi-moon icon-dark theme-switch__icon theme-switch__icon--dark"></i>
                            </span>
                        </label>
                    </div>

                    <!--search-icon-->
                    <div class="search-icon">
                        <a href="#search" class="search-icon__link">
                            <i class="bi bi-search search-icon__icon"></i>
                        </a>
                    </div>

                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler__icon"></span>
                    </button>

                </div>
            </div>
        </div>
    </header>