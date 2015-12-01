@extends('layouts.utama')
@section('title')View Product {{$product->code}}@endsection

@section('content')
<p>Code: {{$product->code}}</p>
<p>Name: {{$product->name}}</p>
<p>Description: {{$product->description}}</p>
@endsection

