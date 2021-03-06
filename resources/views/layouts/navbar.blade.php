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
            <nav id="sidebar" class="active">

                <ul class="list-unstyled components">
                  <li>
                        <a href="#" id="sidebarCollapse" class="sidebaritem active">
                        <span></span>
                        <span></span>
                        <span></span>

                      </a>
                    </li>
                    <li class="{{ Request::is('profile') ? 'active' : '' }}">
                        <a href="profile" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Profile">
                        <i class="material-icons">person</i>
                        <font class="sidetext hidetext">Profile</font>
                      </a>
                    </li>
                    <li class="{{ Request::is('appointments') ? 'active' : '' }}">
                        <a href="appointments" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Appointments">
                          <i class="material-icons">date_range</i>
                        <font class="sidetext hidetext">Appointments</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Availablity">
                          <i class="material-icons">av_timer</i>
                        <font class="sidetext hidetext">Availability</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Patients">
                        <i class="material-icons">person_outline</i>
                        <font class="sidetext hidetext">Patients</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Messages">
                        <i class="material-icons">mail_outline</i>
                        <font class="sidetext hidetext">Messages</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Patients">
                        <i class="material-icons">people_outline</i>
                        <font class="sidetext hidetext">Patients</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Podcast">
                        <i class="material-icons">wifi_tethering</i>
                        <font class="sidetext hidetext">Podcast</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="My Wallet">
                        <i class="material-icons">account_balance_wallet</i>
                        <font class="sidetext hidetext">My Wallet</font>
                      </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" class="sidebaritem" data-toggle="tooltip" data-placement="right" title="Logout">
                        <i class="material-icons">exit_to_app</i>
                        <font class="sidetext hidetext">Logout</font>
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">

     var ind=1;
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
    $('[data-toggle="tooltip"]').tooltip();
    $('#sidebarCollapse').on('click', function () {
        $(".sidetext").toggleClass('hidetext');
        $(".sidetext").toggleClass('fadetext');
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
</body>
</html>
