
  
<?php 
  use Illuminate\Support\Facades\Input;
  use App\Http\Controllers\AvailabilityController;
  $reqdate = Input::post('date');
?>

        

            <li class="sidebar-brand">
                 <?php echo date('F d, Y', strtotime($reqdate)); ?><a href="#" class="close">X</a>
            </li>
            <li class="text-info">
              Appointments
            </li>

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
                   Availability <a class="close" id="edittime">Edit</a>
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