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
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Rối loạn hoảng loạn</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="home" aria-selected="true">Cơn hoảng loạn</button>
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
                <div class="row ml-5">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="conhoangloan" onchange="chkChange('04');">
                            <label for="">Cơn hoảng loạn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="timdaphoihop" onchange="chkChange('05');">
                            <label for="">Tim đập hồi hộp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="domohoi" onchange="chkChange('06');">
                            <label for="">Đổ mồ hôi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="runchantay" onchange="chkChange('07');">
                            <label for="">Run chân tay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="khothohl" onchange="chkChange('08');">
                            <label for="">Khó thở</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">

                        <div class="form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="somatkiemsoathl" onchange="chkChange('16');">
                            <label for="">Sợ mất kiểm soát</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="sochethl" onchange="chkChange('17');">
                            <label for="">Sợ chết</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="sinhhoathl" onchange="chkChange('15');">
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="nghetthohl" onchange="chkChange('09');">
                            <label for="">Nghẹt thở</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="daunguchl" onchange="chkChange('10');">
                            <label for="">Đau ngực</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc18" type="checkbox" name="symptom[]" value="bibenh1thang" onchange="chkChange('18');">
                            <label for="">Bị bệnh 1 tháng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="lolanghl" onchange="chkChange('19');">
                            <label for="">Lo lắng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="roiloanhvi" onchange="chkChange('22');">
                            <label for="">Rối loạn hành vi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc23" type="checkbox" name="symptom[]" value="dobenhcothehl" onchange="chkChange('23');">
                            <label for="">Do bệnh cơ thể</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc24" type="checkbox" name="symptom[]" value="dochathl" onchange="chkChange('24');">
                            <label for="">Do chất</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="daubungbuonnon" onchange="chkChange('11');">
                            <label for="">Đau bụng, buồn nôn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="chongmatngatxiu" onchange="chkChange('12');">
                            <label for="">Chóng mặt ngất xỉu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="camgiacnonglanh" onchange="chkChange('13');">
                            <label for="">Cảm giác nóng, lạnh</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="techantayhl" onchange="chkChange('14');">
                            <label for="">Tê, kim châm tay chân</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc25" type="checkbox" name="symptom[]" value="doroiloantamthankhachl" onchange="chkChange('25');">
                            <label for="">Do rối loạn tâm thần khác</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
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
            <h3>Rối loạn hoảng loạn</h3>
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
                        <td>Cơn hoảng loạn</td>
                        <td id="tc02a">&nbsp;</td>
                        <td id="tc02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng </td>
                        <td id="tc03a">&nbsp;</td>
                        <td id="tc03b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="tc04">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Thời gian bệnh 1 tháng</td>
                        <td id="tc05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo lắng</td>
                        <td id="tc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>EL hành vi</td>
                        <td id="tc06b">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="tc07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td id="tc08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="tc09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="tc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Loạn thần khác</td>
                        <td id="tc12">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tc13">&nbsp;</td>
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
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Cơn hoảng loạn</h3>
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
                        <td>Cơn hoảng loạn</td>
                        <td id="tcb01a">&nbsp;</td>
                        <td id="tcb01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng </td>
                        <td id="tcb02a">&nbsp;</td>
                        <td id="tcb02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td id="tcb03a">&nbsp;</td>
                        <td id="tcb03b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.formMultiple')
    </div>
</div>
@endsection