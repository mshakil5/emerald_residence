@extends('layouts.master')

@section('content')



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


@endsection

@section('script')


<script>
    
</script>

@endsection