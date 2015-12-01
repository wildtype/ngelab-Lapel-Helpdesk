@extends('layouts.utama')

@section('content')

<h1>Create new product</h1>
<form action="/product" method="POST" class="pure-form pure-form-stacked">
    <div class="pure-u-1">
        <input type=hidden name=_token value={{ csrf_token() }} />
        <label for="product_name_field">Name</label>
        <input type="text" class="pure-input-1" id="product_name_field" name="name" required/>
    </div>
    <div class="pure-u-1">
        <label for="code_field">Code</label>
        <input type="text" id="code_field" class="pure-input-1" name="code" required/>
    </div>
    <div class="pure-u-1">
        <label for="description_field">Description</label>
        <textarea id="description_field" name="description" class="pure-input-1" required></textarea>
    </div>
    <button type="submit" class="pure-button pure-button-primary">Submit</button>
</form>

@endsection
