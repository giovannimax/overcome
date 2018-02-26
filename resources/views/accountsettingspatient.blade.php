@extends('layouts.pnavbar')

@section('content')

<?php

    use App\Http\Controllers\DiariesController;
    $result = DiariesController::retpat(Auth::user()->id);
    $resultt = DiariesController::retdetails(Auth::user()->id);

?>


{!! Form::open(['action' => 'DiariesController@updatepat', 'method' => 'GET']) !!}
<div class="container">
@foreach($result as $res)
   <div class="profile-pic">
       <div class="imgwrap rounded-circle">
           <img class="propic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
        <!-- <input  id="changeprofpic" type="file" 
       name="profile_photo" placeholder="Photo" required="" accept=".jpg, .jpeg, .png" capture>       -->
       <span class="edit"><i class="material-icons changepp">camera_alt</i><b>Change Picture</b></span>
       <input type="hidden" name="pat_id" value="{{$res->pat_id}}">
      </div> 

    
     <h3 style="color:#f58c37;">Personal Information</h3>
        <div class="form-group">
            {{Form::label('fname', 'First Name')}} 
            {{Form::text('pat_fname', $res->pat_fname,['class' => 'form-control','readonly', 'placeholder' => 'First Name'])}} 
            </div>
        
        <div class="form-group"> 
            {{Form::label('mname', 'Middle Name')}} 
            {{Form::text('pat_mname', $res->pat_mname,['class' => 'form-control','readonly', 'placeholder' => 'Middle Name'])}} 
        </div>
    
        <div class="form-group"> 
            {{Form::label('lname', 'Last Name')}} 
            {{Form::text('pat_lname', $res->pat_lname,['class' => 'form-control','readonly','placeholder' => 'Last Name'])}} 
        </div>
            <p style="color:red;font-size:12px;">Note:To change your name please <a href="/" style="color:blue;text-decoration:underline;">Contact Us</a></p>
       

        <div class="form-group">
        <div class="row">
        <div class="col-md-4"> {{ Form::label('Gender') }}</div>
        @if($res->pat_gndr=="male")
         <div class="col-md-4"> {{ Form::radio('sex', 'male' ,  ['checked' => "checked"]) }} Male </div>
        @else
        <div class="col-md-4"> {{ Form::radio('sex', 'male') }} Male </div>
        @endif
        @if($res->pat_gndr=="female")
         <div class="col-md-4">{{ Form::radio('sex', 'female' ,  ['checked' => "checked"]) }} Female </div>
         @else
         <div class="col-md-4">{{ Form::radio('sex', 'female') }} Female </div>
         @endif
        </div>
    </div>
    @foreach ($resultt as $ress)
    <div class="form-group"> 
            {{Form::label('email', 'Email Address')}} 
            {{Form::text('email', $ress->email,['class' => 'form-control', 'placeholder' => 'Email Address'])}} 
        </div>
    @endforeach
    <div class="form-group">
    {{ Form::label('Birthday') }}
    {{ Form::date('pat_bdate',$res->pat_bdate, ['class' => 'form-control'])}}
    </div>   
  
    <div class="form-group">
    {{ Form::label('Birthplace')}}
    {{ Form::text('birth_place', $res->birth_place, ['class' => 'form-control', 'required'])}}
</div>

<div class="form-group">
    {{ Form::label('Citizenship') }}
    {{ Form::text('ctznshp', $res->ctznshp, ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
    {{ Form::label('Religion') }}
    {{ Form::text('religion', $res->religion, ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
{{ Form::label('Educational Attaintment') }}
{{ Form::text('educ_attain', $res->educ_attain, ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
{{ Form::label('Occupation')}}
{{ Form::text('occupation', $res->occupation, ['class' => 'form-control', 'required'])}}
</div>
  
<p>
  <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="color:red;font-size:12px;">
    Click here to Change Password
  </a>
  
</p>
<div class="collapse" id="collapseExample">
     <div class="form-group"> 
            {{Form::label('npass', 'New Password')}} 
            {{Form::password('newpassword1',['class' => 'form-control', 'placeholder' => 'New Password'])}}
    </div>
    
    <div class="form-group"> 
            {{Form::label('current', 'Current Password')}} 
            {{Form::password('',['class' => 'form-control', 'placeholder' => 'Current Password'])}}
        </div>
    

         
     <div class="form-group"> 
            {{Form::label('current2', 'Current Password')}} 
            {{Form::password('',['class' => 'form-control', 'placeholder' => 'Current Password'])}}
        </div> 
</div>

    
        <div style="float:right;margin-bottom:25px;">
            {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
        </div>
        
</div> <!-- end of container-->
{!! Form::close() !!}
@endforeach

@endsection

@section ('scripts')
<script>
            
$(".propic").click(function(e) {
    $("#changeprofpic").click();
});
   


</script>
@endsection