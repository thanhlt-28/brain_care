<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class PrescriptionController extends Controller
{
    public function store(Request $request, $id)
    {
        $pres = Prescription::all();
        $pres = Prescription::find($id);
        if (!$pres) return redirect(route('tram-cam.index'));
        return view('admin.tram-cam.edit', ['pres' => $pres]);

        // return redirect(route('layout.formMultiple'));
    }
}
