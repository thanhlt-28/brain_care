@extends('layouts.main')
@section('content')

<div class="container-wraper">

    <!---------------Check---------------->
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Kết quả theo dõi </h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi lo âu</button>
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
            <form class="mt-3 ml-5 mr-5" action="{{route('loau.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                    <!----------Collum-1------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="loau" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'loau') !== false)
                            checked
                            @endif>
                            <label for="">Lo âu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="nguitla" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'nguitla') !== false)
                            checked
                            @endif>
                            <label for="">Ngủ ít</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="daudau" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'daudau') !== false)
                            checked
                            @endif>
                            <label for="">Đau đầu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd07" type="checkbox" name="symptom[]" value="debimet" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'debimet') !== false)
                            checked
                            @endif>
                            <label for="">Dễ bị mệt</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd16" type="checkbox" name="symptom[]" value="khochiu" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'khochiu') !== false)
                            checked
                            @endif>
                            <label for="">Khó chịu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="hoangloanla" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'hoangloanla') !== false)
                            checked
                            @endif>
                            <label for="">Hoảng loạn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd09" type="checkbox" name="symptom[]" value="hathap" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hathap') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp thấp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd10" type="checkbox" name="symptom[]" value="hacao" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'hacao') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp cao</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd08" type="checkbox" name="symptom[]" value="bonchon" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'bonchon') !== false)
                            checked
                            @endif>
                            <label for="">Bồn chồn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd15" type="checkbox" name="symptom[]" value="hayquen" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'hayquen') !== false)
                            checked
                            @endif>
                            <label for="">Hay quên</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="tcla" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'tcla') !== false)
                            checked
                            @endif>
                            <label for="">Tình cảm</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">

                        <div class="form-check">
                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tmla" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tmla') !== false)
                            checked
                            @endif>
                            <label for="">Tim mạch</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtdla" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtdla') !== false)
                            checked
                            @endif>
                            <label for="">Đái tháo đường</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="tdla" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'tdla') !== false)
                            checked
                            @endif>
                            <label for="">Tình dục</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" type="checkbox" name="symptom[]" value="thaila" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'thaila') !== false)
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
        </div>
        </form>
    </div>
</div>
</div>
@endsection