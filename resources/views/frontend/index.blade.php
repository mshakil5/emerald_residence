@extends('layouts.master')

@section('content')

<style>
    #riskfloater {
      background-color: green;
      left: 10px;
      position: fixed;
      padding: 8px 16px;
      background: green;
      color: #ffffff;
      cursor: pointer;
      bottom: 10px;
      z-index: 2;
      // -moz-border-radius: 3px;
      // -webkit-border-radius: 3px;
      // border-radius: 3px;
  }

  #cookiebar {
      position: fixed;
      bottom: 0;
      left: 5px;
      right: 5px;
      display: none;
      z-index: 200;
  }

      a{
          color: white;
          text-decoration: none;
      }



  #cookiebarBox {
      position: fixed;
      bottom: 0;
      left: 5px;
      right: 5px;
      // display: none;
      z-index: 200;
  }
  .containerrr {
      border-radius: 3px;
      background-color: white;
      color: #626262;
      margin-bottom: 10px;
      padding: 10px;
      overflow: hidden;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      position: fixed;
      padding: 20px;
      background-color: #fff;
      bottom: -10px;
      width: 100%;
      -webkit-box-shadow: 2px 2px 19px 6px #00000029;
      box-shadow: 2px 2px 19px 6px #00000029;
      border-top: 1px solid #356ffd1c;
  }



  .cookieok {
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      background-color: #e8f0f3;
      color: #186782 !important;
      font-weight: 600;
      // float: right;
      line-height: 2.5em;
      height: 2.5em;
      display: block;
      padding-left: 30px;
      padding-right: 30px;
      border-bottom-width: 0 !important;
      cursor: pointer;
      max-width: 200px;
      margin: 0 auto;

  }
  </style>

<section class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/frontend/images/1a.jpg')}}" class="d-block" alt="slider photo missing">
                <div class="carousel-text container">

                    <h1 class="main-title mb-1 text-light1.png">Book Direct <br> <span class="">Get 10% Discount</span></h1>
                    
                        <a href="" class="text-white text-decoration-none" title="Call Now"><h5 class="my-2 text-white"> 07778529048 | 07717941122</h5></a>
                 
                    

                    <h5 class="my-2 text-white">  </h5>
                    <div class="mt-4 d-flex flex-wrap align-items-center justify-content-center-sm">
                        <a href="https://via.eviivo.com/DiamondsYO31" target="_blank" class="btn-theme">
                            Book now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
</section>



