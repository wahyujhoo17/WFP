@extends('layout')

@section('judul')
<p>Table Produk</p>
@endsection

@section('judul2')
<p>Daftar Obat</p>
@endsection


@section('kontens')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
            <tfoot>
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
            </tfoot>
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
@endsection
