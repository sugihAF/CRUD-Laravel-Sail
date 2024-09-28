@extends('layouts.app')
@section('title', '商品編集')
@section('content')
    {{ Form::open(['route' => ['items.update', $item->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', '商品名：') }}
        {{ Form::text('name', $item->name, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('description', '詳細：') }}
        {{ Form::text('description', $item->description, ['class' => 'form-control']) }}
        @if ($errors->first('description'))
            <p class="validation">※{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('price', '値段：') }}
        {{ Form::number('price', $item->price, ['class' => 'form-control']) }}
        @if ($errors->first('price'))
            <p class="validation">※{{$errors->first('price')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('image_url', '画像URL:') }}
        {{ Form::text('image_url', $item->image_url, ['class' => 'form-control']) }}
        @if ($errors->first('image_url'))
            <p class="validation">※{{$errors->first('image_url')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::submit('更新', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
