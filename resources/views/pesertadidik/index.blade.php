@extends('layout.main')
@section('content')

<h1>Master Peserta Didik</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('Pesertadidik.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Peserta</td>
                <td>Tahun Peserta</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($pesertadidik as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_peserta }}</td>
                    <td>{{ $rows->tahun_peseta }} </td>
                    <td>
                        <a href="{{ route('Pesertadidik.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('Pesertadidik.destroy', $rows->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection