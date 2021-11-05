@extends('layouts.main_layout')

@section('content')

    <h1 class="">"Article</h1>
    <div class="card">
        <form>
            @include('website.articles.partials.form')
        </form>
    </div>
@endsection
