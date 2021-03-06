@extends('layouts.utama')


@section('content')
<h1>Product List</h1>
<table class="pure-table">
    <thead>
        <tr><th>Code</th><th>Name</th><th>Description</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td><a href="{{ route('product.show', ['id'=>$p->id]) }}">{{ $p->code }}</a></td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->description }}</td>
            <td>
                <a href="{{ route('product.edit', ['id' => $p->id]) }}" class="edit_link">Edit</a>
                <!--<a href="{{ route('product.destroy', ['id' => $p->id]) }}" class="delete_link">Delete</a>-->
                {!! Form::open(['method'=>'DELETE', 
                                'route'=>['product.destroy', $p->id]]) !!}
                    {!! Form::submit('Delete Product', 
                                     ['class' => 'pure-button pure-button-warning button-small',
                                      'id' => 'delete-'.$p->code]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $products->render() !!}
@endsection

@section('title', 'Product List')
