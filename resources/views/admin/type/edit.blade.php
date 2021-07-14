@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-10 offset-1 mt-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Thêm tên bệnh</h3>
            </div>
            <form role="form" method="POST" action="{{route('type.update', $model->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Tên bệnh</label>
                        <input type="text" class="form-control" id="name" value="{{old('name', $model->name)}}" name="name">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
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