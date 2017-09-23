
   <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flockers</title>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
        

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

        <!--Icon Fonts-->
        <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css" />


        <!-- Extras -->
        <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/extras/lightbox.css">
	


        <!-- jQuery Load -->
        <script src="assets/js/jquery-min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
		
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
	
	

      </head>

    <body data-spy="scroll" data-offset="20" data-target="#navbar" >
    <!-- Nav Menu Section -->
    <div class="logo-menu">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-3 col-sm-5">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home"><img src="images/icon/logo.png" style="max-height: 45px;
max-width: 190px;
opacity: 1;
position: absolute;
top:8px;
left: -27%;
"></img></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav col-md-7 col-lg-7 pull-right" id="navstyle"> 
                            <li id="navnav"><a href="#hero-area"></i> Home</a></li>
                            <li id="navnav"><a href="#services">Events</a></li>
                            <li  id="navnav"><a href="#portfolio"> Categories</a></li>
                            <li  id="navnav"><a href="#clients"> Pricing</a></li>
                            <li  id="navnav"><a href="#about"> About</a></li>
                            <li  id="navnav"><a href="#contact">Contact</a></li>
							<li id="navbg"><button type="button" id="create" class="btn btn-secondary" data-toggle="modal" data-target="#login">CREATE EVENTS</button></li>
                            </ul>
        </div>
      </div>
    </nav>
    </div>
<!-- Nav Menu Section End -->






<!-- Modal -->




<div class="modal fade product_view" id="login" style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="modal-dialog" style="max-width: 800px; width: 100%; margin: 6% auto;">
        <div class="modal-content">
           
            <div class="modal-body">
			
			
			
                <div class="row" >
                   
                    <div class="col-md-6 product_content" style="padding-top: 4%;">
				
				
				
					  <img id="profile-img" class="profile-img-card" src="images/icon/avatar.png" />
					   <h4 class="col-md-12" style="text-align: center; color: #0072bc; font-weight: 20px; font-family: 'Raleway', sans-serif;">Sign in to your account</h4>
							
       
<form class="col-md-12" style="padding-top: 3%;" id="textcolor" role="form" action="login.php" method="post" >
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	
	<i class="glyphicon glyphicon-envelope"></i>
    <input type="text" class="form-control" name="username" placeholder="Username" >
	
  </div>
  </div>
  <div class="form-group col-md-12" style="margin-bottom: 3px;">
  <div class="inner-addon right-addon">
	
	<i class="glyphicon glyphicon-lock"></i>
    <input type="password" class="form-control"  name="password" placeholder="Password" >
  </div>
  </div>
  
  	<a style=" color: #0072bc; font-weight: 20px; font-family: 'Raleway', sans-serif; font-family: 10px; text-transform: capitalize;" class="btn btn-link pull-right">Forgot Password?</a>

	
	<div class="row col-md-12 col-sm-12 text-center" style="padding-top: 5%;" >
					<button type="submit" id="btnlogin" class="btn btn-primary" name="login" >LOGIN</button>
					<button type="button" id="btnreg" class="btn btn-primary"  data-toggle="modal" data-target="#register" >SIGN UP</button>
					
	</div>
	
