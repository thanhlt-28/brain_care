@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h2>Lĩnh vực hoạt động</h2>
    <div class="container-message">
        @if(session()->has('success'))
        <div class="alert alert-success">
            <h4 class="mx-auto mt-1 mb-1">{{ session()->get('success') }}</h4>
        </div>
        @endif
        @yield('content')
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Ảnh</th>
                <th>Mô tả</th>
                <th>
                    <a href="{{route('field.add')}}" class="btn btn-sm btn-light">Thêm mới</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
            $index = 1
            @endphp

            @foreach($fields as $item)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$item->title}}</td>
                <td>
                    <img src="{{asset($item->image)}}" width="80" alt="">
                </td>
                <td>{{$item->short_desc}}</td>
                <td>
                    <div class="btn-control">
                        <a href="{{route('field.edit', ['id'=> $item->id])}}" class="btn btn-sm btn-info">Sửa</a>
                        <a onclick="return confirm('Bạn chắc chắn xóa')" href="{{route('field.remove',['id'=> $item->id])}}" class="btn btn-sm btn-danger">Xóa</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection