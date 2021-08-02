@extends('layouts.main_layout')

@section('content')

    <h1 class="">Create new customer</h1>
    <div class="card">
        <form method="POST" action="{{route('customers.store')}}">
            @include('customers.partials.form')
        </form>
    </div>
@endsection
