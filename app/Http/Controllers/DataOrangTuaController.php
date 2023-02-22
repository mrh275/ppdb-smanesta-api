<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\DataOrangTua;
use Illuminate\Http\Request;

class DataOrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_ayah' => 'required|min:3',
            'tempat_lahir_ayah' => 'required|min:3',
            'tanggal_lahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required|min:15',
            'nama_ibu' => 'required|min:3',
            'tempat_lahir_ibu' => 'required|min:3',
            'tanggal_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required|min:15',
        ];

        $errorMessage = [
            'nama_ayah.required' => 'Nama Ayah tidak boleh kosong',
            'nama_ayah.min' => 'Nama Ayah minimal 3 karakter',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah tidak boleh kosong',
            'tempat_lahir_ayah.min' => 'Tempat Lahir Ayah minimal 3 karakter',
            'tanggal_lahir_ayah.required' => 'Tanggal Lahir Ayah tidak boleh kosong',
            'pendidikan_ayah.required' => 'Pendidikan Ayah tidak boleh kosong',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah tidak boleh kosong',
            'penghasilan_ayah.required' => 'Penghasilan Ayah tidak boleh kosong',
            'alamat_ayah.required' => 'Alamat Ayah tidak boleh kosong',
            'alamat_ayah.min' => 'Alamat Ayah minimal 15 karakter',
            'nama_ibu.required' => 'Nama Ibu tidak boleh kosong',
            'nama_ibu.min' => 'Nama Ibu minimal 3 karakter',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu tidak boleh kosong',
            'tempat_lahir_ibu.min' => 'Tempat Lahir Ibu minimal 3 karakter',
            'tanggal_lahir_ibu.required' => 'Tanggal Lahir Ibu tidak boleh kosong',
            'pendidikan_ibu.required' => 'Pendidikan Ibu tidak boleh kosong',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu tidak boleh kosong',
            'penghasilan_ibu.required' => 'Penghasilan Ibu tidak boleh kosong',
            'alamat_ibu.required' => 'Alamat Ibu tidak boleh kosong',
            'alamat_ibu.min' => 'Alamat Ibu minimal 15 karakter',
        ];

        $validatedDataOrangTua = $request->validate($rules, $errorMessage);
        $tgl_lahir = str_replace('/', '-', $request->tanggal_lahir);
        $validatedDataOrangTua['tanggal_lahir_ayah'] = date('Y-m-d', strtotime($tgl_lahir));
        $validatedDataOrangTua['tanggal_lahir_ibu'] = date('Y-m-d', strtotime($tgl_lahir));

        $noregPPDB = $request->input('noreg_ppdb');
        $oldData = DataOrangTua::where('noreg_ppdb', $request->input('noreg_ppdb'))->first();
        try {
            if ($request->input('noreg_ppdb')) {
                if ($oldData) {
                    $validatedDataOrangTua['noreg_ppdb'] = $noregPPDB;
                    DataOrangTua::where('noreg_ppdb', $noregPPDB)->update($validatedDataOrangTua);
                    return response()->json([
                        'status' => 200,
                        'message' => 'Data berhasil diperbaharui',
                    ]);
                } else {
                    $validatedDataOrangTua['noreg_ppdb'] = $noregPPDB;
                    DataOrangTua::create($validatedDataOrangTua);

                    return response()->json([
                        'status' => 200,
                        'message' => 'Data berhasil disimpan',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 'warning',
                    'message' => 'Nomor Registrasi tidak ditemukan.',
                    'text'    => 'Silahkan lakukan pendaftaran ulang. Dan meminta untuk reset data terlebih dahulu kepada panitia.',
                ]);
            }
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $noregPPDB = $request->input('noreg-ppdb');

        try {
            $data = DataOrangTua::where('noreg_ppdb', $noregPPDB)->get();
            return response()->json([
                'status' => 200,
                'message' => 'Login successfully!',
                'noreg' => $noregPPDB,
                'data' => $data
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
