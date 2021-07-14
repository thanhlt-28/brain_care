@extends('admin.layouts.main')
@section('page-title', 'Danh mục')

@section('content')
<div class="container">
    <h2>Danh mục</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>
                    <a href="{{route('cates.add')}}" class="btn btn-sm btn-light">Thêm mới</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
            $index = 1
            @endphp

            @foreach($cates as $item)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <div class="btn-control">
                        <a href="{{route('cates.edit', ['id' => $item->id])}}" class="btn btn-sm btn-info">Sửa</a>
                        <a onclick="return confirm('Bạn chắc chắn xóa')" href="{{route('cates.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Xóa</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection