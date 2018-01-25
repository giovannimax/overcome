@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'Auth\RegisterController@registerpsych', 'method' => 'POST']) !!}
{!! Form::hidden('psych_id', Auth::user()->id); !!}
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

  {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
{!! Form::close() !!}
Psychologist
@endsection
