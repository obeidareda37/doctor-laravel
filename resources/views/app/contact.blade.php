@extends('layouts.front')

@section('content')
		<!--Start Cover Image-->
			<div class="row">
				<div class="col-xs-12" style="padding-left:0px;padding-right:0px;">
					<div class="cover-img" style="background-image: url({{$contact_us->background_url}});" data-aos="zoom-in">
						<div class="rgba-serices">
							<h4 class="heading-services">Contact Us</h4>
						</div>
					</div>
				</div>
			</div>
		<!--End Cover Image-->



		<!--Start Content-->
			<div class="container">
				<div class="row row-contactus">
					<div class="col-sm-8 col-xs-12">
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-mobile icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>mobile number</h4>
								<h5>{{$contact_us->phone}}</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-email icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>email address</h4>
								<h5>{{$contact_us->email}}</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-location-pin icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>location</h4>
								<h5>{{$contact_us->country . " - ". $contact_us->city }}</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-time icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>scedule</h4>
								<h5>{{$contact_us->first_time . " to ". $contact_us->last_time }}</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<form action="{{route('admin.messages.store')}}" method="post" class="form-contact-page">
						@csrf
                                <div class="input-group inputs-in-contactus-page">
                                    @if(session()->has('success'))
                            <div class="alert alert-success">
                            {{session('success')}}
                            </div>
                            @endif
                            </div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<input name="name" id="name" type="text" class="form-control input-register" placeholder="Name" style="border-radius:5px;">
									@error('name')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<input name="phone" id="phone"type="text" class="form-control input-register" placeholder="Phone" style="border-radius:5px;">
									@error('phone')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<input name="email" id="email"type="email" class="form-control input-register" placeholder="Email" style="border-radius:5px;">
									@error('email')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<textarea name="message" id="message" type="text" rows="3" class="form-control input-register" style="border-radius:5px;" placeholder="Message"></textarea>
									@error('message')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<button class="btn btn-contactpage">Send message</button>
						</form>
					</div>
				</div>
			</div>
		<!--End Content-->
        @endsection
