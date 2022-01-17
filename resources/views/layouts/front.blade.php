<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- Title -->
	<title>Clinic</title>
	<!-- Stylesheets -->

	<link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}">
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Krub|Oswald" rel="stylesheet">
	<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/media.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/js/script.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-1.12.2.min.js') }}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $( function() {
		$( "#tabs" ).tabs();
	  } );
	  </script>
	<script src="js/jquery-1.12.2.min.js"></script>

	<script type="text/javascript">
		$(document).on('click','.nav-link',function(){
			$(this).addClass('scale').siblings().removeClass('scale')
		})
	</script>
	<script src="{{ asset('assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1920;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

        $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
    </script>
</head>
<body>
	<div class="fluied_container">
		<!--menu-->
			<div class="mobile-menu">
					<div class="menu-mobile">
						<div class="mmenu">
							<ul>
								<li href="{{route('app.home')}}">
									<img class="logo"src="{{ $contact_us->logo_url ?? asset('images/logo.png')}}" alt=""/>
								</li>
								<li href="#section2">
									<a class="dropdown">Services</a>
								</li>
								<li href="#">
									<a class="dropdown">Departments</a>
								</li>
								<li href="#section3">
									<a class="dropdown">Our Doctors</a>
								</li>
								<li href="{{route('app.contact')}}">
									<a class="dropdown">Contact Us</a>
								</li>
								<li data-toggle="modal" data-target="#formDonate">
									<a class="dropdown" >Make Appointment</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="m-overlay"></div>
			</div>
		<!--End menu-->

		<!--Start First Section-->

			<div class="first-section">
				<div class="container">
                    <div class="col-sm-1 ">
                        <h5><a href="{{ route('register') }}"> register</a></h5>
                    </div>
					<div class="row">
						<div class="col-sm-3 col-xs-6">
							<span class="ti-location-pin icon icon-location"></span>
							 <h5>City : {{ $contact_us->city ?? ''}}</h5>
						</div>
						<div class="col-sm-6 col-xs-6">
							<h5>Phone : {{ $contact_us->phone ?? ''}}</h5>
						</div>

					</div>

				</div>
			</div>
		<!--End First Section-->


		<!--Start main menu-->
			<div class="container header" id="myHeader" style="z-index:2000">
				<div class="row" >
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-7 col-logo">
						<a href="index.html">
							<img class="logo"src="{{ $contact_us->logo_url ?? asset('images/logo.png')}}" alt=""/>
						</a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-5" style="padding-left:0px;">
						<ul class="main_menu clearfix">
							<a href="{{route('app.home')}}">
								<li class="listitemsecandarynav1 dropdown active">Home</li>
							</a>
							<a href="#section2">
								<li class="listitemsecandarynav dropdown drop-home">Services</li>
							</a>
							<a href="#section3">
								<li class="listitemsecandarynav dropdown drop-home">Our Doctors</li>
							</a>
							<a href="{{route('app.contact')}}">
								<li class="listitemsecandarynav dropdown drop-home">Contact Us</li>
							</a>
							<a  data-toggle="modal" data-target="#formDonate">
								<li class="listitemsecandarynav dropdown drop-home btn_login" style="color:#eee; position: relative;top: 5px;left:40px;">Make Appointment</li>
							</a>
						</ul>
						<button type="button" class="hamburger is-closed">
							<span class="hamb-top"></span>
							<span class="hamb-middle"></span>
							<span class="hamb-bottom"></span>
						</button>
					</div>

				</div>
			</div>
		<!--End main menu-->

        @yield('content')


		<!--Start Footer-->
			<div class="row footer">
				<div class="col-sm-2 col-xs-12">
					<h4 class="title-footer">links</h4>
					<ul>
						<a href="{{route('app.home')}}"><li class="li-footer">Home</li></a>
                        <a href="#section2"><li class="li-footer">Our Service</li></a>
                        <a href="#section3"><li class="li-footer">Our Doctor</li></a>
					</ul>
				</div>
				<div class="col-sm-7 col-xs-12">
					<h4 class="title-footer">Gallary</h4>
					@foreach($gallerys as $gallery)
					<div class="col-sm-3 col-xs-6">
						<img src="{{ $gallery->image_url}}" class="img-footer" alt="img-footer"/>
					</div>
					@endforeach
					</ul>
				</div>
				<div class="col-sm-3 col-xs-12">
					<img src="{{  $contact_us->logo_url ?? asset('images/logo.png')}}" class="img-footer-final" alt=""/>
					<h4 class="copy-footer">Copy Right 2020 Zahnartliche</h4>
				</div>
			</div>
		<!--End Footer-->
	</div>
	<!--End Fulid Container-->


	<!-- Modal -->
    <div class="modal fade" id="formDonate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog class1" role="document">
			<div class="modal-content class2">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title error-product" id="myModalLabel" class="name-of-register">Male Appointment</h4>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						@foreach($doctorsAppoint as $doctor)

						<div class="row row-doctors">
							<div class="col-xs-4">
								<img src="{{ $doctor->image_url }}" class="img-popup" alt=""/>
							</div>
							<div class="col-xs-8">
								<h4 class="name-pop-up">{{$doctor->name}}</h4>
								<h4 class="name-pop-up">Nearest Time:</h4>
								<h4 class="name-pop-up">{{$doctor->created_at}}</h4>
							</div>
						</div>
						@endforeach
					</div>
					<div class="col-sm-6 col-xs-12">
						<form action="{{route('admin.appointments.store')}}" method="post" class="form-contact">
						@csrf
							<div class="input-group input-in-register">
                                <div class="form-group label-floating">
									@if(session()->has('appointment'))
                                    <div class="alert alert-success">
                                    {{session('appointment')}}
                                    </div>
                                    @endif
                                    </div>
								<div class="form-group label-floating">
									<input name="name" id="name"type="text" class="form-control input-register-home input-background" placeholder="Full Name">
									@error('name')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="col-sm-6 col-xs-12 col-register-home">
								<div class="input-group input-in-register">
									<div class="form-group label-floating">
										<input name="age"id="age" type="text" class="form-control input-register-home input-background" placeholder="Age">
										@error('age')
										<p class = "text-danger">{{ $message}}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12 col-register-home">
								<div class="input-group input-in-register">
									<div class="form-group label-floating">
										<select name="gender" class="form-control m-1">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12 col-register-home">
								<div class="input-group input-in-register">
									<div class="form-group label-floating">
										<input name="phone" id="phone"type="text" class="form-control input-register-home input-background" placeholder="Mobile">
										@error('phone')
										<p class = "text-danger">{{ $message}}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12 col-register-home">
								<div class="input-group input-in-register">
									<div class="form-group label-floating">
										<input name="email" id="email"type="text" class="form-control input-register-home input-background" placeholder="Email">
										@error('email')
										<p class = "text-danger">{{ $message}}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="input-group input-in-register">
								<div class="form-group label-floating">
									<textarea name="reason" id="reason" type="text" rows="6" class="form-control input-register-home" placeholder="Visit reason"></textarea>
									@error('reason')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<button class="btn btn-register-home">Send Appointment</button>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!--End Model Pop Up-->

	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
		<script src="{{ asset('assets/js/aos.js') }}"></script>
		<script>
		  AOS.init({
			duration: 1000,
		  });
		</script>
	<script>
	window.onscroll = function() {myFunction()};

	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function myFunction() {
	  if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	  } else {
		header.classList.remove("sticky");
	  }
	}
	</script>
</body>
</html>



