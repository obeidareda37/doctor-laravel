@extends('layouts.front')

@section('content')

		<!--Start Slider-->
			<div class="row">
				<div class="col-xs-12" style="padding-right:0px;padding-left:0px;">
					<div id="jssor_1" style="position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
												<!-- Loading Screen -->
												<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
													<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
												</div>
												<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">

													@foreach($sliders as $slider)
													<div>
														<img data-u="image" src="{{ $slider->image_url }}" />
														<img data-u="thumb" src="{{ $slider->image_url }}" />
													</div>
													@endforeach
												</div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
												<!-- Thumbnail Navigator -->
												<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#fff;" data-autocenter="1" data-scale-bottom="0.75">
													<div data-u="slides">
														<div data-u="prototype" class="p" style="width:190px;height:90px;">
															<div data-u="thumbnailtemplate" class="t"></div>
															<svg viewbox="0 0 16000 16000" class="cv">
																<circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
																<line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
																<line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
															</svg>
														</div>
													</div>
												</div>
												<!-- Arrow Navigator -->
												<div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
													<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
														<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
														<polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
														<line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
													</svg>
												</div>
												<div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
													<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
														<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
														<polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
														<line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
													</svg>
												</div>
					</div>
					<script type="text/javascript">jssor_1_slider_init();
					</script>
				</div>
			</div>
		<!--End Slider-->

		<!--Start Content-->
			<div class="container con-content">
				<div class="row row-heading-content">
					<div class="col-xs-12" id="section3">
						<h3 class="heading-of-content">our doctors staff</h3>
						<div class="c-line-center-projects c-theme-bg aos-init"></div>
					</div>
				</div>
				<?php $counter= 0?>
				@foreach($doctors as $doctor)
				@php
					$counter +=1;
   				@endphp
				@if($counter % 2 == 0)
				<div class="row row-content">
					<div class="col-sm-6 col-xs-12">
						<img src="{{ $doctor->image_url }}" class="img-doctor-home" alt="Doctor"/>
					</div>
					<div class="col-sm-6 col-xs-12">
						<h3 class="name-doctor">{{ $doctor->name }}</h3>
						<h5 class="description-doctor">
                            {!! $doctor->description !!}
                            </h5>
					</div>
				</div>

				@else

				<div class="row row-content">
					<div class="col-sm-6 col-xs-12">
						<h3 class="name-doctor">{{ $doctor->name }}</h3>
						<h5 class="description-doctor">{!! $doctor->description !!}</h5>
					</div>
					<div class="col-sm-6 col-xs-12">
						<img src="{{ $doctor->image_url }}" class="img-doctor-home" alt="Doctor"/>
					</div>
				</div>
				@endif
				@endforeach

				<div class="row row-heading-content">
					<div class="col-xs-12" id="section2">
						<h3 class="heading-of-content " >our services</h3>
						<div class="c-line-center-projects c-theme-bg aos-init"></div>
					</div>
				</div>
				<div class="contaienr">
					<div class="row">

					@foreach($services as $service)
						<div  class="col-sm-6 col-xs-12 col-service">
						<a href="{{route('app.services', $service->id)}}">
							<div class="col-sm-6 col-xs-12">
								<img src="{{ $service->image_url }}" class="img-services" alt="Service"/>
							</div>
							<div class="col-sm-6 col-xs-12">
								<h3 class="name-of-services">{{ $service->name }}</h3>
								<h6 class="desc-of-services">
                                {!! $service->description !!}
                              </h6>
							</div>
							</a>
						</div>
					@endforeach


					</div>
				</div>
			</div>
		<!--End Content-->

		<!--sectionTestimonials-->
			<div class="row">
				<div class="col-xs-12">
					<section class="sectionTestimonials" style="background-image: url(assets/images/cover.png);">
						<div class="rgba-clients">
							<div class="container">
								<div class="secHead">
									<div class="row row-heading-content">
										<div class="col-xs-12">
											<h3 class="heading-of-client">Client Stories</h3>
											<div class="c-line-center-projects c-theme-bg aos-init"></div>
										</div>
									</div>
								</div>
								<div class="owl-carousel" id="testimonials-slider">


								@foreach($clients as $client)
										<div class="item">
											<div class="client-item">
												<div class="client-link">
													<img src="{{ $client->image_url }}" alt="" class="img-responsive">
												</div>
												<div class="secTitle">


													<p>{!!$client->comment!!}
                                                    </p>
														<h4>{{ $client->name }}</h4>
													<span><i class="ti-location-pin"></i> {{ $client->country ?? ''. " - " .$client->city ?? ''}}</span>
												</div>
											</div>
										</div>
										@endforeach
									</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		<!--sectionTestimonials-->

		<!--Start Contact US-->
			<div class="container">
				<div class="row row-heading-content">
					<div class="col-xs-12">
						<h3 class="heading-of-content">contact us</h3>
						<div class="c-line-center-projects c-theme-bg aos-init"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-12 col-contact">
						<form action="{{route('admin.messages.store')}}" method="post" class="form-contact">
							@csrf

                            <div class="input-group inputs-in-contact">
									@if(session()->has('success'))
                            <div class="alert alert-success">
                            {{session('success')}}
                            </div>
                            @endif
							</div>
							<div class="input-group inputs-in-contact">
								<div class="form-group label-floating">
									<input name="name" id = "name"type="text" class="form-control input-register" placeholder="Name"style="border-radius:5px;" >
									@error('name')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="input-group inputs-in-contact">
								<div class="form-group label-floating">
									<input name="phone"id = "phone" type="text" class="form-control input-register" placeholder="Phone"style="border-radius:5px;">
									@error('phone')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="input-group inputs-in-contact">
								<div class="form-group label-floating">
									<input name="email"id = "email" type="email" class="form-control input-register" placeholder="Email" style="border-radius:5px;">
									@error('email')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<div class="input-group inputs-in-contact">
								<div class="form-group label-floating">
									<textarea name="message" id = "message"type="text" rows="6" class="form-control input-register" style="border-radius:5px;" placeholder="Message"></textarea>
									@error('message')
									<p class = "text-danger">{{ $message}}</p>
									@enderror
								</div>
							</div>
							<button class="btn btn-contact"type="submit">Send</button>
						</form>
					</div>
					<div class="col-sm-6 col-xs-12">

						<label class="lable-contact">full Address</label>
						<h5>{{($contact_us->country ?? ''). " - " . ($contact_us->city ?? '')}}</h5>
						<label class="lable-contact">postal code</label>
						<h5>{{$contact_us->postal_code ?? ''}}</h5>
						<label class="lable-contact">phone</label>
						<h5>{{$contact_us->phone ?? ''}}</h5>
						<label class="lable-contact">email</label>
						<h5>{{$contact_us->email ?? ''}}</h5>
						<label class="lable-contact">social accounts</label>


						 <ul>
						 <a href="http://facebook.com/{{$contact_us->facebook_account ?? ''}}"><li><span class="ti-facebook icon face-icon"></span></li></a>
						 <a href="http://twitter.com/{{$contact_us->twitter_account ?? ''}}"> <li><span class="ti-twitter icon face-icon"></span></li></a>
						<a href="http://instagram.com/{{$contact_us->instagram_account ?? ''}}"><li><span class="ti-instagram icon face-icon"></span></li></a>
						</ul>
					</div>
				</div>
			</div>
		<!--End Contact US-->


        @endsection


