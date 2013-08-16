@extends('layouts.master')

@section('content')

<h1>Edit Item</h1>

{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
<ul>
  <li>
    {{ Form::label('title', 'Item') }}
    {{ Form::text('title') }}
  </li>
  <li>
    {{ Form::submit('Update') }}
    {{ link_to_route('items.index', 'Cancel') }}
  </li>
</ul>
{{ Form::close() }}

@if ($errors->any())
  <div>
    {{ implode('', $errors->all(':message')) }}
  </div>
@endif

@stop
