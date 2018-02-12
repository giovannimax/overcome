@extends ('layouts.anothernavbar')
@section ('content')

<div class="containerforreg">
    <div class="container1">
    {!! Form::open(['action' => 'Auth\RegisterController@registerpat', 'method' => 'POST', 'class' => 'register-form']) !!}

<div class="row rowreg">
<div class="col-md-12 register-css">
<h3>Personal Information</h3>
<div class="form-group">
    {!! Form::label('First Name'); !!}
    {!! Form::text('pat_fname','', ['class' => 'form-control', 'placeholder' => 'John', 'required']); !!}
</div>
<div class="form-group">
    {!! Form::label('Middle Name'); !!}
    {!! Form::text('pat_mname','', ['class' => 'form-control', 'placeholder' => 'Middle', 'required']); !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name'); !!}
    {!! Form::text('pat_lname','', ['class' => 'form-control', 'placeholder' => 'Doe', 'required']); !!}
</div>
<div class="form-group">
    <div class="row">
   <div class="col-md-4"> {!! Form::label('Gender'); !!}</div>
   <div class="col-md-4"> {{ Form::radio('sex', 'male'),  'required' }} Male </div>
   <div class="col-md-4">{{ Form::radio('sex', 'female') }} Female </div>
    </div>
    </div>
<div class="form-group">
    {!! Form::label('Birthday'); !!}
    {!! Form::date('pat_dob', \Carbon\Carbon::now(), ['class' => 'form-control']) ; !!}
</div>  

<div class="form-group">
    {!! Form::label('Birthplace'); !!}
    {!! Form::text('birth_place','', ['class' => 'form-control', 'required']); !!}
</div>
<div class="form-group">
    {!! Form::label('Citizenship'); !!}
    {!! Form::text('ctznshp','', ['class' => 'form-control', 'required']); !!}
</div>
<div class="form-group">
    {!! Form::label('Religion'); !!}
    {!! Form::text('religion','', ['class' => 'form-control', 'required']); !!}
</div>
<div class="form-group">
    {!! Form::label('Educational Attaintment'); !!}
    {!! Form::text('educ_attain','', ['class' => 'form-control', 'required']); !!}
</div>
<div class="form-group">
    {!! Form::label('Occupation'); !!}
    {!! Form::text('occupation','', ['class' => 'form-control', 'required']); !!}
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-lg btnsub']); !!}
    {!! Form::close() !!}
Patient
</div>
</div>
</div>

    <div class="container2">
        <div class="snotes">
    <div class="snotes2 bg-info">
<h5>Notes about your privacy</h5>
    <ul class="list-unstyled">
      <li>Your email address is kept strictly private. It is never shared, sold or disclosed to anyone. Even your psychologist won't know your real email address. </li>
      <li>The content of all the messages between you and your psychologist will appear only in our secure private system. We will only send you emails with alerts about new messages that are waiting for you.</li>
      <li>Your email address is used to login into our private secure server. Make sure you type it correctly.</li>
    </ul>
    </div>
    </div>
    </div>

<div> <!-- End of container -->

@endsection
