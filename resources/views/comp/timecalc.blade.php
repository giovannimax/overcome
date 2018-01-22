<?php 
    $time=$_POST['time'];
    $finaltime = array();
    $counter=0;

    function timeconv($start, $dur){
        $starttime = date('h:i A', strtotime('00:00:00')+60*60*$start);
        $etime=$start+$dur;
        $endtime = date('h:i A', strtotime('00:00:00')+60*60*$etime);
        return $starttime.'-'.$endtime;
    }

    function calcrange($index, $time){
        $counter = 1;
        for($j=$index;$j<count($time)-1;$j++){
            if($time[$j]+1 == $time[$j+1]){
                $counter+=1;
            } else{
                break;
            }
        }

        $timerange = timeconv($time[$index],$counter);
        echo $timerange.'<br/>';
        echo '<input type="hidden" name="time[]" value="'.$timerange.'">';
        return $index+$counter-1;
    }

    for($i=0;$i<count($time);$i++){
    if(count($time)-1!=$i){
        if($time[$i]+1 == $time[$i+1]){
            $i = calcrange($i, $time);
        } else {
           $timerange = timeconv($time[$i],1);
            echo $timerange.'<br/>';
            echo '<input type="hidden" name="time[]" value="'.$timerange.'">';
        }
    } else {
        $timerange = timeconv($time[$i],1);
         echo $timerange.'<br/>';
         echo '<input type="hidden" name="time[]" value="'.$timerange.'">';
    }

}

    //print_r($finaltime);
?>