</form>


	
	
	
	
	
	<h4 class="col-md-12" style="text-align: center; color: #0072bc; font-family: 'Raleway', sans-serif; font-size: 13px; padding-top: 13%; "><b>Flockers 1.0</b> All rights Reserved 2017 - Team FSociety</h4>
	
                        
                      


	   
	  
	   
	   
                     
                       
                    </div>
					
					
					 <div class="col-md-6 product_img" style="padding-left: 0;padding-right: 0;">
					 
                        <img src="images/login.jpg" class="img-responsive" style=" position:relative;"></img>
											
											
											
										  <h4 id="logintext"><b>Make Your Dreams Come True</b></h4>
										  
										    <h4 class="col-md-12" id="logintext1">Meet your favorite artists, sport teams and parties. Find events and interests near your location and share it with friends.</h4>

												<img src="images/icon/logo.png" style="
														width: 60%;
														opacity: 1;
														position: absolute;
														top:16%;
														left: 21%;
														">
												</img>
												
													
													
												<div class="row col-md-12" style="opacity: 1;  position: absolute; top:65%;"> 
												
												
											 
												
													<div class="col-md-4 col-sm-12" style="text-align: center;">
													<img   src="assets/img/portfolio/categories/icons/fb.png" alt="Image" style="max-width:50%; cursor: pointer; ">
													</div>
													
													<div class="col-md-4 col-sm-12" style="text-align: center;">
													<img   src="assets/img/portfolio/categories/icons/twitter.png" alt="Image" style="max-width:50%; cursor: pointer;">
													</div>
													
													<div class="col-md-4 col-sm-12" style="text-align: center;">
													<img   src="assets/img/portfolio/categories/icons/instagram.png" alt="Image" style="max-width:50%; cursor: pointer;">
													</div>
												</div>
													
													
											 
											
											
											
									
                    

										
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="modal fade product_view" id="register"  >
    <div class="modal-dialog" style="max-width: 950px; width: 100%; margin: 3% auto;">
        <div class="modal-content">
           
            <div class="modal-body">
			
			
			
                <div class="row" >
           
					
					 <div class="col-md-6 product_img" style="padding-left: 0;padding-right: 0; ">
					 
                        <img src="images/register.jpg" class="img-responsive" style=" position:relative;"></img>
											
		
											
										  <h4 id="logintext"><b>Hello, Welcome to Flockers!</b></h4>
										  
										    <h4 class="col-md-12" id="logintext1">Meet your favorite artists, sport teams and parties. Find events and interests near your location and share it with friends.</h4>

												<img src="images/icon/logo.png" style="
														width: 60%;
														opacity: 1;
														position: absolute;
														top:16%;
														left: 21%;
														">
												</img>
												
													
													
												<div class="row col-md-12" style="opacity: 1;  position: absolute; top:65%;"> 
												
												
											 
												
													<div class="col-md-4 col-sm-12" style="text-align: center;">
													<img   src="assets/img/portfolio/categories/icons/fb.png" alt="Image" style="max-width:40%; cursor: pointer; ">
													</div>
													
													<div class="col-md-4 col-sm-12" style="text-align: center;">
													<img   src="assets/img/portfolio/categories/icons/twitter.png" alt="Image" style="max-width:40%; cursor: pointer;">
													</div>
													
													<div class="col-md-4 col-sm-12" style="text-align: center;">
													<img   src="assets/img/portfolio/categories/icons/instagram.png" alt="Image" style="max-width:40%; cursor: pointer;">
													</div>
												</div>
										
                    </div>
					
					
					
					        
                    <div class="col-md-6 product_content" style="padding-top: 1%;">
				

					   <h4 class="col-md-12" style="text-align: center; color: #0072bc; font-weight: 20px; font-family: 'Raleway', sans-serif;">Hi there, Let's start here</h4>
							
       
<form class="col-md-12" style="padding-top: 1%;" id="textcolor" role="form" action="register.php" method="post">

  
  
  <div class="inner-addon right-addon col-xs-6" style="width: 50%; padding-right: 5.5px; margin-bottom: 10px;">	
	<i class="glyphicon glyphicon-user"></i>
    <input required type="text" class="form-control" name="first_name" placeholder="Firstname" >
  </div>
  
  <div class="inner-addon right-addon col-xs-6" style="width: 50%; padding-left: 5.5px; margin-bottom: 10px;">	
	<i class="glyphicon glyphicon-user" style="right: 10px;"></i>
    <input required type="text" class="form-control" name="last_name" placeholder="Lastname" >
  </div>
  
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="glyphicon glyphicon-phone"></i>
    <input type="text" class="form-control" name="mobile_no" placeholder="Phone" >
  </div>
  </div>
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="glyphicon glyphicon-map-marker"></i>
    <input required type="text" class="form-control" name="address" placeholder="Address" >
  </div>
  </div>
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="glyphicon glyphicon-envelope"></i>
    <input required type="email" class="form-control" name="email_address" placeholder="Email" >
  </div>
  </div>
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="	glyphicon glyphicon-credit-card"></i>
    <input required type="email" class="form-control" name="paypal_account" placeholder="Paypal" >
  </div>
  </div>
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="glyphicon glyphicon-user"></i>
    <input required type="text" class="form-control" name="username" placeholder="Username" >
  </div>
  </div>
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="glyphicon glyphicon-lock"></i>
    <input required type="password" class="form-control" name="password" placeholder="Password" >
  </div>
  </div>
  
  <div class="form-group col-md-12" >
  <div class="inner-addon right-addon">
	<i class="glyphicon glyphicon-lock"></i>
    <input required type="password" class="form-control" name="cpassword" placeholder="Repeat Passowrd" >
  </div>
  </div>
  


	<div class="row col-md-12 col-sm-12 text-center" style="padding-top: 1%;" >
			<button type="submit" id="btnlogin" class="btn btn-primary" name="register" >REGISTER</button>
			<button type="button" id="btnreg" class="btn btn-primary"  data-toggle="modal" data-target="#login" >LOGIN</button>
				
					
	</div>
	
</form>


	
	
	
	<h4 class="col-md-12" style="text-align: center; color: #0072bc; font-weight: 20px; font-family: 'Raleway', sans-serif; font-size: 12px; padding-top: 1%; "><b>Flockers 1.0</b> All rights Reserved 2017 - Team FSociety</h4>
	
	
	
                       
                    </div>
		
					
                </div>
            </div>
        </div>
    </div>
</div>





















<!-- Hero Area Section -->

