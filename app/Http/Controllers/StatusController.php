<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailCheckout;

class StatusController extends Controller
{
    public function index()
    {
        $status = detailCheckout::all();
        return view('frontend.owned')->with('statuses', $status);
    }

    public function indexAdmin()
    {
        $status = detailCheckout::all();
        return view('dashboard.checkouts')->with('checkouts', $status);
    }

    public function update(Request $request, $id)
    {
        $status = detailCheckout::find($id);
        $status->status = $request->status;
        $status->save();
        return redirect()->back();
    }
}
