@extends('admin.layouts.main')
@section('page-title', 'Bài viết')

@section('content')

<div class="row">
    <div class="col-10 offset-1 mt-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Thêm Bài viết</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('posts.update', $model->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group mt-2">
                        <label class="form-label" for="">Tiêu đề</label>
                        <input type="text" class="form-control" id="" value="{{old('title', $model->title)}}" placeholder="Tiêu đề" name="title">
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Danh mục bài viết</label>
                        <select class="form-select" name="cate_id" id="">
                            @foreach ($cates as $item)
                            <option value="{{$item->id}}" @if ($item->id==$model->cate_id) selected
                                @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="">Mô tả ngắn</label>
                        <br>
                        <textarea name="desc" class="form-control" id="textarea" rows="5">{{old('desc',$model->desc)}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="">Nội dung bài viết</label>
                        <br>
                        <textarea name="content" id="mytextarea" rows="15">{{old('content',$model->content)}}</textarea>
                        @if ($errors->has('content'))
                        <span class="text-danger">{{$errors->first('content')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="exampleInputFile">Ảnh</label>
                        <input class="form-control mb-3" type="file" id="exampleInputFile" name="image">
                        <img src="{{asset(old('image', $model->image))}}" width="150" alt="">
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="form-group mt-2">
                    <label class="form-label" for="">Tác giả</label>
                    <br>
                    <input type="text" class="form-control" value="{{old('author', $model->author)}}" name="author">
                    @if ($errors->has('author'))
                    <span class="text-danger">{{$errors->first('author')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2 mt-3">
                    <div class="card">
                        <button type="submit" class="btn btn-primary" autocomplete="on">Lưu lại</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection