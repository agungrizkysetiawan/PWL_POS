<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // tambah data user dengan Eloquent Model
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user

        // $user = UserModel::Where('level_id', 1)->first();

        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);

        // });


        // $user = UserModel::findOrFail(1);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        $user = UserModel::Where('level_id', 2)->count();

        return view('user', ['data' => $user]);
    }
}
