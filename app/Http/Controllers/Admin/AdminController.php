<?php

namespace App\Http\Controllers\Admin;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('admin.dashboard', $data);
    }

    public function dataPendaftar(Request $request)
    {
        $data = [
            'title' => 'Data Pendaftar',
            'biodata' => Biodata::all(),
            'statusTitle' => 'Status Verifikasi',
        ];

        return view('admin.data-pendaftar', $data);
    }

    public function seleksiPendaftar(Request $request)
    {
        $data = [
            'title' => 'Seleksi Pendaftar',
            'biodata' => Biodata::all(),
            'statusTitle' => 'Status Seleksi',
        ];

        return view('admin.seleksi-pendaftar', $data);
    }

    public function hasilSeleksi(Request $request)
    {
        $data = [
            'title' => 'Hasil Seleksi',
            'biodata' => Biodata::all()
        ];

        return view('admin.hasil-seleksi', $data);
    }
}
