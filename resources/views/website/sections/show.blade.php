@extends('layouts.main_layout')

@section('content')

    <h1 class="">"{{$section->name}}" website section</h1>
    <div class="card">
        <form>
            @include('website.sections.partials.form')
        </form>
    </div>
@endsection
