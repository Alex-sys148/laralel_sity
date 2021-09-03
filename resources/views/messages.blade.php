@extends('layuts.app')




@section('title-block')
    Все сообщения
@endsection

@section('content')
    <h1>Все сообщения</h1>

    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <h3>{{ $el->email }}</h3>
            <h3><small>{{ $el->created_at }}</small></h3>
            <a href="{{ route('contact-data-one' , $el->id) }}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection






