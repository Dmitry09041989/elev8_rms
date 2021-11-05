@extends('layouts.main_layout')
@section('title', 'Message')
@section('content')

    <div class="container   align-self-center" style="margin-top: 15vh">
        <form method="POST" action="{{route('customers.storeCustomerMessage')}}">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="email_dis" class="form-label">Email address</label>
                <input name="email_dis" type="email" class="form-control mb-1" id="email_dis" aria-describedby="emailHelp" disabled value="{{isset($customer) ? $customer->email : ''}}">
                <input name="customer_id" type="text" class="form-control mb-1" hidden id="customer_id"  value="{{isset($customer) ? $customer->id : ''}}">
                <input name="email" type="email" class="form-control mb-1" hidden id="email"  value="{{isset($customer) ? $customer->email : ''}}">
                <label for="name_dis" class="form-label">Name</label>
                <input  type="text" class="form-control mb-1" id="name_dis" aria-describedby="name_dis" disabled value="{{isset($customer) ? $customer->first_name.' '.$customer->surname : ''}}">
                <input name="name" type="text" class="form-control mb-1" hidden id="name"  value="{{isset($customer) ? $customer->first_name.' '.$customer->surname : ''}}">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control mb-1" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea name="content" class="form-control" placeholder="Enter your message here" id="content" style="height: 25vh">{{old('content')}}</textarea>
                    <label for="content">Message contents</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

@endsection
