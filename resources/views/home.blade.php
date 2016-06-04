@extends('layouts.app')

@section('content')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

<div class="container">
                
               
               <div class="row">
                    
                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="http://www.amfar.org/uploadedImages/_amfarorg/Website_Resources/logo-amfar.jpg">
                              <span style="color:black; font-weight:bold"class="card-title">605 EARTH WARRIOR MASS STREET CLEANUP @SEKINCHAN</span>
                            </div>
                            <div class="card-content">
                              <p>Event Details AND Reservation
                              Date: 5/6/2016 (Sunday)
                              Time: 6: 30am – 11:00 am (with breakfast, lunch)
                              Venue: “Thian Hock Temple” Jalan Haji Ismail, Pekan Sekinchan 45400 Sekinchan</p>
                            </div>

                            <div class="card-action" style="height:60px;">
<<<<<<< HEAD
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Join</a>
=======
                              <a href="{{ url('/donates') }}" class="waves-effect waves-light btn right" style="margin-top:-10px;style="background-color:#ee6e73"">Participate</a>

>>>>>>> 5bd511d38e5058f25943450a366cb77cf6f1ef3f
                            </div>
                          </div>
                    </div>

                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="https://www.petsmartcharities.org/sites/all/themes/responsive/images/theme/header_logo.png">
                              <span style="color:black; font-weight:bold"class="card-title">MPA CHARITY RUN</span>
                            </div>
                            <div class="card-content">
                               <p>September 25, 2016 (Sunday)
                                The race starts at 6:00 AM
                                Shorter than 10 km race - 8 kilometers
                               </p>
                            </div>
                            <div class="card-action" style="height:60px;">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Join</a>
                            </div>
                          </div>
                    </div>


                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="http://asiafoundation.org/images/logo-230.png">
                              <span style="color:black; font-weight:bold"class="card-title">30-Hour Famine Event</span>
                            </div>
                            <div class="card-content">
                              <p>Location : FOON YEW HIGH SCHOOL - KULAI
                                Date  : 2016-06-11
                                Type  : DIY Camp - 30-Hour Famine</p>
                            </div>
                            <div class="card-action" style="height:60px;">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Join</a>
                            </div>
                          </div>
                    </div>



                </div>
                

</div>
<script>
        $( document ).ready(function() {
            
            $("#orgbutton").addClass("active");
            
        });
</script>
@endsection
