@extends('admin.layouts.main')
@section('page-title', 'Bài viết')

@section('content')


<div class="container">
    <h2>Bài viết</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Mô tả</th>
                <th>Tác giả</th>
                <th>Ảnh</th>
                <th>TĐ bài viết (ID)</th>
                <th>
                    <a class="btn btn-secondary" href="{{route('posts.create')}}">Add new</a>
                </th>
            </tr>
        </thead>

        <tbody>
            @php
            $index=1
            @endphp

            @foreach ($posts as $item)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->desc}}</td>
                <td>{{$item->author}}</td>
                <td>
                    <img src="{{asset($item->image)}}" width="70" alt="">
                </td>
                <td>{{$item->cate_id}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('posts.edit', ['id'=>$item->id])}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('posts.destroy', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection