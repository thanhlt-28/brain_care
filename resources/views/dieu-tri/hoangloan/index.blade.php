@extends('layouts.main')
@section('content')

<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc02a').innerHTML = kc[3];
            document.getElementById('tc02b').innerHTML = (kc[3] == 1 ? 1 : 0);
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11] + kc[12] + kc[13] + kc[14] + kc[15] + kc[16];
            document.getElementById('tc03a').innerHTML = n;
            document.getElementById('tc03b').innerHTML = (n >= 4 ? 1 : 0);
            n = parseInt(document.getElementById('tc02b').innerHTML) + parseInt(document.getElementById('tc03b').innerHTML);
            document.getElementById('tc04').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById('tc05').innerHTML = kc[17];
            document.getElementById('tc06').innerHTML = kc[18];
            document.getElementById('tc06b').innerHTML = kc[21];
            document.getElementById("tc07").innerHTML = kc[14];
            n = parseInt(document.getElementById('tc05').innerHTML) + parseInt(document.getElementById('tc07').innerHTML);
            document.getElementById('tc08').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById('tc09').innerHTML = kc[22];
            document.getElementById('tc10').innerHTML = kc[23];
            document.getElementById('tc11').innerHTML = (kc[22] + kc[23]) == 0 ? 1 : 0;
            document.getElementById('tc12').innerHTML = kc[24];
            document.getElementById('tc13').innerHTML = (kc[24] == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc08').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 4 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 4 ? "RL hoảng loạn" : "Không RL hoảng loạn");
        }

        function recalcTCB() {
            document.getElementById("tcb01a").innerHTML = kc[3];
            document.getElementById('tcb01b').innerHTML = (kc[3] == 1 ? 1 : 0);
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11] + kc[12] + kc[13] + kc[14] + kc[15] + kc[16];
            document.getElementById("tcb02a").innerHTML = n;
            document.getElementById('tcb02b').innerHTML = (n >= 4 ? 1 : 0);
            n = parseInt(document.getElementById('tcb01b').innerHTML) + parseInt(document.getElementById('tcb02b').innerHTML);
            document.getElementById('tcb03a').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById('tcb03b').innerHTML = (n == 2 ? "Cơn hoảng loạn" : "Không cơn hoảng loạn");

        }



        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL hoảng loạn";
            } else
            if (parseInt(document.getElementById("tcb03a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Cơn hoảng loạn";
            } else {
                document.getElementById("kc21").innerHTML = "Không hoảng loạn";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            chandoan();
        }

        function chkChange(chkid) {
            var chkobj = document.getElementById('kc' + chkid);
            kc[chkid - 1] = chkobj.checked ? 1 : 0;
            //alert('Has been changed: kc'+chkid+", cheked: "+chkobj.checked+", variable: "+kc[chkid-1]);
            recalc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kc' + txtid);
            kc[txtid - 1] = txtobj.value;
            //alert("New value: "+kc[txtid-1]);
            recalc();
        }
    </script>

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Kết quả theo dõi </h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi hưng cảm</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('hoangloan.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                    <!---------Collum-1 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="hlhl" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'hlhl') !== false)
                            checked
                            @endif>
                            <label for="">Hoảng loạn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="nguithl" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'nguithl') !== false)
                            checked
                            @endif>
                            <label for="">Ngủ ít</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd07" type="checkbox" name="symptom[]" value="timhoihop" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'timhoihop') !== false)
                            checked
                            @endif>
                            <label for="">Tim hồi hộp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd08" type="checkbox" name="symptom[]" value="khotho" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'khotho') !== false)
                            checked
                            @endif>
                            <label for="">Khó thở</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd19" type="checkbox" name="symptom[]" value="daunguc" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'daunguc') !== false)
                            checked
                            @endif>
                            <label for="">Đau ngực</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd16" type="checkbox" name="symptom[]" value="techantay" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'techantay') !== false)
                            checked
                            @endif>
                            <label for="">Tê chân tay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="sochet" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'sochet') !== false)
                            checked
                            @endif>
                            <label for="">Sợ chết</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="tchl" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'tchl') !== false)
                            checked
                            @endif>
                            <label for="">Tình cảm</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="loauhl" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'loauhl') !== false)
                            checked
                            @endif>
                            <label for="">Lo âu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd20" type="checkbox" name="symptom[]" value="daubung" onchange="chkChange('20');" @if (strpos($model->symptom[0], 'daubung') !== false)
                            checked
                            @endif>
                            <label for="">Đau bụng</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tmhl" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tmhl') !== false)
                            checked
                            @endif>
                            <label for="">Tim mạch</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd15" type="checkbox" name="symptom[]" value="runhl" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'runhl') !== false)
                            checked
                            @endif>
                            <label for="">Run chân tay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="tdhl" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'tdhl') !== false)
                            checked
                            @endif>
                            <label for="">Tình dục</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" type="checkbox" name="symptom[]" value="thaihl" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'thaihl') !== false)
                            checked
                            @endif>
                            <label for="">Thai</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtdhl" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtdhl') !== false)
                            checked
                            @endif>
                            <label for="">Đái tháo đường</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd14" type="checkbox" name="symptom[]" value="smks" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'smks') !== false)
                            checked
                            @endif>
                            <label for="">Sợ mất kiểm soát</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd09" type="checkbox" name="symptom[]" value="hathaphl" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hathaphl') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp thấp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd10" type="checkbox" name="symptom[]" value="hacaohl" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'hacaohl') !== false)
                            checked
                            @endif>
                            <label for="">Huyết áp cao</label>
                        </div>
                    </div>
                    <div class="row ml-5">
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