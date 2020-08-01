<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>E-Trading  | User Space </title>

    <!-- Bootstrap -->
    <link href="/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/user/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/user/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- bootstrap-progressbar -->
    <link href="/user/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/user/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/user/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/user/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
  @include('sweet::alert')
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-home"></i> <span>E-trading 212</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/invest/home/{{\Session('user_id')}}"><i class="fa fa-home"></i> Home </a>
                    
                  </li>

                  
                  <li><a href="/invest/calculator/"><i class="fa fa-edit"></i> calculatrice </a>
                   
                  </li>
                  <li><a href="/invest/account/{{\Session('user_id')}}"><i class="fa fa-desktop"></i> Profil</a>
                    
                  </li>
                  <li><a href="/invest/history/{{\Session('user_id')}}"><i class="fa fa-table"></i> historique</a>
                    
                  </li>
                  <li><a href="/invest/investment/{{\Session('user_id')}}"><i class="fa fa-bar-chart-o"></i> investissement </a>
                    
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
               
                <ul class="nav side-menu">
               
                  
                  <li><a href="/invest/parrainage/{{\Session('user_id')}}"><i class="fa fa-sitemap"></i> Parainage </a>
                   
                  </li>                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="/invest/deconnection">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                
              </ul>
            </nav>
          </div>
        </div>
        @yield('container')

        <footer>
          <div class="pull-right">
            E-trading212  
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/user/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/user/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/user/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/user/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/user/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/user/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/user/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/user/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/user/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/user/vendors/Flot/jquery.flot.js"></script>
    <script src="/user/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/user/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/user/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/user/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/user/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/user/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/user/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/user/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/user/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/user/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/user/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/user/vendors/moment/min/moment.min.js"></script>
    <script src="/user/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/js/bourse.js"></script>
    <script src="/user/build/js/custom.min.js"></script>
    <script  src="/js/rsi.js"></script>



   
	
  </body>
</html>



        