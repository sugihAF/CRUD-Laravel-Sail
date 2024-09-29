@extends('layouts.app')
@section('title', 'Tambah Menu')
@section('content')
    {{ Form::open(['route' => 'items.store']) }}
    <div class="form-group">
        {{ Form::label('name', 'Menu Name ：') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description ：') }}
        {{ Form::text('description', null, ['class' => 'form-control']) }}
        @if ($errors->first('description'))
            <p class="validation">※{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Category ：') }}
        {{ Form::select('category_id', $categories ,null, ['class' => 'form-control']) }}
        @if ($errors->first('category'))
            <p class="validation">※{{$errors->first('category')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price ：') }}
        {{ Form::number('price', null, ['class' => 'form-control']) }}
        @if ($errors->first('price'))
            <p class="validation">※{{$errors->first('price')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('image_url', 'URL:') }}
        {{ Form::text('image_url', null, ['class' => 'form-control']) }}
        @if ($errors->first('image_url'))
            <p class="validation">※{{$errors->first('image_url')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
