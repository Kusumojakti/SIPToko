<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'laporan',
        'jenis_aduans_id',
        'foto'
    ];
}
