@extends('layouts.main_layout')

@section('content')

    <h1 class="">{{$customer->first_name.' '.$customer->surname}}</h1>
    <div class="card">
        <form>
            @include('customers.partials.form')
        </form>
    </div>
@endsection
