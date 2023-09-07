@extends('layouts.front')
@section('content')
    @foreach ($articles as $article)
        <article style="text-align: center;">
            <h1>{{ $article->title }}</h1>
            <h6>{{ $article->created_at }} </h6>
            <h6><span class="badge badge-secondary"><a
                        href="{{ route('category', ['id' => $article->category_id]) }}">{{ $article->name }}</a></span></h6>
            <img src="{{ asset($article->img) }}" alt="this is hack img">
            <p class="lead">{{ $article->title }}</p> 
            <div class="mt-3 pt-3">
                <a class="btn btn-primary" href="{{ route('article', ['id' => $article->id]) }}">Read More</a>
            </div>
            <hr>
        </article>
    @endforeach
    <br>
    {{-- <div class="mt-3 pt-3 text-center">
        <a class="btn btn-primary" href="{{ route('home') }}">Return to Profile</a>
    </div> --}}
    <br>
    <br>
@endsection
