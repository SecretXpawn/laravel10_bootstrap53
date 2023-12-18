@extends('layout.main')
@section('content')


<h3>Edit Data Kurikulum</h3>
<form action="{{ route('Pesertadidik.update', $pesertadidik->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Nama Peserta Didik</td><td><input type="text" name="nama_peserta" value="{{ $pesertadidik->nama_peserta }}"></td>
    </tr>
    <tr>
        <td>Tahun Peserta</td><td><input type="text" name="tahun_peseta" value="{{ $pesertadidik->tahun_peseta }}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection