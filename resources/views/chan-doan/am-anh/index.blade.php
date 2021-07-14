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
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Ám ảnh sợ đặc hiệu</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Ám ảnh sợ xã hội</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="profile" aria-selected="false">Ám ảnh sợ khoảng trống</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp

        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('am-anh.update', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="row ml-5">
                    <!----------collum-1------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="noicongcong" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'noicongcong') !== false)
                            checked
                            @endif >
                            <label for=""> Nơi công cộng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="noikin" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'noikin') !== false)
                            checked
                            @endif >
                            <label for="">Nơi kín</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="trongdamdong" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'trongdamdong') !== false)
                            checked
                            @endif >
                            <label for="">Trong đám đông</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="ongoainha" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'ongoainha') !== false)
                            checked
                            @endif >
                            <label for="">Ở ngoài nhà</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="tiepxucvoinguoilkhac" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'tiepxucvoinguoilkhac') !== false)
                            checked
                            @endif >
                            <label for="">Tiếp xúc người khác</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="luongcuong" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'luongcuong') !== false)
                            checked
                            @endif >
                            <label for="">Luống cuống</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc18" type="checkbox" name="symptom[]" value="sinhhoataa" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'sinhhoataa') !== false)
                            checked
                            @endif >
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="benhcotheaa" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'benhcotheaa') !== false)
                            checked
                            @endif >
                            <label for="">Bệnh cơ thể</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="loauquadang" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'loauquadang') !== false)
                            checked
                            @endif >
                            <label for="">Lo âu quá đáng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="thoigiantren6thang" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'thoigiantren6thang') !== false)
                            checked
                            @endif >
                            <label for="">Thời gian trên 6 tháng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="sudungchat" onchange="chkChange('22');" @if (strpos($model->symptom[0], 'sudungchat') !== false)
                            checked
                            @endif >
                            <label for="">Sử dụng chất</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="giaothongcongcong" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'giaothongcongcong') !== false)
                            checked
                            @endif >
                            <label for="">Giao thông công cộng</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="doituongtrenthcuthe" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'doituongtrenthcuthe') !== false)
                            checked
                            @endif >
                            <label for="">Đối tượng, tình huống cụ thể</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="netranhtinhhuong" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'netranhtinhhuong') !== false)
                            checked
                            @endif >
                            <label for="">Né tránh tình huống</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="tinhhuonggaylolang" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'tinhhuonggaylolang') !== false)
                            checked
                            @endif >
                            <label for="">Tình huống gây lo lắng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc23" type="checkbox" name="symptom[]" value="roiloanttkhacaa" onchange="chkChange('23');" @if (strpos($model->symptom[0], 'roiloanttkhacaa') !== false)
                            checked
                            @endif >
                            <label for="">Rối loạn tâm thần khác</label>
                        </div>
                    </div>
                    <div class="row">
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
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3>Ám ảnh sợ đặc hiệu</h3>
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
                        <td>A.Vật,tình huống đặc biệt</td>
                        <td id="tc02a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B.Tình huống luôn gây ra lo lắng </td>
                        <td id="tc03a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>C.Né tránh</td>
                        <td id="tc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>D.Lo lắng quá đáng</td>
                        <td id="tc05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>E.Thời gian 6 tháng
                        <td id="tc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>F.Ảnh hưởng sinh hoạt</td>
                        <td id="tc07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>G.RL tâm thần khác</td>
                        <td id="tc08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tc14a">&nbsp;</td>
                        <td id="tc14b" title="IF(tc14a=1;'Ám ảnh';'Không ám ảnh')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Ám ảnh sợ xã hội</h3>
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
                        <td>A.Tiếp xúc người khác</td>
                        <td id="tcb01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B.Luống cuống</td>
                        <td id="tcb02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>C.Tình huống gây ra lo lắng</td>
                        <td id="tcb03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>D.Né tránh</td>
                        <td id="tcb04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>E.Lo lắng quá đáng</td>
                        <td id="tcb05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>F.Thời gian 6 tháng</td>
                        <td id="tcb06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>G.Ảnh hưởng sinh hoạt</td>
                        <td id="tcb07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>H.Bệnh cơ thể, thuốc</td>
                        <td id="tcb08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>I.RL tâm thần khác</td>
                        <td id="tcb09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tcb12a">&nbsp;</td>
                        <td id="tcb12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Ám ảnh sợ khoảng trống</h3>
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
                        <td>Giao thông công cộng</td>
                        <td id="tcc01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Nơi công cộng</td>
                        <td id="tcc02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Nơi kín</td>
                        <td id="tcc03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Trong đám đông</td>
                        <td id="tcc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ở ngoài nhà</td>
                        <td id="tcc05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>A.hoàn cảnh gây sợ</td>
                        <td id="tcc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>C.Tình huống gây ra lo lắng</td>
                        <td id="tcc08"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>D.Né tránh</td>
                        <td id="tcc09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>E.Lo âu quá đáng</td>
                        <td id="tcc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>F.Thời gian 6 tháng</td>
                        <td id="tcc11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>G.Ảnh hưởng sinh hoạt</td>
                        <td id="tcc13">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>H.Bệnh cơ thể, sử dụng chất</td>
                        <td id="tcc14">&nbsp;</td>
                        <td>&nbsp;</td>
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
    </div>
</div>


@endsection