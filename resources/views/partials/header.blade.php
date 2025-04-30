<header>
    <div class="rs-header-area rs-header-one" id="header-sticky">
        <div class="container-fluid g-0">
            <div class="rs-header-inner">
                <div class="rs-header-left">
                    <div class="rs-header-logo-wrapper">
                        <div class="rs-header-logo">
                            <a href="/">
                                <img src="{{ asset('images/logo/logo-orange.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rs-header-menu">
                    <div class="rs-theme-social has-transparent has-orange">
                        <a href="#"><i class="ri-twitter-x-line"></i></a>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                    </div>
                </div>
                <nav id="mobile-menu" class="main-menu">
                    <ul class="multipage-menu">
                        @foreach($categories as $category)
                            @php
                                $name = json_decode($category, true);
                            @endphp
                            <li class="menu-item-has-children">
                                <a href="#">{{$name['name']['en']}}</a>
                                @if($category->subcategories->count())
                                    <ul class="submenu">
                                        @foreach($category->subcategories as $subcategory)
                                            <li>
                                                <a href="{{ route('subcategory.show', $subcategory->slug) }}">{{ $subcategory->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>

                            

                <div class="rs-header-right">
                    <!-- Search Form -->
                    <div class="rs-header-search-wrapper">
                        <div class="rs-header-search-icon">
                            <i class="ri-close-fill has-close"></i>
                            <i class="ri-search-line has-search"></i>
                        </div>
                        <form class="rs-header-search-inner rs-stickys-form" action="#" method="GET">
                            <div class="rs-header-search">
                                <input type="text" name="query" placeholder="Searching...">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="multipage-menu">
                        <div class="menu-item-has-children">
                            <ul class="submenu">
                                <i class="fa-solid fa-globe"></i>
                                
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <div class="rs-header-btn">
                        <a class="rs-btn has-theme-orange has-icon has-bg has-large-radius" href="#">
                            Get In Touch
                            <span class="icon-box">
                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                </svg>
                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <!-- Hamburger Menu -->
                    <div class="rs-header-hamburger">
                        <div class="sidebar-toggle">
                            <a class="bar-icon" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                    <path d="..."></path> <!-- shorten path for simplicity -->
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

