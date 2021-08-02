@extends('auth.layouts.login')
@section('title', 'Password Reset')
@section('content')
    <div class="container">
        <h1 class="mb-5 text-center text-light">Reset your password</h1>
        <form method="POST" action="{{route('password.update')}}">
            @csrf
            <input type="hidden" name="token" value="{{$request->route('token')}}">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ $request->email }}">
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



            <button type="submit" class="btn btn-neon">Update</button>
        </form>
    </div>
@endsection
