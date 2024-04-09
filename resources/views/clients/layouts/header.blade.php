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
                            href="#">Support</a></div>
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
                    src="https://upload.wikimedia.org/wikipedia/commons/2/20/FPT_Polytechnic.png" alt></a>
            <form class="d-flex order-lg-last ms-3 align-items-center">
                <a href="#" id="search_home"><i class="srn-search"></i> </a>
                <button
                    class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
            </form>
            <div class="navbar-collapse offcanvas offcanvas-start offcanvas-collapse" id="navbarCollapse">
                <div class="offcanvas-header"><a class="navbar-brand" href="{{ route('/') }}"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/2/20/FPT_Polytechnic.png" alt></a><button class="navbar-toggler x collapsed"
                                                                                                          type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCollapse"
                                                                                                          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="bi bi-x-lg"></i></button></div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('ourteam') }}">OurTeam</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('projects') }}">Projects</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
