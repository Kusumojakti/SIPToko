<?php

namespace App\Http\Controllers;

use App\Models\FollowUpLaporan;
use App\Models\Laporan;
use Illuminate\Http\Request;

class FollowUpController extends Controller
{
    public function index($id)
    {
        $history = FollowUpLaporan::with('laporan')
            ->where('laporans_id', $id)
            ->get();
        return view('pages.karyawan.followupkaryawan', compact('history'));
    }
}
