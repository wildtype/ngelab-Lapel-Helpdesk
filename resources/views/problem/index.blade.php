@extends('layouts.utama')

@section('title', 'Problem List')

@section('content')
<h1>Problem List</h1>
<table class="pure-table">
    <thead>
        <tr><th>Title</th><th>Product</th><th>Sender</th>
        </tr>
    </thead>
    <tbody>
        @foreach($problems as $p)
        <tr>
            <td><a href="{{ route('problem.show', ['id'=>$p->id]) }}">{{ $p->title }}</a></td>
            <td>{{ $p->product->name }}</td>
            <td>{{ $p->user->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('problem.create') }}" id="create_link">Create New Problem</a>
@endsection
