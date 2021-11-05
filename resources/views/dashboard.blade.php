@extends('layouts.main_layout')
@section('title', 'Dashboard')
@section('content')



    <div class=" container mt-5">
        <h1>Dashboard</h1>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class=" col">
                    <a href="{{ route('customers.index') }}" class="text-decoration-none ">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">Customers</div>
                            <div class="card-body">
                                <h5 class="card-title">View all customers</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="{{route('customers.create')}}" class="text-decoration-none">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Create</div>
                        <div class="card-body">
                            <h5 class="card-title">Add new customer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </a>
                <div class="col">
                    <a href="{{route('trainings.index')}}" class="text-decoration-none">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Training sessions</div>
                            <div class="card-body">
                                <h5 class="card-title">View all training session types</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('trainings.create')}}" class="text-decoration-none">
                        <div class="card text-dark bg-warning mb-3">
                            <div class="card-header">Create</div>
                            <div class="card-body">
                                <h5 class="card-title">Create new session type</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection

