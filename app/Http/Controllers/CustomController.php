<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Models\Customer;
use App\Models\Sym;
use App\Models\Symptom;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $custom = Customer::all();
        $custom->load('symptom');
        return view('kham-dieu-tri.tram-cam.index', compact('custom'));
    }
    public function indexof()
    {
        return view('kham-dieu-tri.tram-cam.index-2');
    }
    // Nghiện rượu
    public function show_nghien_ruou()
    {
        $custom = Customer::all();
        $custom->load('symptom');
        return view('kham-dieu-tri.nghien-ruou.views', compact('custom'));
    }

    public function info_nghien_ruou()
    {
        return view('kham-dieu-tri.nghien-ruou.create');
    }
    public function store_nghien_ruou(Request $request)
    {
        $custom = new Customer();
        $custom->fill($request->all());
        $custom->save();
        return view('kham-dieu-tri.nghien-ruou.index');
    }
    public function next_store(Request $request, $cust_id)
    {
        $sym = Symptom::all();
        $model = Customer::find($cust_id);
        if (!$model) return redirect(route('nghien-ruou.index'));
        $model->fill($request->all());
        $model->save();
        return redirect(route('nghien-ruou.views', ['model' => $model, 'sym' => $sym]));
    }

    public function create()
    {
        $sym = Symptom::all();
        return view('kham-dieu-tri.tram-cam.index', compact('sym'));
    }
    public function storeAs(Request $request)
    {
        $model = new Customer();
        $model->fill($request->all());
        $model->save();

        $input['symName'] = $request->input('symName');
        $input['cust_id'] = $request->input('cust_id');
        $input['yesNo'] = $request->input('yesNo');
        Symptom::create($input);

        return redirect(route('kham-dieu-tri.tram-cam.index'));
    }
}
