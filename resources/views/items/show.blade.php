@extends('layouts.app')
@section('title', 'Menu Detail')
@section('content')
    <p>ID:{{ $item->id }}</p>
    <p>Name：{{ $item->name }}</p>
    <p>Category：{{ $item->category->name }}</p>
    <p>Description：{{ $item->description }}</p>
    <p>Price：{{ $item->price }}</p>
    <p>Image:{{ $item->image_url }}</p>
    <p>Created at：{{ $item->created_at }}</p>
    <p>Updated at：{{ $item->updated_at }}</p>
@endsection