<section id="hero-area"  

style="

 background-image:url('images/back.jpg');    
  background-repeat: no-repeat;		
  background-position: center;
  height: 100%;
  width: 100%;
	 height: 100vh;

"

>
<div class="container">
    <div class="row" id="sec1" style=" padding: 80px 0px;">
<div class="col-md-12" style="top: 5px;" id="searchcolor">
        <h1 class="title" ><img src="images/icon/logo2.png" style="width: 20%; opacity: 1; "></img></h1>
        <h2 class="subtitle">"Find, Discover and Organize Meetup and Events" </h2>
		
		<!---
		 <h2 id="subtitle2">EXPLORE THE FUN</h2>
		 <h2 id="subtitle3">Discover events around you. And not only :) </h2>--->

	
		
<div class="row" style="padding-top: 2%;">
  <div class="col-md-3" style="padding-left:0px; padding-right:0px;">
  
  <div style=" width: 90%; text-align: center; padding-bottom: 10%;">
   <i class="fa fa-calendar" aria-hidden="true" style="   font-size:25px;"></i> 
  </div>

	<input type="text" 
	onfocus="(this.type='date')"
	placeholder="When" 
	style=" display: block;
    width: 90%;
    height: 45px;
    padding: 6px 10px;
    font-size: 15px;
    color: white;
    background-color: transparent;
	border: 2.3px solid white;
	font-family: century gothic;
	font-weight: bold;"
	/>
  </div>
  
 <div class="col-md-3" style="padding-left:0px; padding-right:0px;">
 
  <div style=" width: 90%; text-align: center; padding-bottom: 10%;">
 <i class="fa fa-tags" aria-hidden="true" style=" font-size:25px;"></i>
  </div>
 
	<input type="text" 
	placeholder="What" 
	style=" display: block;
    width: 90%;
    height: 45px;
    padding: 6px 10px;
    font-size: 15px;
    color: white;
    background-color: transparent;
	border: 2.3px solid white;
	font-family: century gothic;
	font-weight: bold;"
	/>
  </div>
  
  <div class="col-md-3" style="padding-left:0px; padding-right:0px;">
  
   <div style=" width: 90%; text-align: center; padding-bottom: 10%;">
  <i class="fa fa-map-marker" aria-hidden="true" style=" font-size:25px;"></i>
  </div>
  
	<input type="text" 
	placeholder="Where" 
	style=" display: block;
    width: 90%;
    height: 45px;
    padding: 6px 10px;
    font-size: 15px;
    color: white;
    background-color: transparent;
	border: 2.3px solid white;
	font-family: century gothic;
	font-weight: bold;"
	/>
  </div>
  
  
  <div class=" col-md-3"  style="padding-left:0px; padding-right:0px;" >
  
   <div style=" width: 100%; text-align: center; padding-bottom: 10%;">
  <i class="fa fa-rocket"  style=" font-size:25px;"></i>
  </div>
  
  
  <button type="button" id="letstart" class="btn btn-primary" style="
	background: white;
   border: 2.3px solid white;
    color: #0072bc;
	 height: 45px;
	 font-family: century gothic;
	font-weight: bold;
	border-radius: 3px;
	font-size: 15px;
	letter-spacing: 2px;
    width: 100%;">
	Let's Start</button>
  </div>
  
  
</div>
		

	
</div>
       

</div>
</div>
</div>

</section>

<!-- Hero Area Section End-->



<!-- Service Section -->

<section id="services" style="background-color: white;">

              <h4 id="con"> <b>How does Flockers work?</b></h4>


<div class="container">
    <div class="row">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                   
                </ol>
                 
                
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	 <div class="col-md-3" style="text-align: center;"><img   src="assets/img/portfolio/categories/icons/search.png" alt="Image" style="max-width:50%;">
						   <h4 id="icontext"> <b>1. Find events and interest</b></h4>
						<p>Search events that suits your interest. Choose interests from sports to esports. Make sure you find the best events in town.</p>
					 </div>
					 
                	  <div class="col-md-3" style="text-align: center;"><img   src="assets/img/portfolio/categories/icons/choose.png" alt="Image" style="max-width:50%;">
						<h4  id="icontext"> <b>2. Select your event</b></h4>
						<p>In this step, you can now join or select the nearest or best events you find. You can join events by simply clicking the plus or join button.</p>
					  </div>
					  
					  
                	  <div class="col-md-3" style="text-align: center;"><img  src="assets/img/portfolio/categories/icons/join.png" alt="Image" style="max-width:50%;">
						<h4 id="icontext"> <b>3. Join event you choose</b></h4>
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
					  </div>
					  
					  
                	  <div class="col-md-3" style="text-align: center;"><img  src="assets/img/portfolio/categories/icons/enjoy.png" alt="Image" style="max-width:50%;">
						<h4  id="icontext"> <b>4. Enjoy and have fun</b></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
					  </div>
                	</div>
                </div>
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3" style="text-align: center;"><img  src="assets/img/portfolio/categories/icons/fill.png" alt="Image" style="max-width:50%;">
							<h4 id="icontext"> <b>1. Fill-up event form</b></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						</div>
						
                		<div class="col-md-3" style="text-align: center;"><img  src="assets/img/portfolio/categories/icons/choose.png" alt="Image" style="max-width:50%;">
							<h4 id="icontext"> <b>2. Choose your interest</b></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						</div>
						
						
                		<div class="col-md-3" style="text-align: center;"><img  src="assets/img/portfolio/categories/icons/payment.png" alt="Image" style="max-width:50%;">
							<h4 id="icontext"> <b>3. Select payment option</b></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						</div>
						
						
                		<div class="col-md-3" style="text-align: center;"><img  src="assets/img/portfolio/categories/icons/notify.png" alt="Image" style="max-width:50%;">
							<h4 id="icontext"> <b>4. Get Updates</b></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						</div>
                	</div>
                </div>
             
                </div>
                
				
		
				
					
					
                </div>
                 
		</div>
	</div>
