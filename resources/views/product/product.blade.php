<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
</head>

<body>

    <div class="container">
        <h2>Product</h2>
        <table table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama </th>
                    <th>Form</th>
                    <th>Restriction</th>
                    <th>Description</th>
                    <th>Category ID</th>
                    <th>Faskes 1</th>
                    <th>Faskes 2</th>
                    <th>Faskes 3</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $productData)
                    <tr>
                        <td>{{ $productData->id }}</td>
                        <td>{{ $productData->nama }}</td>
                        <td>{{ $productData->form }}</td>
                        <td>{{ $productData->restriction }}</td>
                        <td>{{ $productData->description }}</td>
                        <td>{{ $productData->category_id }}</td>
                        <td>{{ $productData->faskes1 }}</td>
                        <td>{{ $productData->faskes2 }}</td>
                        <td>{{ $productData->faskes3 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
