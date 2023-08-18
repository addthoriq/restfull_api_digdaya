@extends('layouts.app')
@section('title', 'Form sederhana')
@section('title-page', 'Daftar User')
@section('tombol')
<a href="/tambah-pengguna" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fa fa-sign-in-alt fa-sm text-white-50"></i> Tambah User
</a>
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Domisili</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->nomor_hp}}</td>
                        <td>{{$user->domisili}}</td>
                        <td>
                            <a href="/pengguna/" class="btn btn-primary">Ubah Data</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
