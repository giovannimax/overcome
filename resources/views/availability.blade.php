@extends('layouts.navbar')
@include('comp.calendar')


@section('content')


	<?php
 
		$calendar = new Calendar();
		 
		echo $calendar->show();


?>
@endsection


@section('leftsidebar')
<div id="wrapper" class="toggled">
	<div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand text-info">
                   Appointments <a class="close">X</a>
            </li>
            <li>
            	 <?php
                	date_default_timezone_set('Asia/Hong_Kong');
					echo date('F d, Y');
                ?>
            </li>
            <li class="text-info legend">
               	<i class="material-icons">people_outline</i> e-Counseling
               	<i class="material-icons">person_pin_circle</i> Off-site
            </li>
           <li class="text-info">
               <div class="appwrapper">
               		<i class="material-icons">people_outline</i>
               		<img class="appic" src="images/pp.jpg">
               		<font>John Doe</font><br>
               		<font>9:00AM - 10:00PM</font>
               </div>
            </li>
        </ul>
    </div>
    <div id="overlay" class="toggled">

	</div>
</div>
@endsection

@section('scripts')
<script>

var i = 0;
	$('.calday').click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $("#overlay").toggleClass("toggled");
    i=1;
});

	$('#overlay').click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $("#overlay").toggleClass("toggled");
    i=0;
});
	$('.close').click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $("#overlay").toggleClass("toggled");
    i=0;
});

	$(document).keyup(function(e) {
  		if (e.keyCode == 27 && i == 1) {
     $("#wrapper").toggleClass("toggled");
    $("#overlay").toggleClass("toggled");
    i=0;
 	 }   
	});

</script>

@endsection