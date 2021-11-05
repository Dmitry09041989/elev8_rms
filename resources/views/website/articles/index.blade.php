@extends('layouts.main_layout')
@section('title', 'Articles')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('content')

    <div class="row my-3">
        <div class="col-12">

            <h1 class="float-start">Website articles</h1>
            <a class="btn btn-sm btn-success mt-3 me-3 float-end" href="{{route('articles.create')}}">Create</a>
        </div>

    </div>
    @include('partials.alert')
    <div class="card">
        <table class="table " id="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td><strong>{{$article->id}}</strong></td>
                    <td>{{$article->title}}</td>

                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('articles.show', $article->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('articles.edit', $article->id)}}">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger"
                                onclick="event.preventDefault();
                                    document.getElementById('delete-article-form-{{$article->id}}').submit()">
                            Delete
                        </button>
                        <form id="delete-article-form-{{$article->id}}" action="{{route('articles.destroy', $article->id)}}" method="POST" style="display: none">
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
                $('#table').DataTable();
            } );
        });

    </script>
@endsection
