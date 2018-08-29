@extends('email.layout')
@section('content')
  <div class="message-text">Имя: {{ $name }}
    @if ($phone)<br/>Телефон: {{ $phone }}
    @endif
    @if ($email)<br/>Email: {{ $email }}
    @endif
  </div>
@endsection
