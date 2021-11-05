@extends('layouts.main_layout')
@section('title', 'Message')
@section('content')

    <div class="container   align-self-center" style="margin-top: 15vh">
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{isset($customer) ? $customer->email : ''}}">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Enter your message here" id="content" style="height: 25vh"></textarea>
                    <label for="content">Message contents</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

@endsection
