@extends('layouts.navbar')
@include('comp.calendar')


@section('content')

<button class="btn btn-info btnavail float-right">Manage Availability</button>
	<?php
 
		$calendar = new Calendar();
		 
		echo $calendar->show();


?>
@endsection



@section('leftsidebar')
<div id="wrapper" class="toggled">
	<div id="sidebar-wrapper">
        <ul class="sidebar-nav" id='appntcont'>
          
        </ul>
    </div>
    <div id="overlay" class="toggled">

	</div>
</div>
@endsection

@section('scripts')
<script>

var i = 0;

function displayleftsidebar(){
    $("#wrapper").toggleClass("toggled");
    $("#overlay").toggleClass("toggled");
    if(i==0)
      i=1;
    else
      i=0;
}

function toggleleftsidebar(daydate){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });

  $.post('./appointmentstab',{date:daydate},function(data){
            $('#appntcont').html(data);
        });

  setTimeout(displayleftsidebar, 200);

  }

  $('.btnavail').click(function(e) {
    e.preventDefault();
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });

  $.post('./availabilitytab',{},function(data){
            $('#appntcont').html(data);
        });
  
    setTimeout(displayleftsidebar, 200);
});

	$('#overlay').click(function(e) {
    e.preventDefault();
    displayleftsidebar();
});
	$('.close').click(function(e) {
    e.preventDefault();
    displayleftsidebar();
});

	$(document).keyup(function(e) {
  		if (e.keyCode == 27 && i == 1) {
    displayleftsidebar();
 	 }   
	});

</script>

@endsection