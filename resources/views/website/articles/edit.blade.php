@extends('layouts.main_layout')

@section('content')

    <h1 class="">Edit article</h1>
    <div class="card">
        <form method="POST" action="{{route('articles.update', $article->id)}}">
            @method('PATCH')
            @include('website.articles.partials.form')
        </form>
    </div>
@endsection
