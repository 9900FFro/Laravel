@extends('layouts.main')

@section('title')
    @parent
    форма
@endsection

@section('content')
    <form action="{{route('form')}}" method="post">
        @csrf
        <div>
            <label for="name">Имя: </label>
        </div>
        <div>
            <input id="name" type="text">
        </div>
        <div>
            <label for="comment">Комментарий: </label>
        </div>
        <div>
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit">
    </form>
@endsection