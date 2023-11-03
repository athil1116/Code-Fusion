
<!DOCTYPE html>
<html lang="en">
<head>
<title>Child Learn Education Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Child Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="{{asset('home/css/bootstrap.css')}}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{asset('home/css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="{{asset('home/css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	<style>
        /* CSS for the slider */
.slider-container {
    position: relative;
    overflow: hidden;
}

.slider {
    display: flex;
    transition: transform 0.4s ease-in-out;
}

.slide {
    flex: 0 0 100%;
    padding: 20px;
}

/* Hide the second form initially */
.sign-up {
    transform: translateX(100%);
}

/* Add your styling here */

/* CSS for the toggle link */
.toggle-slide {
    cursor: pointer;
    color: #007BFF;
    text-decoration: underline;
}

/* Add your styling here */

    </style>
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-clock-o"></span> Mon-Sat : 9:00 to 17:00</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">info@example.com</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><img src="images/s2.png" alt=""> Child Learn </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="#about">About</a></li>
				<li class=""><a href="#services">Services</a></li>
				<li class=""><a href="#stats">Stats</a></li>
				<li class=""><a href="#testi">Testimonials</a></li>
				<li class=""><a href="#team">Teachers</a></li>
				
	       

	          <!-- <li class="nav-item cta mr-md-2"><a href="appointment.html" class="nav-link">Appointment</a></li> -->
	          @if (Route::has('login'))
                               
                                    @auth
                                        <li class="">
                                        <a href="#" class="btn btn-warning" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                            @csrf
                                        </form>                                       
                                        </li> 

                                    @else
                                        
                                        <li class=""><a href="{{ route('login') }}" class="nav-link" data-toggle="modal"><i class="icon-user"></i>Login</a></li>

                                        @if (Route::has('register'))
                                   
                                        <li class=""><a href="{{ route('register') }}" class="nav-link"class="ml-4 text-sm text-gray-700 underline">Signup</a></li>
                                        @endif
                                    @endauth
                                
                            @endif
  
                            <!-- <li class="nav-item"><a href="{{url('/redirect')}}" class="btn btn-danger"><span>End Meeting</span></a></li> -->
	        


			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3pvt">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Education Courses.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Study For Better Future</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Education Courses.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Study For Better Future</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Education Courses.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Study For Better Future</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->
				</div>

<div class="col-lg-5 col-md-8 px-lg-3 px-0">
    <div class="banner-form-w3 ml-lg-5">
        <div class="padding">
            <!-- Slider container -->
            <div class="slider-container">
                <div class="slider">
                    <!-- Sign In form -->
                    <form action="#" method="post" class="slide sign-in">
                        <h5 class="mb-3">Sign In</h5>
                        <div class="form-style-w3ls">
                            <input placeholder="Your Email Id" name="email" type="email" required>
                            <input placeholder="Password" name="password" type="password" required>
                            <button class="btn">Sign In</button>
                            <span>Don't have an account? <a href="#" class="toggle-slide">Sign Up</a></span>
                        </div>
                    </form>
                    
                </div>
            </div>
            <!-- //Slider container -->
        </div>
    </div>
</div>


<!-- ------------------------------------------------------------- -->


			</div>
		</div>
	</div>
</div>
<!-- //banner -->



<!-- copyright -->
<section class="copyright">
	<div class="container py-4">
		<div class="row bottom">
			<ul class="col-lg-6 links p-0">
				<li><a href="#why" class="">Why Choose Us</a></li>
				<li><a href="#services" class="">Services </a></li>
				<li><a href="#team" class="">Teachers </a></li>
				<li><a href="#testi" class="">Testimonials </a></li>
			</ul>
			<div class="col-lg-6 copy-right p-0">
				<p class="">© 2019 Child Learn. All rights reserved | Design by
					<a href="http://w3layouts.com"> W3layouts.</a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- //copyright -->

<!-- move top -->
<!-- <div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div> -->
<!-- move top -->

</body>


<script>
    $(document).ready(function () {
        $(".toggle-slide").on("click", function (e) {
            e.preventDefault();
            $(".slide").toggleClass("sign-in sign-up");
        });
    });
</script>

</html>