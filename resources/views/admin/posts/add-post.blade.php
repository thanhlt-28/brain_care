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
            <form role="form" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group mt-2">
                        <label class="form-label" for="exampleInputName">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Tiêu đề" name="title">
                        @if ($errors->has('title'))
                        <span class="text-danger">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Danh mục bài viết</label>
                        <select class="form-select" name="cate_id" id="">
                            @foreach ($cates as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="">Mô tả ngắn</label>
                        <br>
                        <textarea class="form-control" name="desc" id="image-tools" rows="5"></textarea>
                        @if ($errors->has('desc'))
                        <span class="text-danger">{{$errors->first('desc')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="">Nội dung bài viết</label>
                        <br>
                        <textarea name="content" id="mytextarea" rows="10"></textarea>
                        @if ($errors->has('content'))
                        <span class="text-danger">{{$errors->first('content')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="exampleInputFile">Ảnh</label>
                        <input class="form-control" type="file" id="exampleInputFile" name="image">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="form-group mt-2">
                    <label class="form-label" for="">Tác giả</label>
                    <br>
                    <input type="text" class="form-control" name="author">
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