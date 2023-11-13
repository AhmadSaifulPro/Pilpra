@extends('layout.main')

@section('content')
<div class="pcoded-content ">
    <!-- [ breadcrumb ] start -->
    <div class="page-header ">
        <div class="page-block">
            <div class="row align-items-center" >
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard Analytics</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ inverse-table ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Calon Pradana</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <div class="pb-3">
                            <a href="{{ route('pilpra.create') }}" class=" btn"
                                style="border-radius: 10px; background-color: #E48900; color: white">+ Tambah Data</a>
                        </div>
                        <table class="table table-inverse">
                            <thead>
                                <tr>
                                    <th class="col-md-1">NO</th>
                                    <th class="col-md-4">Nama</th>
                                    <th class="col-md-2">Kelas</th>
                                    <th class="col-md-2">Foto</th>
                                    <th class="col-md-2">Jumlah Suara</th>
                                    <th class="col-md-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td><img src="{{ asset('/img/'.$item->foto) }}" width="50%" srcset=""></td>
                                    <td>{{ $item->jumlah_suara }}</td>
                                    <td>
                                        <a href="{{ route('pilpra.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form onsubmit="return confirm('Yakin Mau Hapus Data ini')" class="d-inline"
                                        action="{{ route('pilpra.destroy', $item->id) }}" method="POST">

                                        @csrf
                                        @method("DELETE")
                                            <button type="submit" name="submit"
                                            class="btn btn-danger btn-sm">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ inverse-table ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

@endsection
