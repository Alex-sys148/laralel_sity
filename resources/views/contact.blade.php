@extends('layuts.app')

@section('title-block')
    Cтраница контактов
@endsection

@section('content')
    <h1>Cтраница контактов</h1>



    <form action="{{ route('contact-form') }}" method="get">
{{--        {{ csrf_token() }}--}}
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Введите сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="введите сообщение"></textarea>

        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>






@endsection