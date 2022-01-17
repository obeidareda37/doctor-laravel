@extends('layouts.front')

@section('content')

		<!--Start Cover Image-->
		<div class="row">
				<div class="col-xs-12" style="padding-left:0px;padding-right:0px;">
					<div class="cover-img" style="background-image: url(  {{$contact_us->background_url}} );" data-aos="zoom-in">
						<div class="rgba-serices">
							<h4 class="heading-services">{{$services->name}}</h4>
						</div>
					</div>
				</div>
			</div>
		<!--End Cover Image-->


		<!--Start Content-->

			<div class="container">
				<div class="row row-services">
					<div class="col-xs-12">
						<h4>{{$services->name}}</h4>
						<h5>{!!$services->description!!}</h5>
					</div>
				</div>
			</div>
		<!--End Content-->

		@endsection

