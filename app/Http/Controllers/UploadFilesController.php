<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UploadFilesController extends Controller
{
    public function uploadFiles(Request $request)
    {
        $files = $request->file('file');
        $noRegister = 'ppdb2122123';
        $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));

        $imgName = $noRegister . '-' . $date->format("Y-m-d-H-i") . '-' . Str::random(10) . '.' . $files->extension();
        $files->move(public_path('assets/img/' . $noRegister . '/'), $imgName);

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
}
