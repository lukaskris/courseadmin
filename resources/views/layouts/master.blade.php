<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  	<link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>

    <!-- DataTables core CSS -->
    <link href="{{ asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Select2 CSS -->
    <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
  </head>
  <body>

    <div class="wrapper">
      <div class="sidebar" data-color="purple" data-image="{{asset('img/sidebar-6.jpg')}}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->
        <div class="sidebar-wrapper">
              <div class="logo">
                  <a href="/home" class="simple-text">
                      Administrator
                  </a>
              </div>

              <ul class="nav">
                  <li class="{{Session::get('active_nav') == 'dashboard' ? ' active' : ''}}">
                      <a href="/home">
                          <i class="pe-7s-graph"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li class="{{Session::get('active_nav') == 'category' ? ' active' : ''}}">
                      <a href="/category">
                          <i class="pe-7s-note2"></i>
                          <p>Category</p>
                      </a>
                  </li>
                  <li class="{{Session::get('active_nav') == 'lesson' ? ' active' : ''}}">
                      <a href="/lesson">
                          <i class="pe-7s-film"></i>
                          <p>Lesson</p>
                      </a>
                  </li>
              </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">

                  @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.stts.edu">STTS</a>, Sekolah Tinggi Teknik Surabaya
                </p>
            </div>
        </footer>

      </div>
    </div>
  </body>

<!-- JAVASCRIPT -->

    <!--   Core JS Files   -->
  <script src="{{asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="{{asset('js/chartist.min.js')}}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{asset('js/bootstrap-notify.js')}}"></script>

  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

  <!-- DataTables javascript -->
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>


  <script src="{{asset('js/select2.min.js')}}"></script>




  <script type="text/javascript">
      $(document).ready(function(){
            @yield('notification')
            $('#table').DataTable( {
                "pagingType": "simple"
            } );
      });
  </script>
</html>
