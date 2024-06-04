<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data_users = User::all();
        return view('/user/index', compact('data_users'));
    }

    public function store(Request $request)
    {
        $rules = $request->validate(
            [
                'level_user' => 'required',
                'nama_user' => 'required',
                'uppd_id' => 'required',
                'lokasi_id' => 'required',
                'user_login' => 'required',
                'password' => 'required',
                'utilities' => '',
                'jenis_layanan' => '',
                'manajemen_user' => '',
                'klasifikasi_golongan' => '',
                'tanda_tangan_jr' => '',
                'manajemen' => '',
                'formulir_spopd' => '',
                'verval' => '',
                'perbaikan_data_verifikasi' => '',
                'verifikasi_jr' => '',
                'penetapan_pajak' => '',
                'penetapan_tambahan_pajak' => '',
                'pengeluaran_spopd' => '',
                'perubahan_data' => '',
                'perubahan_biaya' => '',
                'laporan_harian' => '',
                'laporan_bulanan' => '',
                'laporan_pd' => '',
                'laporan_online' => '',
                'laporan_pembebasan' => '',
                'form_khusus' => '',
                'form_fiskal' => '',
                'blokir_kendaraan' => '',
                'informasi_kendaraan' => '',
                'split_jr' => '',
                'status_transaksi' => '',
                'perbaikan_data_sjo' => '',
                'hapus_transaksi_kepala_uppd' => '',
                'permohonan_keringanan' => '',
                'pembayaran_keringanan' => '',
                'manajemen_menu' => '',
                'perbaikan_data_verifikasi_valbin' => '',
                'is_active' => '',
            ],
            [
                'level_user.required' => 'Level User harus diisi',
            ]
        );

        $rules['password'] = Hash::make($request->password);
        dd($rules);
        User::create($rules);
    }

    public function is_active(Request $request, string $id)
    {
        $is_active = User::find($id);

        $rules = $request->validate(['is_active' => 'required']);
        User::where('id', $is_active->id)->update($rules);
        return redirect()->back();
    }
}
