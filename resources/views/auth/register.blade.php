@extends('layouts.main_layout')

@section('content')

    <h1 class="">Register</h1>
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{old('email')}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Repeat Password</label>
            <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" aria-describedby="password_confirmation">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        {{--        <div class="mb-3 form-check">--}}
        {{--            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
        {{--            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
        {{--        </div>--}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
