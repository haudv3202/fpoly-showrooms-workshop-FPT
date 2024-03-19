<header>
    <div class="container">
        <div class="top-bar">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-last">
                    <div class="social-icons">
                        <ul class="list-unstyled">
                            <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-bar-links"><a href="#">Products</a> <a href="#">Careers</a> <a
                            href="#">Support</a> <a href="#">Login</a></div>
                </div>
            </div>
        </div>
    </div>
    @php
       if(Route::current()->getName() == '/'){
           $arrayHeader = ["logo_dark","primary"];
       }else{
           $arrayHeader = ["logo_light","light"];
       }
    @endphp
    <nav class="navbar navbar-expand-lg header-anim">
        <div class="container"><a class="navbar-brand" href="{{ route('/') }}"><img
                    src="{{ asset('theme/client/assets/images/'.$arrayHeader[0].'.svg') }}" alt></a>
            <form class="d-flex order-lg-last ms-3 align-items-center"><a href="#" id="search_home"><i
                        class="srn-search"></i> </a><a class="signup-btn btn btn-outline-{{ $arrayHeader[1] }} text-nowrap"
                                                       data-trigger="#signup"><span class="d-none d-sm-inline-block"><span class="outer-wrap"><span
                                data-text="Sing Up">Sing Up</span></span></span> <span
                        class="d-block d-sm-none"><i class="bi bi-door-closed"></i></span> </a><button
                    class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button></form>
            <div class="navbar-collapse offcanvas offcanvas-start offcanvas-collapse" id="navbarCollapse">
                <div class="offcanvas-header"><a class="navbar-brand" href="{{ route('/') }}"><img
                            src="{{ asset('theme/client/assets/images/'.$arrayHeader[0].'.svg') }}" alt></a><button class="navbar-toggler x collapsed"
                                                                                                          type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCollapse"
                                                                                                          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="bi bi-x-lg"></i></button></div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.html">Home Default</a></li>
                                <li><a class="dropdown-item" href="index-digital-marketing.html">Home Digital
                                        Marketing</a></li>
                                <li><a class="dropdown-item" href="index-software.html">Home Software</a></li>
                                <li><a class="dropdown-item" href="index-coworking.html">Home Coworking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                <li><a class="dropdown-item" href="our-team.html">Our Team</a></li>
                                <li><a class="dropdown-item" href="team-single.html">Team Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="our-services.html">Our Services</a></li>
                                <li><a class="dropdown-item" href="service-single.html">Services Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                                <li><a class="dropdown-item" href="faqs.html">Faqs</a></li>
                                <li><a class="dropdown-item" href="our-pricing.html">Our Pricing</a></li>
                                <li><a class="dropdown-item" href="coming-soon.html">Coming soon</a></li>
                                <li><a class="dropdown-item" href="404-page.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio-2col.html">Portfolio 2 Column</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-3col.html">Portfolio 3 Column</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-4col.html">Portfolio 4 Column</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-single.html">Portfolio Single</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="blog-standard.html">Blog Standard</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-bs-toggle="dropdown" aria-expanded="false">Elements</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="typography.html#heading">Headings Styles</a>
                                </li>
                                <li><a class="dropdown-item" href="typography.html#icons">Icons Styles</a></li>
                                <li><a class="dropdown-item" href="typography.html#button-style">Button
                                        Styles</a></li>
                                <li><a class="dropdown-item"
                                       href="typography.html#blockquotes-styles">Blockquotes Styles</a></li>
                                <li><a class="dropdown-item" href="typography.html#bullet-styles">Bullet
                                        Styles</a></li>
                                <li><a class="dropdown-item" href="typography.html#tabs-styles">Tabs Styles</a>
                                </li>
                                <li><a class="dropdown-item" href="typography.html#accordian-styles">Accordian
                                        Styles</a></li>
                                <li><a class="dropdown-item" href="typography.html#forms-styles">Forms
                                        Styles</a></li>
                                <li><a class="dropdown-item" href="typography.html#pagination-styles">Pagination
                                        Styles</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
