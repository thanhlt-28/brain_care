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
    <!---/////------------check-----------/////------->

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám chẩn đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán hoảng loạn</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Động kinh cục bộ đơn giản</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Động kinh cục bộ phức tạp</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="profile" aria-selected="false">Động kinh cơn lớn</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('hoang-loan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Thông tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">Họ và tên : </label>
                            <input type="text" name="cust_name" class="form-control-sm" placeholder="Điền họ tên..." id="kc01">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Giới tính : </label>
                            <input type="radio" class="form-input" name="cust_gender" value="Nam" checked="1" id="kc02"> Nam
                            <input type="radio" class="form-input" name="cust_gender" value="Nữ" id="kc02"> Nữ
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">Năm sinh : </label>
                            <input type="text" name="cust_dob" class="form-control-sm" placeholder="Năm sinh..." id="kc02">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">SĐT : </label>
                            <input type="number" name="phone" placeholder="Số điện thoại..." class="form-control-sm" id="kc03">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" name="cust_email" placeholder="Điền email..." class="form-control-sm" id="kc03">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ : </label>
                            <input type="text" placeholder="Địa chỉ..." name="cust_address" class="form-control-sm" id="kc03">
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
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="cocungcucbo" onchange="chkChange('04');">
                            <label for="">Co cứng cục bộ</label>
                        </div>
                    </div>
                    <!----------Collum-1------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="cocungtoanthan" onchange="chkChange('05');">
                            <label for="">Co cứng toàn thân</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="cogiatcucbo" onchange="chkChange('06');">
                            <label for="">Co giật cục bộ</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="cogiattoanthan" onchange="chkChange('07');">
                            <label for="">Co giật toàn thân</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="honme" onchange="chkChange('08');">
                            <label for="">Hôn mê</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="quentrongcon" onchange="chkChange('09');">
                            <label for="">Quên trong cơn</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Thời gian cơn :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" id="kc20" onblur="txtBlur('20');" width="10">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary" type="submit"> Lưu lại</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3>Động kinh cục bộ đơn giản</h3>
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
                        <td>Số cơn co giật</td>
                        <td id="sps1a">&nbsp;</td>
                        <td id="sps1b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Cơn co giật cục bộ</td>
                        <td id="sps2a">&nbsp;</td>
                        <td id="sps2b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Hôn mê</td>
                        <td id="sps3">&nbsp;</td>
                        <td id="sps4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="sps5a">&nbsp;</td>
                        <td id="sps5b" title="IF(sps5a=1;'Đkcb đơn giản';'Không Đkcb đơn giản')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Động kinh cục bộ phức tạp</h3>
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
                        <td>Số cơn co giật</td>
                        <td id="cps1a">&nbsp;</td>
                        <td id="cps1b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Cơn co giật cục bộ</td>
                        <td id="cps2a">&nbsp;</td>
                        <td id="cps2b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Hôn mê</td>
                        <td id="cps3">&nbsp;</td>
                        <td id="cps4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="cps5a">&nbsp;</td>
                        <td id="cps5b" title="IF(cps5a=1;'Đkcb p tạp';'Không Đkcb p tạp')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Động kinh cơn lớn</h3>
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
                        <td>Số cơn co giật</td>
                        <td id="gm1a">&nbsp;</td>
                        <td id="gm1b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Cơn co giật toàn thể</td>
                        <td id="gm2a">&nbsp;</td>
                        <td id="gm2b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Hôn mê</td>
                        <td id="gm3">&nbsp;</td>
                        <td id="gm4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="gm5a">&nbsp;</td>
                        <td id="gm5b" title="IF(gm5a=1;'Đk cơn lớn';'Không Đk cơn lớn')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.formMultiple')
    </div>
</div>
@endsection