<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\AsalSekolah;
use App\Models\DataPeriodik;
use Illuminate\Http\Request;
use App\Models\DataKesejahteraan;

class DataPeriodikController extends Controller
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
        $rulesSekolahAsal = [
            'jenjang' => 'required',
            'nama_sekolah' => 'required|min:5',
            'alamat_sekolah' => 'required|min:15',
            'nomor_ijazah' => 'required',
            'nopes_ujian' => 'required',

        ];
        $rulesPeriodik = [
            'hobi' => 'required',
            'cita_cita' => 'required',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'jarak_rumah' => 'required|numeric',
            'waktu_tempuh' => 'required|numeric',
            'anak_ke' => 'required|numeric',
            'jumlah_saudara' => 'required|numeric',
        ];

        $errorMessageSekolahAsal = [
            'jenjang.required' => 'Jenjang tidak boleh kosong',
            'nama_sekolah.required' => 'Nama Sekolah tidak boleh kosong',
            'nama_sekolah.min' => 'Nama Sekolah minimal 5 karakter',
            'alamat_sekolah.required' => 'Alamat Sekolah tidak boleh kosong',
            'alamat_sekolah.min' => 'Alamat Sekolah minimal 15 karakter',
            'nomor_ijazah.required' => 'Nomor Ijazah tidak boleh kosong',
            'nopes_ujian.required' => 'Nopes Ujian tidak boleh kosong',

        ];

        $errorMessagePeriodik = [
            'hobi.required' => 'Hobi tidak boleh kosong',
            'cita_cita.required' => 'Cita Cita tidak boleh kosong',
            'tinggi_badan.required' => 'Tinggi Badan tidak boleh kosong',
            'tinggi_badan.numeric' => 'Tinggi Badan harus berupa angka',
            'berat_badan.required' => 'Berat Badan tidak boleh kosong',
            'berat_badan.numeric' => 'Berat Badan harus berupa angka',
            'jarak_rumah.required' => 'Jarak Rumah tidak boleh kosong',
            'jarak_rumah.numeric' => 'Jarak Rumah harus berupa angka',
            'waktu_tempuh.required' => 'Waktu Tempuh tidak boleh kosong',
            'waktu_tempuh.numeric' => 'Waktu Tempuh harus berupa angka',
            'anak_ke.required' => 'Anak Ke tidak boleh kosong',
            'anak_ke.numeric' => 'Anak Ke harus berupa angka',
            'jumlah_saudara.required' => 'Jumlah Saudara tidak boleh kosong',
            'jumlah_saudara.numeric' => 'Jumlah Saudara harus berupa angka',
        ];

        $validatedSekolahAsal = $request->validate($rulesSekolahAsal, $errorMessageSekolahAsal);
        $validatedDataPeriodik = $request->validate($rulesPeriodik, $errorMessagePeriodik);
        $dataKesejahteraan = [
            'noreg_ppdb' => $request->input('noreg_ppdb'),
            'kip' => ($request->kip) ?? '-',
            'kis' => ($request->kis) ?? '-',
            'kks' => ($request->kks) ?? '-',
            'kps' => ($request->kps) ?? '-',
            'pkh' => ($request->pkh) ?? '-',
        ];

        try {
            $noregPPDB = $request->input('noreg_ppdb');
            $oldPeriodik = DataPeriodik::where('noreg_ppdb', $noregPPDB)->first();
            $oldAsalSekolah = AsalSekolah::where('noreg_ppdb', $noregPPDB)->first();
            $oldKesejahteraan = DataKesejahteraan::where('noreg_ppdb', $noregPPDB)->first();

            if ($noregPPDB) {
                $validatedSekolahAsal['noreg_ppdb'] = $noregPPDB;
                $validatedDataPeriodik['noreg_ppdb'] = $noregPPDB;
                if ($oldPeriodik) {
                    if ($oldAsalSekolah) {
                        AsalSekolah::where('noreg_ppdb', $noregPPDB)->update($validatedSekolahAsal);
                    }
                    if ($oldPeriodik) {
                        DataPeriodik::where('noreg_ppdb', $noregPPDB)->update($validatedDataPeriodik);
                    }
                    if ($oldKesejahteraan) {
                        DataKesejahteraan::where('noreg_ppdb', $noregPPDB)->update($dataKesejahteraan);
                    }

                    return response()->json([
                        'success' => true,
                        'message' => 'Data berhasil diperbaharui',
                    ]);
                } else {
                    AsalSekolah::create($validatedSekolahAsal);
                    DataPeriodik::create($validatedDataPeriodik);
                    DataKesejahteraan::create($dataKesejahteraan);

                    return response()->json([
                        'success' => true,
                        'message' => 'Data berhasil disimpan',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => 'warning',
                    'message' => 'Nomor Registrasi tidak ditemukan.',
                    'text'    => 'Silahkan lakukan pendaftaran ulang. Dan meminta untuk reset data terlebih dahulu kepada panitia.',
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPeriodik  $dataPeriodik
     * @return \Illuminate\Http\Response
     */
    public function show(DataPeriodik $dataPeriodik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPeriodik  $dataPeriodik
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $noregPPDB = $request->input('noreg_ppdb');

        try {
            $data = [
                'asal_sekolah' => AsalSekolah::where('noreg_ppdb', $noregPPDB)->get(),
                'periodik' => DataPeriodik::where('noreg_ppdb', $noregPPDB)->get(),
                'kesejahteraan' => DataKesejahteraan::where('noreg_ppdb', $noregPPDB)->get()
            ];
            return response()->json([
                'status' => 200,
                'message' => 'Data fetched successfully!',
                'noreg' => $noregPPDB,
                'data' => $data
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }   //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPeriodik  $dataPeriodik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPeriodik $dataPeriodik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPeriodik  $dataPeriodik
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPeriodik $dataPeriodik)
    {
        //
    }
}
