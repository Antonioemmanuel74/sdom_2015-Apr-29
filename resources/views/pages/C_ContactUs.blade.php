<!DOCTYPE html>
<html lang="en">
    <!-- Start Hesder -->
    <head>
	@include('include.head')
	
</head>
<body>
@include('include.header')
<!-- End header -->

<div class="container">
    <h1>Contact Us</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
    
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                 {!! Form::label('Your Name') !!}
                                {!! Form::text('name', null, 
                                 array('required', 
                                 'class'=>'form-control', 
                        'placeholder'=>'Your name')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                 {!! Form::label('Your Name') !!}
				{!! Form::text('name', null, 
				    array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Your name')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                               {!! Form::label('Your E-mail Address') !!}
				{!! Form::text('email', null, 
				    array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Your e-mail address')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                {!! Form::label('Your Phone Number') !!}
				{!! Form::text('number', null, 
				    array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Your phone number')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
						{!! Form::label('Your Message') !!}
		       {!! Form::textarea('message', null, 
			   array('required', 
				 'class'=>'form-control', 
				 'placeholder'=>'Your message')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
					    {!! Form::submit('Contact Us!', 
		     array('class'=>'btn btn-large btn-success')) !!}

                            </div>
                        </div>
			    {!! Form::close() !!}
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                     <ul class="icons-list"> 
                        	<li><i class="icon-location-1"></i> <strong>Address:</strong> 10 Kudeti Street aba johnson, ikeja, Lagos.</li> 
                        	<li><i class="icon-mail-1"></i> <strong>Email:</strong> info@squareone-ng.net</li> 
                            <li><i class="icon-mobile-1"></i> <strong>Phone:</strong> +12 345 678 001</li> 
                            </ul>
				<div class="hr1" style="margin-bottom:15px;"></div> 
                      
                        <!-- Classic Heading --> 
                        <h4 class="classic-title" style="margin-left:1cm;"><span>Working Hours</span></h4> 
                      
                        <!-- Info - List --> 
                        <ul class="list-styled"> 
                        	<li><i class="icon icon-time"></i> <strong>Monday - Friday</strong> - 9am to 5pm</li> 
                            <li><i class="icon icon-time"></i> <strong>Saturday</strong> - 9am to 2pm</li> 
                            <li><i class="icon icon-time"></i> <strong>Sunday</strong> - Closed</li> 
						</ul> 
                      
                    </div> 
                            </div>
                            <hr />
                            <div id="map1" class="map">
                        
			    
			    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
</div>

<!-- Contact with Map - END -->


<!-- End if 2nd section -->
    <!-- Start Footer -->
@include('include.footer')
    <!-- End Footer -->

@include('include.foot')
</body>

</html>