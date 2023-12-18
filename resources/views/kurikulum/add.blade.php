@extends('layout.main')
@section('content')


<h3>Tambah Data Kurikulum</h3>
<form action="{{ route('kurikulum.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Peserta</td><td><input type="text" name="nama_peserta"></td>
    </tr>
    <tr>
        <td>Tahun Peserta</td><td><input type="text" name="tahun_peserta"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection