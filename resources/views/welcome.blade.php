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
                              <span style="color:black; font-weight:bold"class="card-title">amfAR</span>
                            </div>
                            <div class="card-content">
                              <p>Founded in 1985, amfAR is dedicated to ending the global AIDS epidemic through innovative research</p>
                            </div>
                            <div class="card-action" style="height:60px;">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Donate</a>
                            </div>
                          </div>
                    </div>

                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="https://www.petsmartcharities.org/sites/all/themes/responsive/images/theme/header_logo.png">
                              <span style="color:black; font-weight:bold"class="card-title">PetSmart Charities</span>
                            </div>
                            <div class="card-content">
                               <p>WE SAVE PETS IN YOUR COMMUNITY. Do you believe in a future where every pet finds a forever home? We do.</p>
                            </div>
                            <div class="card-action" style="height:60px;">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Donate</a>
                            </div>
                          </div>
                    </div>


                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="http://asiafoundation.org/images/logo-230.png">
                              <span style="color:black; font-weight:bold"class="card-title">Asia Foundation</span>
                            </div>
                            <div class="card-content">
                              <p>The Asia Foundation improves lives, expands opportunities, and helps societies flourish across a dynamic and developing Asia. We work with innovative leaders and communities to build effective institutions and advance pathbreaking reforms.</p>
                            </div>
                            <div class="card-action" style="height:60px;">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Donate</a>
                            </div>
                          </div>
                    </div>

                    <div class="col s12 m6">
                          <div class="card">
                            <div class="card-image">
                              <img  style="opacity:0.7;" src="http://30hourfamine.my/assets/img/logo.jpg">
                              <span style="color:black; font-weight:bold"class="card-title">30HourFamine</span>
                            </div>
                            <div class="card-content">
                              <p>First initiated by World Vision Canada in 1971, 30-Hour Famine is now being organised in one form or another by World Vision offices in more than 15 countries as a global movement against hunger and poverty.</p>
                            </div>
                            <div class="card-action" style="height:60px;">
                              <a class="waves-effect waves-light btn right" style="margin-top:-10px;background-color:#ee6e73">Donate</a>
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