</div>















<div class="container" style="background-image:url('images/events.jpg');    
  background-repeat: no-repeat;		
  background-position: center;

  width: 100%;">

        <div class="row" style=" padding: 10px 0px;">

         

            <div class="col-md-12 col-lg-10 col-centered" style="align-content:center" >

               <h1 align="center" style="font-family: 'Oswald', sans-serif; font-size: 30px; color: white; text-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">Events for you in Cebu City, Central Visayas, Philippines</h1>
                <div class="row" style="padding: 30px 0px;">

				
					
                    <div class="col-sm-4 col-lg-3 col-md-4" >
			
						
                        <div class="thumbnail"  >
						
							
					<!---
					<div class="box">
						<div align="center">FREE</div>
					</div>--->
						
                            <img src="images/events/ev2.jpg" alt="" id="event-img">
                            <div class="caption" style=" border-color:white; outline:none;" >
                             
                                
                                <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>2nd Cebu Property Expo 2017</b></h4>
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text  style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
                            </div>
                            <div class="ratings" >
								 <div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;">
	
	<i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
                                  
								
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
					
					
					
                        <div class="thumbnail" id="thumb">
						
							
					<!---
					<div class="box">
						<div align="center">FREE</div>
					</div>--->
					
					
                            <img src="images/events/ev8.jpg" alt="" id="event-img">
                             <div class="caption" style=" border-color:white; outline:none;" >
                              
                                
                                <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>Cybercon Asia 2017</b></h4>
								
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
								
                            </div>
                            <div class="ratings">
                               <div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;" ><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
					
					
                        <div class="thumbnail" >
						
						<!----	
					<div class="box">
						<div align="center">FREE</div>
					</div>---->
						
                            <img src="images/events/ev1.jpg" alt="" id="event-img">
                            <div class="caption" style=" border-color:white; outline:none;" >
                                
                                
                                <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>2nd SME Business Expo 2017</b></h4>
								
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
								
                            </div>
                            <div class="ratings">
								<div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;"><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                   <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
					
			
					
                        <div class="thumbnail">
						
				

					<!---
					<div class="box">
						<div align="center">FREE</div>
					</div>--->
						
                            <img src="images/events/ev3.jpg"  alt="" id="event-img">
                             <div class="caption" style=" border-color:white; outline:none;" >
                              
                                
                            <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>Cebu Mutual Funds Seminar</b></h4>
								
								
								
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
                            </div>
                            <div class="ratings">
                                 <div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;"><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                   <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4" style="top: 8px;">
			
					
					
                        <div class="thumbnail">
						
						

					<!----
					<div class="box">
						<div align="center">FREE</div>
					</div>---->
					
                            <img src="images/events/ev4.jpg"  alt="" id="event-img">
                                <div class="caption" style=" border-color:white; outline:none;" >
                               
                                
                               <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>Accountants Cofee Party </b></h4>
								
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
								
                            </div>
                            <div class="ratings">
								<div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;"><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
					   <div class="col-sm-4 col-lg-3 col-md-4" style="top: 8px;">
					   
					
					   
                        <div class="thumbnail">
						
						  
						<!----  
						  <div class="box">
						<div align="center">FREE</div>
					</div>---->
						
                            <img src="images/events/ev5.jpg"  alt="" id="event-img">
                              <div class="caption" style=" border-color:white; outline:none;" >
                                
                                
                                <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>Manulife Orientation Program</b></h4>
								
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
								
								
                            </div>
                            <div class="ratings">
                                <div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;"><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                   <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
					
					
                    <div class="col-sm-4 col-lg-3 col-md-4" style="top: 8px;">
					
				
                        <div class="thumbnail" id="thumb">
						
						
						
						<!---
						  <div class="box">
						<div align="center">FREE</div>
					</div>--->
						
                            <img src="images/events/ev8.jpg" alt="" id="event-img">
                             <div class="caption" style=" border-color:white; outline:none;" >
                               
                                
                              <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>Cybercon Asia 2017</b></h4>
								
								
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
								
								
                            </div>
                            <div class="ratings">
								<div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;"><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                   <span class="glyphicon glyphicon-star-empty"></span>
								   <span class="glyphicon glyphicon-star-empty"></span>
								   <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
					
					
					  <div class="col-sm-4 col-lg-3 col-md-4" style="top: 8px;">
					  
				
                        <div class="thumbnail" >
						
						
						<!----
						  <div class="box">
						<div align="center">FREE</div>
					</div>--->

                            <img src="images/events/ev1.jpg" alt="" id="event-img">
                            <div class="caption" style=" border-color:white; outline:none;" >
                             
                                
                               <h4 style="color: #45494E; font-size: 14px; padding-bottom: 12px;"><b>2nd SME Business Expo 2017</b></h4>
							
							
							
								<h5 ><i class="fa fa-calendar" aria-hidden="true" style="color:  #0072bc;"></i>
							<text href="#" style="color: #45494E; font-size: 12px;font-weight: 400; ">SAT, AUG 26 AT 1:00PM</text>
                                </h5>
								
								
								  <h5 ><i class="fa fa-map-marker" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">Cebu Trade Hall, Cebu City</text>
                                </h5>
								
								 <h5 ><i class="fa fa-clock-o" aria-hidden="true" style="color:  #0072bc;"></i>
								<text href="#" style="color: #45494E; font-size: 12px; font-weight: 400;">4:30-8:00PM</text>
                                </h5>
							
                            </div>
                            <div class="ratings">
                               <div class="pull-right"  style="padding-right: 19px; ">
                                <button type="button" id="join" style="background-color: transparent;
    border: 2px solid #0072bc;
    color: #0072bc;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 130%;
    border-radius: 30px;
    font-family: century gothic;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 13px;
    outline: none;"><i class="fa fa-plus" aria-hidden="true" ></i></button>
								</div>
                                <p style="color: #0072bc; padding-top: 7px; padding-left: 10px;">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                 
                </div>

            </div>

        </div>








