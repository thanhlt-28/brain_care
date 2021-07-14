@extends('layouts.main')
@section('content')
<div class="container-wraper">

    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[3];
            document.getElementById("tc01b").innerHTML = (kc[3] == 1 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[4];
            document.getElementById('tc03a').innerHTML = kc[5];
            document.getElementById('tc04').innerHTML = kc[6];
            document.getElementById('tc05').innerHTML = kc[7];
            document.getElementById('tc06').innerHTML = kc[8];
            document.getElementById('tc07').innerHTML = kc[9];
            document.getElementById('tc08').innerHTML = kc[10];
            document.getElementById('tc09').innerHTML = kc[11];
            document.getElementById('tc10a').innerHTML = kc[12];
            document.getElementById('tc10b').innerHTML = kc[13];

            n = kc[12] + kc[13] >= 1 ? 1 : 0;
            document.getElementById("tc11").innerHTML = n;
            document.getElementById('tc12a').innerHTML = kc[14];
            document.getElementById('tc12b').innerHTML = kc[15];
            n = kc[14] + kc[15] >= 1 ? 1 : 0;
            document.getElementById("tc13").innerHTML = n;
            n = parseInt(document.getElementById('tc02a').innerHTML) + parseInt(document.getElementById('tc03a').innerHTML) + parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc05').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc07').innerHTML) + parseInt(document.getElementById('tc08').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc15').innerHTML = (n >= 2 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc15').innerHTML);
            document.getElementById('tc14a').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 2 ? "Uống rượu có hại" : "K uống rượu có hại");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Uống rượu có hại";
            } else {
                document.getElementById("kc21").innerHTML = "Không uống rượu có hại";
            }
        }

        function recalc() {
            recalcTC();
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
            <h3>Khám theo dõi</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi nghiện rượu</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('nghienruou.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Thông tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên : </label>
                            <input type="text" value="{{$model->treat_name}}" name="treat_name" class="form-control-sm" placeholder="Điền họ tên...">
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
                <div class="row ml-1">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="nr" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Nghiện rượu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd07" type="checkbox" name="symptom[]" value="unr" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'unr') !== false)
                            checked
                            @endif>
                            <label for="">Uống nhiều rượu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd08" type="checkbox" name="symptom[]" value="cktc" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'cktc') !== false)
                            checked
                            @endif>
                            <label for="cktc">Cai không thành công</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd15" type="checkbox" name="symptom[]" value="tur" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'tur') !== false)
                            checked
                            @endif>
                            <label for="">Thèm uống rượu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd16" type="checkbox" name="symptom[]" value="ahsh" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'ahsh') !== false)
                            checked
                            @endif>
                            <label for="">Ảnh hưởng sinh hoạt</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="hvnh" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'hvnh') !== false)
                            checked
                            @endif>
                            <label for="">Hành vi nguy hiểm</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="tc" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'tc') !== false)
                            checked
                            @endif>
                            <label for="">Tình cảm</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="lt" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'lt') !== false)
                            checked
                            @endif>
                            <label for="">Loạn thần</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="la" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'la') !== false)
                            checked
                            @endif>
                            <label for="">Lo âu</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="hl" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'hl') !== false)
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
                        <div class="form-check">
                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tm" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tm') !== false)
                            checked
                            @endif>
                            <label for="">Tim mạch</label>
                        </div>
                    </div>

                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtd" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtd') !== false)
                            checked
                            @endif>
                            <label for="">Đái tháo đường</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="td" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'td') !== false)
                            checked
                            @endif>
                            <label for="">Tình dục</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" type="checkbox" name="symptom[]" value="thai" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'thai') !== false)
                            checked
                            @endif>
                            <label for="">Thai</label>
                        </div>
                    </div>
                </div>
                <div class="row ml-1">
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="" class="form-label-dt">Số triệu chứng : </label>
                            <input type="text" name="sym_time" value="{{$model->sym_time}}" class="form-control-smt" id="kd21" onblur="txtBlur('21');">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thuyên giảm</label>
                            <input style="color: blue; font-weight:500" class="form-control-smt" name="result" value="{{$model->result}}" id="kd22" type="text" onblur="txtBlur('22');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thuốc CTC</label>
                            <input class="form-control-smt" name="medicine_once" value="{{$model->medicine_once}}" id="kd23" type="text" onblur="txtBlur('23');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thuốc CLT</label>
                            <input class="form-control-smt" name="medicine_twice" value="{{$model->medicine_twice}}" id="kd24" type="text" onblur="txtBlur('24');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thuốc CCG</label>
                            <input class="form-control-smt" name="medicine_three" value="{{$model->medicine_three}}" id="kd25" type="text" onblur="txtBlur('25');" width="10">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Trở lại</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection