<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>

    <title>Categories</title>
</head>
<body>

    <div class="container">
        <table id="example" class="table table-striped" style="width:80%">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        @foreach ($data as $categoriesData)
            <tr>
                <td>{{ $categoriesData->id }}</td>
                <td>{{ $categoriesData->nama }}</td>
            </tr>
        @endforeach
        </table>
    </div>
</body>
</html>