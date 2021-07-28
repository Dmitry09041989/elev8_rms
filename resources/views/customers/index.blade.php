@extends('layouts.main_layout')
@section('title', 'Customers')
@section('content')
    <h1>Customers</h1>

    @livewire('list-customers')

@endsection

