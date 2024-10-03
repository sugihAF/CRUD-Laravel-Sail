@extends('layouts.app')

@section('title', 'Cafe Sugih Rasa')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            {{ link_to_route('items.create', 'Tambah Menu', [], ['class' => 'btn btn-primary']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Category</th>
                        <th>Stock Qty</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>URL</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ link_to_route('items.show', $item->id, ['item' => $item->id]) }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->stock_quantity }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->image_url }}</td>
                            <td>{{ link_to_route('items.edit', 'Edit', ['item' => $item->id], ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                {{ Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) }}
                                {{ Form::submit('Hapus', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection