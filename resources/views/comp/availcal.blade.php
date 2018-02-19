<?php
    use App\Http\Controllers\AvailabilityController;
    $date = $_GET['date'];

    $result = AvailabilityController::getspefdate($date);
    $availtime = Array();
    foreach($result as $res){
        
        $start = date("H", strtotime($res->start_time));
        $end =  date("H", strtotime($res->end_time));
        for($i=$start; $i<$end; $i++){
            array_push($availtime, $i);
        }

        
    }

    echo "<select class='form-control' name='counsel_time' id='counsel_time'>";
          for($i=1;$i<=24;$i++){
            $time = date('h:i A', strtotime('00:00:00')+60*60*$i);
            $timee = date('H:i', strtotime('00:00:00')+60*60*$i);
            if (!in_array($i, $availtime)) {
                echo "<option value='".$timee."'>".$time."</option>";
            }

            
          }
    echo "</select>";

?>