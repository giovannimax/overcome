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
</head>
<body>

 
<div class="wrapper">

            <!-- Sidebar Holder -->
            <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autoHide active" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">

              <div class="sidebar-header">
                    <h3 style="padding: 1.5px;"></h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="{{ Request::is('profile') ? 'active' : '' }}">
                        <a href="profile" class="sidebaritem">Profile</a>
                    </li>
                    <li class="{{ Request::is('appointments') ? 'active' : '' }}">
                        <a href="appointments" class="sidebaritem">Appointments</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">Availability</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">Patients</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">Messages</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">e-Counseling</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">Podcast</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">My Wallet</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem">Logout</a>
                    </li>
                </ul>
            </div></div><div style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 215px; top: 0px; display: block; max-height: 328px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></nav>

            <!-- Page Content Holder -->
            <div id="content" class="active">

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

    <nav id="sidebaricon" class="mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">

                 <div class="sidebar-header">
                     <a id="sidebarCollapse">
                          <i class="material-icons">menu</i></a>
                </div>

                <ul class="list-unstyled components">
                    <li class="{{ Request::is('profile') ? 'active' : '' }}">
                        <a href="profile" class="sideicon" data-toggle="tooltip" data-placement="right" title="Profile">
                          <i class="material-icons">person</i>
                        </a>
                    </li>
                    <li class="{{ Request::is('appointments') ? 'active' : '' }}">
                        <a href="appointments" class="sideicon" data-toggle="tooltip" data-placement="right" title="Appointments">
                          <i class="material-icons">date_range</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon" data-toggle="tooltip" data-placement="right" title="Availability">
                          <i class="material-icons">av_timer</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon" data-toggle="tooltip" data-placement="right" title="Patients">
                          <i class="material-icons">person_outline</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon"data-toggle="tooltip" data-placement="right" title="Messages"> 
                          <i class="material-icons">mail_outline</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon" data-toggle="tooltip" data-placement="right" title="e-Counseling">
                          <i class="material-icons">people_outline</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon" data-toggle="tooltip" data-placement="right" title="Podcast">
                          <i class="material-icons">wifi_tethering</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon" data-toggle="tooltip" data-placement="right" title="My Wallet">
                          <i class="material-icons">account_balance_wallet</i>
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sideicon" data-toggle="tooltip" data-placement="right" title="Logout">
                          <i class="material-icons">exit_to_app</i>
                        </a>
                    </li>
                </ul>
            </div></div><div style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 215px; top: 0px; display: block; max-height: 328px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></nav>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">

      var ind=1;
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
                        })
        </script>
</body>
</html>
