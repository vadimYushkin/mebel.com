@extends('layouts.app')
@section('title-blog')
Контакты
@endsection
@section('content')
<h1>Контакты</h1>

<form  action="{{ route('forma') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Введите email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
