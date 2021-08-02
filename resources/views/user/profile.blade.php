@extends('layouts.main_layout')
@section('title', 'Password Reset')
@section('content')
    <div class="container">
        @include('partials.alert')
        <h1 class="mb-5 ">Update your personal details</h1>
        <form method="POST" action="{{route('user-profile-information.update')}}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{ auth()->user()->name }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ auth()->user()->email }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>




            <button type="submit" class="btn btn-neon">Update</button>
        </form>
    </div>
@endsection
