@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'Auth\RegisterController@registerpat', 'method' => 'POST']) !!}
{!! Form::hidden('pat_id', Auth::user()->id); !!}
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

  {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
{!! Form::close() !!}
Patient
@endsection
