@extends('layouts.master')

@section('content')

<h1>Add to the To Do List</h1>

{{ Form::open(array('route' => 'items.store')) }}
  <ul>
    <li>
        {{ Form::label('title', 'Item:') }}
        {{ Form::text('title') }}
    </li>

    <div>
      {{ Form::submit('Submit') }}
      {{ link_to_route('items.index', 'Cancel') }}
    </div>
  </ul>
{{ Form::close() }}

@if ($errors->any())
  <div>
    {{ implode('', $errors->all(':message')) }}
  </div>
@endif

@stop