<div style="text-align: center; padding-bottom: 40px;">
  
  <button type="button" style="outline:none;" id="seemore">DISCOVER MORE EVENTS</button>
     
</div>











</div>















 </section>
<!-- Service Section End -->



<!-- Portfolio Section -->

    <section id="portfolio">
    <div class="container">
    <div class="row">
    <h1 class="title" style="font-family: 'Oswald', sans-serif; font-size: 30px; padding-bottom: 2%;padding-top: 1%; ";>Browse Events By Categories</h1>

   

   

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="portfolio-item wow fadeInLeft" data-wow-delay=".7s">
	<img  src="assets/img/portfolio/categories/caticon/hiker.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/outdoor-adventures.jpg" alt="">
	<button type="button" id="imgtxt">ADVENTURES AND OUTDOORS</button>	
    </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="portfolio-item wow fadeInLeft" data-wow-delay=".7s">
	<img src="assets/img/portfolio/categories/caticon/hardware.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/tech.jpg" alt="" >
	<button type="button" id="imgtxt">TECHNOLOGY</button>	
    </div>
    </div>

	
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="portfolio-item wow fadeInLeft" data-wow-delay=".7s">
	<img src="assets/img/portfolio/categories/caticon/health.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/health.jpg" alt="">
	<button type="button" id="imgtxt">HEALTH AND WELLNESS</button>	
    </div>
    </div>

	
	
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.1s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/photography.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/photography.jpg" alt="">
	<button type="button" id="imgtxt">PHOTOGRAPHY</button>	
    </div>
    </div>
	

	
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.3s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/music.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/music.jpg" alt="">
	<button type="button" id="imgtxt">MUSIC</button>	
    </div>
    </div>
	
	

		
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/food.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/food.jpg" alt="">
	<button type="button" id="imgtxt">FOOD AND DRINKS</button>	
    </div>
    </div>
	
	
	
	
	
	
	
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.1s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/dance.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/dance.jpg" alt=""></a>
	<button type="button" id="imgtxt">DANCE</button>	
    </div>
    </div>
	

	
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.3s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/fashion.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/fashion.jpg" alt="">
	<button type="button" id="imgtxt">FASHION AND BEAUTY</button>	
    </div>
    </div>
	
	

		
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/sports.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/sports.jpg" alt="">
	<button type="button" id="imgtxt">SPORTS</button>	
    </div>
    </div>
	
	
	
	 <div id="showmore" class="collapse">
	 
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/esports.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/esports.jpg" alt="">
	<button type="button" id="imgtxt">eSPORTS</button>	
    </div>
    </div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/career.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/career.jpg" alt="">
	<button type="button" id="imgtxt">CAREER AND BUSINESS</button>	
    </div>
    </div>
	
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/pet.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/pets.jpg" alt="">
	<button type="button" id="imgtxt">PETS</button>	
    </div>
    </div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/learning.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/learning.jpg" alt="">
	<button type="button" id="imgtxt">LEARNING</button>	
    </div>
    </div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/film.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/film.jpg" alt="">
	<button type="button" id="imgtxt">FILM</button>	
    </div>
    </div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/culture.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/culture.jpg" alt="">
	<button type="button" id="imgtxt">LANGUAGE AND CULTURE</button>	
    </div>
    </div>
	
	
	
		
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/social.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/social.jpg" alt="">
	<button type="button" id="imgtxt">SOCIAL</button>	
    </div>
    </div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/lgbtq.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/lgbtq.jpg" alt="">
	<button type="button" id="imgtxt">LGBTQ</button>	
    </div>
    </div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1.5s">
    <div class="portfolio-item">
	<img src="assets/img/portfolio/categories/caticon/art.png" alt="" style="width: 25%; position: absolute; left: 37%; top: 20%;">
	<img src="assets/img/portfolio/categories/art.jpg" alt="">
	<button type="button" id="imgtxt">ARTS</button>	
    </div>
    </div>
	
	
	
	
	</div>
	



	
	
	
	<div style="text-align: center; padding-bottom: 45px; ">
  <button  type="button" id="show" style="outline: none;" data-toggle="collapse" data-target="#showmore">SHOW MORE</button>
     
