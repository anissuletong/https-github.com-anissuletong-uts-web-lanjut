@extends('UTS.master')
@section('Barang')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center mt-3">Review Barang</h1>
        <div class="card mt-5" style="max-width: 1110px;">
            <div class="row g-0">
                <div class="col">
                    <img src="{{asset('img/'.$reviewBarang->Gambar)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">Nama Barang</div>
                            <div class="col-1">:</div>
                            <div class="col">
                                <p class="card-title">{{$reviewBarang->Nama_Barang}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Harga</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-7">Rp. {{$reviewBarang->Harga}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Stock</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-7">{{$reviewBarang->Stok}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Bahan</div>
                            <div class="col-1"> : </div>
                            <p class="card-text col-7">{{$reviewBarang->Bahan}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Deskripsi</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-9">{{$reviewBarang->Deskripsi}}</p>
                        </div>
                        <a href="{{route('daftarBarang.view')}}" class="btn btn-success mb-2" style="float: right;">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection