@extends('layouts.master')

@section('content')


<section class="about-banner bg-light">
  <div class="container-fluid px-0">
      <div class="row">
          <img src="{{ asset('assets/frontend/images/626-1600x550.jpg')}}" style="height: 230px" class="img-fluid">
      </div>
  </div>
</section>



<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h3 class="my-3 title-global">Local Attraction</h3>
              </div>
            <div class="col-md-9 mx-auto">
                
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <a href="https://www.english-heritage.org.uk/visit/places/cliffords-tower-york/" target="blank">
                            <div class="card shadow-sm mx-auto mb-3">
                                <img src="{{ asset('assets/frontend/images/d.jpg')}}">
                                <h4 class="text-center my-3 fw-bold mb-1">Clifford Tower</h4>
                                <p class="px-3 pb-3 text-center">York Castle is a fortified complex in the city of York, England. It consists of a sequence of castles, prisons, law courts and other buildings, which were built over the last nine centuries on the south side of the River Foss.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <a href="https://yorkminster.org/visit/plan-your-visit/" target="blank">
                            <div class="card shadow-sm mx-auto mb-3" style="min-height: 427px">
                                <img src="{{ asset('assets/frontend/images/d4.jpg')}}">
                                <h4 class="text-center my-3 fw-bold mb-1">York Minster</h4>
                                <p class="px-3 pb-3 text-center">From the remains of a Roman barracks, to 1,000-year-old artefacts still used in the cathedral today, visitors can explore two millennia of York’s history in state-of-the-art chambers beneath the cathedral.</p>
                                  
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text-center">

                        <a href="https://www.visityork.org/business-directory/category/shambles" target="blank">
                            <div class="card shadow-sm mx-auto mb-3">
                                <img src="{{ asset('assets/frontend/images/d2.jpg')}}">
                                <h4 class="text-center my-3 fw-bold mb-1">Shambles ST</h4>
                                <p class="px-3 pb-3 text-center">The Shambles is a historic street in York, England, featuring preserved medieval buildings, some dating back as far as the 14th century</p>
                            </div>
                        </a>

                        
                    </div>
                    <div class="col-lg-6 text-center">
                        <a href="https://www.yorkwalls.org.uk/?page_id=3690" target="blank">
                            <div class="card shadow-sm mx-auto mb-3">
                                <img src="{{ asset('assets/frontend/images/d1.jpg')}}">
                                <h4 class="text-center my-3 fw-bold mb-1">City wall</h4>
                                <p class="px-3 pb-3 text-center">York has, since Roman times, been defended by walls of one form or another. To this day, substantial portions of the walls remain</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')


<script>
    
</script>

@endsection