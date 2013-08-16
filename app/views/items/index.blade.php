@extends('layouts.master')

@section('content')

  <h1>To Do List</h1>

  <div>{{ link_to_route('items.create', 'Add a to do item') }}</div>

  @if ($items)
    <ol>
      @foreach($items as $item)
        <li>{{ $item->title }}</li>
        <div>{{ link_to_route('items.edit', 'Edit', array($item->id)) }}</div>
      @endforeach
    </ol>

  @else
    <p>Add an item to the list.</p>
  @endif

@stop
