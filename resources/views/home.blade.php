@extends('layouts.app')

@section('content')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

<div class="container">
                
               
                <div class="row">
                    
                    @for ($i=0;$i<4;$i++) 
                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="https://topnonprofits.com/wp-content/uploads/2012/01/WWF-Best-Nonprofit-Logos-e1329714254182.png">
                              <span style="color:black; font-weight:bold"class="card-title">Event</span>
                            </div>
                            <div class="card-content" style="background-color:#ee6e73">
                              <p>I am a very simple card. I am good at containing small bits of information.
                              I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action" style="height:60px;background-color:#ee6e73">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;color:#ee6e73;background-color:white">Participate</a>
                            </div>
                          </div>
                    </div>
                    @endfor

                </div>
                

</div>
<script>
        $( document ).ready(function() {
            
            $("#orgbutton").addClass("active");
            
        });
</script>
@endsection
