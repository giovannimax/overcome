@extends('layouts.navbar')
@include('comp.calendar')


@section('content')
<a class="availreset text-info pointer hide">Clear Selection</a>
<a class="material-icons text-info float-right pointer hide" id="btncancel">cancel</a>
<a class="material-icons text-info float-right pointer hide" id="btndone">check</a>
<button class="btn btn-info btnavail float-right">Block Dates (Availability)</button>
	<?php
 
		$calendar = new Calendar();
		 
		echo $calendar->show();


?>
@endsection


@section('leftsidebar')
{!! Form::open(['action' => 'AvailabilityController@addavail', 'method' => 'POST']) !!}
<div id="wrapperr" class="toggled">
	<div id="sidebar-wrapper">
        <ul class="sidebar-nav" id='appntcont'>
          
        
        </ul>
        <ul class="timeret">

        </ul>
    </div>
    <div id="overlay" class="toggled">

	</div>
</div>
{!! Form::close() !!}
@endsection

@section('leftsidebar2')
<div id="wrapper2" class="toggled">
	<div id="sidebar2-wrapper">
        <ul class="sidebar2-nav">

        </ul>
    </div>
</div>
@endsection


@section('scripts')
<script>

var i = 0;
var avail=0;
var avails= new Array();
var time = false;
var timeflag=false;

window.onload = function (){
  $.get('./timepick',{},function(data){
       $('.sidebar2-nav').html(data);
        });
   $.get('./checkavail',{},function(data){
      if($.trim(data)=='yes'){
       swal({
          title: '<img src="images/cal.png" style="height: 150px;">',
          html:
            '<h3>Welcome to your calendar!</h3>afafasf asfsaf asfass saf',
          focusConfirm: true,
          allowOutsideClick: false,
          confirmButtonText:
            'Ok, proceed'
        }).then((result) => {
          setfirstavail();
        })
      }
        });
}

function setfirstavail(){
  swal.setDefaults({
  input: 'text',
  confirmButtonText: 'Next &rarr;',
  showCancelButton: true,
  progressSteps: ['1'],
  allowOutsideClick: false,
})

var steps = [
  {
    html: '<div class="animated slideInRight"><h3>Set availability.</h3>'+
    "<input type='checkbox'> Sunday &nbsp;&nbsp;"+
    "<input type='checkbox'> Monday &nbsp;&nbsp;"+
    "<input type='checkbox'> Tuesday &nbsp;&nbsp;"+
    "<input type='checkbox'> Wednesday &nbsp;&nbsp;<br/>"+
    "<input type='checkbox'> Thurday &nbsp;&nbsp;"+
    "<input type='checkbox'> Friday &nbsp;&nbsp;"+
    "<input type='checkbox'> Saturday<br/><br/>"+
    "<div class='addtime' style='width: 100%;'>add time"+
    "<a class='material-icons text-info float-right pointer' onclick='addfirsttime();'>add_box</a><br/></div>"+
    "</div>",
    animation: false,
  },
]

swal.queue(steps).then((result) => {
  var start = [];
 
$('select[name="starttime[]"] option:selected').each(function() {
  start.push($(this).val());
});


  alert(start);
  //alert(end);
})
}

function displayleftsidebar(){
    $("#wrapperr").toggleClass("toggled");
    $("#overlay").toggleClass("toggled");
    if(i==0)
      i=1;
    else
      i=0;
}

function toggleleftsidebar(daydate, day){
  if(avail==0){

    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });

  $.post('./appointmentstab',{date:daydate},function(data){
            $('#appntcont').html(data);
        });

  setTimeout(displayleftsidebar, 200);

  }else{
     $(day).find('div').css('background-color', 'rgb(255, 100, 100)');

    function remove(array, element) {
      const index = array.indexOf(element);
      
        if (index !== -1) {
            array.splice(index, 1);
        }
  }
    $found=0;
     for(i=0;i<avails.length;i++){
       if(daydate==avails[i]){
         remove(avails, avails[i]);
         $found=1;
         $(day).find('div').css('background-color', '#ddd');
       }
     }
     if($found==0)
     avails.push(daydate);
  }

  }

//
  $('.btnavail').click(function(e) {
    e.preventDefault();
   $("#calimg").toggleClass("calhide");
   $('.daylabel').addClass('availlabel').removeClass('daylabel');
   $('.btnavail').prop('disabled', true);
   $("#btncancel").toggleClass("hide");
   $("#btndone").toggleClass("hide");
   $(".availreset").toggleClass("hide");
   avail=1;
});

//

function addfirsttime(){
    var qwer = "<?php 
      $time;
      for($i=1;$i<=24;$i++){
        $time[date('H:i:s', strtotime('00:00:00')+60*60*$i)] = date('h:i A', strtotime('00:00:00')+60*60*$i);
      }
      foreach($time as $t){
        echo "<option value='".$t."'>".$t."</option>";
      }
    ?>";
    $(".addtime").append("<br> start time: &nbsp;"+ "<select name='starttime[]'>" + qwer + "</select>" );
    $(".addtime").append("&nbsp;&nbsp;end time: &nbsp;" + "<select name='endtime[]'>" + qwer + "</select>" );
}

//

$('#btndone').click(function(e) {
 // $("#calimg").toggleClass("calhide");
   //$('.availlabel').addClass('daylabel').removeClass('availlabel');
   //$('.btnavail').prop('disabled', false);
   //$("#btncancel").toggleClass("hide");
   //$("#btndone").toggleClass("hide");
  // avail=0;
   //console.log(avails);

   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });

  $.post('./availabilitytab',{dates:avails},function(data){
            $('#appntcont').html(data);
        });
        setTimeout(displayleftsidebar, 200);
});

//

$('#btncancel').click(function(e) {
 $("#calimg").toggleClass("calhide");
  $('.availlabel').addClass('daylabel').removeClass('availlabel');
  $('.btnavail').prop('disabled', false);
  $("#btncancel").toggleClass("hide");
  $("#btndone").toggleClass("hide");
  $(".availreset").toggleClass("hide");
    avail=0;
   //console.log(avails);
  $('.availreset').trigger('click');
});

//
$('.availreset').click(function(e) {
    e.preventDefault();
    $('.daystripcont').css('background-color', '#ddd');
    avails=[];
});

//

	$('#overlay').click(function(e) {
    e.preventDefault();
    if(timeflag){
      $("#wrapper2").toggleClass("toggled");
      timeflag=false;
    }
  else
    displayleftsidebar();
});

//
	$('.close').click(function(e) {
    e.preventDefault();
    displayleftsidebar();
});

//

	$(document).keyup(function(e) {
  		if (e.keyCode == 27 && i == 1) {
        if(timeflag){
          $("#wrapper2").toggleClass("toggled");
          timeflag=false;
        }
      else
        displayleftsidebar();
 	 }   
	});
  

</script>

@endsection