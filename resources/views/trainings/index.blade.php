@extends('layouts.main_layout')
@section('title', 'Trainings')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('content')

    <div class="row my-3">
        <div class="col-12">

            <h1 class="float-start">Training session types</h1>
            <a class="btn btn-sm btn-success mt-3 me-3 float-end" href="{{route('trainings.create')}}">Create</a>
        </div>

    </div>
    @include('partials.alert')
    <div class="card">
        <table class="table " id="trainings_table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($trainings as $training)
                <tr>
                    <td><strong>{{$training->id}}</strong></td>
                    <td>{{$training->name}}</td>

                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('trainings.show', $training->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('trainings.edit', $training->id)}}">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger"
                                onclick="event.preventDefault();
                                    document.getElementById('delete-training-form-{{$training->id}}').submit()">
                            Delete
                        </button>
                        <form id="delete-training-form-{{$training->id}}" action="{{route('trainings.destroy', $training->id)}}" method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>





@endsection
@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(function() {
            $(document).ready( function () {
                $('#trainings_table').DataTable();
            } );
        });

    </script>
@endsection
