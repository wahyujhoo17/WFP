@extends('layout')

@section('judul')
<p>Kategori</p>
@endsection

@section('judul2')
<p>Kategori Obat</p>
@endsection

@section('kontens')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama </th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nama </th>

                </tr>
            </tfoot>
            <tbody>
                @foreach ($data as $productData)
                <tr>
                    <td>{{ $productData->id }}</td>
                    <td>{{ $productData->nama }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection