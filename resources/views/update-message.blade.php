@extends('layuts.app')

@section('title-block')
   Обновление записи
@endsection

@section('content')
    <h1>Обновление записи</h1>



    <form action="{{ route('contact-update-submit' , $data->id) }}" method="get">
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" value="{{$data->name}}" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите email</label>
            <input type="text" name="email" placeholder="Введите email" value="{{$data->email}}" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему сообщения" value="{{$data->subject}}" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Введите сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="введите сообщение">{{$data->message}}</textarea>

        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>






@endsection