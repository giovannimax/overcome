<?php
    use App\Http\Controllers\AvailabilityController;
    $date = $_POST['date'];
    $time = $_POST['time'];
    AvailabilityController::deleteavail($date);
    AvailabilityController::updateavail($time, $date);
        $result = AvailabilityController::getspefdate($date);
                      foreach($result as $res){
                        echo date('h:i A', strtotime($res->start_time)).'-';
                        echo date('h:i A', strtotime($res->end_time)).'<br/>';
                      }


?>