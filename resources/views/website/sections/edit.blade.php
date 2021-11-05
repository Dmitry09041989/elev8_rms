@extends('layouts.main_layout')

@section('content')

    <h1 class="">Edit "{{$section->name}}" website section</h1>
    <div class="card">
        <form method="POST" action="{{route('sections.update', $section->id)}}">
            @method('PATCH')
            @include('website.sections.partials.form')
        </form>
    </div>
@endsection
