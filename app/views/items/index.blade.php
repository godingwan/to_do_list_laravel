@extends('layouts.master')

@section('content')

<h1>To Do List</h1>

<div class="btn btn-primary">{{ link_to_route('items.create', 'Add a to do item') }}</div>

@if ($items)
  @foreach($items as $item)
    <h3>{{ $item->title }}</h3>
    <div>{{ link_to_route('items.edit', 'Edit', array($item->id), array('class' => 'btn btn-info')) }}</div>
    <div>
      {{ Form::open(array('method' => 'DELETE', 'route' => array('items.destroy', $item->id))) }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
      {{ Form::close() }}
    </div>
  @endforeach
@else
  <p>Add an item to the list.</p>
@endif

@stop
