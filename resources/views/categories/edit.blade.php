@extends('layouts.app')
@section('title', 'Edit Category')
@section('content')
    {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', 'New Category Name：') }}
        {{ Form::text('name', $category->name, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
