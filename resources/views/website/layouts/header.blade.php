<header class="header-wrap">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <a href="tel:+12345678999">+12 345 678 999</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <a href="mailto:hello@example.com">hello@example.com</a>
                            </li>
                            <li>
                                <i class="bx bx-location-plus"></i>
                                <p>123 Western Road Melbourne, UK.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <form action="{{ route('currency.form') }}" method="post">
                    @csrf
                    <label for="currency">Choose a currency:</label>
                    <select id="currency" name="currency">
                        <option value="$">US Dollar ($)</option>
                        <option value="₾">Georgian Lari (₾)</option>
                    </select>
                    <button type="submit">Submit</button>
                </form> --}}
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="header-top-right">
                        <ul class="social-profile list-style style1">
                            <li>
                                <a href="#">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                               <a href="#">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                               <a href="#">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                               <a href="#">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="select-lang">
                            <i class="ri-earth-fill"></i>
                            <div class="navbar-option-item navbar-language dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        <img src="/website/assets/img/flag/us.jpg" alt="flag">
                                        geo
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="/website/assets/img/flag/germany.jpg" alt="flag">
                                        eng
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="user-account">
                            <i class="ri-account-box-line"></i>
                            <a href="my-account.html">Login</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
               <a class="navbar-brand" href="{{route('website.index')}}">
                    <img class="logo-light" src="/website/assets/img/logo.png" alt="logo">
                    <img class="logo-dark" src="/website/assets/img/logo-white.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{route('website.index')}}" class="nav-link">
                                home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('website.hotels')}}" class="nav-link">
                                Hotels
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('website.services')}}" class="nav-link">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('website.about')}}" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('website.contact')}}" class="nav-link">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('website.faq')}}" class="nav-link">
                                Faq
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('website.blog')}}" class="nav-link">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <div class="other-options md-none">
                        <div class="option-item">
                            <a href="{{route('website.company.store')}}" class="btn style1">Add Property</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="search-area">
                <input type="search" placeholder="Search Here..">
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
            <div class="mobile-bar-wrap">
                <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
