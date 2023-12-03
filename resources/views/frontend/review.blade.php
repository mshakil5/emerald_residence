@extends('layouts.master')

@section('content')

<section class="about py-5">
    <div class="container">

        <form action="{{route('survey.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-9 mx-auto text-center">

                    @if ($message = Session::get('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="about-right ">
                        <h2 class="title-global">Survey</h2>
                        <p>Thank you for staying at Diamonds
                        <br/> Please help us to improve our service by participating in this short survey and you will automatically be entered in our price draw to win:
                    </p>
                    
                    <br>

                    <p>Take part in survey to win:</p>

                     
                    <div class="text-left">
                        <h3 class="" style="text-align: left"><?xml version="1.0" ?><svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M-838-2232H562v3600H-838z" fill="none"/><path d="M16 10v28l22-14z"/><path d="M0 0h48v48H0z" fill="none"/></svg><b style="color: #bf00db;">1st Prize - £300</b> </h3>
                        <h3 class="" style="text-align: left"><?xml version="1.0" ?><svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M-838-2232H562v3600H-838z" fill="none"/><path d="M16 10v28l22-14z"/><path d="M0 0h48v48H0z" fill="none"/></svg><b style="color: #bf00db;">2nd Prize - £100 worth of Amazon Gift Voucher</b> </h3>
                        <h3 class="" style="text-align: left"><?xml version="1.0" ?><svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M-838-2232H562v3600H-838z" fill="none"/><path d="M16 10v28l22-14z"/><path d="M0 0h48v48H0z" fill="none"/></svg><b style="color: #bf00db;">3rd Prize - Free Stay at any one of the Diamonds Branch</b></h3>
                    </div>
                    <p>(not be used in conjunction with any other offer.  T&C apply)</p>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="text-align: center">Excellent</th>
                                <th style="text-align: center">Good</th>
                                <th style="text-align: center">Not good <br> not poor</th>
                                <th style="text-align: center">Poor</th>
                                <th style="text-align: center">Very poor</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1. Please rate the overall cleanliness.</td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="5" id="" ></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2. Please rate the customer service provided by our staff.</td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="5" id="" ></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3. Please rate the comfort  of your room.</td>
                                <td style="text-align: center"><input type="radio" name="comport" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="5" id="" ></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4. Please rate the process of getting in to your room.</td>
                                <td style="text-align: center"><input type="radio" name="process" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="5" id="" ></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5. Please rate how likely would you recommend us to a family or friend.</td>
                                <td style="text-align: left" colspan="2"><input type="radio" name="recommend" value="1" id="" >Likely</td>
                                {{-- <td style="text-align: center"><input type="radio" name="recommend" value="2" id="" ></td> --}}
                                <td style="text-align: left" colspan="2"><input type="radio" name="recommend" value="2" id="" >Possibly</td>
                                {{-- <td style="text-align: center"><input type="radio" name="recommend" value="4" id="" ></td> --}}
                                <td style="text-align: left" colspan="2"><input type="radio" name="recommend" value="3" id="" >Unlikely</td>
                            </tr>

                        </tbody>
                    </table>

                    <br>

                    <div class="form-group row">
                        <label for="others" class="col-sm-2 col-form-label">Other Feedback</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="others" name="others" value="">
                        </div>
                    </div>

                </div>
            </div> 

            <div class="row mt-5">
                <div class="col-md-9 mx-auto ">
                    
                    
                    
                     
                    <p>Submit your survey with a valid email and you will receive a reference number in return, which you can quote for a 10% discount on your next stay with Diamonds. (Valid only with direct bookings)</p>
                    


                    <div class="form-group row text-center mx-auto">
                        <div class="col-sm-2">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}" required >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                        </div>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mt-3 text-center">Submit</button>
                    </div>

                    


                </div>
            </div>
        </form>


    </div>
</section>


@endsection

@section('script')


<script>
    
</script>

@endsection