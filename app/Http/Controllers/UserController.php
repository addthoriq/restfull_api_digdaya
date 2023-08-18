<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::orderBy('id')->get();
        return view('index', $data);
    }

    public function tambahUser()
    {
        return view('tambahUser');
    }

    public function store(Request $request)
    {
       /* User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'domisili' => $request->domisili
        ]);
        */
        dd($request);
        return redirect('/');
    }

    public function show($id) {
        $user = User::find($id);

        // return view('detail', $user);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'domisili' => $request->domisili
        ]);
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
    }
}