</div>

	
	
	
	</div>
    </div>
    </section>
<!-- Portfolio Section End -->


<!-- Client Section -->
    <section id="clients">
	
	
	
    <div class="container">
    
	
	
	<h2 style="text-align: center;  font-weight: 700;
  text-transform: uppercase; font-size: 20px; padding-top: 20px;">PRICING OPTIONS</h2>
	
	
	
	<div class="cd-pricing-container cd-full-width cd-secondary-theme">
		<ul class="cd-pricing-list">
			<li style="right: 2%;">
				<header class="cd-pricing-header">
					<h2>Basic</h2>

					<div class="cd-price">
						<span class="cd-currency">₱</span>
						<span class="cd-value">300</span>
						<span class="cd-duration">mo</span>
					</div>
				</header> <!-- .cd-pricing-header -->

				<div class="cd-pricing-body">
					<ul class="cd-pricing-features">
						<li><em>100</em> Participants</li>
						<li><em>3</em> Organizer</li>
						<li><em>3</em> Events</li>
						<li><em>1</em> Month Expiration</li>
						<li><em>Unlimited</em> Bandwidth</li>
						<li><em>24/7</em> Support</li>
					</ul>
				</div> <!-- .cd-pricing-body -->

				<footer class="cd-pricing-footer">
					<a class="cd-select" >Select</a>
				</footer> <!-- .cd-pricing-footer -->
			</li>
			<li class="cd-popular">
				<header class="cd-pricing-header">
					<h2>Popular</h2>

					<div class="cd-price">
						<span class="cd-currency">₱</span>
						<span class="cd-value">500</span>
						<span class="cd-duration">mo</span>
					</div>
				</header> <!-- .cd-pricing-header -->

				<div class="cd-pricing-body">
					<ul class="cd-pricing-features">
						<li><em>300-500</em> Participants</li>
						<li><em>10</em> Organizers</li>
						<li><em>10</em> Events</li>
						<li><em>6</em> Months Expiration</li>
						<li><em>Unlimited</em> Bandwidth</li>
						<li><em>24/7</em> Support</li>
					</ul>
				</div> <!-- .cd-pricing-body -->

				<footer class="cd-pricing-footer">
					<a class="cd-select">Select</a>
				</footer> <!-- .cd-pricing-footer -->
			</li>
			<li style="left: 2%;">
				<header class="cd-pricing-header">
					<h2>Premier</h2>

					<div class="cd-price">
						<span class="cd-currency">₱</span>
						<span class="cd-value">1,500</span>
						<span class="cd-duration">mo</span>
					</div>
				</header> <!-- .cd-pricing-header -->

				<div class="cd-pricing-body">
					<ul class="cd-pricing-features">
						<li><em>1000</em> Participants</li>
						<li><em>20</em> Organizers</li>
						<li><em>20</em> Events</li>
						<li><em>1</em> Year Expiration</li>
						<li><em>Unlimited</em> Bandwidth</li>
						<li><em>24/7</em> Support</li>
					</ul>
				</div> <!-- .cd-pricing-body -->

				<footer class="cd-pricing-footer">
					<a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
				</footer>  <!-- .cd-pricing-footer -->
			</li>
		</ul> <!-- .cd-pricing-list -->
		
	</div> <!-- .cd-pricing-container -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    </div>
    </section>
