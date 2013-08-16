@extends('layouts.master')

@section('content')

  <h1>To Do List</h1>

  @if (false)
    @foreach($items as $item)
      <p>{{ $item->title }}</p>
    @endforeach
  @else
    <p>Add an item to the list.</p>
  @endif

@stop
