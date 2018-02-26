<?php
    use App\Http\Controllers\AvailabilityController;
    use App\Http\Controllers\EcounselingsController;
    $date = $_GET['date'];
    $selected = $_GET['selected'];

    $result = AvailabilityController::getspefdate($date);
    $day = date("l", strtotime($date));
    $resultt = AvailabilityController::getpsychavailaspefday($day);
    $unresult = EcounselingsController::viewspefecounn($date);
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
    $opentime = array();
          for($i=1;$i<=24;$i++){
            $time = date('h:i A', strtotime('00:00:00')+60*60*$i);
            $timee = date('H:i', strtotime('00:00:00')+60*60*$i);
            if (in_array($i, $availatime)) {
             if (!in_array($i, $unavailtime)) {

                if (!in_array($i, $availtime)) {
                   array_push($opentime, $timee);
                }
            }

            
          }

        }
        $j=0;
      
       		for($i=0;$i<count($opentime);$i++){
       			if($opentime[$i] == $selected){
       				if (count($opentime)-$i==1)
       					$j=1;
       				else 
       					$j=2;
       			}
       		}

       	 echo "<select class='form-control' name='session_length'>";
       	 $k=1;
       	 while($k<=$j){
       	 	if($k>1)
       	 	echo '<option value="'.$k.'">'.$k.'hrs</option>';
       	 else
       	 	echo '<option value="'.$k.'">'.$k.'hr</option>';
       	 	$k++;
       	 }
    	echo "</select>";

?>