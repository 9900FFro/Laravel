@extends('layouts.main')

@section('title')
    @parent
    News
@endsection

@section('content')
    @forelse($category as $key => $value)
        @php
            $url = route('news::card', ['category' => $key])
        @endphp

        <div>
            <a href="{{$url}}">{{$key}} news</a>
        </div>
    @empty
        no news
    @endforelse
@endsection