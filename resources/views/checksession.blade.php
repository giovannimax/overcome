<?php
session_start();
    print_r($_SESSION);
    echo Auth::user()->usertype;
?>