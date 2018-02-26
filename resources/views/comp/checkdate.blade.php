<?php

$date = $_GET['date'];
if(date("Y-m-d")<$date)
    echo "okay";
else
    echo "oops";

?>