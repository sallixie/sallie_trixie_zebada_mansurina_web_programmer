<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function pesan(Request $request)
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
            'no_hp.required' => 'No HP tidak boleh kosong',
            'no_hp.numeric' => 'No HP tidak valid',
            'alamat.required' => 'Alamat tidak boleh kosong',
        ]);

        $biodata = Biodata::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        $pemesanan = Pemesanan::create([
            'id_tiket' => 'P' . $biodata->id . date('Ymd') . rand(100, 999),
            'biodata_id' => $biodata->id,
        ]);

        Mail::send('mail.tiket', ["biodata" => $biodata, "pemesanan" => $pemesanan], function ($message) use ($request) {
            $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));
            $message->to($request->email, $request->nama);
            $message->subject("Pemesanan Tiket AgenX");
        });

        return back()->with('message', 'Pemesanan berhasil kode pemesanan anda adalah ' . $pemesanan->id_tiket . ' silahkan cek email anda untuk melihat tiket');
    }
}
