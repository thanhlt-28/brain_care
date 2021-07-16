@extends('layouts.main')
@section('content')
<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{asset('js/multi.js')}}"></script>
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, "", 0, 0, 0, 0];

        function recalcPL() {
            document.getElementById('pl01a').innerHTML = kc[19];
            document.getElementById('pl01b').innerHTML = (kc[19] >= 30 ? 1 : 0);
            document.getElementById('pl02a').innerHTML = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('pl02b').innerHTML = (kc[3] + kc[4] + kc[5] + kc[6] >= 1 ? 1 : 0);
            document.getElementById('pl15').innerHTML = kc[7];
            document.getElementById('pl16').innerHTML = kc[8];
            document.getElementById('pl17').innerHTML = kc[9];
            n = parseInt(document.getElementById('pl02b').innerHTML) + parseInt(document.getElementById('pl15').innerHTML) + parseInt(document.getElementById('pl16').innerHTML) + parseInt(document.getElementById('pl17').innerHTML);
            document.getElementById('pl03a').innerHTML = n;
            document.getElementById('pl03b').innerHTML = (n >= 1 ? 1 : 0);
            n = parseInt(document.getElementById('pl01b').innerHTML) + parseInt(document.getElementById('pl02b').innerHTML) + parseInt(document.getElementById('pl03b').innerHTML);
            document.getElementById('pl04').innerHTML = (n == 3 ? 1 : 0);

            document.getElementById('pl05').innerHTML = document.getElementById('kc18').value;
            document.getElementById('pl06').innerHTML = (kc[17] >= 180 ? 1 : 0);

            document.getElementById('pl10').innerHTML = kc[16];
            document.getElementById('pl11').innerHTML = (kc[16] == 0 ? 1 : 0);
            n = kc[12] + kc[13];
            document.getElementById("pl12").innerHTML = n;
            document.getElementById("pl13").innerHTML = (n > 0 ? 1 : 0);

            document.getElementById('pl07').innerHTML = kc[14];
            document.getElementById('pl08').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('pl09').innerHTML = (n == 0 ? 1 : 0);
            n = parseInt(document.getElementById('pl04').innerHTML) + parseInt(document.getElementById('pl13').innerHTML) + parseInt(document.getElementById('pl06').innerHTML) + parseInt(document.getElementById('pl09').innerHTML) + parseInt(document.getElementById('pl11').innerHTML);
            document.getElementById('pl14a').innerHTML = (n == 5 ? 1 : 0);
            document.getElementById('pl14b').innerHTML = (n == 5 ? "TT Phân liệt" : "Không TTPL");

        }

        function recalcDPL() {
            document.getElementById('dpl01a').innerHTML = kc[19];
            document.getElementById('dpl01b').innerHTML = (kc[19] >= 30 ? 1 : 0);
            document.getElementById('dpl02a').innerHTML = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('dpl02b').innerHTML = (kc[3] + kc[4] + kc[5] + kc[6] >= 1 ? 1 : 0);
            document.getElementById('dpl15').innerHTML = kc[7];
            document.getElementById('dpl16').innerHTML = kc[8];
            document.getElementById('dpl17').innerHTML = kc[9];
            var n = kc[7] + kc[8] + kc[9];
            document.getElementById('dpl03a').innerHTML = n;
            document.getElementById('dpl03b').innerHTML = (n >= 1 ? 1 : 0);
            n = parseInt(document.getElementById('dpl01b').innerHTML) + parseInt(document.getElementById('dpl02b').innerHTML) + parseInt(document.getElementById('dpl03b').innerHTML);
            document.getElementById('dpl04').innerHTML = (n == 3 ? 1 : 0);

            document.getElementById('dpl05').innerHTML = document.getElementById('kc18').value;
            document.getElementById('dpl06').innerHTML = (kc[17] >= 180 ? 0 : 1);

            document.getElementById('dpl10').innerHTML = kc[16];
            document.getElementById('dpl11').innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById('dpl07').innerHTML = kc[14];
            document.getElementById('dpl08').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('dpl09').innerHTML = (n == 0 ? 1 : 0);
            n = parseInt(document.getElementById('dpl04').innerHTML) + parseInt(document.getElementById('dpl06').innerHTML) + parseInt(document.getElementById('dpl09').innerHTML) + parseInt(document.getElementById('dpl11').innerHTML);
            document.getElementById('dpl14a').innerHTML = (n == 4 ? 1 : 0);
            document.getElementById('dpl14b').innerHTML = (n == 4 ? "Dạng phân liệt" : "Không dạng phân liệt");

        }

        function recalcLTB() {
            var n = (kc[3] + kc[4] + kc[5] + kc[6]) >= 1 ? 1 : 0;
            document.getElementById("lttt01").innerHTML = n;
            var m = (kc[7]) >= 1 ? 1 : 0;
            document.getElementById("lttt02").innerHTML = m;
            document.getElementById("lttt03").innerHTML = (n + m >= 1 ? 1 : 0);
            document.getElementById("lttt04").innerHTML = kc[14];
            document.getElementById("lttt05").innerHTML = kc[14];
            document.getElementById("lttt06").innerHTML = kc[16];
            document.getElementById("lttt07").innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById("lttt08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('lttt09').innerHTML = 0
            else
                document.getElementById('lttt09').innerHTML = 1
            n = kc[12] + kc[13];
            document.getElementById("lttt10").innerHTML = n;
            document.getElementById("lttt11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("lttt03").innerHTML) + parseInt(document.getElementById("lttt05").innerHTML) + parseInt(document.getElementById("lttt07").innerHTML) + parseInt(document.getElementById("lttt09").innerHTML) + parseInt(document.getElementById("lttt11").innerHTML);
            n = n == 5 ? 1 : 0;
            document.getElementById("lttt12a").innerHTML = n;
            document.getElementById("lttt12b").innerHTML = (n == 1 ? "Loạn thần thực thể" : "Không loạn thần thực thể");

        }

        function recalcLTC() {
            var n = kc[3] + kc[4] + kc[5] + kc[6] >= 1 ? 1 : 0;
            document.getElementById("ltc01").innerHTML = n;
            var m = (kc[7]) >= 1 ? 1 : 0;
            document.getElementById("ltc02").innerHTML = m;
            document.getElementById("ltc03").innerHTML = (m + n >= 1 ? 1 : 0);
            document.getElementById("ltc04").innerHTML = kc[15];
            document.getElementById("ltc05").innerHTML = kc[15];
            document.getElementById("ltc06").innerHTML = kc[16];
            document.getElementById("ltc07").innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById("ltc08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('ltc09').innerHTML = 0
            else
                document.getElementById('ltc09').innerHTML = 1
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("ltc10").innerHTML = n;
            document.getElementById("ltc11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("ltc03").innerHTML) + parseInt(document.getElementById("ltc05").innerHTML) + parseInt(document.getElementById("ltc07").innerHTML) + parseInt(document.getElementById("ltc09").innerHTML) + parseInt(document.getElementById("ltc11").innerHTML);
            n = (n == 5 ? 1 : 0);
            document.getElementById("ltc12a").innerHTML = n;
            document.getElementById("ltc12b").innerHTML = (n == 1 ? "Loạn thần do chất" : "Không loạn thần do chất");

        }

        function recalcHT() {
            document.getElementById("ht01a").innerHTML = kc[19];
            document.getElementById('ht01b').innerHTML = (kc[19] >= 30 ? 1 : 0);
            document.getElementById('ht02').innerHTML = (kc[3] + kc[4] + kc[5] + kc[6] >= 1 ? 1 : 0);
            n = (parseInt(document.getElementById("ht01b").innerHTML) + parseInt(document.getElementById("ht02").innerHTML)) == 2 ? 1 : 0;
            document.getElementById("ht04").innerHTML = n;

            n = kc[7] + kc[8] + kc[0];
            document.getElementById('ht05a').innerHTML = n;
            document.getElementById('ht06').innerHTML = (n >= 1 ? 0 : 1)
            n = kc[12] + kc[13];
            document.getElementById('ht07').innerHTML = n;
            document.getElementById('ht08').innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById('ht09').innerHTML = kc[16];
            document.getElementById('ht10').innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById('ht11').innerHTML = kc[14];
            document.getElementById('ht12').innerHTML = kc[15];
            n = kc[15] + kc[14];
            document.getElementById('ht13').innerHTML = (n == 0 ? 1 : 0);
            n = (parseInt(document.getElementById("ht04").innerHTML) + parseInt(document.getElementById("ht06").innerHTML) + parseInt(document.getElementById("ht08").innerHTML) + parseInt(document.getElementById("ht10").innerHTML) + parseInt(document.getElementById("ht13").innerHTML)) == 5 ? 1 : 0;
            document.getElementById("ht13a").innerHTML = n;
            document.getElementById("ht13b").innerHTML = (n == 1 ? "Rối loạn hoang tưởng" : "Không rối loạn hoang tưởng");
        }

        function recalcLTN() {
            document.getElementById('ltn01').innerHTML = (kc[3] + kc[4] + kc[5] + kc[6] >= 1 ? 1 : 0);
            document.getElementById('ltn02').innerHTML = kc[7];
            document.getElementById('ltn03').innerHTML = kc[8];
            n = (parseInt(document.getElementById("ltn01").innerHTML) + parseInt(document.getElementById("ltn02").innerHTML) + parseInt(document.getElementById("ltn03").innerHTML)) >= 1 ? 1 : 0;
            document.getElementById("ltn04").innerHTML = n;
            document.getElementById('ltn05a').innerHTML = kc[19];
            document.getElementById('ltn05b').innerHTML = (kc[19] < 30 ? 1 : 0);
            document.getElementById('ltn06').innerHTML = (kc[19] < 30 ? 1 : 0);
            document.getElementById('ltn07').innerHTML = kc[15];
            document.getElementById('ltn08').innerHTML = kc[16];
            document.getElementById("ltn09").innerHTML = kc[14];
            n = (parseInt(document.getElementById("ltn07").innerHTML) + parseInt(document.getElementById("ltn08").innerHTML) + parseInt(document.getElementById("ltn09").innerHTML)) == 0 ? 1 : 0;
            document.getElementById("ltn10").innerHTML = n;
            n = (parseInt(document.getElementById("ltn04").innerHTML) + parseInt(document.getElementById("ltn06").innerHTML) + parseInt(document.getElementById("ltn10").innerHTML)) == 3 ? 1 : 0;
            document.getElementById("ltn11a").innerHTML = n;
            document.getElementById("ltn11b").innerHTML = (n == 1 ? "Loạn thần ngắn" : "Không loạn thần ngắn");
        }


        function chandoan() {
            if (parseInt(document.getElementById("lttt12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Loạn thần thực thể";
            } else
            if (parseInt(document.getElementById("ltc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Loạn thần do chất";
            } else
            if (parseInt(document.getElementById("pl14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TT phân liệt";
            } else
            if (parseInt(document.getElementById("dpl14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Dạng phân liệt";
            } else
            if (parseInt(document.getElementById("ht13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Rối loạn hoang tưởng";
            } else
            if (parseInt(document.getElementById("ltn11a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Loạn thần ngắn";
            } else {
                document.getElementById("kc21").innerHTML = "Không loạn thần";
            }
        }

        function recalc() {
            recalcPL();
            recalcDPL();
            recalcLTB();
            recalcLTC();
            recalcHT();
            recalcLTN();
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
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán loạn thần</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Tâm thần phân liệt</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Dạng phân liệt</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="contact" aria-selected="false">Loạn thần do bệnh cơ thể</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contact" aria-selected="false">Loạn thần do chất</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="contact" aria-selected="false">Loạn thần ngắn</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="contact" aria-selected="false">Rối loạn hoang tưởng</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('loan-than.store')}}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-md-3">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="hoangtuongbihai" onchange="chkChange('04');">
                            <label for="">Hoang tưởng bị hại</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="hoangtuongtucao" onchange="chkChange('05');">
                            <label for="">Hoang tưởng tự cao</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="hoangtuongvotu" onchange="chkChange('06');">
                            <label for="">Hoang tưởng hư vô</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="hoangtuongkiquai" onchange="chkChange('07');">
                            <label for="">Hoang tưởng kì quái</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-2">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="aogiac" onchange="chkChange('08');">
                            <label for="">Ảo giác</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="amtinh" onchange="chkChange('10');">
                            <label for="">Âm tính</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="quanhelt" onchange="chkChange('13');">
                            <label for="">Quan hệ</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="lamvieclt" onchange="chkChange('14');">
                            <label for="">Làm việc</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="tramcamuuthe" onchange="chkChange('17');">
                            <label for="">Trầm cảm ưu thế</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="mesanglt" onchange="chkChange('22');">
                            <label for="">Mê sảng</label>
                        </div>

                        <div class=" form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="kolienquanlt" onchange="chkChange('09');">
                            <label for="">Không liên quan</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="cobenhcothelt" onchange="chkChange('15');">
                            <label for="">Có bệnh cơ thể (lâm sàng, XN lâm sàng)</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="codungthuocdieutribenhlt" onchange="chkChange('16');">
                            <label for="">Có dùng thuốc điều trị bệnh, thuốc gây nghiện</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Loạn thần :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1"></textarea>
                        </div>
                    </div>
                </div>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <h4>Tâm thần phân liệt</h4>
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
                        <td id="pl01a">&nbsp;</td>
                        <td id="pl01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Hoang tưởng</td>
                        <td id="pl02a">&nbsp;</td>
                        <td id="pl02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảo giác</td>
                        <td id="pl15">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TD không liên quan</td>
                        <td id="pl16">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Âm tính</td>
                        <td id="pl17">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng </td>
                        <td id="pl03a">&nbsp;</td>
                        <td id="pl03b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="pl04">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="pl12">&nbsp;</td>
                        <td id="pl03b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="pl13">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Loạn thần</td>
                        <td id="pl05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="pl06">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Trầm cảm ưu thế</td>
                        <td id="pl10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="pl11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="pl07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Dùng chất</td>
                        <td id="pl08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="pl09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="pl14a">&nbsp;</td>
                        <td id="pl14b" title="IF(pl14a=1;'TTPL';'Không TTPL')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
            <h4>Dạng phân liệt</h4>
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
                        <td id="dpl01a">&nbsp;</td>
                        <td id="dpl01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Hoang tưởng</td>
                        <td id="dpl02a">&nbsp;</td>
                        <td id="dpl02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảo giác</td>
                        <td id="dpl15">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TD không liên quan</td>
                        <td id="dpl16">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Âm tính</td>
                        <td id="dpl17">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng </td>
                        <td id="dpl03a">&nbsp;</td>
                        <td id="dpl03b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="dpl04">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Loạn thần</td>
                        <td id="dpl05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="dpl06">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Trầm cảm ưu thế</td>
                        <td id="dpl10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="dpl11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="dpl07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Dùng chất</td>
                        <td id="dpl08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="dpl09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="dpl14a">&nbsp;</td>
                        <td id="dpl14b" title="IF(dpl14a=1;'DPL';'Không DPL')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Loạn thần do bệnh cơ thể</h4>
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
                        <td>Hoang tưởng</td>
                        <td id="lttt01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảo giác</td>
                        <td id="lttt02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="lttt03">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="lttt04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="lttt05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh trầm cảm</td>
                        <td id="lttt06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="lttt07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="lttt08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="lttt09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="lttt10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="lttt11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="lttt12a">&nbsp;</td>
                        <td id="lttt12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab4" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Loạn thần do chất</h4>
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
                        <td>Hoang tưởng</td>
                        <td id="ltc01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảo giác</td>
                        <td id="ltc02">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="ltc03">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="ltc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="ltc05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh trầm cảm</td>
                        <td id="ltc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="ltc07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="ltc08"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="ltc09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="ltc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="ltc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="ltc12a">&nbsp;</td>
                        <td id="ltc12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab5" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Loạn thần ngắn</h4>
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
                        <td>Hoang tưởng</td>
                        <td id="ltn01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảo giác</td>
                        <td id="ltn02">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Tư duy không liên quan</td>
                        <td id="ltn03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Tiêu chuẩn A</td>
                        <td id="ltn04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Thời gian cơn</td>
                        <td id="ltn05a">&nbsp;</td>
                        <td id="ltn05b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="ltn06">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh trầm cảm</td>
                        <td id="ltn08">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="ltn09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="ltn07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="ltn10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="ltn11a">&nbsp;</td>
                        <td id="ltn11b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab6" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Rối loạn hoang tưởng</h4>
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
                        <td>Thời gian cơn loạn thần</td>
                        <td id="ht01a">&nbsp;</td>
                        <td id="ht01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Hoang tưởng</td>
                        <td>&nbsp;</td>
                        <td id="ht02">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="ht04">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Tc A của TTPL</td>
                        <td id="ht05a">&nbsp;</td>
                        <td id="ht05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="ht06">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="ht07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="ht08">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Trầm cảm ưu thế</td>
                        <td id="ht09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="ht10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="ht11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="ht12">&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="ht13">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="ht13a">&nbsp;</td>
                        <td id="ht13b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="printElement" class="card-body">
            <div class="card-title">
                <h3>Đơn thuốc</h3>
            </div>
            <?php
            $imgPath = asset('assets/img/minus.svg');
            $imgAdd = asset('assets/img/addition.png');
            ?>
            <input type="hidden" id="imgPath" value="<?= $imgPath ?>">
            <input type="hidden" id="imgAdd" width="25px" value="<?= $imgAdd ?>">
            <!-- =============== Form thêm đơn thuốc ============ -->
            <div class="table-responsive">
                <table id="autocomplete_table" class="table table-hover autocomplete_table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tên thuốc</th>
                            <th>Loại thuốc</th>
                            <th>Số lượng</th>
                            <th>Liều lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row_1">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off" value="{{old('name')}}">
                                <div id="search-ajax">
                                </div>
                            </td>

                            <td>
                                <select aria-label="Default select example" data-field-name="type" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Loạn thần</option>
                                    <option value="{{old('type')}}">Trầm cảm</option>
                                    <option value="{{old('type')}}">Co giật</option>
                                    <option value="{{old('type')}}">Nghiện rượu</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">Mất trí</option>
                                </select>
                                <!-- <input type="text" data-field-name="type" name="Type[]" id="type_" class="form-control autocomplete_txt" placeholder="Loại thuốc" autocomplete="off" value="{{old('type')}}"> -->
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off" value="{{old('amount')}}">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off" value="{{old('treatment')}}">
                            </td>
                        </tr>
                        <tr id="row_2">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select aria-label="Default select example" data-field-name="type" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Loạn thần</option>
                                    <option value="{{old('type')}}">Trầm cảm</option>
                                    <option value="{{old('type')}}">Co giật</option>
                                    <option value="{{old('type')}}">Nghiện rượu</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">Mất trí</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off">
                            </td>
                        </tr>
                        <tr id="row_3">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select aria-label="Default select example" data-field-name="type" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Loạn thần</option>
                                    <option value="{{old('type')}}">Trầm cảm</option>
                                    <option value="{{old('type')}}">Co giật</option>
                                    <option value="{{old('type')}}">Nghiện rượu</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">Mất trí</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off">
                            </td>
                        </tr>
                        <tr id="row_4">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select data-field-name="type" aria-label="Default select example" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Loạn thần</option>
                                    <option value="{{old('type')}}">Trầm cảm</option>
                                    <option value="{{old('type')}}">Co giật</option>
                                    <option value="{{old('type')}}">Nghiện rượu</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">Mất trí</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off">
                            </td>
                        </tr>
                        <tr id="row_5">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select data-field-name="type" aria-label="Default select example" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Loạn thần</option>
                                    <option value="{{old('type')}}">Trầm cảm</option>
                                    <option value="{{old('type')}}">Co giật</option>
                                    <option value="{{old('type')}}">Nghiện rượu</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">Mất trí</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button id="addNew" type="button" class='btn'><img src="<?= $imgAdd; ?>" width="25px" alt=""></button>
                <button type="submit" class="btn btn-success" id="submitBtn">Lưu</button>
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function() {
                    $('#medicineName').keyup(function() {
                        var data = $(this).val();
                        var fieldName, currentEle;
                        currentEle = $(this);
                        fieldName = currentEle.data('field-name');

                        if (typeof fieldName === 'undefined') {
                            return false;
                        }
                        if (data != '') {
                            var _token = $('input[name="_token"]').val();
                            $.ajax({
                                url: "{{route('autocomplete')}}",
                                method: 'POST',
                                data: {
                                    data: data,
                                    fieldName: fieldName,
                                    _token: _token
                                },
                                success: function(data) {
                                    let medicine = JSON.parse(data);
                                    let output = '<ul class="dropdown-menu" style="display:block; position:relative;">';

                                    let content = '';
                                    $.each(medicine, function(index, value) {
                                        // console.log(index, value);
                                        //search-ajax
                                        output += '<li><a href="#" class="ml-2" style="color:black; font-weight: bold">' + value.Name + ' </a></li>';


                                        //content
                                        // content += "<h3>Name: " + value.Name + "; Type: " + value.Type + "</h3>";
                                    });
                                    output += "</ul>";

                                    $('#search-ajax').fadeIn();
                                    $('#search-ajax').html(output);
                                    $('#content').html(content);
                                }
                            })
                        } else {
                            $('#search-ajax').fadeOut();
                        }
                    });

                    $(document).on('click', 'li', function(ui, event) {
                        console.log(ui.item);
                        $('#medicineName').val($(this).text());
                        $('#type_').val($(this).text());
                        $('#amount_code_').val($(this).text());
                        $('#treament_code_').val($(this).text());
                        $('#search-ajax').fadeOut();
                        // return false;
                    });

                });
            </script>
            <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
            <script src="{{asset('js/multi.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.css"></script>
        </div>
    </div>
</div>
@endsection