@extends('layouts.main_layout')

@section('content')

    <h1 class="">Create new type of training session </h1>
    <div class="card">
        <form method="POST" action="{{route('trainings.store')}}">
            @include('trainings.partials.form')
        </form>
    </div>
@endsection
