@extends('layouts.main_layout')

@section('content')

    <h1 class="">Create new website section</h1>
    <div class="card">
        <form method="POST" action="{{route('sections.store')}}">
            @include('website.sections.partials.form')
        </form>
    </div>
@endsection
