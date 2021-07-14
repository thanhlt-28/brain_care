@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcSPS() {
            document.getElementById('sps1a').innerHTML = kc[19];
            document.getElementById('sps1b').innerHTML = (kc[19] >= 2 ? 1 : 0);
            document.getElementById('sps2a').innerHTML = kc[3] + kc[5];
            document.getElementById('sps2b').innerHTML = (kc[3] + kc[5] >= 1 ? 1 : 0);
            document.getElementById('sps3').innerHTML = kc[7];
            document.getElementById('sps4').innerHTML = (kc[7] >= 1 ? 0 : 1);
            n = parseInt(document.getElementById('sps1b').innerHTML) + parseInt(document.getElementById('sps2b').innerHTML) + parseInt(document.getElementById('sps4').innerHTML);
            document.getElementById('sps5a').innerHTML = (n == 3 ? 1 : 0);
            document.getElementById('sps5b').innerHTML = (n == 3 ? "Động kinh cục bộ đơn giản" : "Không động kinh cục bộ đơn giản");
        }

        function recalcCPS() {
            document.getElementById('cps1a').innerHTML = kc[19];
            document.getElementById('cps1b').innerHTML = (kc[19] >= 2 ? 1 : 0);
            document.getElementById('cps2a').innerHTML = kc[3] + kc[5];
            document.getElementById('cps2b').innerHTML = (kc[3] + kc[5] >= 1 ? 1 : 0);
            document.getElementById('cps3').innerHTML = kc[7];
            document.getElementById('cps4').innerHTML = (kc[7] == 1 ? 1 : 0);
            n = parseInt(document.getElementById('cps1b').innerHTML) + parseInt(document.getElementById('cps2b').innerHTML) + parseInt(document.getElementById('cps4').innerHTML);
            document.getElementById('cps5a').innerHTML = (n == 3 ? 1 : 0);
            document.getElementById('cps5b').innerHTML = (n == 3 ? "Động kinh cục bộ phức tạp" : "Không động kinh cục bộ phức tạp");
        }

        function recalcGM() {
            document.getElementById('gm1a').innerHTML = kc[19];
            document.getElementById('gm1b').innerHTML = (kc[19] >= 2 ? 1 : 0);
            document.getElementById('gm2a').innerHTML = kc[4] + kc[6];
            document.getElementById('gm2b').innerHTML = (kc[4] + kc[6] >= 1 ? 1 : 0);
            document.getElementById('gm3').innerHTML = kc[7];
            document.getElementById('gm4').innerHTML = (kc[7] == 1 ? 1 : 0);
            n = parseInt(document.getElementById('gm1b').innerHTML) + parseInt(document.getElementById('gm2b').innerHTML) + parseInt(document.getElementById('gm4').innerHTML);
            document.getElementById('gm5a').innerHTML = (n == 3 ? 1 : 0);
            document.getElementById('gm5b').innerHTML = (n == 3 ? "Động kinh cơn lớn" : "Không động kinh cơn lớn");
        }

        function chandoan() {
            if (parseInt(document.getElementById("gm5a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Động kinh cơn lớn";
            } else
            if (parseInt(document.getElementById("cps5a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Động kinh cục bộ phức tạp";
            } else
            if (parseInt(document.getElementById("sps5a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Động kinh cục bộ đơn giản";
            } else {
                document.getElementById("kc21").innerHTML = "Không động kinh";
            }
        }

        function recalc() {
            recalcGM()
            recalcCPS()
            recalcSPS();
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
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp

        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('dong-kinh.update', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="row ml-1">
                    <!----------Collum-1------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="cocungcucbo" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'doroiloantamthankhachl') !== false)
                            checked
                            @endif >
                            <label for="">Co cứng cục bộ</label>
                        </div>
                    </div>
                    <!----------Collum-1------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="cocungtoanthan" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'cocungtoanthan') !== false)
                            checked
                            @endif >
                            <label for="">Co cứng toàn thân</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="cogiatcucbo" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'cogiatcucbo') !== false)
                            checked
                            @endif >
                            <label for="">Co giật cục bộ</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="cogiattoanthan" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'cogiattoanthan') !== false)
                            checked
                            @endif >
                            <label for="">Co giật toàn thân</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="honme" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'honme') !== false)
                            checked
                            @endif >
                            <label for="">Hôn mê</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="quentrongcon" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'quentrongcon') !== false)
                            checked
                            @endif >
                            <label for="">Quên trong cơn</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Thời gian cơn :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" value="{{$model->time_sym}}" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Trở lại </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection