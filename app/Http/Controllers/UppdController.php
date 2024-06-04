<?php

namespace App\Http\Controllers;

use App\Models\Uppd;
use Illuminate\Http\Request;

class UppdController extends Controller
{
    public function index()
    {
        $data_uppd = Uppd::all();
        return view('/uppd/index', compact('data_uppd'));
    }

    public function store(Request $request)
    {
        $rules = $request->validate(
            [
                'nama_uppd' => 'required|unique:uppd,nama_uppd',
                'wilayah_kerja' => 'required',
                'kota' => 'required',
            ],
            [
                'nama_uppd.required' => 'Kolom nama UPPD tidak boleh kosong',
                'nama_uppd.unique' => 'Nama UPPD sudah digunakan',
                'wilayah_kerja.required' =>
                    'Kolom wilayah kerja tidak boleh kosong',
                'kota.required' => 'Kolom Kota tidak boleh kosong',
            ]
        );

        Uppd::create($rules);
        return back();
    }
}
