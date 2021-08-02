@extends('layouts.main_layout')

@section('content')

    <h1 class="">Edit customer</h1>
    <div class="card">
        <form method="POST" action="{{route('customers.update', $customer->id)}}">
            @method('PATCH')
            @include('customers.partials.form')
        </form>
    </div>
@endsection
