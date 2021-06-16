@extends('layouts.app')
@section('title-blog')
Все сообщения
@endsection
@section('content')
<h1>Все сообщения</h1>
    @foreach($data as $element)
      <div class="alert alert-info">
        <h3>{{ $element->subject }}</h3>
        <p>{{ $element->email }}</p>
        <p><small>{{ $element->created_at }}</small></p>
        <a href="{{ route('DataContactOne', $element->id) }}"><button type="button" class="btn btn-warning">Раскрыть сообщение</button></a>
      </div>
@endforeach()
@section('aside')
  @parent
<p>Дополнительно про мебель</p>
@endsection
@endsection
