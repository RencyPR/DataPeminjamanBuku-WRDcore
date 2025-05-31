@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Daftar Buku Yang Dipinjam Anggota</h5>
    <a href="{{ route('data.create') }}" class="btn btn-primary mb-3"> + Data Peminjaman</a>

    @if(session('success'))

        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Kode Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{ $data->KdPinjam }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->KdBuku }}</td>
                <td>{{ $data->tglPinjam }}</td>
                <td>{{ $data->tglKembali }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    <a href="{{ route('data.edit', $data) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('data.destroy', $data) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
