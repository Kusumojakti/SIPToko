<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\JenisAduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Laporan::with('userPelapor', 'userPekerja', 'jenisAduan')->get();
        $jenisAduan = JenisAduan::all();
        return view('pages.karyawan.pengaduan', compact('laporan', 'jenisAduan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisAduan = JenisAduan::all();
        return view('pages.karyawan.tambah-pengaduan', compact('jenisAduan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'jenis_aduans_id' => 'required|exists:jenis_aduans,id',
                'laporan' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            // save images
            $imageName = time() . '.' . $request->foto->extension();

            $laporan = Laporan::create([
                'pelapor' => Auth::user()->id,
                'laporan' => $request->laporan,
                'jenis_aduans_id' => $request->jenis_aduans_id,
                'foto' => 'images/laporan/' . $imageName
            ]);

            if ($laporan) {
                $request->foto->move(public_path('images/laporan'), $imageName);
                return redirect('/pengaduan')->with(['success' => 'Berhasil Melaporkan']);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan, $id)
    {
        // dd($id);
        // return view('pages.karyawan.rincian-aduan', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('pages.karyawan.rincian-aduan', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $filepath = public_path($laporan->foto);
        File::delete($filepath);
        $laporan->delete();

        return redirect('/pengaduan')->with(['success' => 'Berhasil Menghapus Data']);
    }

    public function getByJenis($jenis)
    {
        try {
            $laporan = Laporan::with('userPelapor', 'userPekerja', 'jenisAduan')
                ->whereHas('jenisAduan', function ($query) use ($jenis) {
                    $query->where('jenis_aduans.id', $jenis);
                })
                ->get();
            return response()->json($laporan);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
    }
}
