@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-10 offset-1 mt-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Thêm lĩnh vực</h3>
            </div>
            <form role="form" method="POST" action="{{route('field.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="title" class="form-label">Tên triệu chứng</label>
                        <input type="text" class="form-control" id="title" placeholder="Tên bệnh" name="title">
                        @if ($errors->has('title'))
                        <span class="text-danger">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label">Ảnh</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="short_desc" class="form-label">Mô tả</label>
                        <textarea name="short_desc" id="short_desc" class="form-control" rows="3"></textarea>
                        @if ($errors->has('short_desc'))
                        <span class="text-danger">{{$errors->first('short_desc')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="details" class="form-label">Chi tiết</label>
                        <textarea name="details" id="mytextarea" rows="10"></textarea>
                        @if ($errors->has('details'))
                        <span class="text-danger">{{$errors->first('details')}}</span>
                        @endif
                    </div>
                </div>

                <div class="box-footer mt-2">
                    <button type="submit" class="btn btn-primary" autocomplete="on">Lưu lại</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection