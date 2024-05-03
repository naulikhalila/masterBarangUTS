@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3" style="font-family: Georgia, 'Times New Roman', Times, serif; color:rgb(207, 44, 126)"><i class="bi bi-list-check"></i> {{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barangs.create') }}"class="btn btn-outline-light my-2 ms-md-auto" style="background-color: hotpink; color: white; font-weight:bold">Input Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white" >
                <thead>
                    <tr  style="background-color:  rgb(181, 83, 100); color: white; font-family: Georgia, 'Times New Roman', Times, serif">
                        <th> Nama Barang
                        </th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->namaBarang }}</td>
                            <td>{{ $barang->hargaBarang }}</td>
                            <td>{{ $barang->deskripsiBarang }}</td>
                            <td>{{ $barang->satuan->namaSatuan }}</td>
                            <td>@include('barang.action')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
