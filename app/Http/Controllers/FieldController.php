<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldRequest;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function show()
    {
        $fields = Field::all();
        return view('admin.field.index', compact('fields'));
    }

    public function create()
    {
        return view('admin.field.add');
    }
    public function store(FieldRequest $request)
    {
        $model = new Field();
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $fileName = uniqid() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $model->image = 'storage/' . $filePath;
        }
        $model->save();
        return redirect(route('field.index'));
    }
    public function remove($id)
    {
        $model = Field::destroy($id);
        return redirect(route('field.index'));
    }
    public function edit($id)
    {
        $model = Field::find($id);
        if (!$model) return redirect(route('field.index'));
        return view('admin.field.edit', ['model' => $model]);
    }
    public function update(FieldRequest $request, $id)
    {
        $model = Field::find($id);
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $fileName = uniqid() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $model->image = 'storage/' . $filePath;
        }
        $model->save();
        return redirect(route('field.index'));
    }
}
