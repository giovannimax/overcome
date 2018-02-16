@extends('layouts.app')

@section('content')
<div class="container signup">

{!! Form::open(['action' => 'Auth\RegisterController@registerpsych', 'method' => 'POST', 'class' => 'register-form']) !!}
{!! Form::hidden('psych_id', Auth::user()->id); !!}
<div class="row">
<div class="col-md-6 register-css">
<h5>Personal Information</h5><br>
<div class="form-group">
    {!! Form::label('Email Address'); !!}
    {!! Form::text('psych_email','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('First Name'); !!}
    {!! Form::text('psych_fname','', ['class' => 'form-control', 'placeholder' => 'John']); !!}
</div>
<div class="form-group">
    {!! Form::label('Middle Name'); !!}
    {!! Form::text('psych_mname','', ['class' => 'form-control', 'placeholder' => 'Middle']); !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name'); !!}
    {!! Form::text('psych_lname','', ['class' => 'form-control', 'placeholder' => 'Doe']); !!}
</div>
<div class="form-group">
    <div class="row">
    <div class="col-md-5">
    {{ Form::radio('psych_gndr', 'male') }} Male
    {{ Form::radio('psych_gndr', 'female') }} Female
    </div>
    <div class="col-md-2">{!! Form::label('Birthday'); !!}</div>
    <div class="col-md-5">{!! Form::date('psych_dob', \Carbon\Carbon::now(), ['class' => 'form-control']) ; !!}</div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Mobile/Telephone Number'); !!}
    {!! Form::text('psych_phone','', ['class' => 'form-control']); !!}
</div>
<hr>
<h5>Professional Background</h5><br>
<div class="form-group">
    {!! Form::label('License Number'); !!}
    {!! Form::text('license_no','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('License Title'); !!}
    {!! Form::text('license_title','', ['class' => 'form-control']); !!}
</div>
<hr>
<h5>Clinic Details</h5><br>
<div class="form-group">
    {!! Form::label('Clinic Name'); !!}
    {!! Form::text('clinic_name','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Clinic Address'); !!}
    {!! Form::text('clinic_address','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Clinic Email Address'); !!}
    {!! Form::text('clinic_email','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Clinic Phone Number'); !!}
    {!! Form::text('clinic_phone','', ['class' => 'form-control']); !!}
</div>
<hr>
</div>
<div class="col-md-5 offset-md-1">
<div class="signup-notes bg-info">
<h5>Notes about your privacy</h5>
  <ul class="list-unstyled">
    <li>Your email address is kept strictly private. It is never shared, sold or disclosed to anyone. Even your counselor won't know your real email address.</li>
    <li>The content of all the messages between you and your counselor will appear only in our secure private system.  We will only send you emails with alerts about new messages that are waiting for you.</li>
    <li>Your email address is used to login into our private secure server. Make sure you type it correctly.</li>
  </ul>
</div>
</div>
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
{!! Form::close() !!}
Psychologist

</div>
@endsection
