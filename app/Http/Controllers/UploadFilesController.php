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
        $noRegister = $request->input('noreg_ppdb');
        $data = $request->all();
        UploadFiles::create($data);
        // $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));

        // $imgName = $noRegister . '-' . $date->format("Y-m-d-H-i") . '-' . Str::random(10) . '.' . $files->extension();
        // $files->move(public_path('assets/img/' . $noRegister . '/'), $imgName);

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }

    public function uploadIjazah(Request $request)
    {
        $files = $request->file('ijazahFile');
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
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
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
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
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
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
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
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
    public function uploadKIP(Request $request)
    {
        $files = $request->file('kipFile');
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
        $newName = $noRegister . '-kip.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'kip' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'kip' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
    public function uploadKIS(Request $request)
    {
        $files = $request->file('kisFile');
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
        $newName = $noRegister . '-kis.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'kis' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'kis' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
    public function uploadKKS(Request $request)
    {
        $files = $request->file('kksFile');
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
        $newName = $noRegister . '-kks.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'kks' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'kks' => $newName,
            ];
            UploadFiles::create($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'File uploaded successfully'
        ]);
    }
    public function uploadPKH(Request $request)
    {
        $files = $request->file('pkhFile');
        $noRegister = ($request->input('noreg_ppdb')) ? $request->input('noreg_ppdb') : $request->session()->get('noreg');
        $newName = $noRegister . '-pkh.' . $files->extension();

        if (UploadFiles::where('noreg_ppdb', $noRegister)->first()) {
            $dataFiles = [
                'pkh' => $newName,
            ];
            UploadFiles::where('noreg_ppdb', $noRegister)->update($dataFiles);
            $files->move(public_path('assets/img/' . $noRegister . '/'), $newName);
        } else {
            $dataFiles = [
                'noreg_ppdb' => $noRegister,
                'pkh' => $newName,
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
