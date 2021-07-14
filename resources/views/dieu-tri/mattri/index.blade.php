@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcMT1() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('tc03b').innerHTML = n;
            document.getElementById('tc04').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tc05').innerHTML = kc[10];
            document.getElementById('tc06').innerHTML = (kc[10] == 1 ? 0 : 1);
            document.getElementById('tc07').innerHTML = kc[16];
            document.getElementById('tc09').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('tc10').innerHTML = kc[18];
            document.getElementById('tc11').innerHTML = (kc[18] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 4 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 4 ? "Mất trí nhẹ" : "Không mất trí nhẹ");
        }

        function recalcMT2() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('tcb02').innerHTML = n;
            document.getElementById('tcb03').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[10];
            document.getElementById("tcb05").innerHTML = (kc[10] == 0 ? 0 : 1);
            document.getElementById('tcb06').innerHTML = kc[16];
            document.getElementById('tcb07').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('tcb08').innerHTML = kc[18];
            document.getElementById('tcb09').innerHTML = (kc[18] == 0 ? 0 : 1);
            n = parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML);
            n = n == 4 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Mất trí nặng" : "Không mất trí nặng");
        }

        function recalcAlz1() {
            document.getElementById("tcc01").innerHTML = kc[5];
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('tcc02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tcc03').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('tcc04').innerHTML = (kc[18] == 0 ? 0 : 1);
            document.getElementById('tcc13').innerHTML = (kc[10] == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tcc01').innerHTML) + parseInt(document.getElementById('tcc02').innerHTML) + parseInt(document.getElementById('tcc03').innerHTML) + parseInt(document.getElementById('tcc04').innerHTML) + parseInt(document.getElementById('tcc13').innerHTML);
            document.getElementById('tcc05').innerHTML = (n == 5 ? 1 : 0);

            document.getElementById("tcc06").innerHTML = kc[17];
            document.getElementById("tcc07").innerHTML = (kc[17] == 0 ? 0 : 1);
            document.getElementById("tcc08").innerHTML = kc[13];
            document.getElementById("tcc09").innerHTML = (kc[13] == 0 ? 1 : 0);
            n = kc[14] + kc[15];
            document.getElementById("tcc10").innerHTML = n;
            document.getElementById("tcc11").innerHTML = (n > 0 ? 0 : 1);
            n = parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 4 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "Alzheimer nhẹ" : "Không Alzheimer nhẹ");
        }

        function recalcAlz2() {
            document.getElementById("rlt01").innerHTML = kc[5];
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('rlt02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('rlt03').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('rlt04').innerHTML = (kc[18] == 0 ? 0 : 1);
            document.getElementById('rlt13').innerHTML = (kc[10] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('rlt01').innerHTML) + parseInt(document.getElementById('rlt02').innerHTML) + parseInt(document.getElementById('rlt03').innerHTML) + parseInt(document.getElementById('rlt04').innerHTML) + parseInt(document.getElementById('rlt13').innerHTML);
            document.getElementById('rlt05').innerHTML = (n == 5 ? 1 : 0);
            document.getElementById("rlt06").innerHTML = kc[17];
            document.getElementById("rlt07").innerHTML = (kc[17] == 0 ? 0 : 1);
            document.getElementById("rlt08").innerHTML = kc[13];
            document.getElementById("rlt09").innerHTML = (kc[13] == 0 ? 1 : 0);
            n = kc[13] + kc[14] + kc[15];
            document.getElementById("rlt10").innerHTML = n;
            document.getElementById("rlt11").innerHTML = (n > 0 ? 0 : 1);
            n = parseInt(document.getElementById("rlt05").innerHTML) + parseInt(document.getElementById("rlt07").innerHTML) + parseInt(document.getElementById("rlt09").innerHTML) + parseInt(document.getElementById("rlt11").innerHTML);
            n = (n == 4 ? 1 : 0);
            document.getElementById("rlt12a").innerHTML = n;
            document.getElementById("rlt12b").innerHTML = (n == 1 ? "Alzheimer nặng" : "Không Alzheimer nặng");


        }

        function recalcMtP() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('hc02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('hc03').innerHTML = (kc[16] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('hc02').innerHTML) + parseInt(document.getElementById('hc03').innerHTML);
            document.getElementById('hc05').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById("hc06").innerHTML = kc[11];
            document.getElementById("hc07").innerHTML = (kc[11] == 0 ? 0 : 1);
            document.getElementById("hc09").innerHTML = kc[17];
            document.getElementById("hc10").innerHTML = (kc[17] == 0 ? 0 : 1);
            document.getElementById("hc11").innerHTML = kc[14];
            document.getElementById("hc12").innerHTML = kc[15];
            document.getElementById("hc13").innerHTML = (kc[18] == 0 ? 1 : 0);
            n = parseInt(document.getElementById("hc11").innerHTML) + parseInt(document.getElementById("hc12").innerHTML) + parseInt(document.getElementById("hc13").innerHTML);
            n = (n == 0 ? 1 : 0);
            document.getElementById("hc14").innerHTML = n;
            n = parseInt(document.getElementById("hc05").innerHTML) + parseInt(document.getElementById("hc07").innerHTML) + parseInt(document.getElementById("hc10").innerHTML) + parseInt(document.getElementById("hc14").innerHTML);
            n = (n == 4 ? 1 : 0);
            document.getElementById("hc08a").innerHTML = n;
            document.getElementById("hc08b").innerHTML = (n == 1 ? "MT do Parkinson" : "Không mất trí do Parkinson");

        }

        function recalcMm() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('mm02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('mm03').innerHTML = (kc[16] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('mm02').innerHTML) + parseInt(document.getElementById('mm03').innerHTML);
            document.getElementById('mm05').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById("mm06").innerHTML = kc[12];
            document.getElementById("mm07").innerHTML = (kc[12] == 0 ? 0 : 1);
            document.getElementById("mm11").innerHTML = kc[14];
            document.getElementById("mm14").innerHTML = (kc[14] == 1 ? 0 : 1);
            n = parseInt(document.getElementById("mm05").innerHTML) + parseInt(document.getElementById("mm07").innerHTML) + parseInt(document.getElementById("mm14").innerHTML);
            n = (n == 3 ? 1 : 0);
            document.getElementById("mm08a").innerHTML = n;
            document.getElementById("mm08b").innerHTML = (n == 1 ? "MT do mạch máu" : "Không mất trí do mạch máu");

        }

        function chandoan() {
            if (parseInt(document.getElementById("mm08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí do mạch máu";
            } else
            if (parseInt(document.getElementById("hc08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí Parkinson";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Alzheimer nhẹ";
            } else

            if (parseInt(document.getElementById("rlt12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Alzheimer nặng";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí nhẹ";
            } else
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí nặng";
            } else {
                document.getElementById("kc21").innerHTML = "Không mất trí";
            }
        }

        function recalc() {
            recalcMT1();
            recalcMT2();
            recalcAlz1();
            recalcAlz2();
            recalcMtP();
            recalcMm();
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

    <!---/////------------check-----------/////------->

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Kết quả theo dõi</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi mất trí</button>
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
            <form class="mt-3 ml-5 mr-5" action="{{route('mattri.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="container-form">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="alznhe" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'alznhe') !== false)
                                            checked
                                            @endif>
                                            <label for="">Alzheimer nhẹ</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="alznang" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'alznang') !== false)
                                            checked
                                            @endif>
                                            <label for="">Alzheimer nặng</label>
                                        </div>
                                        <div class=" form-check">
                                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="nguitmt" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'nguitmt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Ngủ ít</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!---------Collum-2 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="tcmt" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'tcmt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Tình cảm</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="ltmt" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'ltmt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Loạn thần</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tmmt" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tmmt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Tim mạch</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!---------Collum-2 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd08" type="checkbox" name="symptom[]" value="2dovat" onchange="chkChange('08');" @if (strpos($model->symptom[0], '2dovat') !== false)
                                            checked
                                            @endif>
                                            <label for="">2 đồ vật đơn giản</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd15" type="checkbox" name="symptom[]" value="3dovat" onchange="chkChange('15');" @if (strpos($model->symptom[0], '3dovat') !== false)
                                            checked
                                            @endif>
                                            <label for="">Gọi tên 3 đồ vật</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtdmt" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtdmt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Đái tháo đường</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /////////////////////////// -->
                        <div class="col">
                            <div class="row">
                                <div class="col-md-4">
                                    <!---------Collum-3 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd09" type="checkbox" name="symptom[]" value="hathapmt" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hathapmt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Huyết áp thấp</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd10" type="checkbox" name="symptom[]" value="hacaomt" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'hacaomt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Huyết áp cao</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                                            checked
                                            @endif>
                                            <label for="">Parkinson</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!---------Collum-4 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="beophimt" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'beophimt') !== false)
                                            checked
                                            @endif>
                                            <label for="">Béo phì</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd07" type="checkbox" name="symptom[]" value="danhvannguoc" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'danhvannguoc') !== false)
                                            checked
                                            @endif>
                                            <label for="">Đánh vần ngược</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd16" type="checkbox" name="symptom[]" value="vhggv1c" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'vhggv1c') !== false)
                                            checked
                                            @endif>
                                            <label for="">Vẽ hình,gấp giấy, viết một câu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-2">
                                        <label for="" class="form-label-dt">TĐT : </label>
                                        <input class="form-control-smt" value="0" id="kd22" type="text" width="10">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-1">
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label for="" class="form-label-dt">Số triệu chứng : </label>
                            <input name="sym_time" class="form-control-smt" value="{{$model->sym_time}}" id="kd20" type="text" onblur="txtBlur('21');">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Thuyên giảm</label>
                            <input class="form-control-smt" value="{{$model->result}}" id="kd21" type="text" name="result" onblur="txtBlur('22');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Memantine</label>
                            <input class="form-control-smt" value="{{$model->medicine_once}}" name="medicine_once" id="kd23" type="text" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Chống co giật</label>
                            <input class="form-control-smt" value="{{$model->medicine_twice}}" name="medicine_twice" id="kd18" type="text" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Chống trầm cảm</label>
                            <input class="form-control-smt" value="{{$model->medicine_three}}" name="medicine_three" id="kd24" type="text" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Chống loạn thần</label>
                            <input class="form-control-smt" value="{{$model->medicine_fourth}}" name="medicine_fourth" id="kd25" type="text" width="10">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                    <button class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Trở lại</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <h4>Mất trí nhẹ</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL nhận thức </td>
                        <td id="tc03b">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="tc04">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt phụ thuộc</td>
                        <td id="tc05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="tc06">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="tc07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tc09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL tâm thần khác</td>
                        <td id="tc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tc14a">&nbsp;</td>
                        <td id="tc14b" title="IF(tc14a=1;'Trầm cảm';'Không trầm cảm')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
            <h4>Mất trí nặng</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng chính</td>
                        <td id="tcb01"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng </td>
                        <td id="tcb02"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td></td>
                        <td id="tcb03"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="tcb04"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td></td>
                        <td id="tcb05"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh trầm cảm</td>
                        <td id="tcb06"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td></td>
                        <td id="tcb07"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="tcb08"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td></td>
                        <td id="tcb09"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="tcb10"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td></td>
                        <td id="tcb11"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tcb12a"></td>
                        <td id="tcb12b"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Alzheimer nhẹ</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Trí nhớ và học tập</td>
                        <td id="tcc01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL nhận thức </td>
                        <td id="tcc02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng </td>
                        <td id="tcc03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL tâm thần khác</td>
                        <td id="tcc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt phụ thuộc</td>
                        <td id="tcc13">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Diễn tiến từ từ</td>
                        <td id="tcc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh thần kinh</td>
                        <td id="tcc08">0</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể, dùng chất</td>
                        <td id="tcc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tcc12a">&nbsp;</td>
                        <td id="tcc12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab4" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Alzheimer nặng</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Trí nhớ và học tập</td>
                        <td id="rlt01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL nhận thức </td>
                        <td id="rlt02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="rlt03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL tâm thần khác </td>
                        <td id="rlt04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt độc lập</td>
                        <td id="rlt13">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Diễn tiến từ từ</td>
                        <td id="rlt06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh thần kinh</td>
                        <td id="rlt08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể,dùng chất</td>
                        <td id="rlt10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="rlt12a">&nbsp;</td>
                        <td id="rlt12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab5" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Mất trí do Parkinson</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL nhận thức </td>
                        <td id="hc02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="hc03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="hc05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh Parkinson</td>
                        <td id="hc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="hc07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Diễn tiến từ từ</td>
                        <td id="hc09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="hc10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="hc11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="hc12">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL tâm thần khác</td>
                        <td id="hc13">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="hc14">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="hc08a">&nbsp;</td>
                        <td id="hc08b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab6" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Mất trí do mạch máu</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL nhận thức </td>
                        <td id="mm02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="mm03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="mm05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh mạch máu não</td>
                        <td id="mm06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="mm07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="mm11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="mm14">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="mm08a">&nbsp;</td>
                        <td id="mm08b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection