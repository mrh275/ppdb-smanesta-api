<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
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
            'nisn'  => 'required|numeric',
            'nik'   => 'required|numeric',
            'nama'  => 'required|min:5|max:50',
            'jenis_kelamin'    => 'required',
            'tempat_lahir' => 'required|min:3|max:50',
            'asal_sekolah' => 'required|min:3|max:50',
            'tahun_lulus' => 'required|numeric',
            'kelas' => 'required',
            'alamat' => 'required|min:3',
            'dusun' => 'required|min:3|max:50',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'desa' => 'required|min:3|max:50',
            'kecamatan' => 'required|min:3|max:50',
            'kabupaten' => 'required|min:3|max:50',
            'provinsi' => 'required|min:3|max:50',
            'kode_pos' => 'required|numeric',
        ];

        $errorMessage = [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.numeric' => 'NISN harus berupa angka',
            'nik.required' => 'NIK tidak boleh kosong',
            'nik.numeric' => 'NIK harus berupa angka',
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal 5 karakter',
            'nama.max' => 'Nama maksimal 50 karakter',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
            'tempat_lahir.min' => 'Tempat Lahir minimal 3 karakter',
            'tempat_lahir.max' => 'Tempat Lahir maksimal 50 karakter',
            'asal_sekolah.required' => 'Asal Sekolah tidak boleh kosong',
            'asal_sekolah.min' => 'Asal Sekolah minimal 3 karakter',
            'asal_sekolah.max' => 'Asal Sekolah maksimal 50 karakter',
            'tahun_lulus.required' => 'Tahun Lulus tidak boleh kosong',
            'tahun_lulus.numeric' => 'Tahun Lulus harus berupa angka',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'alamat.min' => 'Alamat minimal 3 karakter',
            'dusun.required' => 'Dusun tidak boleh kosong',
            'dusun.min' => 'Dusun minimal 3 karakter',
            'dusun.max' => 'Dusun maksimal 50 karakter',
            'rt.required' => 'RT tidak boleh kosong',
            'rt.numeric' => 'RT harus berupa angka',
            'rw.required' => 'RW tidak boleh kosong',
            'rw.numeric' => 'RW harus berupa angka',
            'desa.required' => 'Desa tidak boleh kosong',
            'desa.min' => 'Desa minimal 3 karakter',
            'desa.max' => 'Desa maksimal 50 karakter',
            'kecamatan.required' => 'Kecamatan tidak boleh kosong',
            'kecamatan.min' => 'Kecamatan minimal 3 karakter',
            'kecamatan.max' => 'Kecamatan maksimal 50 karakter',
            'kabupaten.required' => 'Kabupaten tidak boleh kosong',
            'kabupaten.min' => 'Kabupaten minimal 3 karakter',
            'kabupaten.max' => 'Kabupaten maksimal 50 karakter',
            'provinsi.required' => 'Provinsi tidak boleh kosong',
            'provinsi.min' => 'Provinsi minimal 3 karakter',
            'provinsi.max' => 'Provinsi maksimal 50 karakter',
            'kode_pos.required' => 'Kode Pos tidak boleh kosong',
            'kode_pos.numeric' => 'Kode Pos harus berupa angka',
        ];

        $validatedBiodata = $request->validate($rules, $errorMessage);
        $tgl_lahir = str_replace('/', '-', $request->tanggal_lahir);
        $validatedBiodata['tanggal_lahir'] = date('Y-m-d', strtotime($tgl_lahir));

        $validatedBiodata['noreg_ppdb'] = 'PPDB-' . date('y') . date('y') + 1 . '-' . random_int(10000, 99999);
        while ($validatedBiodata['noreg_ppdb'] == Biodata::where('noreg_ppdb', $validatedBiodata['noreg_ppdb'])->first()) {
            $validatedBiodata['noreg_ppdb'] = 'PPDB-' . date('y') . date('y') + 1 . '-' . random_int(10000, 99999);
        }

        Biodata::create($validatedBiodata);
        $request->session()->put('noreg', $validatedBiodata['noreg_ppdb']);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
        ]);
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
    public function edit($id)
    {
        //
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
