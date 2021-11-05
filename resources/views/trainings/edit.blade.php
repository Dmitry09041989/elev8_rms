@extends('layouts.main_layout')

@section('content')

    <h1 class="">Edit "{{$training->name}}" training session </h1>
    <div class="card">
        <form method="POST" action="{{route('trainings.update', $training->id)}}">
            @method('PATCH')
            @include('trainings.partials.form')
        </form>
    </div>
@endsection
