<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cates = Category::all();
        return view('admin.cates.index', compact('cates'));
    }
    public function create()
    {
        return view('admin.cates.add');
    }
    public function store(SaveCategoryRequest $request)
    {
        $model = new Category();
        $model->name = $request->name;
        $model->save();
        return redirect(route('cates.index'));
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect(route('cates.index'));
    }
    public function edit($id)
    {
        $model = Category::find($id);
        if (!$model) return redirect(route('cates.index'));

        return view('admin.cates.edit', ['model' => $model]);
    }

    public function update(SaveCategoryRequest $request, $id)
    {
        $model = Category::find($id);
        $model->name = $request->name;
        $model->save();
        return redirect(route('cates.index'));
    }
}
