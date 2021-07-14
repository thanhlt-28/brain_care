@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-10 offset-1 mt-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Thêm triệu chứng</h3>
            </div>
            <form role="form" method="POST" action="{{route('sym.updated', $model->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="type_name" class="form-label">Tên triệu chứng</label>
                        <input type="text" class="form-control" value="{{old('type_name', $model->type_name)}}" id="type_name" placeholder="Tên bệnh" name="type_name">
                        @if ($errors->has('type_name'))
                        <span class="text-danger">{{$errors->first('type_name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="type_id" class="form-label">Loại bệnh</label>
                        <select name="type_id" id="type_id" class="form-select">
                            @foreach($type as $item)
                            <option value="{{$item->id}}" @if ($item->id==$model->type_id) selected
                                @endif">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('type_id'))
                        <span class="text-danger">{{$errors->first('type_id')}}</span>
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