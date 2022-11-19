@extends('layout/main')
@section('container')
<div class="container p-5">
    <h1>Input Data Mahasiswa</h1>
    <form action="{{ url('/store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Mahasiswa :<br>
                    <input type="text" name="nama">
                </td>
                <td>
                    Alamat Email : <br>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    NRP :<br>
                    <input type="text" name="nrp">
                </td>
                <td>
                    Alamat Rumah :<br>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary position-absolute start-30">Submit Data</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection