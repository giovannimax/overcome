@extends('layouts.anothernavbar')
@section('content')

<?php
    use App\Http\Controllers\Auth\RegisterController;
    $availl = RegisterController::getprovinces();
?>

<div class="containerforreg">
    
    <div class="container1">

    {!! Form::open(['action' => 'Auth\RegisterController@registerpsych', 'method' => 'POST', 'class' => 'register-form']) !!}
    <div class="row rowreg">
    <h3>Personal Information</h3><br>
    {!! Form::hidden('psych_id', Auth::user()->id); !!}
    {!! Form::hidden('created_at', date('Y-m-d')); !!}
    <div class="form-group">
        {{Form::label('First Name') }}
        {{Form::text('psych_fname','', ['class' => 'form-control', 'placeholder' => 'John' ,'required'])}}
    </div>

    <div class="form-group">
        {{ Form::label('Middle Name') }}
        {{ Form::text('psych_mname','', ['class' => 'form-control', 'placeholder' => 'Middle'])}}
    </div>

    <div class="form-group">
         {{ Form::label('Last Name') }}
         {{ Form::text('psych_lname','', ['class' => 'form-control', 'placeholder' => 'Doe','required'])}}
    </div>

    <div class="form-group">
        <div class="row">
             <div class="col-md-4"> {{ Form::label('Gender') }}</div>
             <div class="col-md-4"> {{ Form::radio('psych_gndr', 'male') }} Male </div>
             <div class="col-md-4">{{ Form::radio('psych_gndr', 'female') }} Female </div>
        </div>
    </div>
    <div class="form-group"> 
            {{Form::label('email', 'Email Address')}} 
            {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Email Address'])}} 
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
  
     <div class="container2">
     <div class="snotes">
    <div class="snotes2 bg-info">
<h5>Notes about your privacy</h5>
    <ul class="list-unstyled">
    <ul class="list-unstyled">
    <li>Your email address is kept strictly private. It is never shared, sold or disclosed to anyone. Even your patients won't know your real email address.</li>
    <li>The content of all the messages between you and your patients will appear only in our secure private system.  We will only send you emails with alerts about new messages that are waiting for you.</li>
    <li>Your email address is used to login into our private secure server. Make sure you type it correctly.</li>
    </ul>
    </div>
    </div>

     </div> <!-- End of container2 -->

</div> <!-- End of Contaier for reg -->
@endsection