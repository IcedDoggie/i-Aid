@extends('layouts.app')

@section('content')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<style>
    .card{
        height:400px;
        width: 450px;
    }
    
    .card-image{
        height: 250px;
        width: 450px;
    }
    
    
</style>
<div class="container">
                
               
                <div class="row">
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="http://www.sunshinerescuegroup.org/petsmart_charities.jpg">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">Petsmart Charities<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Donate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Petsmart Charities<i class="material-icons right">close</i></span>
                          <p>WE SAVE PETS IN YOUR COMMUNITY. Do you believe in a future where every pet finds a forever home? We do.</p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="http://thehill.com/images/stories/whitepapers/org/amfar_new.gif">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">amfAR<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Donate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">amFar<i class="material-icons right">close</i></span>
                          <p>Founded in 1985, amfAR is dedicated to ending the global AIDS epidemic through innovative research</p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="http://static1.squarespace.com/static/50e6cb55e4b0404f376ac3a9/t/50f6f95ee4b08191027c77c4/1358362974458/logo-taf.jpeg">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">The Asia Foundation<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Donate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">The Asia Foundation<i class="material-icons right">close</i></span>
                          <p>The Asia Foundation improves lives, expands opportunities, and helps societies flourish across a dynamic and developing Asia. We work with innovative leaders and communities to build effective institutions and advance pathbreaking reforms.</p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="https://hearusout8.files.wordpress.com/2012/03/spca.png">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">SPCA Selangor<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Donate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">SPCA Selangor<i class="material-icons right">close</i></span>
                          <p>The Society for the Prevention of Cruelty to Animals, Selangor, Malaysia (SPCA Selangor) is a non-profit animal shelter in Selangor, Malaysia that aims to help animals that cannot defend themselves.</p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="http://www.hati.my/wp-content/uploads/2014/06/logo.png">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">Borneo Conservacy<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Donate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Borneo Conservacy<i class="material-icons right">close</i></span>
                          <p>The Society for the Prevention of Cruelty to Animals, Selangor, Malaysia (SPCA Selangor) is a non-profit animal shelter in Selangor, Malaysia that aims to help animals that cannot defend themselves.</p>
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
