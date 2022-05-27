<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Biodata;
use Faker\Provider\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    public function cetakPendaftaran(Request $request)
    {
        $noreg = $request->session()->get('noreg');
        $data = [
            'biodata' => Biodata::where('noreg_ppdb', $noreg)->first(),
        ];
        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }
}
