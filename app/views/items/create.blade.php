@extends('layouts.master')

@section('content')

<h1>Add to the To Do List</h1>

{{ Form::open(array('route' => 'items.store')) }}
  <ul>
    <li>
        {{ Form::label('title', 'Item:') }}
        {{ Form::text('title') }}
    </li>

    <li>
      {{ Form::submit('Submit', array('class' => 'btn')) }}
    </li>
  </ul>
{{ Form::close() }}

@if ($errors->any())
  <ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
  </ul>
@endif

@stop
