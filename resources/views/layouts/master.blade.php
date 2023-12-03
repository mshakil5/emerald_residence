<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emerald Residence by Diamonds - York</title>
    <meta name="description" content="Treat Yourself at Diamonds Guest House, York. Browse Reviews. Our Price Guarantee. Check Out What Users Loved About This Property. Book the Room">
   <meta name="keywords" content="guest hosue, accomodation, york, cheap hotel, B and B,bed and breakfast, yorkshire, west yorkshire, england, north england, ">
  
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap@5.3.0_dist_css_bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css')}}">
</head>

<body onscroll="scroller()">

    @include('frontend.inc.header')


    @yield('content')

    <footer class="pt-3 footer-area">
        <div class="container">
            <div class="row py-4 fs-5">
                <div class=" col-md-3 mb-3 ">
                    <a href="#" class="">
                        <img src="{{ asset('assets/frontend/images/logo.png')}}" width="150px">
                    </a>
                    
                    <p class="text-light d-block mt-3">Emerald Residence , 5 Main Street Fullford, York, North Yorkshire, YO10 4HJ, United Kingdom  </p>

                </div>
                <div class=" col-md-3 mb-3">
                    <ul class="footer-link ">
                        <li class="mb-2"><a href="#" class="d-flex align-items-center">
                                <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>
                                Home</a></li>
                        
                      
                        
                        <li class="mb-2"><a href="#about" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon> About</a></li>
                        

                        {{-- <li class="mb-2">
                            <a href="{{route('parking')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Parking</a>
                        </li> --}}
                        <li class="mb-2">
                            <a href="{{route('facilities')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Facilities</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{route('location')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Local Attraction</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{route('review')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Review-&-Survey</a>
                        </li>
                        
                        
                        
                        

                    </ul>
                </div>
                <div class=" col-md-3 mb-3">
                    <h4 class=" fw-bold mb-3 darkerGrotesque-semibold">Contact</h4>
                    <p class="mb-1 darkerGrotesque-semibold d-flex align-items-center text-light"><iconify-icon
                            class=" pe-2" icon="ic:baseline-local-phone"></iconify-icon>  +447717941122</p>
                    <p class="mb-1 darkerGrotesque-semibold d-flex align-items-center text-light"><iconify-icon
                            class=" pe-2" icon="tabler:brand-whatsapp"></iconify-icon> +447717941122 </p>
                    <p class="mb-1 darkerGrotesque-semibold d-flex align-items-center text-light"><iconify-icon
                            class=" pe-2" icon="ic:outline-email"></iconify-icon>emeraldresidenceyork@gmail.com</p>
                </div>
                <div class=" col-md-3 mb-3">

                    <ul class="footer-link ">

                        <li class="mb-2">
                            <a href="{{route('rates')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Our Rates</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{route('offer')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Offer</a>
                        </li>
                        
                        <li class="mb-2">
                            <a href="{{route('homepage')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon> Terms &amp; Conditions</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{route('homepage')}}" class="d-flex align-items-center"> <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Privacy &amp; Policy</a>
                        </li>
                    </ul>


                </div>


            </div>
            <div class="row pb-4">
                <div class="col-md-12 text-center">
                 
                    <span>&copy; Copyright@ 2016 Diamonds Emerald Residence all right reserved | Design and Developed by .&nbsp;</span><a href="http://www.mentosoftware.co.uk/" target="_blank" rel="lightbox noopener noreferrer" style="color: rgb(255, 255, 255); text-decoration: none; background-color: rgb(255, 102, 51); font-family: ourfont-light; font-variant-ligatures: normal; letter-spacing: 1px; orphans: 2; text-align: center; widows: 2;">Mento Software</a></span>
                </div>
            </div>
        </div>
    </footer>
    
       

 

    <script src="{{ asset('assets/frontend/js/iconify.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/app.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js')}}"></script>
        @yield('script')
    <script>
        jQuery(document).ready(function () {
            jQuery('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                callbacks: {
                    elementParse: function (item) {
                        console.log(item.el.context.className);
                        if (item.el.context.className == 'video') {
                            item.type = 'iframe',
                                item.iframe = {
                                    patterns: {
                                        youtube: {
                                            index: 'youtube.com/',

                                            id: 'v=',
                                            src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
                                        },
                                        vimeo: {
                                            index: 'vimeo.com/',
                                            id: '/',
                                            src: '//player.vimeo.com/video/%id%?autoplay=1'
                                        },
                                        gmaps: {
                                            index: '//maps.google.',
                                            src: '%id%&output=embed'
                                        }
                                    }
                                }
                        } else {
                            item.type = 'image',
                                item.tLoading = 'Loading image #%curr%...',
                                item.mainClass = 'mfp-img-mobile',
                                item.image = {
                                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                                }
                        }

                    }
                },
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                }

            });

        });
    </script>

    <script type="text/javascript">
    
    
        // const myTimeout = setTimeout(callCokie, 3000);

        // function callCokie() {
        //    document.getElementById("cookie").classList.add('show'); 
        // }
        // function closeCookie(){
        //     const cookie =  document.getElementById("cookie").classList.remove('show'); 
        //     console.log(cookie.classList.remove('show'));
        // }
    
        function scroller() {

            let p = window.pageYOffset;

            if (p > 200) {
                let k = document.getElementById('header');
                k.classList.add('active')
            } else {
                let k = document.getElementById('header');
                k.classList.remove('active')
            }

        }
        $(document).ready(function () {

            // partners

            $('.blog-slider').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2,
                slidesToScroll: 1,
                draggable: true,
                swipeToSlide: true,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });

        });




    </script>

</body>

</html>