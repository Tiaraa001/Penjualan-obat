@extends('adminlte::page')

@section('title', 'Data Masakan')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pengeluaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">
                                Data Pengeluaran
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Pengeluaran</div>
                    <div class="card-body">
                        <form action="{{ route('pengeluaran.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="jumlah_pengeluaran" class="form-label">Nominal Pengeluaran</label>
                                <input type="number" name="jumlah_pengeluaran" id="jumlah_pengeluaran"
                                    class="form-control" value="{{ old('jumlah_pengeluaran') }}">
                                @error('jumlah_pengeluaran')
                                    <i class="text-danger">{{ $message }}</i>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Detail Pengeluaran</label>
                                <textarea name="deskripsi" id="deskripsi"
                                    class="form-control">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <i class="text-danger">{{ $message }}</i>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pengeluaran" class="form-label">Tanggal Pengeluaran</label>
                                <input type="date" name="tanggal_pengeluaran" id="tanggal_pengeluaran"
                                    class="form-control" value="{{ old('tanggal_pengeluaran') }}">
                                @error('tanggal_pengeluaran')
                                    <i class="text-danger">{{ $message }}</i>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-sm btn btn-danger">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection
@section('js')
@endsection
