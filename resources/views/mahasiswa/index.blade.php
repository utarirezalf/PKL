@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NIM</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">Email</th>
                        <th scope="col">AKSI</th>     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim}}</td>
                        <td>{{ $mhs->jurusan}}</td>
                        <td>{{ $mhs->email }}</td>
                        <td> 
                            <a href="" class="badge bg-success">edit</a>
                            <a href="" class="badge bg-danger">delete</a>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

    
    