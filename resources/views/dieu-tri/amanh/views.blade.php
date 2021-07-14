@extends('layouts.main')
@section('content')

<div class="container-wraper">

    <!---/////------------check-----------/////------->
    <div class="tab-content" id="">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-12 mt-2">
                <div class="card-title mx-auto">
                    <h4 class="t">Thông tin theo dõi</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Năm sinh</th>
                                <th>Địa chỉ</th>
                                <th>Kết quả</th>
                                <th>
                                    <a href="{{ route('amanh.create') }}" class="btn btn-success">Thêm chẩn đoán mới</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($treat as $item)
                            <tr>
                                <td>{{ $item->treat_name }}</td>
                                <td>{{ $item->treat_phone }}</td>
                                <td>{{ $item->treat_email }}</td>
                                <td>{{ $item->treat_dob }}</td>
                                <td>{{ $item->treat_address }}</td>
                                <td>{{ $item->result }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('amanh.index', $item->id)}}">Xem chi tiết</a>
                                    <a class="btn btn-warning" href="{{route('amanh.destroy', ['id' => $item->id])}}">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection