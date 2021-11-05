@extends('layouts.main_layout')
@section('title', 'Sections')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('content')

    <div class="row my-3">
        <div class="col-12">

            <h1 class="float-start">Website sections</h1>
            <a class="btn btn-sm btn-success mt-3 me-3 float-end" href="{{route('sections.create')}}">Create</a>
        </div>

    </div>
    @include('partials.alert')
    <div class="card">
        <table class="table " id="sections_table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sections as $section)
                <tr>
                    <td><strong>{{$section->id}}</strong></td>
                    <td>{{$section->name}}</td>

                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('sections.show', $section->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('sections.edit', $section->id)}}">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger"
                                onclick="event.preventDefault();
                                    document.getElementById('delete-section-form-{{$section->id}}').submit()">
                            Delete
                        </button>
                        <form id="delete-section-form-{{$section->id}}" action="{{route('sections.destroy', $section->id)}}" method="POST" style="display: none">
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
                $('#sections_table').DataTable();
            } );
        });

    </script>
@endsection
