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



    <!---------------Check---------------->
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám Chẩn Đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Kết quả chẩn đoán mất trí</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('mat-tri.update', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Thông tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">Họ và tên : </label>
                            <input type="text" name="cust_name" value="{{$model->cust_name}}" class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_gender" class="form-label">Giới tính : </label>
                            <input type="text" name="cust_gender" value="{{$model->cust_gender}}" class="form-control-sm" id="cust_gender" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">Năm sinh : </label>
                            <input type="text" value="{{$model->cust_dob}}" name="cust_dob" class="form-control-sm" placeholder="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">SĐT : </label>
                            <input type="number" value="{{$model->phone}}" name="phone" placeholder="Số điện thoại..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" value="{{$model->cust_email}}" name="cust_email" placeholder="Điền email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ : </label>
                            <input type="text" placeholder="Địa chỉ..." value="{{$model->cust_address}}" name="cust_address" class="form-control-sm">
                        </div>
                    </div>
                </div>
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!----------Collum-1------------>
                <div class="row ml-1">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="2dovatdongian" onchange="chkChange('05');" @if (strpos($model->symptom[0], '2dovatdongian') !== false)
                            checked
                            @endif>
                            <label for="">2 đồ vật đơn giản</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="goiten3dovat" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'goiten3dovat') !== false)
                            checked
                            @endif>
                            <label for="">Gọi tên 3 đồ vật</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="sinhhoatphuthuoc" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'sinhhoatphuthuoc') !== false)
                            checked
                            @endif>
                            <label for="">Sinh hoạt phụ thuộc</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="benhmachmaunao" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'benhmachmaunao') !== false)
                            checked
                            @endif>
                            <label for="">Bệnh mạch máu não</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="cobenhcothe" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'cobenhcothe') !== false)
                            checked
                            @endif>
                            <label for="">Có bệnh cơ thể</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="khongbimesang" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'khongbimesang') !== false)
                            checked
                            @endif>
                            <label for="">Không bị mê sảng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc18" type="checkbox" name="symptom[]" value="tientrientutu" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'tientrientutu') !== false)
                            checked
                            @endif>
                            <label for="">Tiến triển từ từ</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="trieuchungthankinh" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'trieuchungthankinh') !== false)
                            checked
                            @endif>
                            <label for="">Triệu chứng thần kinh</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="vehinhgapgiay" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'vehinhgapgiay') !== false)
                            checked
                            @endif>
                            <label for="">Vẽ hình, gấp giấy, viết một câu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="cothuocdieutrigaynghien" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'cothuocdieutrigaynghien') !== false)
                            checked
                            @endif>
                            <label for="">Có dùng thuốc điều trị, gây nghiện</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="kobiroiloan" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'kobiroiloan') !== false)
                            checked
                            @endif>
                            <label for="">Không bị rối loạn tâm thần khác</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="1007dangvannguoc" onchange="chkChange('04');" @if (strpos($model->symptom[0], '1007dangvannguoc') !== false)
                            checked
                            @endif>
                            <label for="">100-7, đánh vần ngược</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label-w" for="">Chẩn đoán: </label>
                        <textarea style=" color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Trở lại </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection