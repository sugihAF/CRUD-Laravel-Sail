@extends('layouts.app')
@section('title', 'Edit Item')
@section('content')
    {{ Form::open(['route' => ['items.update', $item->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', 'Name：') }}
        {{ Form::text('name', $item->name, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description：') }}
        {{ Form::text('description', $item->description, ['class' => 'form-control']) }}
        @if ($errors->first('description'))
            <p class="validation">※{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Category:') }}
        {{ Form::select('category_id',$categories ,$item->category->id, ['class' => 'form-control']) }}
        @if ($errors->first('category'))
            <p class="validation">※{{$errors->first('category')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price：') }}
        {{ Form::number('price', $item->price, ['class' => 'form-control']) }}
        @if ($errors->first('price'))
            <p class="validation">※{{$errors->first('price')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('image_url', 'URL:') }}
        {{ Form::text('image_url', $item->image_url, ['class' => 'form-control']) }}
        @if ($errors->first('image_url'))
            <p class="validation">※{{$errors->first('image_url')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::submit('Edit', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
