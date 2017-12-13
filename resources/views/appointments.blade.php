@extends('layouts.navbar')
@include('comp.calendar')


@section('content')
	<?php
 
		$calendar = new Calendar();
		 
		echo $calendar->show();

	?>

@endsection