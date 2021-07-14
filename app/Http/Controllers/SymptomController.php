<?php

namespace App\Http\Controllers;

use App\Models\Sym;
use App\Models\Symptom;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SymptomController extends Controller
{
    public function index()
    {
        $cust = Test::all();
        return view('kham-dieu-tri.tram-cam.views', compact('cust'));
    }

    public function create()
    {
        return view('kham-dieu-tri.tram-cam.create');
    }
    public function store(Request $request)
    {

        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Test::create($input);
        return redirect(route('tram-cam.views'));
    }

    public function detail($id, Request $request)
    {
        //====== Edit
        $model = Test::find($id);
        $model['symptom'] = explode("value", $model['symptom']);

        return view('kham-dieu-tri.tram-cam.index', ['model' => $model]);
    }

    public function update(Request $request, $id)
    {
        $model = Test::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('tram-cam.views', ['model' => $model, 'input' => $input]));
    }
}
