@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <!---/////------------check-----------/////------->

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Kết quả theo dõi </h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi loạn thần</button>
                </li>
            </ul>
        </div>
    </div>


    <!---/////------------check-----------/////------->

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('loanthan.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Thông tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="treat_name" class="form-label">Họ và tên : </label>
                            <input type="text" name="treat_name" value="{{$model->treat_name}}" class="form-control-sm" placeholder="Điền họ tên..." id="kc01">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Giới tính : </label>
                            <input type="text" class="form-control-sm" value="{{$model->treat_gender}}" name="treat_gender" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">Năm sinh : </label>
                            <input type="text" value="{{$model->treat_dob}}" name="treat_dob" class="form-control-sm" placeholder="Năm sinh...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">SĐT : </label>
                            <input type="number" value="{{$model->treat_phone}}" name="treat_phone" placeholder="Số điện thoại..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" value="{{$model->treat_email}}" name="treat_email" placeholder="Điền email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ : </label>
                            <input type="text" placeholder="Địa chỉ..." value="{{$model->treat_address}}" name="treat_address" class="form-control-sm">
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>

                <!--------Form Checkbox--------->
                <div class="row ml-5">
                    <div class="col-md-2 ml-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="dtlt" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'dtlt') !== false)
                            checked
                            @endif>
                            <label for="">Dương tính</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="atlt" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'atlt') !== false)
                            checked
                            @endif>
                            <label for="">Âm tính</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="bluclt" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'bluclt') !== false)
                            checked
                            @endif>
                            <label for="">Bạo lực</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-2 ml-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="tutult" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'tutult') !== false)
                            checked
                            @endif>
                            <label for="">Tự tử</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="tclt" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'tclt') !== false)
                            checked
                            @endif>
                            <label for="">Trầm cảm</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd07" type="checkbox" name="symptom[]" value="vtclt" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'vtclt') !== false)
                            checked
                            @endif>
                            <label for="">Vô tổ chức</label>
                        </div>

                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2 ml-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kd09" type="checkbox" name="symptom[]" value="hathaplt" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hathaplt') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp thấp</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd10" type="checkbox" name="symptom[]" value="hacaolt" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'hacaolt') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp cao</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tmlt" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tmlt') !== false)
                            checked
                            @endif>
                            <label for="">Tim mạch</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-2 ml-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtdlt" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtdlt') !== false)
                            checked
                            @endif>
                            <label for="">Đái tháo đường</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkison" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkison') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="beophilt" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'beophilt') !== false)
                            checked
                            @endif>
                            <label for="">Béo phì</label>
                        </div>
                    </div>
                    <!---------Collum-5 ------------>
                    <div class="col-md-2 ml-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kd18" type="checkbox" name="symptom[]" value="tdlt" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'tdlt') !== false)
                            checked
                            @endif>
                            <label for="">Tình dục</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kd19" type="checkbox" name="symptom[]" value="thailt" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'thailt') !== false)
                            checked
                            @endif>
                            <label for="">Thai</label>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="col-md-2">
                            <div class="">
                                <label for="" class="form-label-dt">Số triệu chứng : </label>
                                <input type="text" class="form-control-smt" name="sym_time" value="{{$model->sym_time}}" id="kd21" onblur="txtBlur('21');">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="">
                                <label class="form-label-dt" for="">Thuyên giảm</label>
                                <input class="form-control-smt" name="result" value="{{$model->result}}" id="kd22" type="text" onblur="txtBlur('22');" width="10">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="">
                                <label class="form-label-dt" for="">Thuốc CTC</label>
                                <input class="form-control-smt" name="medicine_three" value="{{$model->medicine_three}}" id="kd25" type="text" onblur="txtBlur('25');" width="10">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="">
                                <label class="form-label-dt" for="">Thuốc CLT</label>
                                <input class="form-control-smt" name="medicine_once" value="{{$model->medicine_once}}" id="kd23" type="text" onblur="txtBlur('23');" width="10">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="">
                                <label class="form-label-dt" for="">Thuốc CCG</label>
                                <input class="form-control-smt" name="medicine_twice" value="{{$model->medicine_twice}}" id="kd24" type="text" onblur="txtBlur('24');" width="10">
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                        <button class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Trở lại</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection