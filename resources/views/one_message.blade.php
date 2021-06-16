@extends('layouts.app')
@section('title-blog')
{{$data->subject}}
@endsection
@section('content')
<h1>{{$data->subject}}</h1>

      <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <h3>{{ $data->subject }}</h3>
        <p>{{ $data->name }}</p><p>{{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('DataContactUpdate', $data->id) }}"><button type="button" class="btn btn-primary">Редактировать</button></a>
        <a href="{{ route('DataContactDelete', $data->id) }}"><button type="button" class="btn btn-warning">Удалить</button></a>
      </div>

@section('aside')
  @parent
<p><b></b>Дополнительно про мебель</b></p>
@endsection
@endsection
