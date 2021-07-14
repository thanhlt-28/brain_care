<?php

namespace App\Http\Controllers;

use App\Http\Requests\SymRequest;
use App\Http\Requests\TypeRequest;
use App\Models\Sym;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //----------Bệnh--------------//
    public function show()
    {
        $type = Type::all();
        return view('admin.type.index', compact('type'));
    }
    public function create()
    {
        return view('admin.type.add');
    }
    public function store(TypeRequest $request)
    {
        $model = new Type();
        $model->name = $request->name;
        $model->save();

        session()->flash('success', 'Thêm thành công');

        return redirect(route('type.index'));
    }

    public function destroy($id)
    {
        Type::destroy($id);
        session()->flash('success', 'Xóa thành công');

        return redirect(route('type.index'));
    }
    public function edit($id)
    {
        $model = Type::find($id);
        if (!$model) return redirect(route('type.index'));
        return view('admin.type.edit', ['model' => $model]);
    }
    public function update(TypeRequest $request, $id)
    {
        $model = Type::find($id);
        $model->name = $request->name;
        $model->save();
        session()->flash('success', 'Cập nhật thành công');

        return redirect(route('type.index'));
    }


    // --------Triệu chứng--------------//
    public function index()
    {
        $sym = Sym::all();
        $sym->load('types');
        return view('admin.sym.index', compact('sym'));
    }
    public function addnew()
    {
        $type = Type::all();
        return view('admin.sym.add', compact('type'));
    }
    public function storage(SymRequest $request)
    {
        $model = new Sym();
        $model->fill($request->all());
        $model->save();
        return redirect(route('sym.index'));
    }
    public function remove($id)
    {
        Sym::destroy($id);
        return redirect(route('sym.index'));
    }
    public function edited($id)
    {
        $type = Type::all();
        $model = Sym::find($id);
        if (!$model) return redirect(route('sym.index'));
        return view('admin.sym.edit', ['model' => $model, 'type' => $type]);
    }
    public function updated(SymRequest $request, $id)
    {
        $model = Sym::find($id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('sym.index'));
    }
    public function publish()
    {
        $this->published_at = now();
        $this->save();
    }
}
