@extends('layouts.app')

@section('content')
<div class="container signup">

{!! Form::open(['action' => 'Auth\RegisterController@registerpat', 'method' => 'POST', 'class' => 'register-form']) !!}
{!! Form::hidden('pat_id', Auth::user()->id); !!}
<div class="row">
<div class="col-md-6 register-css">
<h5>Personal Information</h5><br>
<div class="form-group">
    {!! Form::label('First Name'); !!}
    {!! Form::text('pat_fname','', ['class' => 'form-control', 'placeholder' => 'John']); !!}
</div>
<div class="form-group">
    {!! Form::label('Middle Name'); !!}
    {!! Form::text('pat_mname','', ['class' => 'form-control', 'placeholder' => 'Middle']); !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name'); !!}
    {!! Form::text('pat_lname','', ['class' => 'form-control', 'placeholder' => 'Doe']); !!}
</div>
<div class="form-group">
    <div class="row">
    <div class="col-md-5">
    {{ Form::radio('pat_gndr', 'male') }} Male
    {{ Form::radio('pat_gndr', 'female') }} Female
    </div>
    <div class="col-md-2">{!! Form::label('Birthday'); !!}</div>
    <div class="col-md-5">{!! Form::date('pat_bdate', \Carbon\Carbon::now(), ['class' => 'form-control']) ; !!}</div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Birthplace'); !!}
    {!! Form::text('birth_place','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Citizenship'); !!}
    {!! Form::text('ctznshp','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Religion'); !!}
    {!! Form::text('religion','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Educational Attaintment'); !!}
    {!! Form::text('educ_attain','', ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('Occupation'); !!}
    {!! Form::text('occupation','', ['class' => 'form-control']); !!}
</div>
</div>
<div class="col-md-5 offset-md-1">
<div class="signup-notes bg-info">
<h5>Notes about your privacy</h5>
    <ul class="list-unstyled">
      <li>Your email address is kept strictly private. It is never shared, sold or disclosed to anyone. Even your counselor won't know your real email address. </li>
      <li>The content of all the messages between you and your counselor will appear only in our secure private system. We will only send you emails with alerts about new messages that are waiting for you.</li>
      <li>Your email address is used to login into our private secure server. Make sure you type it correctly.</li>
    </ul>
</div>
</div>
</div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
    {!! Form::close() !!}
Patient
</div>

@endsection
