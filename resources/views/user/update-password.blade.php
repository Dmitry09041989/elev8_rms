@extends('layouts.main_layout')
@section('title', 'Password Update')
@section('content')

<div>
    <h1 class="mb-5 text-center text-light">Reset your password</h1>
    @include('partials.alert')
    <form method="POST" action="{{route('user-password.update')}}">
        @csrf
        @method("PUT")

        <div class="mb-3">

            <label for="current_password" class="form-label">Current Password</label>
            <input name="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" id="current_password" aria-describedby="current_password">
            @error('current_password', 'updatePassword')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input name="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" id="password" aria-describedby="password">
            @error('password', 'updatePassword')
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

        <button type="submit" class="btn btn-neon">Save</button>
    </form>
</div>
@endsection
