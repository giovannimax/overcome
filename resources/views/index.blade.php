@extends('layouts.app')

@section('content')
<style type="text/css">
	body,html{
	overflow: hidden;
	}
</style>
	<div class='cover'>
	    <h3 class="text-center text-light home-head">It's about making peace with <br/> by listening to and understanding your symptoms.</h3>

	    <div class="input-group txtsearch mx-auto txtinput">
			<input type="email" class="form-control txtinput" placeholder="Search psychologists by location.">
		  <span class="input-group-btn">
		    <button class="btn btn-info" type="submit">Search</button>
		        <i class="fa fa-search"></i>
		    </button>
		  </span>
		</div><br/>
		<h6 class="text-center text-light"> or </h6>
		<div class="input-group txtinput mx-auto">
		    <button class="btn btn-info mx-auto" type="submit">Find a match</button>
		</div>
	</div>
@endsection
