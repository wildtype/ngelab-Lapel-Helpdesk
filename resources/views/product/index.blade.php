<html>
    <head><title>Product List</title>
    <body>
        <h1>Product List</h1>
        <table>
            <thead>
                <tr><th>Code</th><th>Name</th><th>Description</th></tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <td>{{ $p->code }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
