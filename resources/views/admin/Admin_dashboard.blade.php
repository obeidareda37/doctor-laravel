@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="content-row">
        <h1 style="margin-top: 10px" class="content-row-title">
            Welcome To Clinic Dashboard
          </h1>
        <div class="row" style="margin-top: 50px">
          <div class="col-md-2">
            <div class="color-swatches">
              <div class="swatches">
                <div class="clearfix">
                    <?php $sliders = DB::table('sliders')->count();?>
                  <div style="background-color:#5D9CEC" class="pull-left light"><h4 style="margin-left: 10px">{{$sliders }}</div>
                  <div style="background-color:#4A89DC" class="pull-right dark"></div>
                </div>
                <div class="infos">
                  <h4>Sliders</h4>
                  <a href="{{route('admin.sliders.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="color-swatches">
              <div class="swatches">
                <div class="clearfix">
                    <?php $doctors = DB::table('doctors')->count();?>
                    <div style="background-color:#4FC1E9" class="pull-left light"><h4 style="margin-left: 10px">{{$doctors }}</h4></div>
                  <div style="background-color:#3BAFDA" class="pull-right dark"></div>
                </div>
                <div class="infos">
                  <h4>Doctors</h4>
                  <a href="{{route('admin.doctors.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="color-swatches">
              <div class="swatches">
                <div class="clearfix">
                    <?php $clients = DB::table('clients')->count();?>
                  <div style="background-color:#48CFAD" class="pull-left light"><h4 style="margin-left: 10px">{{$clients }}</h4></div>
                  <div style="background-color:#37BC9B" class="pull-right dark"></div>
                </div>
                <div class="infos">
                  <h4>Clients</h4>
                  <a href="{{route('admin.clients.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="color-swatches">
              <div class="swatches">
                <div class="clearfix">
                    <?php $services = DB::table('services')->count();?>
                  <div style="background-color:#A0D468" class="pull-left light"><h4 style="margin-left: 10px">{{$services }}</h4></div>
                  <div style="background-color:#8CC152" class="pull-right dark"></div>
                </div>
                <div class="infos">
                  <h4>Services</h4>
                  <a href="{{route('admin.services.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="color-swatches">
              <div class="swatches">
                <div class="clearfix">
                    <?php $gallerys = DB::table('gallerys')->count();?>
                  <div style="background-color:#FFCE54" class="pull-left light"><h4 style="margin-left: 10px">{{$gallerys }}</h4></div>
                  <div style="background-color:#F6BB42" class="pull-right dark"></div>
                </div>
                <div class="infos">
                  <h4>Gallery</h4>
                  <a href="{{route('admin.gallerys.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="color-swatches">
                  <div class="swatches">
                    <div class="clearfix">
                        <?php $messages = DB::table('contact_messages')->count();?>
                      <div style="background-color:#FC6E51" class="pull-left light"><h4 style="margin-left: 10px">{{$messages }}</h4></div>
                      <div style="background-color:#E9573F" class="pull-right dark"></div>
                    </div>
                    <div class="infos">
                      <h4>Messages</h4>
                      <a href="{{route('admin.messages.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-2">
              <div class="color-swatches">
                <div class="swatches">
                  <div class="clearfix">
                    <?php $appointments = DB::table('appointments')->count();?>
                    <div style="background-color:#ED5565" class="pull-left light"><h4 style="margin-left: 10px">{{$appointments }}</h4></div>
                    <div style="background-color:#DA4453" class="pull-right dark"></div>
                  </div>
                  <div class="infos">
                    <h4>Appointments</h4>
                    <a href="{{route('admin.appointments.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                  </div>
                </div>
              </div>
            </div>

    </div>
              @endsection
