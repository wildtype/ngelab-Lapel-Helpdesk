@extends('layouts.utama')

@section('title')Problem: {{$problem->title}}@endsection

@section('content')
<div class="content">
    <h1>{{$problem->title}}</h1>
    <p>{{$problem->description}}</p>
    <p>Sender: {{$problem->user->name}}</p>
    <p>Product: {{$problem->product->name}}</p>
    {!! Form::open(['method'=>'DELETE', 
                    'route'=>['problem.destroy', $problem->id]]) !!}
    {!! Form::submit('Delete Product', 
                     ['class' => 'pure-button pure-button-warning button-small',
                      'id' => 'delete-problem-button']) !!}
    {!! Form::close() !!}
    <a href="{{route('problem.edit', $problem->id)}}" id="edit-link">Edit<a/>
</div>
@endsection
