<!doctype html5>
<html>
    <head>
        <title>Create New Product</title>
    </head>
    <body>
        <form action="/product" method="POST">
            <input type=hidden name=_token value={{ csrf_token() }} />
            <label for="product_name_field">Name</label>
            <input type="text" id="product_name_field" name="name" />
            <label for="code_field">Code</label>
            <input type="text" id="code_field" name="code" />
            <label for="description_field">Description</label>
            <textarea id="description_field" name="desc"></textarea>
            <button>Submit</button>
        </form>
    </body>
</html>
