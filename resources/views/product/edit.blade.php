@extends('layouts.utama')
@section('title', 'Edit Product')
@section('content')

<h1>Edit Product</h1>
{!! Form::model($product, ['method' => 'PATCH', 
                            'route' => ['product.update', $product->id], 
                            'class' => 'pure-form pure-form-stacked']) !!}
<div class="pure-u-1">
    {!! Form::label('name', 'Product Name') !!}
    {!! Form::text('name', null, ['class'=> 'pure-input-1']) !!}
</div>
<div class="pure-u-1">
    {!! Form::label('code', 'Product Code') !!}
    {!! Form::text('code', null, ['class' => 'pure-input-1']) !!}
</div>
<div class="pure-u-1">
    {!! Form::label('description', 'Product Description') !!}
    {!! Form::textarea('description', null, ['class' => 'pure-input-1']) !!}
</div>
{!! Form::submit('Submit', ['class' => 'pure-button pure-button-primary']) !!}
{!! Form::close() !!}
@endsection
