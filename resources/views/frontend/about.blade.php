@extends('layouts.master')

@section('content')

<style>
    p{
        color: white;
    }
</style>
<section class="spacer bg-dark" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <p class="text-light d-block mt-3  text-center">
                    <img src="{{ asset('assets/frontend/images/diamond.png')}}" width="300px">
                </p>
            </div>
            <div class="col-md-8 mx-auto ">
                <h2 class="text-center"  style="color: #bf00db;font-weight: bold;">Welcome to Emerald Residence by Diamonds</h2>
            </div>
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

                
                </div>
            </div>
        </div>
    </div>
</section>


<!--
<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto text-center">
                <div class="about-right ">
                    <h2 class="title-global">  Comfort is more important</h2>
                    <p>Diamonds Inn is a Grade 2 listed Georgian Town House dating back to 1794 The guest house presents itself as an ideal base for you to explore the historical city of York Monkgate is just 450 yards from York Minister and the city walls is within a sort walking distance of our guest house. </p>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="blog-slider">
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/triple.jpg')}}" alt="">
                        </a>
                    </div>
                   
                   
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                         Triple room-Standard-Ensuite 
                        </a>
                        <p>
                            This Triple Standard en-suite room has a comfortable Double Bed and Single Bed , Fat screen TV and tea and coffee making facilities, Hairdryer, a relaxing Chair, Table Fan, Radio, Towels and Toiletries etc. <br/> Complimentary snack pack provided in room.  <br/>Continental breakfast available in the room.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
                
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/single1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="fs-4 link-title d-block my-3">
                            Single room-Standard-Shared Bathroom
                        </a>
                        <p>
                            This Single Standard Room has a comfortable Single Bed, Hand wash basin, Flat screen TV, Tea and Coffee making facilities, Towels and Toiletries, Hair Dryer, Table Fan etc.<br/> Continental breakfast available in the Room.  <br/>Complimentary snack pack provided in room.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsYO31" class="btn-theme d-block w-100 text-center">Rooms Book</a>
                        </div>
                    </div>
                </div>
                
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/double.png')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="fs-4 link-title d-block my-3">
                            Double room-Budget-Shared Bathroom
                        </a>
                        <p>
                            This Double Basic Room has a comfortable Double Bed, Hand wash basin, Flat screen TV, Tea and Coffee making facilities, Towels and Toiletries, Hair Dryer, a relaxing Chair, Table Fan etc.<br/> Continental breakfast available in the Room. <br/> Complimentary snack pack provided in room.  Private Bathroom is outside the room.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsYO31" class="btn-theme d-block w-100 text-center">Room Book</a>
                        </div>
                    </div>
                </div>
                
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/double.png')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Double room-Standard-Ensuite
                        </a>
                        <p>
                            This double Classic En-suite Room has a comfortable Double Bed, Flat screen TV, Tea and Coffee making facilities, Towels and Toiletries, Hair Dryer,a relaxing Chair, Table Fan etc.<br/> Continental breakfast available in the Room. <br/> Complimentary snack pack provided in room
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsYO31" class="btn-theme d-block w-100 text-center">Room Book</a>
                        </div>
                    </div>
                </div>
                
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/posts/room5.jpg')}}" alt="">
                        </a>
                    </div>
                  
                   
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                             Family room-Standard-Ensuite
                        </a>
                        <p>
                            This Family Standard En-suite Room has comfortable Double bed and 3 Single beds , Fat screen TV and tea and coffee making facilities, Hairdryer, a relaxing Chair, Table fan, Towels and Toiletries etc. <br/>Continental breakfast available in the Room. <br/> Complimentary snack pack provided in room.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsYO31" class="btn-theme d-block w-100 text-center"> Book Room</a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->



@endsection

@section('script')


<script>
    
</script>

@endsection