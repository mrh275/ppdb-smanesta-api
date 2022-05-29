<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('admin.dashboard', $data);
    }
}
