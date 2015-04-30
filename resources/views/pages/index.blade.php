<!DOCTYPE html>
<html lang="en">
    <!-- Start Hesder -->
    <head>
	@include('include.head')
	
</head>
<body>
@include('include.header')
<!-- End header -->
<!--start divder -->
<div class="divider">
    
</div>
<!-- divider -->
<!-- begin 1st swection -->
  <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://www.clarksarchivestorage.com/wp-content/uploads/2012/07/MG_9938.jpg'); background-repeat:no-repeat; background-size:cover;"></div>
                <div class="carousel-caption">
                    <h2>Secure Records Storage is an ideal solution for organizations that need to store, protect and manage their information.</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" id="fill_2" style="background-image:url('http://www.optometricmanagement.com/content/archive/2013/august/images/om_august_a07_fig01.jpg');  "></div>
                <div class="carousel-caption">
                    <h2>SOLUTIONS THAT YOU NEED!</h2><h4> Electronic Document Management</h4>
			<h4><a href="Edm">More</a></h4>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" id="fill_3" style="background-image:url('http://tricountyrecycling.webs.com/secure-paper-shredding.jpg');background-repeat:no-repeat; background-size:cover;"></div>
                <div class="carousel-caption">
                    <h2>Providing Secure Information Destruction Service</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
	    
	    
	        </div>
<!-- End Of 1st section -->

<!-- Begin 2nd section -->
<div class="container">
<div class="row">
    
    <div class="col-sm-4">
        <div class="bar">
            
        </div>
            <h2><a href="solution" style="color: #115511;">Solutions</a></h2>
            <a href="solution"><img src="http://www.resourcesolutionsgroup.com.au/media/RSG/solutions.jpg" width="340cm" height="100cm"></a>
        <p>Square One Document Management (SODM) provides a full range of Document Management services including secure document storage - both box and files, off-site data protection, on-site secure shredding, scanning and image hosting, file tracking software solutions and consultancy services throughout Nigeria.</p>
<p><a href="solution">Read More</a></p>

    </div>
    
    <div class="col-sm-4">
       <div class="bar"></div>
        <a href="#"><h2>Why Choose Us</h2></a>
        <div class=""> <iframe width="380" height="150"
src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1">
</iframe></div>
       <p class="mar">Our service is truly personal because we combine our small business attitude with the stability of a major corporate company, meaning that every customer that requires our secure storage is treated as an individual.
    </p>
       <p><a href="#">Read More</a></p>
    </div>
    
    <div class="col-sm-4">
      <div class="bar"></div>
        
        <div class="max_tab">
       <a href="#"><div class="min_tab" >
        <h3 class="w_min_tab">Data Storage</h3>
            <p>Organisations cannot underestimate the importance of secure Document Management and data management procedures.</p>
       </div></a>
        
       <a href="#">  <div class="min_tab" >
        <h3 class="w_min_tab">Secure Shredding</h3>
            <p>With Square-one Secure Shredding services, you wll be able to safely and cost-effectively destroy unnecessary paper-based documents.</p>
       </div></a>
        <a href="#"> <div class="min_tab" >
        <h3 class="w_min_tab">Data Backup</h3>
            <p>Seperate your data from disaster with offsite tape vaulting and cloud backup services.</p>
       </div> </a>

           
        </div>
    </div>
   
</div>
</div>
<!-- End if 2nd section -->
    <!-- Start Footer -->
@include('include.footer')
    <!-- End Footer -->

@include('include.foot')
</body>
    
</html>