<?php

namespace App\Models;

use App\Models\UploadFiles;
use App\Models\DataOrangTua;
use App\Models\DataPeriodik;
use App\Models\DataKesejahteraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biodata extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dataOrangTua()
    {
        return $this->hasMany(DataOrangTua::class, 'noreg_ppdb', 'noreg_ppdb');
    }

    public function dataPeriodik()
    {
        return $this->hasMany(DataPeriodik::class, 'noreg_ppdb', 'noreg_ppdb');
    }

    public function dataKesejahteraan()
    {
        return $this->hasMany(DataKesejahteraan::class, 'noreg_ppdb', 'noreg_ppdb');
    }

    public function dataUpload()
    {
        return $this->hasMany(UploadFiles::class, 'noreg_ppdb', 'noreg_ppdb');
    }
}
