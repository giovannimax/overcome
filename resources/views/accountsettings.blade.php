@extends('layouts.navbar')

@section('content')

<?php
    use App\Http\Controllers\Auth\RegisterController;
    $availl = RegisterController::getprovinces();
?>

<div class="containerforreg">
    
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
<img src="..." alt="..." class="img-thumbnail">
<div class="form-group">
 <label for="image">Upload Card License</label>
 <input type="file" class="form-control" name="image" id="image">
  </div>
        
  <h5>Clinic Details</h5><br>
    <div class="form-group">
        {{ Form::label('Clinic Name') }}
        {{ Form::text('clinic_name','', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Address') }}
        {{ Form::text('clinic_address','', ['class' => 'form-control'])}}
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
        
</div> <!-- end of container-->
{!! Form::close() !!}

    <div class="form-group">
        <div class="row">
             <div class="col-md-4"> {{ Form::label('Gender') }}</div>
             <div class="col-md-4"> {{ Form::radio('psych_gndr', 'male') }} Male </div>
             <div class="col-md-4">{{ Form::radio('psych_gndr', 'female') }} Female </div>
        </div>
    </div>

    <div class="form-group">
    {{ Form::label('Birthday') }}
    {!! Form::date('psych_dob', \Carbon\Carbon::now(), ['class' => 'form-control']) ; !!}
    </div>   
  

    <div class="form-group">
        {{ Form::label('Mobile/Telephone Number') }}
    {!! Form::text('psych_telphone','', ['class' => 'form-control']); !!}
    </div>
    <hr>
    <h5>Professional Background</h5><br>
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
    <h5>Clinic Details</h5><br>
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
{{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg btnsub'])}}
    {!! Form::close() !!}
Psychologist
    
    </div> <!-- End of row reg -->
    </div> <!-- End of container1 -->

</div> <!-- End of Contaier for reg -->
@endsection