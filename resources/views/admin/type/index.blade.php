@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h2>Các loại bệnh</h2>
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
                <th>Tên</th>
                <th>
                    <a href="{{route('type.add')}}" class="btn btn-sm btn-light">Thêm mới</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
            $index = 1
            @endphp

            @foreach($type as $item)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <div class="btn-control">
                        <a href="{{route('type.edit', ['id' => $item->id])}}" class="btn btn-sm btn-info">Sửa</a>
                        <a onclick="return confirm('Bạn chắc chắn xóa')" href="{{route('type.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Xóa</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection