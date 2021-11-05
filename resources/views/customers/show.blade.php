@extends('layouts.main_layout')

@section('content')

    <h1 class="">{{$customer->first_name.' '.$customer->surname}}</h1>
    <div class="card">
        <form>
            @include('customers.partials.form')
        </form>

        <hr class="mt-5">
        <h3 class="mt-5">Sent Messages</h3>
    @foreach($messages as $message)
        <div class="my-4">
{{--            <div class="container   align-self-center" style="margin-top: 15vh">--}}
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input disabled name="title" type="text" class="form-control mb-1" id="title" aria-describedby="emailHelp" value="{{isset($message) ? $message->title : ''}}">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea disabled name="content" class="form-control" placeholder="Enter your message here" id="content" style="height: 25vh">{{old('content')}}{{isset($message) ? $message->content : ''}}</textarea>
                            <label for="content">Message contents</label>
                        </div>
                    </div>
                </form>
            </div>
            <hr class="my-3">
    @endforeach
    </div>
@endsection
