<?php

namespace App\Http\Controllers;

use App\Models\KategoriKelas;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Materi;

class FKelasController extends Controller
{
    public function index($slug)
    {
        // dd(KategoriKelas::where('slug', $slug)->first());
        return view('frontend.kelas', [
            'kelases' => KategoriKelas::where('slug', $slug)->first(),
        ]);
    }

    public function show($slug, $slug2)
    {
        return view('frontend.detailKelas', [
            'materies' => Kelas::where('slug', $slug2)->first(),
        ]);
    }
}