<!-- Client Section End -->



<!-- About Section -->



<section id="about" style="height: 113vh; padding-top: 1%;

background: linear-gradient(to top, #0072bc, #3ad2d1);"


>
  
  
  <div class="container" >
                    <div class="row">
                    

					
  
  		
		 <div class="col-md-12" style="text-align: center;">
			<h2 style="text-align: center;  font-weight: 700; text-transform: uppercase; font-size: 40px;  ">MEET OUR TEAM</h2>
						<p style="text-align: center;  font-size: 23px;  font-family: 'Raleway', sans-serif; padding-bottom: 22px; ">A perfect blend of creativity and technical wizardy!</p>
		 </div>	
		 
		 
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img"   >
                                    <img src="images/theteam/van.png" alt="team member" class="img-responsive" style="width: 60%; margin-left: auto; margin-right: auto; display: block;">
                                </div>
                                <div class="team-hover" style="  border: 0px solid rgba(0, 0, 0, 0.1);width: 60%; margin-left: auto; margin-right: auto; display: block; border-radius: 125px;">
                                    <div class="s-link"  style=" bottom: 50%;">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="font-weight: bold;  ">JOVEN NOVO</h5>
                                <span >Programmer</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img"   >
                                    <img src="images/theteam/van.png" alt="team member" class="img-responsive" style="width: 60%; margin-left: auto; margin-right: auto; display: block;">
                                </div>
                                <div class="team-hover" style="  border: 0px solid rgba(0, 0, 0, 0.1);width: 60%; margin-left: auto; margin-right: auto; display: block; border-radius: 125px;">
                                    <div class="s-link"  style=" bottom: 50%;">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="font-weight: bold; ">JERIC JOSEPH CHIONG</h5>
                                <span >System Analyst</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img"   >
                                    <img src="images/theteam/van.png" alt="team member" class="img-responsive" style="width: 60%; margin-left: auto; margin-right: auto; display: block;">
                                </div>
                                <div class="team-hover" style="  border: 0px solid rgba(0, 0, 0, 0.1);width: 60%; margin-left: auto; margin-right: auto; display: block; border-radius: 125px;">
                                    <div class="s-link"  style=" bottom: 50%;">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="font-weight: bold;  ">CHRISTIAN VAN AZEN</h5>
                                <span >Project Manager</span>
                            </div>
                        </div>

                    </div>

                </div>
  
  
   <div class="container" >
                    <div class="row">
                    

                        <div class="col-md-4 col-sm-4 col-md-offset-2">
                            <div class="team-member">
                                <div class="team-img"   >
                                    <img src="images/theteam/van.png" alt="team member" class="img-responsive" style="width: 60%; margin-left: auto; margin-right: auto; display: block;">
                                </div>
                                <div class="team-hover" style="  border: 0px solid rgba(0, 0, 0, 0.1);width: 60%; margin-left: auto; margin-right: auto; display: block; border-radius: 125px;">
                                    <div class="s-link"  style=" bottom: 50%;">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="font-weight: bold;  ">JOHN MIGUEL ABAÑO</h5>
                                <span >UI/UX Designer</span>
                            </div>
                        </div>
                         <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img"   >
                                    <img src="images/theteam/van.png" alt="team member" class="img-responsive" style="width: 60%; margin-left: auto; margin-right: auto; display: block;">
                                </div>
                                <div class="team-hover" style="  border: 0px solid rgba(0, 0, 0, 0.1);width: 60%; margin-left: auto; margin-right: auto; display: block; border-radius: 125px;">
                                    <div class="s-link"  style=" bottom: 50%;">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="font-weight: bold; ">JOHNSKIE MIÑOZA</h5>
                                <span >Documentation</span>
                            </div>
                        </div>
						
                       

                    </div>

                </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    </section>




<!-- About Section End -->


<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 10.3251540, lng: 123.9537480};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANi-e-bnWFOAd9HtT_6Podg12042Pf2yA&callback=initMap">
    </script>

