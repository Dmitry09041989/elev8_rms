@extends('auth.layouts.login')
@section('title', 'Login')
@section('content')
<div>
    <h1 class="mb-5 text-center text-light">Login</h1>
    <form method="POST" action="{{route('login')}}">
        @csrf
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
            <a href="{{route('password.request')}}" class="text-muted">Forgot your password?</a>
        </div>

        <button type="submit" class="btn btn-neon">Login</button>
    </form>
</div>
@endsection
