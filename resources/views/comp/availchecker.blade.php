<?php 

use App\Http\Controllers\AvailabilityController;

$result = AvailabilityController::checkavail();

if(count($result)==0)
    echo "yes";
else
    echo "no";
?>