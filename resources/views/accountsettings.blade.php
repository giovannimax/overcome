@extends('layouts.navbar')

@section('content')

<?php
    use App\Http\Controllers\Auth\RegisterController;
    $availl = RegisterController::getprovinces();

    use App\Http\Controllers\DiariesController;
    $result = DiariesController::retpsych(Auth::user()->id);
    $resultt = DiariesController::retdetails(Auth::user()->id);

?>
{!! Form::open(['action' => 'DiariesController@updatepsych', 'method' => 'GET']) !!}
<div class="container">
@foreach($result as $res)
 <div class="profile-pic">
       <div class="imgwrap rounded-circle">
           <img class="propic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
        <!-- <input  id="changeprofpic" type="file" 
       name="profile_photo" placeholder="Photo" required="" accept=".jpg, .jpeg, .png" capture>       -->
       <span class="edit"><i class="material-icons changepp">camera_alt</i><b>Change Picture</b></span>
       <input type="hidden" name="psych_id" value="{{$res->psych_id}}">
      </div> 


    <div class="w-75" style="margin-left: 130px;">
     <h3 style="color:#f58c37;">Personal Information</h3>
        <div class="form-group">
            {{Form::label('fname', 'First Name')}} 
            {{Form::text('psych_fname', $res->psych_fname,['class' => 'form-control', 'disabled', 'placeholder' => 'First Name'])}} 
            </div>
        
        <div class="form-group"> 
            {{Form::label('mname', 'Middle Name')}} 
            {{Form::text('psych_mname', $res->psych_mname,['class' => 'form-control', 'disabled', 'placeholder' => 'Middle Name'])}} 
        </div>
    
        <div class="form-group"> 
            {{Form::label('lname', 'Last Name')}} 
            {{Form::text('psych_lname', $res->psych_lname,['class' => 'form-control', 'disabled','placeholder' => 'Last Name'])}} 
        </div>
            <p style="color:red;font-size:12px;">Note:To change your name please <a href="/" style="color:blue;text-decoration:underline;">Contact Us</a></p>
       

        <div class="form-group">
        <div class="row">
             <div class="col-md-4"> {{ Form::label('Gender') }}</div>
            @if($res->psych_gndr=="male")
             <div class="col-md-4"> {{ Form::radio('sex', 'male' ,  ['checked' => "checked"]) }} Male </div>
            @else
            <div class="col-md-4"> {{ Form::radio('sex', 'male') }} Male </div>
            @endif
            @if($res->psych_gndr=="female")
             <div class="col-md-4">{{ Form::radio('sex', 'female' ,  ['checked' => "checked"]) }} Female </div>
             @else
             <div class="col-md-4">{{ Form::radio('sex', 'female') }} Female </div>
             @endif
        </div>
    </div>

            
    <div class="form-group">
    {{ Form::label('Birthday') }}
   {{ Form::date('psych_dob',$res->psych_dob, ['class' => 'form-control'])}}
    </div> 

@foreach($resultt as $ress)
    <div class="form-group"> 
            {{Form::label('email', 'Email Address')}} 
            {{Form::text('email',$ress->email,['class' => 'form-control', 'placeholder' => 'Email Address'])}} 
        </div>
    @endforeach
          <div class="form-group"> 
            {{Form::label('mobile', 'Mobile No.')}} 
            {{Form::text('psych_telphone', $res->psych_telphone,['class' => 'form-control', 'placeholder' => 'Mobile Number'])}} 
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
        {{ Form::text('license_no',$res->license_no, ['class' => 'form-control','required'])}}
    </div>
    <div class="form-group">
        {{ Form::label('License Title') }}
        {{ Form::text('license_title',$res->license_title, ['class' => 'form-control','required'])}}
    </div>

    <hr>
        
  <h3 style="color:#f58c37;margin-top:25px;">Clinic Details</h3><br>
  <div class="form-group">
        {{ Form::label('Clinic Name') }}
        {{ Form::text('clinic_name',$res->clinic_name, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Address') }}
        {{ Form::text('clinic_address',$res->clinic_address, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Province') }}
       <select name="clinic_province" class="form-control">
       <?php
                    foreach($availl as $av){
                        if($res->clinic_province==$av->prov_name)
                        echo '<option selected>'.$av->prov_name.'</option>';
                        else
                        echo '<option>'.$av->prov_name.'</option>';
                    }
                ?>
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Email Address') }}
       {{ Form::text('clinic_email',$res->clinic_email, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('Clinic Phone Number') }}
        {{ Form::text('clinic_phone',$res->clinic_phone, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{ Form::label('Clinic Hours') }}
        {{ Form::text('clinic_hours','', ['class' => 'form-control'])}}
    </div>
        <div style="float:right;margin-bottom:25px;">
        <input type="submit"  class="btn btn-primary" value="Save">
        </div>
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