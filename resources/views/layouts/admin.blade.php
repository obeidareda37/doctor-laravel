
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} | @yield('title', 'Admin')</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('dist/css/site.min.css')}}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('dist/js/site.min.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        var input = $('input[name="img"]');
        readURL(input);
    });

</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
		input[type="checkbox"] {
		transform:scale(1.5, 1.5);
    }
    ul li {
  display: inline;
}


	</style>

  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header ">
          <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="{{ $contact_us->logo_url ?? asset('images/logo.png')}}" height="80" alt="">
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse  m-3">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"style = "margin: 15px;" ><a href="{{route('app.home')}}">Clinic</a></li>
                <li class="active" style = "margin: 15px;"><a href="{{route('admin.contact.edit', 1)}}">Setting</a></li>

              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" style = "margin: 15px;"href="#">{{ Auth::user()->name }}<b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li class="dropdown-header">Manage Account</li>
                  <li><a href="{{ route('profile.show') }}" class="active">Personal Info</a></li>

                  <li class="divider"></li>
                  <li class="disabled" ><a href="#"onclick="document.getElementById('logout').submit()">Signout</a>
                  <form action="{{ route('logout') }}" method="post" class="d-none" id="logout">
                        @csrf
                    </form>
                  </li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                <li class="list-group-item"><a href="{{route('admin.Admin_dashboard')}}"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>

                <li>
                  <a href="#demo3" class="list-group-item " data-toggle="collapse"><i class="fa fa-sliders"></i> Slidres<span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo3">
                    <a href="{{route('admin.sliders.index')}}" class="list-group-item">All Sliders</a>
                    <a href="{{route('admin.sliders.create')}}" class="list-group-item "><i class="fa fa-plus"></i> Add Slider</a>
                  </div>

                </li>
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="fa fa-users"></i>Doctors<span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo4">
                    <a href="{{route('admin.doctors.index')}}" class="list-group-item">All Doctors</a>
                    <a href="{{route('admin.doctors.create')}}" class="list-group-item "><i class="fa fa-plus"></i> Add Doctor</a>
                  </div>

                </li>

                <li>
                  <a href="#demo6" class="list-group-item " data-toggle="collapse"><i class="fa fa-user"></i>Clients<span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo6">
                    <a href="{{route('admin.clients.index')}}" class="list-group-item">All Clients</a>
                    <a href="{{route('admin.clients.create')}}" class="list-group-item "><i class="fa fa-plus"></i> Add Client</a>
                  </div>

                </li>
                <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="fa fa-cogs"></i>Services<span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo5">
                    <a href="{{route('admin.services.index')}}" class="list-group-item">All Services</a>
                    <a href="{{route('admin.services.create')}}" class="list-group-item "><i class="fa fa-plus"></i> Add Service</a>
                  </div>

                </li>

                <li>
                  <a href="#demo7" class="list-group-item "  data-toggle="collapse"><i class="fa fa-image"></i>Gallery<span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo7">
                    <a href="{{route('admin.gallerys.index')}}" class="list-group-item">All Gallery</a>
                    <a href="{{route('admin.gallerys.create')}}" class="list-group-item"><i class="fa fa-plus"></i> Add Gallery</a>
                  </div>

                </li>

                <li class="list-group-item"><a href="{{route('admin.messages.index')}}"><i class="glyphicon glyphicon-inbox"></i>Messages</a></li>
                <li class="list-group-item"><a href="{{route('admin.appointments.index')}}"><i class="fa fa-comments"></i></i>Appointments</a></li>
                <li class="list-group-item"><a href="{{ route('profile.show') }}"><i class="glyphicon glyphicon-file"></i>Profile </a></li>
                <li class="list-group-item"><a href="{{route('admin.contact.edit', 1)}}"><i class="fa fa-cog"></i>Setting</a></li>
                <li class="list-group-item"><a href="#" onclick="document.getElementById('logout').submit()"><i class="glyphicon glyphicon-lock"></i>Log Out</a></li>
                <form action="{{ route('logout') }}" method="post" class="d-none" id="logout">
                        @csrf
                    </form>

              </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Title</h3>
              </div>
              @yield('content')
            </div>
        </div><!-- content -->
      </div>
    </div>


  </body>

@include('admin._CBScript')


</html>
