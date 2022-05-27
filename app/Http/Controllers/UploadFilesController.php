<?php

namespace App\Http\Controllers;

use App\Models\UploadFiles;
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

    public function uploadIjazah(Request $request)
    {
        $files = $request->file('ijazahFile');
        $noRegister = $request->session()->get('noreg');
        $newName = $noRegister . '-ijazah.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'ijazah' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'ijazah' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
    public function uploadKK(Request $request)
    {
        $files = $request->file('kkFile');
        $noRegister = $request->session()->get('noreg');
        $newName = $noRegister . '-kk.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'kk' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'kk' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
    public function uploadAkte(Request $request)
    {
        $files = $request->file('akteFile');
        $noRegister = $request->session()->get('noreg');
        $newName = $noRegister . '-akte.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'akte' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'akte' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
    public function uploadKTP(Request $request)
    {
        $files = $request->file('ktpFile');
        $noRegister = $request->session()->get('noreg');
        $newName = $noRegister . '-ktp.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'ktp' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'ktp' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
}