<!-- Conatct Section -->
    <section id="contact"   style="

 background-color: #34ADFF;
  background-image: -webkit-linear-gradient(270deg, white 50%, #0072bc 50%);
  width: 100%;
  height: 105vh;">
   

<div class="container">
  <div class="row" id="pad">
    <div class="col-md-6 col-md-offset-1" id="cmnt" >
     <label style="color: #0072bc; padding-bottom: 1%; font-size: 20px;">GET IN TOUCH</label>
	 <p style="  font-size: 15px;  font-family: 'Raleway', sans-serif;  text-align: justify; padding-bottom: 22px; color: #0072bc;">We are here to answer any questions you may have about our Flcokers experiences. Raech out to us and  we'll respond as soon as we can.</p>
  
	 <div class="icons">
	 <h5>
	 <i class="fa fa-envelope" aria-hidden="true" style="color: #0072bc; font-size: 17px;"></i>
	  <text style="  font-size: 15px;  font-family: 'Raleway', sans-serif;   padding-bottom: 22px; color: #0072bc; padding-left: 2%;">customsupport@flockersweb.com</text>
	  </h5>
	  <h5>
	 <i class="fa fa-mobile" aria-hidden="true" style="color: #0072bc; font-size: 23px;"></i>
	  <text style="  font-size: 15px;  font-family: 'Raleway', sans-serif;   padding-bottom: 22px; color: #0072bc; padding-left: 3%;">09876543210</text>
	  </h5>
	    <h5>
	<i class="fa fa-map-marker" aria-hidden="true" style="color: #0072bc; font-size: 20px;"></i>
	  <text style="  font-size: 15px;  font-family: 'Raleway', sans-serif;   padding-bottom: 22px; color: #0072bc; padding-left: 3%;">University of Cebu - LM</text>
	  </h5>
	 </div>



  </div>
	
	
	
	
	
	
    <div class="col-md-6 col-md-offset-2" id="box">
     <form class="col-md-12" style="padding-top: 8%;">
	 
	 <label style="color: #0072bc; padding-bottom: 3%; font-size: 16px;">SAY SOMETHING</label>
  <div class="form-group"  style="padding-bottom: 1%;">
  
 
    <input type="text" class="form-control" id="msg1" placeholder="Your name...">
  </div>
  <div class="form-group" style="padding-bottom: 1%;">
  
    <input type="text" class="form-control" id="msg1" placeholder="Your Email...">
  </div>
  
   <div class="form-group" style="padding-bottom: 1%;">
    
    <textarea class="form-control" id="msg1" rows="5" placeholder="Your Message"></textarea>
  </div>
  
  <button type="button" class="btn btn-primary" id="send">SEND</button>
</form>
    </div>
  </div>
 </div>

   
<div class="container">
  <div class="row" style="padding-top: 1%;">
  
   <div class="col-md-4" id="bb">
   <img src="images/icon/logo.png" style="max-height: 45px; padding-bottom: 3%;
max-width: 190px;
opacity: 1;"></img>
	 <p style="  font-size: 15px;  font-family: 'Raleway', sans-serif;  text-align: justify; padding-bottom: 22px; color: white;">Flockers is a software as aservice that allows users and organizers to create and join events. Flockers can be used by people who want to spent their time doing the things they love.</p>
   
   
   </div>
     <div class="col-md-4" id="bb1" >
	   <label style="color: white; padding-bottom: .8%; font-size: 20px;">ABOUT US</label>
	 <p style="  font-size: 15px;  font-family: 'Raleway', sans-serif;  text-align: justify; padding-bottom: 22px; color: white;">Flockers created to let people engage in their own interest in a new level. Flockers has features that allow users and organizers both share their experiences. </p>
	 
	 </div>
	 
	
	 <div class="row">
	   <div class="col-md-4" id="bb">
	   <div class="col-md-4" style="padding-top: 15%;">
	    <img src="images/icon/social/fb.png" style=" padding-bottom: 3%; width: 35%; opacity: 1;" />
	   </div>
	   
	   <div class="col-md-4" style="padding-top: 15%;">
	    <img src="images/icon/social/blog.png" style=" padding-bottom: 3%; width: 35%; opacity: 1;" />
	   </div>
	   
	   <div class="col-md-4" style="padding-top: 15%;">
	    <img src="images/icon/social/gp.png" style=" padding-bottom: 3%; width: 35%; opacity: 1;" />
	   </div>
	   
	   </div>
	
	   
	   
	   
	   </div>

  
  </div>
  </div>

  <div class="container">
  <div class="row" >
  
  <div class="col-md-2" id="foot"> <a href="#hero-area"><label style="color: white;  font-size: 15px;">HOME</label></a></div>
   <div class="col-md-2" id="foot"> <label style="color: white;  font-size: 15px;">EVENTS</label></div>
    <div class="col-md-2" id="foot"> <label style="color: white;  font-size: 15px;">CATEGORIES</label></div>
	 <div class="col-md-2" id="foot"> <label style="color: white;  font-size: 15px;">PRICING</label></div>
	  <div class="col-md-2" id="foot"> <label style="color: white;  font-size: 15px;">ABOUT</label></div>
	   <div class="col-md-2" id="foot"> <label style="color: white;  font-size: 15px;">CONTACT</label></div>

  
  </div>
  </div>
  
  
  
    </section>

<!-- Conatct Section End-->


   


        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js">
		
					$(document).ready(function() {
					$('#Carousel').carousel({
					interval: 13000
					});
					})
		
		</script>
		

 
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/main.js"></script>
		<!--<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/bootstrap.js"></script>-->


    </body>
    </html>