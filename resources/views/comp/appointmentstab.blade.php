
  
<?php 
  use Illuminate\Support\Facades\Input;
  use App\Http\Controllers\AvailabilityController;
  use App\Http\Controllers\EcounselingsController;
  $reqdate = Input::post('date');
?>

        

            <li class="sidebar-brand">
                 <?php echo date('F d, Y', strtotime($reqdate)); ?><a href="#" class="close">X</a>
            </li>
            <li class="text-info">
              Appointments
             <a href="#" id="showaddapp">Add</a>
            </li>
            <div class='tab table' id="addapp">
<form action="AddAppointment" method="POST">
 {!! Form::hidden('counsel_status', 'active', ['id' => 'counsel_status']) !!}

       
       <input class="form-control" id="counseldate" name="counsel_date" type="hidden" value="<?php echo $reqdate;?>" onload="getavail(this);" disabled>    
        
       <div class='patapptr tablerow'>
            <div class='addbooktc tablecell'>
              {{Form::label('Patient', 'Patient')}}
  </div>
       <div class='addbooktc tablecell' id="addbooktec">
       <select id="pat_id" class="form-control">
       <?php
           $resultt = EcounselingsController::getpatients(Auth::user()->id);
           foreach($resultt as $ress){
             echo "<option value=".$ress->pat_id.">".$ress->pat_fname." ".$ress->pat_lname."</option>";
           }
          ?>
        </select>
       </div>
     </div> 

     <div class='patapptr tablerow'>
            <div class='addbooktc tablecell'>
              {{Form::label('bookingtime', 'Booking Time')}}
  </div>
       <div class='addbooktc tablecell' id="addbooktc"></div>
     </div>      
          
      
          <div class='patapptr tablerow'>
            <div class='addbooktc tablecell'>
              {{Form::label('bookingduration', 'Booking Duration')}}
  </div>
       <div class='addbooktc tablecell'>{{Form::number('session_length','', ['class' => 'form-control', 'placeholder' => '01','id' => 'session_length'])}} hr</div>
     </div>      
          
          <div class='patapptr tablerow'>
            <div class='addbooktc tablecell'>
              {{Form::label('bookingtype', 'Booking Type')}}
  </div>
       <div class='addbooktc tablecell'>{{Form::select('counsel_type', ['BT' => 'Type', 'offsite' => 'On-Site', 'ecounseling' => 'E-Counseling'], 'T',['class' => 'form-control', 'id' => 'counsel_type'])}}</div>
     </div> 

     <div class='patapptr tablerow'>
            
       <div class='addbooktc tablecell'>{{Form::checkbox('repeat'), 'yes'}}  {{Form::label('bookingtype', 'Repeat every week')}} </div>
     </div>   
            <a class="addappbtn btn btn-info text-light">Add</a> 
            <a class="canceledit btn btn-info text-light">Cancel</a>                            
</div> <!-- End of table -->

</form>
            <li class="legend">
               	<i class="material-icons text-info">people_outline</i> e-Counseling
               	<i class="material-icons text-info">person_pin_circle</i> Off-site
            </li>

        @if(count($appoints)>0)

        @foreach($appoints as $appoints)
          <?php 

          $icon='person_pin_circle';
          if($appoints->counsel_type!='offsite')
          $icon='people_outline';
          ?>
           <li>
               <div class="appwrapper">
               		<i class="material-icons text-info">{{$icon}}</i>
               		<img class="appic" src="images/pp.jpg">
               		<font>John Doe</font><br>
               		{{ date('h:i A', strtotime($appoints->counsel_time)) }} 
                  - 
                  {{ date('h:i A', strtotime($appoints->counsel_time)+ 60*60*$appoints->session_length) }}
                </div>
            </li>

        @endforeach

        @else
        <li>
               <div class="appwrapper">
               		No appointment on this day.
            </li>


        @endif
            <li class="sidebar-brand text-info">
              <br>
              <br>
                   Availability <a class="close btn btn-info btn-sm" id="edittime"style="color:#fff;"" >Edit</a>
                   <br>
                <div id="editret"> 
                   <?php
                      $result = AvailabilityController::getspefdate($reqdate);
                      foreach($result as $res){
                        echo date('h:i A', strtotime($res->start_time)).'-';
                        echo date('h:i A', strtotime($res->end_time)).'<br/>';
                      }
                    ?>
                    </div>
                  <a id="availeditsave">Save</a>
            </li>

            <script>
              $('#edittime').click(function(e) {
                  e.preventDefault();
                  timeflag=true;

                  var date = "<?php echo $reqdate;?>";

                  $.post('./timepick',{date:date},function(data){
                     $('.sidebar2-nav').html(data);
                   });
                  $("#wrapper2").toggleClass("toggled");
              });
              
   $('#availeditsave').click(function(e) {
    var date = "<?php echo $reqdate;?>";
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });


    var values = $("input[name='time[]']")
              .map(function(){return $(this).val();}).get();
    $.post('./edittime',{time:values,date:date},function(data){
       $('#editret').html(data);
        });
});
            </script>

<script>

$(document).ready(function(){ 
  getavail($("#counseldate"));
  $('#addapp').hide();
 })
   function getavail(date){
     $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });
   var date = $(date).val();
   $.get('./availcal',{date:date},function(data){
        $('#addbooktc').html(data);
         });
   }

   $('#showaddapp').click(function(e) {
    e.preventDefault();
    $('#showaddapp').hide();
    $('#addapp').show();
});

$('.canceledit').click(function(e) {
    e.preventDefault();
    $('#showaddapp').show();
    $('#addapp').hide();
});

$('.addappbtn').click(function(e) {
    e.preventDefault();
    var counsel_status = $('#counsel_status').val();
    var pat_id = $('#pat_id').find(":selected").val();
    var counsel_date = $('#counseldate').val();
    var counsel_time = $('#counsel_time').val();
    var session_length = $('#session_length').val();
    var counsel_type = $('#counsel_type').find(":selected").text();
    var repeat = $('input:checked').val();
  
    $.get('./AddAppointment',{counsel_status:counsel_status,pat_id:pat_id,counsel_date:counsel_date,counsel_time:counsel_time,session_length:session_length,counsel_type:counsel_type},function(data){
            //$('#appntcont').html(data);
        });
    alert(counsel_status + " "+ pat_id+ " " + counsel_date+ " "+counsel_time+ " "+session_length+ " "+counsel_type+ " "+repeat);
});
</script>