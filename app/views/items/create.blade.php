@extends('layouts.master')

@section('content')

<h1>Add to the To Do List</h1>

{{ Form::open(array('route' => 'items.store')) }}
  <div>
      {{ Form::label('title', 'Item:') }}
      {{ Form::text('title') }}
  </div>

  <div>
    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    <div class="btn btn-warning">{{ link_to_route('items.index', 'Cancel') }}</div>
  </div>
{{ Form::close() }}

@if ($errors->any())
  <div class="error">
    {{ implode('', $errors->all(':message')) }}
  </div>
@endif

@stop
