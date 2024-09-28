@extends('layouts.app')
@section('title', 'Tambah Menu')
@section('content')
    {{ Form::open(['route' => 'items.store']) }}
    <div class="form-group">
        {{ Form::label('name', 'Nama Menu：') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Deskripsi：') }}
        {{ Form::text('description', null, ['class' => 'form-control']) }}
        @if ($errors->first('description'))
            <p class="validation">※{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Harga：') }}
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
        {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