<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto text-justify">
                <div class="about-right ">
                    <p><b>Diamonds Group</b> is ecstatic to introduce the 5th hospitality branch - <b>Emerald Residence</b>.

                        <br/>It is a family-run business with skilled members making up the management team. 
    
                        <br/>Located in York within 2 miles of York Railway Station and 2 miles of York Train Station, Emerald Residence provides accommodation with a garden and free private parking for guests who drive. 
    
                        <br/>The property is situated 20.5 miles from Bramham Park, 23 miles from Harrogate International Centre, and 23 miles from Royal Hall Theatre. 
    
                        <br/>The property is non-smoking and is set at 2.1 miles from York Minister.
                    
                        <br>
                        At the guest house, each room comes with a wardrobe, A flat-screen TV, a private bathroom, bed linen, and towels.
                        <br>
                        The nearest airport is Leeds Bradford International Airport 29.2 miles from Adams House. 
                        </p>

                        <br>


                        <p><b>On site parking available.</b></p>
                        <p><b>Off Street free Parking available.</b></p>
                        <p style="color: red"><b>Check-in time:  2:00 pm <br>Check-out time: 	10.30 am</b></p>
                        <p><b>Address & contact information:</b></p>
                        <p>5 Main Street</p>
                        <p>Fulford</p>
                        <p>York </p>
                        <p>YO10 4HJ</p>
                        <br>
                        <p  style="color: red">For Booking: call : 07340631122, 07778529048, 07717941122 <br>
                        Email: emeraldresidenceyork@gmail.com</p>
                        <p>Directions:	(Link)</p>
    
                    
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="blog-slider">
                {{-- Family room-Superior-Ensuite-Garden view  done --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/room/family_room_superior.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Family room-Superior-Ensuite-Garden view
                        </a>
                        <p>
                            Family Superior en-suite room with a comfortable double bed, 3 single beds, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities. Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
            
                {{-- Triple room-Basic-Shared Bathroom done --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/room/basic_triple.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Triple room-Basic-Shared Bathroom
                        </a>
                        <p>
                            Triple Basic Shared Bathroom with a comfortable double bed, 1 single bed, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities. 
                            <br/>A Triple Basic shared Bathroom is available on the 2nd floor with narrow stairs,
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>

                {{-- Double room-Standard-Ensuite-Garden view --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/double1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="fs-4 link-title d-block my-3">
                            Double room-Standard-Ensuite-Garden view
                        </a>
                        <p>
                            All double en-suites have a comfortable double bed, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities. <br/>Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Quad room-Deluxe-Ensuite --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/commingsoon.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Quad room-Deluxe-Ensuite
                        </a>
                        <p>
                            The Quad Deluxe ensuite room has a comfortable double bed, 2 single beds, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities. Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Quad room-Standard-Ensuite --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/quadstandard.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Quad room-Standard-Ensuite
                        </a>
                        <p>
                            The Quad Standard ensuite room has comfortable 2 double beds, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities. Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>

                {{-- Single room-Basic-Shared Bathroom --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/commingsoon.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Single room-Basic-Shared Bathroom
                        </a>
                        <p>
                            The Single room shared bathroom has a comfortable single bed,flat-screen TV, towels, toiletries, and tea and coffee-making facilities.,the modern shower facilities.  <br/> Single Room shared bathroom is available on the first floor.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>
                
                {{-- Twin room-Superior-Ensuite done --}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/room/twin_room_superior.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Twin room-Superior-Ensuite
                        </a>
                        <p>
                          Twin Superior en-suite room with comfortable 2 single beds, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities. 
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="btn-theme d-block w-100 text-center">BOOK ROOMS</a>
                        </div>
                    </div>
                </div>
                
                
                {{-- Triple room-Deluxe-Ensuite  done--}}
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/room/delux_triple.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/EmeraldResidenceYO10" class="fs-4 link-title d-block my-3">
                            Triple room-Deluxe-Ensuite
                        </a>
                        <p>
                           Triple Deluxe en-suite room with a comfortable double bed, 1 single bed, flat-screen TV, towels, toiletries, and tea and coffee-making facilities. The modern en-suites have shower facilities.   
                            
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="galery spacer">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 mx-auto ">
                <h2 class="title-global text-center">
                    Photo <span class="txt-primary">Gallery </span>
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="popup-gallery">
                        <a href="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                       <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/4.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                            <a href="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/5.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/6.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        {{-- <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/7.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                       <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/8.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section py-5 bg-light" id="contact">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 mx-auto ">
                <h2 class="title-global text-center">
                    Contact & Location
                </h2>
                <p><b>From Train Station (2.0 miles)</b></p>
                    <p>Head south-west on Station Rd/A1036 towards Rougier St Continue to follow George Hudson St then Micklegate then Low Ousegate then Nessgate then Clifford St then Fishergate then Fullford Road  Continue straight onto Main Street Rd Destination will be left, number 5 main st.
                    <br/>
                    Driving for 9 minutes, Walking for 41 minutes, and Cycling for 14 minutes.</p>
            </div>
        </div>
       <div class="row">

            <div class="col-md-6">

                @if ($message = Session::get('message'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

               <form action="{{route('contact.submit')}}" method="post" class="form-custom p-4 border mb-3">
                @csrf
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="text"  name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="email"  name="email"
                            placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="text" name="subject"
                            placeholder="Subject" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control fw-bold" rows="3" name="message"
                            placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn-theme text-center border-0">Send</button>
                    </div>
                </form>
            </div>
            
            
            <div class="col-md-6">
                
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2348.59250355701!2d-1.0756476841391163!3d53.93898308010755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879304ffc4e735b%3A0x4bc9f6308ec6b353!2s5%20Main%20St%2C%20Fulford%2C%20York%20YO10%204HJ!5e0!3m2!1sen!2suk!4v1688471890199!5m2!1sen!2suk" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

{{-- <div id="cookiebarBox" class="cookieBox bg-primary py-4  text-white position-fixed bottom-0 left-0 right-0">
    <div class="container text-center">
        Like most websites, this site uses cookies to assist with navigation and your ability to provide feedback, analyse your use of products and services so that we can improve them, assist with our personal promotional and marketing efforts and provide consent from third parties.
        <br>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
            <a id="cookieBoxok" class="btn btn-sm btn-primary my-3 px-4 text-center" data-cookie="risk">Accept</a>
        </div>
    </div>
</div> --}}

<div id="cookiebarBox" class="os-animation" data-os-animation="fadeIn" >
    <div class="containerrr risk-dismiss " style="display: flex;" >
          <div class="container">
            <div class="row">
                <div class="col-md-9">
                <p class="text-left">
               <h1 class="d-inline text-primary"><span class="iconify" data-icon="iconoir:half-cookie"></span> </h1>
               Like most websites, this site uses cookies to assist with navigation and your ability to provide feedback, analyse your use of products and services so that we can improve them, assist with our personal promotional and marketing efforts and provide consent from third parties.
            </p>

                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a id="cookieBoxok" class="btn btn-sm btn-primary my-3 px-4 text-center" data-cookie="risk">Accept</a>
                </div>
            </div>
          </div>
    </div>
</div>

@endsection

@section('script')

<script>
    // if you want to see a cookie, delete 'seen-cookiePopup' from cookies first.
    
    jQuery(document).ready(function($) {
       // Get CookieBox
      var cookieBox = document.getElementById('cookiebarBox');
        // Get the <span> element that closes the cookiebox
      var closeCookieBox = document.getElementById("cookieBoxok");
        closeCookieBox.onclick = function() {
            cookieBox.style.display = "none";
        };
    });
    
    (function () {
    
        /**
         * Set cookie
         *
         * @param string name
         * @param string value
         * @param int days
         * @param string path
         * @see http://www.quirksmode.org/js/cookies.html
         */
        function createCookie(name, value, days, path) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else expires = "";
            document.cookie = name + "=" + value + expires + "; path=" + path;
        }
    
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    
        // Set/update cookie
        var cookieExpiry = 30;
        var cookiePath = "/";
    
        document.getElementById("cookieBoxok").addEventListener('click', function () {
            createCookie('seen-cookiePopup', 'yes', cookieExpiry, cookiePath);
        });
    
        var cookiePopup = readCookie('seen-cookiePopup');
        if (cookiePopup != null && cookiePopup == 'yes') {
            cookiebarBox.style.display = 'none';
        } else {
            cookiebarBox.style.display = 'block';
        }
    })();
    
    </script>

@endsection