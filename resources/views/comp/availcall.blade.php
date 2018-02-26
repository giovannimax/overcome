<?php
    use App\Http\Controllers\AvailabilityController;
    use App\Http\Controllers\EcounselingsController;
    $date = $_GET['date'];
   
    $unresult=array();
    if(empty($_GET['psych'])){
        $unresult = EcounselingsController::viewspefecounn($date);
    }else{
        $id = $_GET['psych'];
        $unresult = EcounselingsController::viewspefecounnn($date,$id);
    }

    $result = AvailabilityController::getspefdate($date);
    $day = date("l", strtotime($date));
    $resultt = AvailabilityController::getpsychavailaspefday($day);
    $availtime = Array();
    $availatime = Array();
    $unavailtime = Array();
    foreach($result as $res){
        
        $start = date("H", strtotime($res->start_time));
        $end =  date("H", strtotime($res->end_time));
        for($i=$start; $i<$end; $i++){
            array_push($availtime, $i);
        }

        
    }

    foreach($resultt as $ress){
        
        $start = date("H", strtotime($ress->start_time));
        $end =  date("H", strtotime($ress->end_time));
        for($i=$start; $i<$end; $i++){
            array_push($availatime, $i);
        }

    }

        foreach($unresult as $unres){
        
        $start = date("H", strtotime($unres->counsel_time));
        $end =  date("H", strtotime($unres->counsel_time)+ 60*60*$unres->session_length);
        for($i=$start; $i<$end; $i++){
            array_push($unavailtime, $i);
        }

        
    }

    echo "<select class='form-control' name='counsel_time' id='counsel_time' onChange='durcheck();'>";
          for($i=1;$i<=24;$i++){
            $time = date('h:i A', strtotime('00:00:00')+60*60*$i);
            $timee = date('H:i', strtotime('00:00:00')+60*60*$i);
            if (in_array($i, $availatime)) {
             if (!in_array($i, $unavailtime)) {
                if (!in_array($i, $availtime)) {
                    echo "<option value='".$timee."'>".$time."</option>";
                }
            }

            
          }

        }
    echo "</select>";

?>