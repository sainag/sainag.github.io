@extends('layouts.master')

@section('title','My Dictionary - Add Word')

@section('content')
<h2>Add a Word</h2>
  {!! Form::model(new App\Word, ['route'=> ['words.store']]) !!}
  @include('partials/_form', ['submit_text'=>'Save Word'])
  {!! Form::close() !!}
  @if ($errors->any())
    <div class="flash alert-danger">
      @foreach ($errors->all() as $error)
      <p>
        {{$error}}
      </p>
      @endforeach
    </div>
  @endif
@stop
