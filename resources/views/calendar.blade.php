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
<div id="wrapper" class="toggled">
	<div id="sidebar-wrapper">
        <ul class="sidebar-nav" id='appntcont'>
          
        
        </ul>
        <ul class="timeret">

        </ul>
        {{Form::submit('Save', ['class' => 'btn btn-info'])}}
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
          Pick time.
        <?php 
          $time;
          $time[date('H:i:s', strtotime('00:00:00')+60*60*24)] = date('h:i A', strtotime('00:00:00')+60*60*24);
          for($i=1;$i<24;$i++){
            $time[date('H:i:s', strtotime('00:00:00')+60*60*$i)] = date('h:i A', strtotime('00:00:00')+60*60*$i);
          }
          $time[date('H:i:s', strtotime('00:59:00')+60*60*23)] = date('h:i A', strtotime('00:59:00')+60*60*23);
        ?>
                  <!--<form method="post" action="">
                    Start time
                    {{Form::select('counsel_time', $time, 'T', ['class' => 'form-control'])}}
                    End time
                    {{Form::select('counsel_time', $time, 'T', ['class' => 'form-control'])}}

                  <button class="btn btn-primary">Add</button>

                </form>-->


        <div class="table">
          <div class="tablerow" style="height: 20px;">
            <div class="tablecell">
            <ol id="selectpass">
            <?php foreach($time as $t){
        
                   echo '<li style="width: 100px;">'.$t.'</li>';
          } ?>
          </ol>
            </div>  
            <div class="tablecell">
            <ol id="selectable">
            <?php for($i=0;$i<24;$i++){
                   echo '<li value="'.$i.'"></li>';
          } ?>
          </ol>
            </div>
          </div>
          <div class="table-row">
            <div class="table-cell">
              <button class="btn btn-primary" id="timedone">Done</button>
            </div>
          </div>
        </div>

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

function displayleftsidebar(){
    $("#wrapper").toggleClass("toggled");
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

  $('#timedone').click(function(e) {
    var selectedtime = [];
    $('.ui-selected').each(function(k,v) {
        selectedtime.push($(v).val());
        $("#wrapper2").toggleClass("toggled");
    });

    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });

  $.post('./timecalc',{time:selectedtime},function(data){
       $('.timeret').html(data);
        });
});
  

</script>

@endsection