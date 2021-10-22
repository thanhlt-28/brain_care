<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Diagnose;
use App\Models\Dianose;
use App\Models\Medicine;
use App\Models\Prescription;
use BaconQrCode\Renderer\RendererStyle\Fill;
use Facade\FlareClient\View;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DianoseController extends Controller
{
    // ===========Trầm cảm
    public function index()
    {
        $cust = Dianose::all();
        // $cust->load('dianose');
        $medis = Medicine::all();
        return view('chan-doan.tram-cam.views', compact('cust', 'medis'));
    }


    public function create()
    {
        $cust = Dianose::all();
        return view('chan-doan.tram-cam.create', compact('cust'));
    }


    public function requestdata()
    {

        $users = DB::select('select * from users where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $pre_name = $request->cust_name;
        $CustID = Helper::IDGenerator(new Dianose, 'CustID', 10, 'BRC');

        $dia = new Dianose();
        $dia->CustID = $CustID;
        $dia->cust_name = $pre_name;
        $dia->fill($request->all());
        $dia['symptom'] = implode(", ", $dia['symptom']);
        $dia->save();
        // dd($dia);

        // ==== Tạo và lưu đơn thuốc ====
        $Name = $request->Name;
        $Type = $request->Type;
        $Amount = $request->Amount;
        $Treatment = $request->Treatment;
        $Pre_ID = Helper::IDGenerator(new Prescription, 'Pre_ID', 10, 'PRE');
        for ($i = 0; $i < count($Name); $i++) {
            $p = new Prescription();
            $p->Pre_ID = $Pre_ID;
            $p->CustID = $CustID;
            $p->Name = $Name[$i];
            $p->Type = $Type[$i];
            $p->Amount = $Amount[$i];
            $p->Treatment = $Treatment[$i];
            $p->save();
        }
        // dd($p);
        return redirect(route('tram-cam.views'));
    }
    public function thuoctramcam($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        //return $pres;
        return view('chan-doan.tram-cam.viewer', compact('model', 'pres'));
    }

    public function detail($id)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.tram-cam.index', ['model' => $model]);
    }

    public function update(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('tram-cam.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('tram-cam.views'));
    }

    // =========== Nghiện rượu
    public function index_ngruou()
    {
        $cust = Dianose::all();
        return view('chan-doan.nghien-ruou.views', compact('cust'));
    }

    public function create_ngruou()
    {
        return view('chan-doan.nghien-ruou.create');
    }

    public function store_ngruou(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('nghien-ruou.views'));
    }

    public function detail_ngruou($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.nghien-ruou.index', ['model' => $model]);
    }
    public function thuocnghienruou($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.nghien-ruou.viewer', compact('model', 'pres'));
    }
    public function update_ngruou(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('nghien-ruou.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_ngruou($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('nghien-ruou.views'));
    }

    // =========== Mất trí
    public function index_mattri()
    {
        $cust = Dianose::all();
        return view('chan-doan.mat-tri.views', compact('cust'));
    }

    public function create_mattri()
    {
        return view('chan-doan.mat-tri.create');
    }

    public function store_mattri(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('mat-tri.views'));
    }
    public function thuocmattri($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.mat-tri.viewer', compact('model', 'pres'));
    }
    public function detail_mattri($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.mat-tri.index', ['model' => $model]);
    }

    public function update_mattri(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('mat-tri.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_mattri($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('mat-tri.views'));
    }

    // =========== Loạn thần
    public function index_lthan()
    {
        $cust = Dianose::all();
        return view('chan-doan.loan-than.views', compact('cust'));
    }

    public function create_lthan()
    {
        return view('chan-doan.loan-than.create');
    }

    public function store_lthan(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('loan-than.views'));
    }

    public function detail_lthan($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.loan-than.index', ['model' => $model]);
    }
    public function thuoc_lthan($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.loan-than.viewer', compact('model', 'pres'));
    }
    public function update_lthan(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('loan-than.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_lthan($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('loan-than.views'));
    }

    // =========== Lo âu
    public function index_loau()
    {
        $cust = Dianose::all();
        return view('chan-doan.lo-au.views', compact('cust'));
    }

    public function create_loau()
    {
        return view('chan-doan.lo-au.create');
    }

    public function store_loau(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('lo-au.views'));
    }
    public function thuoc_loau($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.loan-than.viewer', compact('model', 'pres'));
    }
    public function detail_loau($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.lo-au.index', ['model' => $model]);
    }

    public function update_loau(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('lo-au.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_loau($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('lo-au.views'));
    }

    // =========== Hưng cảm
    public function index_hcam()
    {
        $cust = Dianose::all();
        return view('chan-doan.hung-cam.views', compact('cust'));
    }

    public function create_hcam()
    {
        return view('chan-doan.hung-cam.create');
    }

    public function store_hcam(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('hung-cam.views'));
    }

    public function detail_hcam($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.hung-cam.index', ['model' => $model]);
    }
    public function thuoc_hcam($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.loan-than.viewer', compact('model', 'pres'));
    }
    public function update_hcam(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('hung-cam.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_hcam($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('hung-cam.views'));
    }

    // =========== Hoảng loạn
    public function index_hloan()
    {
        $cust = Dianose::all();
        return view('chan-doan.hoang-loan.views', compact('cust'));
    }

    public function create_hloan()
    {
        return view('chan-doan.hoang-loan.create');
    }

    public function store_hloan(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('hoang-loan.views'));
    }
    public function thuoc_hloan($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.hoang-loan.viewer', compact('model', 'pres'));
    }
    public function detail_hloan($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.hoang-loan.index', ['model' => $model]);
    }

    public function update_hloan(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('hoang-loan.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_hloan($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('hoang-loan.views'));
    }

    // =========== Động kinh
    public function index_dongkinh()
    {
        $cust = Dianose::all();
        return view('chan-doan.dong-kinh.views', compact('cust'));
    }

    public function create_dongkinh()
    {
        return view('chan-doan.dong-kinh.create');
    }

    public function store_dongkinh(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('dong-kinh.views'));
    }

    public function detail_dongkinh($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.dong-kinh.index', ['model' => $model]);
    }
    public function thuoc_dongkinh($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.dong-kinh.viewer', compact('model', 'pres'));
    }
    public function update_dongkinh(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('dong-kinh.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_dongkinh($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('dong-kinh.views'));
    }

    // =========== Ám ảnh
    public function index_amanh()
    {
        $cust = Dianose::all();
        return view('chan-doan.am-anh.views', compact('cust'));
    }

    public function create_amanh()
    {
        return view('chan-doan.am-anh.create');
    }

    public function store_amanh(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('am-anh.views'));
    }

    public function detail_amanh($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.am-anh.index', ['model' => $model]);
    }
    public function thuoc_amanh($CustID, Request $request, Prescription $pres)
    {
        $model = Dianose::find($CustID);
        $custs = $model->CustID;
        $pres = Prescription::where('CustID', "like", $custs)->get();
        return view('chan-doan.am-anh.viewer', compact('model', 'pres'));
    }
    public function update_amanh(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('am-anh.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_amanh($id)
    {
        $model = Dianose::destroy($id);
        return redirect(route('am-anh.views'));
    }

    // Tìm kiếm thuốc
    // public function show()
    // {
    //     $medicine = Medicine::paginate(20);
    //     // $medicine->load('dianoses');
    //     return view('chan-doan.tram-cam.views', compact('medicine'));
    // }
    // public function search(Request $request)
    // {
    //     if ($request->keyword) {

    //         $medicine = Medicine::where(
    //             'name',
    //             'like',
    //             "%" . $request->keyword . "%"
    //         )->paginate(20);
    //         $medicine->withPath('?keyword=' . $request->keyword);
    //     } else {
    //         $medicine = Medicine::paginate(20);
    //     }

    //     return view('views', [
    //         'medicine' => $medicine,
    //         'keyword' => $request->keyword
    //     ]);
    // }
}
