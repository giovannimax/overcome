@extends('layouts.pnavbar')

@section('content')

{!! Form::open(['url' => 'accountsettings/submit']) !!}
<div class="container">
    
   <div class="profile-pic">
       <div class="imgwrap rounded-circle">
           <img class="propic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
        <input  id="changeprofpic" type="file" 
       name="profile_photo" placeholder="Photo" required="" accept=".jpg, .jpeg, .png" capture>      
       <span class="edit"><i class="material-icons changepp">camera_alt</i><b>Change Picture</b></span>
       
      </div> 

    
     <h3 style="color:#f58c37;">Personal Information</h3>
        <div class="form-group">
            {{Form::label('fname', 'First Name')}} 
            {{Form::text('firstname', '',['class' => 'form-control', 'disabled', 'placeholder' => 'First Name'])}} 
            </div>
        
        <div class="form-group"> 
            {{Form::label('mname', 'Middle Name')}} 
            {{Form::text('middlename', '',['class' => 'form-control', 'disabled', 'placeholder' => 'Middle Name'])}} 
        </div>
    
        <div class="form-group"> 
            {{Form::label('lname', 'Last Name')}} 
            {{Form::text('lastname', '',['class' => 'form-control', 'disabled','placeholder' => 'Last Name'])}} 
        </div>
            <p style="color:red;font-size:12px;">Note:To change your name please <a href="/" style="color:blue;text-decoration:underline;">Contact Us</a></p>
       

        <div class="form-group">
        <div class="row">
             <div class="col-md-4"> {{ Form::label('Gender') }}</div>
             <div class="col-md-4"> {{ Form::radio('sex', 'male'),  'required' }} Male </div>
             <div class="col-md-4">{{ Form::radio('sex', 'female') }} Female </div>
        </div>
    </div>
    <div class="form-group"> 
            {{Form::label('email', 'Email Address')}} 
            {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Email Address'])}} 
        </div>
    <div class="form-group">
    {{ Form::label('Birthday') }}
    {{ Form::date('pat_dob', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
    </div>   
  
    <div class="form-group">
    {{ Form::label('Birthplace')}}
    {{ Form::text('birth_place','', ['class' => 'form-control', 'required'])}}
</div>

<div class="form-group">
    {{ Form::label('Citizenship') }}
    {{ Form::text('ctznshp','', ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
    {{ Form::label('Religion') }}
    {{ Form::text('religion','', ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
{{ Form::label('Educational Attaintment') }}
{{ Form::text('educ_attain','', ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
{{ Form::label('Occupation')}}
{{ Form::text('occupation','', ['class' => 'form-control', 'required'])}}
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
            {{Form::password('current',['class' => 'form-control', 'placeholder' => 'Current Password'])}}
        </div>
    

         
     <div class="form-group"> 
            {{Form::label('current2', 'Current Password')}} 
            {{Form::password('current2',['class' => 'form-control', 'placeholder' => 'Current Password'])}}
        </div>
          
</div>

    
        <div style="float:right;margin-bottom:25px;">
            {{Form::submit('SAVE', ['class' => 'btn btn-primary'])}}
        </div>
        
</div> <!-- end of container-->
{!! Form::close() !!}

@endsection

@section ('scripts')
<script>
            
$(".propic").click(function(e) {
    $("#changeprofpic").click();
});
   


</script>
@endsection