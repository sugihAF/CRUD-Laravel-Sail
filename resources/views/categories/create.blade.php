@extends('layouts.app')
@section('title', '商品登録')
@section('content')
    {{ Form::open(['route' => 'categories.store']) }}
    <div class="form-group">
        {{ Form::label('name', 'Category Name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
