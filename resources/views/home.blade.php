@extends('layouts.app')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
@section('content')

<div class="container">
                
               
                <div class="row">
                    
                    @for ($i=0;$i<4;$i++) 
                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="https://topnonprofits.com/wp-content/uploads/2012/01/WWF-Best-Nonprofit-Logos-e1329714254182.png">
                              <span style="color:black; font-weight:bold"class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                              <p>I am a very simple card. I am good at containing small bits of information.
                              I am convenient because I require little markup to use effectively.</p>
                            </div>

                            <div class="card-action">
                              <a class="waves-effect waves-light btn right">Donate</a>
                            </div>
                          </div>
                    </div>
                    @endfor


                            <div class="card-action" style="height:60px;">

                              <a href="{{ url('/donates') }}" class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Join</a>

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
                              <a href="{{ url('/donates') }}" class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Join</a>
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
                              <a href="{{ url('/donates') }}" class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Join</a>
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
