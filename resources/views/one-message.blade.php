@extends('layuts.app')




@section('title-block')
    {{$data->subject}}
@endsection

@section('content')
    <h1>{{$data->subject}}</h1>


        <div class="alert alert-info">

            <h3>{{ $data->message }}</h3>
            <h3>{{ $data->name }}</h3>
            <h3>{{ $data->email }}</h3>
            <h3><small>{{ $data->created_at }}</small></h3>
            <a href="{{ route('contact-update' , $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('contact-delete' , $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>

@endsection






