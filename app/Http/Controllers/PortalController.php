<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal', [
            'title' => 'Portal',
        ]);
    }

    public function showRegister()
    {

        $data = [
            'title' => 'Data Pendaftar',
            'biodata' => Biodata::all(),
        ];

        return view('data-pendaftar', $data);
    }
}
