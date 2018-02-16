<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Overcome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
     <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero3">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="/"><img class="overcomelogo" src="img/overcome.png" alt="Overcome logo"></a></div>
                    <div class="header-nav">
                        <nav>
                            
                            <ul class="member-actions" style="margin-top:10px;">
                                
                                <li><a href="/" class="btn-white btn-small navlinkss">Back</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="containersearch">
        <div class="row">
            <div class="dd">
               <h3 class="text-center test" style="color:#85898c;"><q>Healing takes time, and asking for help is a courageous step. - <small>Mariska Hargitay</small></q></h3>
               
              
        <div class="form-group ddfg">
            <div class="row">
                <div class="col-md-4">
            <div class="input-group">
               
                 <input  class="form-control" list="hosting-plan" type="text"  data-toggle="collapse" data-target="#hotsing-plan" placeholder="Location" id="forlocation"  onkeypress="onKeyPress(event);">
                    <datalist id="hosting-plan" class="collapse">
                  
                  <option>Manila</option>
                  <option>Cebu</option>
                  <option>Davao</option>
                  <option>Tacloban</option>
                  
              </datalist>
              <div class="input-group-addon">
                    <i class="fa fa-location-arrow"></i> 
                 </div>
     
                </div> <!-- End of input-group -->
            </div> <!-- End of col-md-4 -->
            <div class="input-group">
                
                 <input  class="form-control" list="hosting-plan2" type="text"  data-toggle="collapse" data-target="#hotsing-plan" placeholder="Specialties Ex: [Depression, Marriage, Anxiety]" id="forspecialty" >
                    <datalist id="hosting-plan2" class="collapse">
                  
                  <option>Depression</option>
                  <option>Anxiety</option>
                  <option>Marriage</option>
                  <option>Rehabilitation</option>
                  
              </datalist>
              <div class="input-group-addon ">
                   <i class="fa fa-search"></i> 
                 </div>
     
                </div> <!-- End of input-group -->
            <div class="col-md-8">

            </div>
        </div> <!-- End of Row -->
        </div> <!-- End of form-group -->

        
                    </div> <!-- End of DD -->
        

                </div>
            </div>
   </section>

   <section class="forlistofpsych">
   <div class="listofpsychologist" id="listofpsych">

<h4> (insert char2 about psychologist)
Lorem ipsum dolor sit amet, munere eligendi 
percipit in ius, vim dolore
m probatus ex. No debet impedi
t conclusionemque has, ne minim ornatus nec
Ei toll it postulant </h4>
    <div class="row rowsearch">
        
        <div class="col-md-3 colmd3" data-id="" onclick="getspecificpsychologist(this)">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>John Doe</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->
      
        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>Michelle Doe</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->


        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>Jane Doe</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->

        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>Joe Hannes</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->

    </div> <!-- End of Row -->

    
    <div class="row rowsearch">
        
        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>John Doe</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->
      
        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>Michelle Doe</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->


        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>Jane Doe</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->

        <div class="col-md-3 colmd3">
        <a class="linkforpsych">
        <div class="clearfix psychhover">
        <img class="insideimg d-block pull-left" src="{{ asset('images/pic.png') }}" alt="profile picture">
        <div class="divforname"><strong>Joe Hannes</strong><br>
        <strong>Cebu, Ph</strong></div>
        </div> <!-- End of clearfix -->
        </a>
        </div> <!-- End of col-md-3 -->

    </div> <!-- End of Row -->

</div> <!-- End of listofpsychologist -->

</section>
   
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="http://tympanus.net/codrops/licensing/">Licence</a></li>
                            <li><a href="http://tympanus.net/codrops/">Codrops</a></li>
                            <li><a href="http://www.dribbble.com/">Dribbble</a></li>
                        </ul>
                        <p>Copyright © 2015 <a href="#">Sedna</a><br>
                        <a href="http://tympanus.net/codrops/licensing/">Licence</a> | Crafted with <span class="fa fa-heart pulse2"></span> for <a href="https://tympanus.net/codrops/">Codrops</a>.</p>
                    </div>
                </div>
                <div class="social-share">
                    <p>Share Overcome with your friends</p>
                    <a href="#" class="twitter-share"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="bower_components/retina.js/dist/retina.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="bower_components/classie/classie.js"></script>
    <script src="bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
 
    </script>
</body>
</html>

<script>
function getspecificpsychologist(id){
$(id).click(function(){
    // var psychologistid = $(this).data('id');
    // $.ajax({
    //     type:"post",
    //     url: ,
    //     data: {id:psychologistid},
    //     dataType: "json",
    //     cache: false,
    //     success: function(data){
    //         var getter = 
    //         `
    //         <section>

    //         </section>
            
            
            
    //         `
    //     }
    // })

    var getter =
    `
    <section>
            <div class="specificpsych">
            <div class="text-center">
            <img class="insideimg2 d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <h4>John Doe</h4>
            
            </div> <!-- End of text-center -->
            </div> <!-- End of specificpsych -->
    </section>

    `;
    $("#listofpsych").html(getter);

}
)
}

function onKeyPress(args)
    {
        if(args.keyCode === 13)
            document.getElementById("forspecialty").focus();
    }

    $('#forlocation').on('input', function(){
        $('#forspecialty').focus();
       // alert("basffs");
    });
</script>
