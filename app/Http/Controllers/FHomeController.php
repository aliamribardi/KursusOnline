<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\KategoriKelas;

class FHomeController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'kategories' => KategoriKelas::all(),
            'materies' => Materi::all()
        ]);
    }
}
