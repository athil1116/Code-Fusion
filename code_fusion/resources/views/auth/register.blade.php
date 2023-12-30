


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

/* Style the form container */
.slider-container {
    background-color: #f0f0f000;
    padding: 20px;
    border-radius: 10px;
}

/* Style the labels */
label {
    font-weight: bold;
}

/* Style the input fields */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style the Remember Me checkbox */
#remember_me {
    margin-right: 5px;
}

/* Style the "Forgot your password?" link */
a[href="{{ route('password.request') }}"] {
    color: #007bff;
    text-decoration: none;
}

/* Style the login button */
.x-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Hover and focus styles for the login button */
.x-button:hover,
.x-button:focus {
    background-color: #0056b3;
    outline: none;
}

/* Additional styles can be added as needed. */


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
					<span class="fa fa-envelope-open"></span> <a href="#">codefusion@codefusion.com</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><img src="images/s2.png" alt=""> Code Fusion</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="#about">About</a></li>
				
				<li class=""><a href="{{ url('register') }}">Signup</a></li>
				
	       

	          <!-- <li class="nav-item cta mr-md-2"><a href="appointment.html" class="nav-link">Appointment</a></li> -->
	          @if (Route::has('login'))
                               
                                    @auth
                                        <li class="">
                                        <a href="#" class="btn btn-warning" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                            @csrf
                                        </form>                                       
                                        </li> 
]
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
										<p class="w3ls_pvt-title my-3">he function of education is to teach one to think intensively and to think critically. Intelligence plus character—that is the goal of true education.</p>
										<!-- <a href="#about" class="btn btn-banner my-3">Read More</a> -->
									</div>
								</div>
							</li>
							
							
						</ul>
						
					</div>
					<!-- //banner slider-->
				</div>

<div class="col-lg-5 col-md-8 px-lg-3 px-0">
    <div class="banner-form-w3 ml-lg-5">
        <div class="padding">
            <!-- Slider container -->
            <div class="slider-container">
            <div class="slider">
<x-guest-layout>
   
        <x-slot name="logo">
            
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
  
</x-guest-layout>



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

<br>
<br>
<br>

<!-- copyright -->
<section class="copyright">
	<div class="container py-4">
		<div class="row bottom">
			
			<div class="col-lg-6 copy-right p-0">
				<p class="">© 2019 Child Learn. All rights reserved
					
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
