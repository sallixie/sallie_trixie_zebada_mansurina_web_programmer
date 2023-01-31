<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function admin()
    {
        $pemesanan = Pemesanan::with("biodata")->get();
        return view('admin', compact('pemesanan'));
    }

    public function adminGet(Biodata $biodata)
    {
        $response = "
        <input type='hidden' name='id' value='$biodata->id'>
        <div class='validation-container mb-4'>
            <div class='form-floating'>
              <input class='form-control form-control-lg ' type='text' id='nama' placeholder='Nama' name='nama' value='$biodata->nama'>
              <label for='nama'>Nama</label>
            </div>
        </div>
        <div class='validation-container mb-4'>
            <div class='form-floating'>
            <input class='form-control form-control-lg ' type='text' id='email' placeholder='Email' name='email' value='$biodata->email'>
            <label for='email'>Email</label>
            </div>
        </div>
        <div class='validation-container mb-4'>
            <div class='form-floating'>
            <input class='form-control form-control-lg ' type='text' id='no_hp' placeholder='Nomor Telepon' name='no_hp' value='$biodata->no_hp'>
            <label for='no_hp'>Nomor Telepon</label>
            </div>
        </div>
        <div class='validation-container mb-4'>
            <div class='form-floating'>
            <input class='form-control form-control-lg ' type='text' id='alamat' placeholder='Alamat' name='alamat' value='$biodata->alamat'>
            <label for='alamat'>Alamat</label>
            </div>
        </div>
        ";

        return $response;
    }

    public function adminEdit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'alamat' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'no_hp.required' => 'Nomor Telepon tidak boleh kosong',
            'no_hp.numeric' => 'Nomor Telepon tidak valid',
            'alamat.required' => 'Alamat tidak boleh kosong',
        ]);

        Biodata::find($request->id)->update($request->all());
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function adminDelete(Pemesanan $pemesanan)
    {
        $pemesanan->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
