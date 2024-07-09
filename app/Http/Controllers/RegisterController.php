<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $files = scandir(public_path('assets/img'));
        $data = [];
        $title = 'Pendaftaran';
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $data[] = [
                    'name' => $file,
                    'url' => asset('assets/img/' . $file),
                ];
            }
        }
        return view('register', compact(['data', 'title']));
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
        //
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

    public function cetakPendaftaran($noreg = null)
    {
        $noreg = $noreg;
        try {
            $data = [
                'message' => 'success',
                'biodata' => Biodata::where('noreg_ppdb', $noreg)->first(),
            ];

            return response()->json($data);
        } catch (QueryException $error) {
            return response()->json([
                'message' => 'error',
                'error' => $error->getMessage(),
            ]);
        }
    }

    public function daftarSelesai(Request $request)
    {
        $request->session()->forget('noreg');

        return response()->json([
            'message' => 'Pendaftaran Selesai!',
        ]);
    }
}
