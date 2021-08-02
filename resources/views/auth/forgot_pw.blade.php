@extends('auth.layouts.login')
@section('title', 'Password Reset')
@section('content')
<div>
    <h1 class="mb-5 text-center text-light">Reset your password</h1>
    <form method="POST" action="{{route('password.email')}}">
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

        <button type="submit" class="btn btn-neon">Reset</button>
    </form>
</div>
@endsection