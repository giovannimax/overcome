<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Overcome</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui-smooth.css') }}">
    @stack('css')
</head>
<body>

 <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
            <ul class="list-unstyled components">
              <li>
                    <a href="#" id="sidebarCollapse" class="sidebaritem active">
                    <span></span>
                    <span></span>
                    <span></span>

                  </a>
                </li>
                <li class="{{ Request::is('admin') ? 'active' : '' }}">
                    <a href="admin" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Psychologists">
                    <i class="material-icons">group_add</i>
                    <font class="sidetext">Psychologists</font>
                  </a>
                </li>
                <li class="{{ Request::is('adminpatient') ? 'active' : '' }}">
                    <a href="adminpatient" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Patients">
                      <i class="material-icons">people</i>
                    <font class="sidetext">Patients</font>
                  </a>
                </li>
                <li class="{{ Request::is('adminpayment') ? 'active' : '' }}">
                    <a href="adminpayment" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Payments">
                      <i class="material-icons">account_balance_wallet</i>
                    <font class="sidetext">Payments</font>
                  </a>
                </li>
                <li class="{{ Request::is('adminset') ? 'active' : '' }}">
                    <a href="adminset" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="AdminUser">
                      <i class="material-icons">settings</i>
                    <font class="sidetext">Settings</font>
                  </a>
                </li>
                <li>
                    <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Patients">
                    <i class="material-icons">assessment</i>
                    <font class="sidetext">Reports</font>
                  </a>
                </li>
            </ul>
        </nav>

            <!-- Page Content Holder -->
            <div id="content">

               <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/"><img class="navbarlogo" src="{{ asset('images/overcome.png') }}"></a>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">notifications</i><span class="badge badge-danger">3</span></a>
            <div class="dropdown-menu dropdown-menu-right" style="left: auto !important;right: 20px;">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">face</i></a>
            <div class="dropdown-menu dropdown-menu-right" style="left: auto !important;right: 20px;">
              <span class="dropdown-header" href="#">Hanna Kris Ko</span>
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Account Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
             @yield('content')
        </div>
        @yield('leftsidebar')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script type="text/javascript">

     var ind=0;
     /*
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');

                    if(ind==0){
                        $(function () {
                          $('[data-toggle="tooltip"]').tooltip('enable')
                        })
                        ind=1;
                    } else {
                        $(function () {
                          $('[data-toggle="tooltip"]').tooltip('disable')
                        })
                        ind=0;
                    }
                });
            });

             $(function () {
                          $('[data-toggle="tooltip"]').tooltip()
                        })*/

    $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $(".sidetext").toggleClass('hidetext');

        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');

        if(ind==0){
                        $(function () {
                          $('[data-toggle="tooltip"]').tooltip('enable')
                        })
                        ind=1;
                    } else {
                        $(function () {
                          $('[data-toggle="tooltip"]').tooltip('disable')
                        })
                        ind=0;
                    }

});
    });
        </script>

      @yield('scripts')
</body>
</html>