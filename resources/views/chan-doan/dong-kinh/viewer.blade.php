@extends('layouts.main')
@section('content')

<div class="container-wraper" id="prescription">
    <form class="mt-3 ml-5 mr-5" action="{{route('dong-kinh.update', $model->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="row mt-3">
                        <div class="col-md-8">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-2 ml-3">
                                        <img src="https://braincare.vn/wp-content/uploads/2021/03/logo-new.png" width="70px" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <strong>Trung tâm chăm sóc sức khỏe tinh thần Braincare</strong>
                                        <p>Địa chỉ: Tầng 7, Toà nhà 59 Võ Chí Công, P. Nghĩa Đô, Q. Cầu Giấy, Tp. Hà Nội, Việt Nam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <strong>Số hồ sơ: .............</strong>
                        </div>
                    </div>
                    <div class="card-title">
                        <h4>Đơn thuốc</h4>
                        <hr width="50%" class="mx-auto">
                    </div>
                    <div class="row ml-5">

                        <div class="col-md-6">
                            <p class="fs-6">Họ và tên: &nbsp; <span>{{$model->cust_name}}</span></p>
                            <p class="fs-6">Giới tính:&nbsp; <span>{{$model->cust_gender}}</span></p>
                            <p class="fs-6">Năm sinh: &nbsp;<span>{{$model->cust_dob}}</span></p>
                        </div>
                        <div class="col-md-6">
                            <p class="fs-6">Số điện thoại: &nbsp;<span>{{$model->phone}}</span></p>
                            <p class="fs-6">Email: &nbsp;<span>{{$model->cust_email}}</span></p>
                            <p class="fs-6">Địa chỉ: &nbsp;<span>{{$model->cust_address}}</span></p>
                        </div>
                        <p class="fs-6">Chẩn đoán: <strong>{{$model->result}}</strong></p>
                    </div>

                    <div class="card-body">
                        <!-- =============== Form thêm đơn thuốc ============ -->
                        <div class="table-responsive">
                            <table id="autocomplete_table" class="table table-hover autocomplete_table">
                                <thead>
                                    <tr>
                                        <th>Tên thuốc</th>
                                        <th>Số lượng</th>
                                        <th>Liều lượng</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($pres as $pre)
                                    <tr id="row_1">
                                        <td>
                                            <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off" value="{{old('Name', $pre->Name)}}">
                                            <div id="search-ajax">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off" value="{{old('Amount', $pre->Amount)}}">
                                        </td>
                                        <td>
                                            <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off" value="{{old('Treatment', $pre->Treatment)}} viên/ ngày">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="control ml-3 mt-5">
                            <p class="fs-6 text-left">Bác sĩ <i>(kí tên)</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="card-title">
    <input type="button" class="btn btn-primary" onclick="printPre('prescription')" value="In đơn thuốc" />
    <a class="btn btn-success" href="{{route('dong-kinh.views')}}"> Trở lại</a>
</div>

<!-- SCRIPT PRINT -->
<script>
    function printPre(prescription) {
        var printContents = document.getElementById('prescription').innerHTML;
        const orderHtml = '<html><head><title></title></head><body>' + printContents + '</body></html>'
        w = window.open();
        // w = document.body.innerHTML;
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>
@endsection