@extends('layouts.app')
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

@section('content')


<div class="container">
               
                <div class="row">
                    

                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Berlin_marathon.jpg">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">Frost the Trail KL Corporate Charity Run<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Participate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Frost the Trail KL Corporate Charity Run<i class="material-icons right">close</i></span>
                          <p>Kepong, Malaysia.</p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRSsfFGgv-HtPoWkFkS9DF1eNLHQDQ9bev5rkHBeKAEuuyoiEm2aw">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">Organic Farmstay – education center<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Participate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Organic Farmstay – education center<i class="material-icons right">close</i></span>
                          <p>Kuala Selangor, Selangor.</p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="https://www.petsmartcharities.org/sites/all/themes/responsive/images/theme/header_logo.png">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">MPA CHARITY RUN<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Participate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">MPA CHARITY RUN<i class="material-icons right">close</i></span>
                          <p>September 25, 2016 (Sunday)
                                The race starts at 6:00 AM
                                Shorter than 10 km race - 8 kilometers
                               </p>
                        </div>
                    </div>
                    
                    <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="https://www.petsmartcharities.org/sites/all/themes/responsive/images/theme/header_logo.png">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">30-Hour Famine Event<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>
                          <p><a class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Participate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">30-Hour Famine Event<i class="material-icons right">close</i></span>
                          <p>Location : FOON YEW HIGH SCHOOL - KULAI
                                Date  : 2016-06-11
                                Type  : DIY Camp - 30-Hour Famine</p>
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
