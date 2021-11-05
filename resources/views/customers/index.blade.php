@extends('layouts.main_layout')
@section('title', 'Customers')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('content')

    <div class="row my-3">
        <div class="col-12">

            <h1 class="float-start">Customers</h1>
            <a class="btn btn-sm btn-success mt-3 me-3 float-end" href="{{route('customers.create')}}">Create</a>
        </div>

    </div>
    @include('partials.alert')
    <div class="card ">
        <table class="table" id="customers_table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Street</th>
                <th scope="col">Town/City</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td><strong>{{$customer->id}}</strong></td>
                    <td>{{$customer->first_name.' '.$customer->surname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->street}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->phone_number}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('customers.show', $customer->id)}}">View</a>
                        <a class="btn btn-sm btn-success" href="{{route('customers.message', $customer->id)}}">Message</a>
                        <a class="btn btn-sm btn-warning" href="{{route('customers.edit', $customer->id)}}">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger"
                                onclick="event.preventDefault();
                                    document.getElementById('delete-customer-form-{{$customer->id}}').submit()">
                            Delete
                        </button>
                        <form id="delete-customer-form-{{$customer->id}}" action="{{route('customers.destroy', $customer->id)}}" method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        {{$customers->links()}}--}}
    </div>





@endsection
@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(function() {
            $(document).ready( function () {
                $('#customers_table').DataTable();
            } );
        });

    </script>
@endsection
