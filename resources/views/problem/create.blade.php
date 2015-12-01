@extends('layouts.utama');
@section('title', 'Create New Problem');

@section('content')
<h1>Create New Problem</h1>
{!! Form::open(['method' => 'POST', 
                            'route' => ['problem.store'], 
                            'class' => 'pure-form pure-form-stacked']) !!}
<div class="pure-u-1">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class'=> 'pure-input-1']) !!}
</div>
<div class="pure-u-1">
    {!! Form::label('description', 'Problem Description') !!}
    {!! Form::textarea('description', null, ['class' => 'pure-input-1']) !!}
</div>

<div class="pure-u-1">
    {!! Form::label('product_id', 'Product') !!}
    {!! Form::select('product_id', ['user1'=>'User 1'], ['class' => 'pure-input-1']) !!}
</div>

<div class="pure-u-1">
    {!! Form::label('user_id', 'User') !!}
    {!! Form::select('user_id', ['user1'=>'User 1'], ['class' => 'pure-input-1']) !!}
</div>

<div class="pure-u-1">
    {!! Form::label('attachment_file', 'Attachment') !!}
    {!! Form::file('attachment_file', null, ['class' => 'pure-input-1']) !!}
</div>
{!! Form::submit('Submit', ['class' => 'pure-button pure-button-primary']) !!}
{!! Form::close() !!}
