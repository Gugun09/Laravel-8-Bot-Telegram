<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nik extends Model
{
    use HasFactory;
    protected $fillable = ['nama','nik','namaKel','namaKec','namaKabko','namaPropinsi','jenis_kelamin','tempat_lahir','tps'];
}
