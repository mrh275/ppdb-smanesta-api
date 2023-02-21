<?php

namespace App\Models;

use App\Models\DataOrangTua;
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
}
