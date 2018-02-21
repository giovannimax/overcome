
    <h5 class="text-info text-center">Pick Your Available Time</h5>
    <?php 
    use App\Http\Controllers\AvailabilityController;
    $availtime = Array();
    $time;
          $time[date('H:i:s', strtotime('00:00:00')+60*60*24)] = date('h:i A', strtotime('00:00:00')+60*60*24);
          for($i=1;$i<24;$i++){
            $time[date('H:i:s', strtotime('00:00:00')+60*60*$i)] = date('h:i A', strtotime('00:00:00')+60*60*$i);
          }
          $time[date('H:i:s', strtotime('00:59:00')+60*60*23)] = date('h:i A', strtotime('00:59:00')+60*60*23);

      if(!empty($_POST)){
        $date = $_POST['date'];
        $result = AvailabilityController::getspefdate($date);
      foreach($result as $res){
          
          $start = date("H", strtotime($res->start_time));
          $end =  date("H", strtotime($res->end_time));
          for($i=$start; $i<$end; $i++){
              array_push($availtime, $i);
          }         
      }
      ?>

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
                        if (!in_array($i, $availtime)) {
                            echo '<li value="'.$i.'"></li>';
                        } else {
                            echo '<li value="'.$i.'" class="ui-selected"></li>';
                        }
                } ?>
                </ol>
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell">
                    <button class="btn btn-primary" id="editdone" style="margin-left:15px;margin-top:25px;">Done</button>
                    </div>
                </div>
                </div>

      <?php 
        } else {
    ?>


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
          <button class="btn btn-primary" id="timedone" style="margin-left:15px;margin-top:25px;">Done</button>
        </div>
      </div>
    </div>
    <?php } ?>

    <script>

var timeflag=false;
  var selectedtime= new Array();
   var _selectRange = false, _deselectQueue = [];
$(function() {
    $( "#selectable" ).selectable({
        selecting: function (event, ui) {
            if (event.detail == 0) {
                _selectRange = true;
                return true;
            }
            if ($(ui.selecting).hasClass('ui-selected')) {
                _deselectQueue.push(ui.selecting);
            }
        },
        unselecting: function (event, ui) {
            $(ui.unselecting).addClass('ui-selected');
        },
        stop: function () {
            if (!_selectRange) {
                $.each(_deselectQueue, function (ix, de) {
                    $(de)
                        .removeClass('ui-selecting')
                        .removeClass('ui-selected');
                });
            }
            _selectRange = false;
            _deselectQueue = [];
        },
    });
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

$('#editdone').click(function(e) {
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
       $('#editret').html(data);
        });

    var values = $("input[name='time[]']")
              .map(function(){return $(this).val();}).get();
});

    </script>
