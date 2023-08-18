<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id')->get();

        return new UserResource(true, 'Daftar Pengguna', $users);
    }

    public function store(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'domisili' => $request->domisili
        ]);
        return new UserResource(true, 'Data berhasil ditambahkan', $user);
    }

    public function show($id) {
        $user = User::find($id);

        return new UserResource(true, 'Data detail User', $user);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'domisili' => $request->domisili
        ]);

        return new UserResource(true, 'Data berhasil diubah', $user);
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return new UserResource(true, 'Data berhasil dihapus!', null);
    }
}
