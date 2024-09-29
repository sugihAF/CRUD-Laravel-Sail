@extends('layouts.app')
@section('title', 'List of Categories')
@section('content')
    {{ link_to_route('categories.create', 'New Category', [], ['class' => 'btn btn-primary']) }}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ link_to_route('categories.show', $category->id, ['category' => $category->id]) }}</td>
                <td>{{$category->name}}</td>
                <td>{{ link_to_route('categories.edit', 'Edit', ['category' => $category->id], ['class' => 'btn btn-primary']) }}</td>
                <td>
                    {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
