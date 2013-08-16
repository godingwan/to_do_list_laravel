@extends('layouts.master')

@section('content')

<h1>Edit Item</h1>

{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
  <div>
    {{ Form::label('title', 'Item') }}
    {{ Form::text('title') }}
  </div>
  <div>
    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
    <div class="btn btn-warning">{{ link_to_route('items.index', 'Cancel') }}</div>
  </div>
{{ Form::close() }}

@if ($errors->any())
  <div class="error">
    {{ implode('', $errors->all(':message')) }}
  </div>
@endif

@stop
