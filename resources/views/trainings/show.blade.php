@extends('layouts.main_layout')

@section('content')

    <h1 class="">"{{$training->name}}" training session</h1>
    <div class="card">
        <form>
            @include('trainings.partials.form')
        </form>
    </div>
@endsection
