@extends('layouts.main_layout')

@section('content')

    <h1 class="">Create new article</h1>
    <div class="card">
        <form method="POST" action="{{route('articles.store')}}">
            @include('website.articles.partials.form')
        </form>
    </div>
@endsection
