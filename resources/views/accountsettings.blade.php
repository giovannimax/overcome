@extends('layouts.navbar')

@section('content')

<?php
    use App\Http\Controllers\Auth\RegisterController;
    $availl = RegisterController::getprovinces();
?>

<div class="container">

 <div class="profile-pic">
       <div class="imgwrap rounded-circle">
           <img class="propic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
        <input  id="changeprofpic" type="file" 
       name="profile_photo" placeholder="Photo" required="" accept=".jpg, .jpeg, .png" capture>      
       <span class="edit"><i class="material-icons changepp">camera_alt</i><b>Change Picture</b></span>
       
      </div> 


    <div class="w-75" style="margin-left: 130px;">
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
            <p style="color:red;font-size:12px;">Note:To change your name please <a href="#" style="color:blue;text-decoration:underline;">Contact Us</a></p>
         <div class="form-group"> 
            {{Form::label('address', 'Address')}} 
            {{Form::text('address', '',['class' => 'form-control', 'placeholder' => 'Address'])}} 
        </div>

        <div class="form-group">
        <div class="row">
             <div class="col-md-4"> {{ Form::label('Gender') }}</div>
             <div class="col-md-4"> {{ Form::radio('sex', 'male'),  'required' }} Male </div>
             <div class="col-md-4">{{ Form::radio('sex', 'female') }} Female </div>
        </div>
    </div>

    <div class="form-group">
    {{ Form::label('Birthday') }}
    {{ Form::date('pat_dob', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
    </div>   
  

        <div class="form-group"> 
            {{Form::label('email', 'Email Address')}} 
            {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Email Address'])}} 
        </div>
    
          <div class="form-group"> 
            {{Form::label('mobile', 'Mobile No.')}} 
            {{Form::text('mobile', '',['class' => 'form-control', 'placeholder' => 'Mobile Number'])}} 
        </div>
    <hr>
  
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
            {{Form::label('current2', 'Current Password')}} 
            {{Form::password('current2',['class' => 'form-control', 'placeholder' => 'Current Password'])}}
        </div>
          
</div>
   
     
    <h3 style="color:#f58c37;margin-top:25px;">Professional Background</h3>
         
    <div class="form-group">
        {{ Form::label('License Number') }}
        {{ Form::text('license_no','', ['class' => 'form-control','required'])}}
    </div>
    <div class="form-group">
        {{ Form::label('License Title') }}
        {{ Form::text('license_title','', ['class' => 'form-control','required'])}}
    </div>
    <div class="form-group">
 <label for="image">Upload Card License</label>
 <input type="file" class="form-control" id="image">
  </div>
    <hr>
        
  <h3 style="color:#f58c37;margin-top:25px;">Clinic Details</h3><br>
  <div class="form-group">
        {{ Form::label('Clinic Name') }}
        {{ Form::text('clinic_name','', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Address') }}
        {{ Form::text('clinic_address','', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Province') }}
       <select name="clinic_province" class="form-control">
       <?php
                    foreach($availl as $av){
                        echo '<option>'.$av->prov_name.'</option>';
                    }
                ?>
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Email Address') }}
       {{ Form::text('clinic_email','', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Phone Number') }}
        {{ Form::text('clinic_phone','', ['class' => 'form-control'])}}
    </div>
    
        <div style="float:right;margin-bottom:25px;">
            {{Form::submit('SAVE', ['class' => 'btn btn-primary'])}}
        </div>
    </div> 
</div> <!-- end of container-->


    


@endsection

@section ('scripts')
<script>
            
$(".propic").click(function(e) {
    $("#changeprofpic").click();
});
   


</script>
@endsection