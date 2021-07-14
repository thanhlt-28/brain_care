@extends('layouts.main')
@section('content')

<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc02a').innerHTML = kc[10];
            document.getElementById('tc03a').innerHTML = kc[12];
            document.getElementById('tc04').innerHTML = kc[11];
            document.getElementById('tc05').innerHTML = kc[15];
            document.getElementById('tc06').innerHTML = kc[16];
            document.getElementById('tc07').innerHTML = kc[17];
            document.getElementById('tc08').innerHTML = (kc[22] == 0 ? 1 : 0);
            n = kc[10] + kc[12] + kc[11] + kc[15] + kc[16] + kc[17] + kc[22];
            document.getElementById('tc14a').innerHTML = (n == 6 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 6 ? "AA sợ đặc hiệu" : "Không ám ảnh");
        }

        function recalcTCB() {
            document.getElementById("tcb01").innerHTML = kc[9];
            document.getElementById("tcb02").innerHTML = kc[14];
            document.getElementById("tcb03").innerHTML = kc[12];
            document.getElementById("tcb04").innerHTML = kc[11];
            document.getElementById("tcb05").innerHTML = kc[15];
            document.getElementById("tcb06").innerHTML = kc[16];
            document.getElementById("tcb07").innerHTML = kc[17];
            document.getElementById("tcb08").innerHTML = (kc[18] + kc[21] >= 1 ? 0 : 1);
            document.getElementById("tcb09").innerHTML = (kc[22] == 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcb01").innerHTML) + parseInt(document.getElementById("tcb02").innerHTML) + parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb04").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb06").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb08").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML);
            document.getElementById("tcb12a").innerHTML = (n == 9 ? 1 : 0);
            document.getElementById("tcb12b").innerHTML = (n == 9 ? "AA sợ xã hội" : "Không AA xa hoi");
        }

        function recalcTCC() {
            document.getElementById("tcc01").innerHTML = kc[4];
            document.getElementById("tcc02").innerHTML = kc[5];
            document.getElementById("tcc03").innerHTML = kc[6];
            document.getElementById("tcc04").innerHTML = kc[7];
            document.getElementById("tcc05").innerHTML = kc[8];
            n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8]
            document.getElementById("tcc06").innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[12];

            document.getElementById("tcc09").innerHTML = kc[11];

            document.getElementById("tcc10").innerHTML = kc[15];
            document.getElementById("tcc11").innerHTML = kc[16];
            document.getElementById("tcc13").innerHTML = kc[17];
            document.getElementById("tcc14").innerHTML = (kc[18] + kc[21] >= 1 ? 0 : 1);
            n = parseInt(document.getElementById("tcc06").innerHTML) + parseInt(document.getElementById("tcc08").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc10").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML) + parseInt(document.getElementById("tcc13").innerHTML) + parseInt(document.getElementById("tcc14").innerHTML);
            n = (n == 7 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "AA sợ khoảng không" : "Không AA so khoang trong");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "AA so xa hoi";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "AA so khoang trong";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "AA dac hieu";
            } else {
                document.getElementById("kc21").innerHTML = "Không ám ảnh";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
            chandoan();
        }

        function chkChange(chkid) {
            var chkobj = document.getElementById('kc' + chkid);
            kc[chkid - 1] = chkobj.checked ? 1 : 0;
            recalc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kc' + txtid);
            kc[txtid - 1] = txtobj.value;
            recalc();
        }
    </script>
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Kết quả theo dõi</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi ám ảnh</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp

        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('amanh.store')}}" method="POST" enctype="multipart/form-data">
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
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!----------checkbox------------>
                <div class="row ml-5">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" name="symptom[]" value="amanh" type="checkbox" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'amanh') !== false)
                            checked
                            @endif>
                            <label for="">Ám ảnh</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd07" name="symptom[]" value="sohai" type="checkbox" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'sohai') !== false)
                            checked
                            @endif>
                            <label for="">Sợ hãi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd08" name="symptom[]" value="tranhne" type="checkbox" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'tranhne') !== false)
                            checked
                            @endif>
                            <label for="">Tránh né</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd15" name="symptom[]" value="sinhhoat" type="checkbox" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'sinhhoat') !== false)
                            checked
                            @endif>
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" name="symptom[]" value="tcaa" type="checkbox" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'tcaa') !== false)
                            checked
                            @endif>
                            <label for="">Tình cảm</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd10" name="symptom[]" value="tmaa" type="checkbox" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'tmaa') !== false)
                            checked
                            @endif>
                            <label for="">Tim mạch</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd11" name="symptom[]" value="dongkinhaa" type="checkbox" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'dongkinhaa') !== false)
                            checked
                            @endif>
                            <label for="">Động kinh</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" name="symptom[]" value="thaiaa" type="checkbox" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'thaiaa') !== false)
                            checked
                            @endif>
                            <label for="">Thai</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" name="symptom[]" value="parkinson" type="checkbox" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" name="symptom[]" value="tdaa" type="checkbox" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'tdaa') !== false)
                            checked
                            @endif>
                            <label for="">Tình dục</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" name="symptom[]" value="dtdaa" type="checkbox" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtdaa') !== false)
                            checked
                            @endif>
                            <label for="">Đái tháo đường</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" name="symptom[]" value="hlaa" type="checkbox" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'hlaa') !== false)
                            checked
                            @endif>
                            <label for="">Hoảng loạn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd09" name="symptom[]" value="hacaoaa" type="checkbox" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hacaoaa') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp cao</label>
                        </div>
                    </div>
                    <div class="row ml-5 mt-3">
                        <div class="col-md-4">
                            <div class="">
                                <label for="" class="form-label-dt">Số triệu chứng: </label>
                                <input type="text" name="sym_time" placeholder="Tính theo ngày" class="form-control-smt" value="{{$model->sym_time}}" id="kd21" onblur="txtBlur('21');">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <label class="form-label-dt" for="">Thuyên giảm</label>
                                <input class="form-control-smt" value="{{$model->result}}" name="result" id="kd22" type="text" onblur="txtBlur('22');" width="10">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <label class="form-label-dt" for="">Thuốc CTC</label>
                                <input class="form-control-smt" value="{{$model->medicine_once}}" name="medicine_once" id="kd23" type="text" onblur="txtBlur('23');" width="10">
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