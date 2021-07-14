@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[19];
            document.getElementById('tc01b').innerHTML = (kc[19] >= 7 ? 1 : 0);
            document.getElementById("tc02a").innerHTML = (kc[03] + kc[04] == 0 ? 0 : 1);
            n = parseInt(document.getElementById("tc01b").innerHTML) + parseInt(document.getElementById("tc02a").innerHTML);
            document.getElementById("tc04").innerHTML = (n == 2 ? 1 : 0);
            var n = kc[03] + kc[03] + kc[04] + kc[05] + kc[06] + kc[07] + kc[08] + kc[09] + kc[10] + kc[11];
            document.getElementById('tc05').innerHTML = n;
            document.getElementById("tc06").innerHTML = (n >= 5 ? 1 : 0);
            document.getElementById('tc07').innerHTML = kc[12];
            document.getElementById('tc08').innerHTML = (kc[12] == 1 ? 1 : 0);
            document.getElementById('tc09').innerHTML = kc[13];
            document.getElementById('tc10').innerHTML = (kc[13] == 0 ? 1 : 0);
            n = parseInt(document.getElementById("tc04").innerHTML) + parseInt(document.getElementById("tc06").innerHTML) + parseInt(document.getElementById("tc08").innerHTML) + parseInt(document.getElementById("tc10").innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 4 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 4 ? "Hưng cảm" : "Không hưng cảm");
        }

        function recalcTCB() {
            document.getElementById('tcb01a').innerHTML = kc[19];
            document.getElementById('tcb01b').innerHTML = (kc[19] <= 4 ? 1 : 0);
            document.getElementById("tcb02a").innerHTML = (kc[03] + kc[04] == 0 ? 0 : 1);
            n = parseInt(document.getElementById("tcb01b").innerHTML) + parseInt(document.getElementById("tcb02a").innerHTML);
            document.getElementById("tcb04").innerHTML = (n == 2 ? 1 : 0);
            var n = kc[03] + kc[03] + kc[04] + kc[05] + kc[06] + kc[07] + kc[08] + kc[09] + kc[10] + kc[11];
            document.getElementById("tcb05").innerHTML = n;
            document.getElementById("tcb06").innerHTML = (n >= 5 ? 1 : 0);
            document.getElementById('tcb11').innerHTML = kc[12];
            document.getElementById('tcb13').innerHTML = (kc[12] == 1 ? 0 : 1);
            document.getElementById('tcb14').innerHTML = kc[13];
            document.getElementById('tcb15').innerHTML = (kc[13] == 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcb04").innerHTML) + parseInt(document.getElementById("tcb06").innerHTML) + parseInt(document.getElementById("tcb13").innerHTML) + parseInt(document.getElementById("tcb15").innerHTML);
            document.getElementById("tcb12a").innerHTML = (n == 4 ? 1 : 0);
            document.getElementById("tcb12b").innerHTML = (n == 4 ? "Hưng cảm nhẹ" : "Không H.C nhẹ");
        }

        function recalcTCC() {

        }

        function chandoan() {
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "HC nhẹ";
            } else

            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Hưng cảm";
            } else {
                document.getElementById("kc21").innerHTML = "Không hưng cảm";
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
            recalc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kc' + txtid);
            kc[txtid - 1] = txtobj.value;
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
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán lo âu</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Hưng cảm</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Hưng cảm nhẹ</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('hung-cam.store')}}" method="POST" enctype="multipart/form-data">
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
                    <!-- ---Collum-1 -->
                    <div class="col-md-3">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="vuivehc" onchange="chkChange('04');">
                            <label for="">Vui vẻ</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="debikichthichhc" onchange="chkChange('05');">
                            <label for="">Dễ bị kích thích</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="ytuongtucaohc" onchange="chkChange('06');">
                            <label for="">Ý tưởng tự cao</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">

                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="dangtrihc" onchange="chkChange('10');">
                            <label for="">Đãng trí</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="sinhhoathc" onchange="chkChange('13');">
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="hanhvinguyhienhc" onchange="chkChange('12');">
                            <label for="">Hành vi nguy hiểm</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="noinhieuhc" onchange="chkChange('08');">
                            <label for="">Nói nhiều</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="suynghinhieuhc" onchange="chkChange('09');">
                            <label for="">Suy nghĩ nhiều</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="giamnhucaunguhc" onchange="chkChange('07');">
                            <label for="">Giảm nhu cầu ngủ</label>
                        </div>
                    </div>
                    <!---------Collum-4------------>
                    <div class="col-md-3">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="giatanghdhc" onchange="chkChange('11');">
                            <label for="">Gia tăng hoạt động</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="benhcothesdc" onchange="chkChange('14');">
                            <label for="">Bệnh cơ thể, sử dụng chất</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Thời gian cơn :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
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
            <h3>Hưng cảm</h3>
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
                        <td>Thời gian cơn</td>
                        <td id="tc01a">&nbsp;</td>
                        <td id="tc01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Triệu chứng chính</td>
                        <td id="tc02a">&nbsp;</td>
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
                        <td>Số triệu chứng</td>
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
                        <td>Sinh hoạt
                        <td id="tc07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tc08">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B cơ thể, dùng chất</td>
                        <td id="tc09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tc10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tc14a">&nbsp;</td>
                        <td id="tc14b" title="IF(tc14a=1;'Hưng cảm';'Không trầm cảm')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Hưng cảm nhẹ</h3>
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
                        <td>Thời gian cơn</td>
                        <td id="tcb01a">&nbsp;</td>
                        <td id="tcb01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Triệu chứng chính</td>
                        <td id="tcb02a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td id="tcb04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng</td>
                        <td id="tcb05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td id="tcb06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Không thay đỗi sinh hoạt</td>
                        <td id="tcb11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td id="tcb13">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B cơ thể, dùng chất</td>
                        <td id="tcb14">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn F</b></td>
                        <td id="tcb15">&nbsp;</td>
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
        @include('layouts.formMultiple')
    </div>
</div>
@endsection