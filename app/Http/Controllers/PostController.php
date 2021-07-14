<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        $posts->load('category');
        return view('admin.posts.index', compact('posts'));
    }
    public function create()
    {
        $cates = Category::all();
        return view('admin.posts.add-post', compact('cates'));
    }

    public function store(SavePostRequest $request)
    {
        $model = new Post();
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $fileName = uniqid() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $model->image = 'storage/' . $filePath;
        }
        $model->save();
        return redirect(route('posts.index'));
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('posts.index'));
    }
    public function edit($id)
    {
        $cates = Category::all();
        $model = Post::find($id);
        if (!$model) return redirect(route('posts.index'));
        return view('admin.posts.edit', ['model' => $model, 'cates' => $cates]);
    }
    public function update(SavePostRequest $request, $id)
    {
        $model = Post::find($id);
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $fileName = uniqid() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $model->image = 'storage/' . $filePath;
        }
        $model->save();
        return redirect(route('posts.index'));
    }
    public function details($id)
    {
        $model = Post::find($id);
        return view('pages.details', ['model' => $model]);
    }
    public function publish()
    {
        $this->published_at = now();
        $this->save();
    }
}
