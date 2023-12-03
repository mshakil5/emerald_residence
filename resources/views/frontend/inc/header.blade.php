<section class="topbar d-none topbar p-2">
    <div class="container">
        <div class="row z-index ">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center  text-dark">
                <small></small>
            </div>
            <div class="col-md-3 d-flex justify-content-center-sm ">
                <ul class="social-links my-1">
                    <li>
                        <a href="">
                            <iconify-icon icon="dashicons:facebook-alt"></iconify-icon>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <iconify-icon icon="ri:youtube-line"></iconify-icon>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <iconify-icon icon="line-md:instagram"></iconify-icon>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="app-header py-1" id="header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg px-2">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="{{ asset('assets/frontend/images/logo.png')}}" class="img-fluid mx-auto" width="200">
                </a>
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto navCustom">
                        <!-- "me-auto" for left align | "ms-auto" for right align | "mx-auto" for center align--->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('about')}}">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('offer')}}">Offer</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('review')}}">Survey</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('rates')}}">Our Rates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('contact')}}">contact</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownItem" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                other links
                                <iconify-icon icon="tabler:chevron-down" class="down ms-1"></iconify-icon>
                                <iconify-icon icon="tabler:chevron-up" class="up ms-1"></iconify-icon>
                            </a>
                            <ul class="dropdown-menu rounded-0 shadow-sm" aria-labelledby="dropdownItem">

                                <li><a class="dropdown-item" href="#">Mission</a></li>
                                <li><a class="dropdown-item" href="#">Vission</a></li>
                                <li><a class="dropdown-item" href="#">Certificate</a></li>
                            </ul>
                        </li> -->

                    </ul>
                </div>

            </nav>

        </div>
    </div>
</section>