@extends('layouts.utama')


@section('tabel')
<table class="pure-table">
    <thead>
        <tr><th>Code</th><th>Name</th><th>Description</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->code }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->description }}</td>
            <td>
                <a href="{{ route('product.edit', ['id' => $p->id]) }}" class="edit_link">Edit</a>
                <a href="{{ route('product.destroy', ['id' => $p->id]) }}" class="delete_link">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('title', 'Product List')
