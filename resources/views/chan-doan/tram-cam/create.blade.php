@extends('layouts.main')
@section('content')
<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{asset('js/multi.js')}}"></script>
<div class="container-wraper">

    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[19];
            document.getElementById('tc01b').innerHTML = (kc[19] >= 14 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[9] + kc[10];
            document.getElementById('tc02b').innerHTML = (kc[9] + kc[10] >= 1 ? 1 : 0);
            var n = kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11];
            document.getElementById('tc03a').innerHTML = n;
            document.getElementById('tc03b').innerHTML = (n >= 5 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc02b').innerHTML) + parseInt(document.getElementById('tc03b').innerHTML);
            document.getElementById('tc04').innerHTML = (n == 3 ? 1 : 0);
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById('tc05').innerHTML = n;
            document.getElementById('tc06').innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById('tc07').innerHTML = kc[14];
            document.getElementById('tc08').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('tc09').innerHTML = (n == 0 ? 1 : 0);
            document.getElementById('tc10').innerHTML = kc[16];
            document.getElementById('tc11').innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById('tc12').innerHTML = kc[17];
            document.getElementById('tc13').innerHTML = (kc[17] == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 5 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 5 ? "Tr???m c???m" : "Kh??ng tr???m c???m");
        }

        function recalcTCB() {
            var n = (kc[9] + kc[10]) >= 1 ? 1 : 0;
            document.getElementById("tcb01").innerHTML = n;
            var m = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("tcb02").innerHTML = m;
            document.getElementById("tcb03").innerHTML = (n + m == 2 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[14];
            document.getElementById("tcb05").innerHTML = kc[14];
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("tcb06").innerHTML = n;
            n = parseInt(document.getElementById("tcb06").innerHTML);
            document.getElementById("tcb07").innerHTML = (n == 0 ? 1 : 0);
            document.getElementById("tcb08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('tcb09').innerHTML = 0;
            else
                document.getElementById('tcb09').innerHTML = 1;
            n = kc[3] + kc[5] + kc[12] + kc[14];
            document.getElementById("tcb10").innerHTML = n;
            document.getElementById("tcb11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML) + parseInt(document.getElementById("tcb11").innerHTML);
            n = n == 5 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Tr???m c???m th???c th???" : "Kh??ng TC th???c th???");
        }

        function recalcTCC() {
            var n = kc[9] + kc[10] >= 1 ? 1 : 0;
            document.getElementById("tcc01").innerHTML = n;
            var m = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("tcc02").innerHTML = m;
            document.getElementById("tcc03").innerHTML = (m + n == 2 ? 1 : 0);
            document.getElementById("tcc04").innerHTML = kc[15];
            document.getElementById("tcc05").innerHTML = kc[15];
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("tcc06").innerHTML = n;
            document.getElementById("tcc07").innerHTML = (n == 0 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('tcc09').innerHTML = 0;
            else
                document.getElementById('tcc09').innerHTML = 1;
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("tcc10").innerHTML = n;
            document.getElementById("tcc11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcc03").innerHTML) + parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 5 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "Tr???m c???m do ch???t" : "Kh??ng TC do ch???t");
        }

        function recalcRLT() {
            var n = kc[18];
            document.getElementById("rlt01").innerHTML = n;
            document.getElementById("rlt02").innerHTML = n;
            n = kc[9] + kc[10] >= 1 ? 1 : 0;
            document.getElementById("rlt03").innerHTML = n;
            n = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("rlt04").innerHTML = n;
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("rlt05").innerHTML = n;
            document.getElementById("rlt06").innerHTML = (n >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("rlt07").innerHTML = n;
            document.getElementById("rlt08").innerHTML = (n == 0 ? 1 : 0);
            var n = kc[22]
            document.getElementById("rlt09").innerHTML = n;
            document.getElementById("rlt10").innerHTML = (n == 0 ? 1 : 0);
            var n = kc[23]
            document.getElementById("rlt11").innerHTML = n;
            document.getElementById("rlt12").innerHTML = (n == 0 ? 0 : 1);
            n = (parseInt(document.getElementById("rlt02").innerHTML) + parseInt(document.getElementById("rlt06").innerHTML) + parseInt(document.getElementById("rlt08").innerHTML) + parseInt(document.getElementById("rlt10").innerHTML) + parseInt(document.getElementById("rlt12").innerHTML)) == 5 ? 1 : 0;
            document.getElementById("rlt13a").innerHTML = n;
            document.getElementById("rlt13b").innerHTML = (n == 1 ? "RL Th??ch nghi" : "Kh??ng RL Th??ch nghi");

        }

        function recalcHC() {
            document.getElementById("hc01").innerHTML = kc[17];
            document.getElementById("hc02").innerHTML = kc[17];
            var n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("hc03").innerHTML = n;
            document.getElementById("hc04").innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById("hc05").innerHTML = kc[14];
            document.getElementById("hc06").innerHTML = kc[15];
            document.getElementById("hc07").innerHTML = (kc[14] + kc[15] >= 1 ? 0 : 1);
            n = (parseInt(document.getElementById("hc02").innerHTML) + parseInt(document.getElementById("hc04").innerHTML) + parseInt(document.getElementById("hc07").innerHTML)) == 3 ? 1 : 0;
            document.getElementById("hc08a").innerHTML = n;
            document.getElementById("hc08b").innerHTML = (n == 1 ? "H??ng c???m" : "Kh??ng h??ng c???m");
        }

        function chandoan() {
            if (parseInt(document.getElementById("hc08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "H??ng c???m";
            } else
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TC Th???c th???";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TC Do ch???t";
            } else
            if (parseInt(document.getElementById("rlt13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL Th??ch nghi";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Tr???m c???m";
            } else {
                document.getElementById("kc21").innerHTML = "Kh??ng tr???m c???m";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
            recalcRLT();
            recalcHC();
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
            <h3>Ch???n ??o??n m???i</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Ch???n ??o??n</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="profile" aria-selected="false">Tr???m c???m</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Tr???m c???m do b???nh c?? th???</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="contact" aria-selected="false">Tr???m c???m do ch???t</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contact" aria-selected="false">H??ng c???m</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="contact" aria-selected="false">R???i lo???n th??ch nghi</button>
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
            <form id="form1" class="mt-3 ml-5 mr-5" action="{{route('tram-cam.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Th??ng tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">H??? v?? t??n : </label>
                            <input type="text" name="cust_name" class="form-control-sm" placeholder="??i???n h??? t??n...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gi???i t??nh : </label>
                            <input type="radio" class="form-input" name="cust_gender" value="Nam" checked="1"> Nam
                            <input type="radio" class="form-input" name="cust_gender" value="N???"> N???
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">N??m sinh : </label>
                            <input type="text" name="cust_dob" class="form-control-sm" placeholder="N??m sinh...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">S??T : </label>
                            <input type="number" name="phone" placeholder="S??? ??i???n tho???i..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" name="cust_email" placeholder="??i???n email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">?????a ch??? : </label>
                            <input type="text" placeholder="?????a ch???..." name="cust_address" class="form-control-sm">
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <h5>Tri???u ch???ng</h5>
                    <!-- <hr width="10%"> -->
                </div>

                <!--------Form Checkbox--------->
                <div class="row ml-1">
                    <!---------Collum-1 ------------>
                    <div class="col-md-2">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="buon" id="kc10" type="checkbox" onchange="chkChange('10');">
                            <label for="symptom">Bu???n</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="nguit" id="kc04" type="checkbox" onchange="chkChange('04');">
                            <label for="symptom">Ng??? ??t</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="anit" id="kc06" type="checkbox" onchange="chkChange('06');">
                            <label for="symptom">??n ??t</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="tutu" id="kc12" type="checkbox" onchange="chkChange('12');">
                            <label for="symptom">T??? t???</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="metmoi" id="kc05" type="checkbox" onchange="chkChange('05');">
                            <label for="symptom">M???t m???i</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="matthichthu" id="kc11" type="checkbox" onchange="chkChange('11');">
                            <label for="symptom">M???t th??ch th??</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="hayquen" id="kc07" type="checkbox" onchange="chkChange('07');">
                            <label for="symptom">Hay qu??n</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="lamviecchamchap" id="kc08" type="checkbox" onchange="chkChange('08');">
                            <label for="symptom">L??m vi???c ch???m ch???p</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="ytuongbiquan" id="kc09" type="checkbox" onchange="chkChange('09');">
                            <label for="symptom">?? t?????ng bi quan</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="mesang" id="kc22" type="checkbox" onchange="chkChange('22');">
                            <label for="symptom">M?? s???ng</label>
                        </div>

                    </div>


                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="colucnaovuivequamuc" id="kc18" type="checkbox" onchange="chkChange('18');">
                            <label for="symptom">C?? l??c n??o vui v??? qu?? m???c</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="sangchantamly" id="kc19" type="checkbox" onchange="chkChange('19');">
                            <label for="symptom">Sang ch???n t??m l??</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="quanhetronggiadinh" id="kc13" type="checkbox" onchange="chkChange('13');">
                            <label for="symptom">Quan h??? trong gia ????nh</label>
                        </div>

                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="dienbientheotramcam" id="kc24" type="checkbox" onchange="chkChange('24');">
                            <label for="symptom">Di???n bi???n theo tr???m c???m</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="6thang" id="kc25" type="checkbox" onchange="chkChange('25');">
                            <label for="symptom">6 th??ng</label>
                        </div>
                    </div>

                    <!---------Collum-4 ------------>
                    <div class="col-md-4">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cotang" id="kc23" type="checkbox" onchange="chkChange('23');">
                            <label for="symptom">C?? tang</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="lamviec" id="kc14" type="checkbox" onchange="chkChange('14');">
                            <label for="symptom">L??m vi???c</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cobenhcothe" id="kc15" type="checkbox" onchange="chkChange('15');">
                            <label for="symptom">C?? b???nh c?? th???</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cdtdtbtgn" id="kc16" type="checkbox" onchange="chkChange('16');">
                            <label for="symptom">C?? d??ng thu???c ??i???u tr??? b???nh, thu???c g??y nghi???n</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cyncngntn" id="kc17" type="checkbox" onchange="chkChange('17');">
                            <label for="symptom">C?? ?? ngh?? c?? ng?????i h???i, nghe ti???ng n??i</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="time_sym">Th???i gian c??n <br> (t??nh theo ng??y)</label>
                            <input class="form-control-sm" name="time_sym" id="kc20" onblur="txtBlur('20');" width="10">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Ch???n ??o??n: </label>
                            <textarea style="margin-top:20px; color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1"></textarea>
                            <!-- <h5>Ch???n ??o??n: <span id="kc21" style="color:blue;"></span></h5> -->
                        </div>
                    </div>
                </div>
        </div>

        <div class="tab-pane ml-5 fade show" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <h4>Tr???m c???m</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Tri???u ch???ng</th>
                    <th>Ch??? s???</th>
                    <th>D???u hi???u</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Th???i gian c??n</td>
                        <td id="tc01a"></td>
                        <td id="tc01b"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng ch??nh</td>
                        <td id="tc02a"></td>
                        <td id="tc02b"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng </td>
                        <td id="tc03a"></td>
                        <td id="tc03b"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A</b></td>
                        <td></td>
                        <td id="tc04"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh ho???t</td>
                        <td id="tc05"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n B</b></td>
                        <td></td>
                        <td id="tc06"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh c?? th???</td>
                        <td id="tc07"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? d???ng ch???t</td>
                        <td id="tc08"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n C</b></td>
                        <td></td>
                        <td id="tc09"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo???n th???n</td>
                        <td id="tc10"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n D</b></td>
                        <td></td>
                        <td id="tc11"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>H??ng c???m</td>
                        <td id="tc12"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n E</b></td>
                        <td></td>
                        <td id="tc13"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ch???n ??o??n</td>
                        <td id="tc14a"></td>
                        <td id="tc14b" title="IF(tc14a=1;'Tr???m c???m';'Kh??ng tr???m c???m')"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane ml-5 fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
            <h4>TC do b???nh c?? th???</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Tri???u ch???ng</th>
                    <th>Ch??? s???</th>
                    <th>D???u hi???u</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng ch??nh</td>
                        <td id="tcb01"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng </td>
                        <td id="tcb02"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A</b></td>
                        <td></td>
                        <td id="tcb03"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh c?? th???</td>
                        <td id="tcb04"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n B</b></td>
                        <td></td>
                        <td id="tcb05"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh tr???m c???m</td>
                        <td id="tcb06"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n C</b></td>
                        <td></td>
                        <td id="tcb07"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>M?? s???ng</td>
                        <td id="tcb08"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n D</b></td>
                        <td></td>
                        <td id="tcb09"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh ho???t</td>
                        <td id="tcb10"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n E</b></td>
                        <td></td>
                        <td id="tcb11"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ch???n ??o??n</td>
                        <td id="tcb12a"></td>
                        <td id="tcb12b"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane ml-5 fade" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Tr???m c???m do ch???t</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Tri???u ch???ng</th>
                    <th>Ch??? s???</th>
                    <th>D???u hi???u</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng ch??nh</td>
                        <td id="tcc01"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng </td>
                        <td id="tcc02"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A</b></td>
                        <td></td>
                        <td id="tcc03"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? d???ng ch???t</td>
                        <td id="tcc04"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n B</b></td>
                        <td></td>
                        <td id="tcc05"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh tr???m c???m</td>
                        <td id="tcc06"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n C</b></td>
                        <td></td>
                        <td id="tcc07"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>M?? s???ng</td>
                        <td id="tcc08"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n D</b></td>
                        <td></td>
                        <td id="tcc09"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh ho???t</td>
                        <td id="tcc10"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n E</b></td>
                        <td></td>
                        <td id="tcc11"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ch???n ??o??n</td>
                        <td id="tcc12a"></td>
                        <td id="tcc12b"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane ml-5 fade" id="tab4" role="tabpanel" aria-labelledby="contact-tab">
            <h4>H??ng c???m</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Tri???u ch???ng</th>
                    <th>Ch??? s???</th>
                    <th>D???u hi???u</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>H??ng c???m</td>
                        <td id="hc01"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A v?? B</b></td>
                        <td></td>
                        <td id="hc02"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh ho???t</td>
                        <td id="hc03"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n C</b></td>
                        <td></td>
                        <td id="hc04"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh c?? th???</td>
                        <td id="hc05"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? d???ng ch???t</td>
                        <td id="hc06"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n D</b></td>
                        <td></td>
                        <td id="hc07"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ch???n ??o??n</td>
                        <td id="hc08a"></td>
                        <td id="hc08b"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane ml-5 fade" id="tab5" role="tabpanel" aria-labelledby="contact-tab">
            <h4> R???i lo???n th??ch nghi</h4>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Tri???u ch???ng</th>
                    <th>Ch??? s???</th>
                    <th>D???u hi???u</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sang ch???n TL</td>
                        <td id="rlt01"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A</b></td>
                        <td></td>
                        <td id="rlt02"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng ch??nh</td>
                        <td id="rlt03"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng </td>
                        <td id="rlt04"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh ho???t</td>
                        <td id="rlt05"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n B</b></td>
                        <td></td>
                        <td id="rlt06"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh tr???m c???m</td>
                        <td id="rlt07"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n C</b></td>
                        <td></td>
                        <td id="rlt08"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>C?? tang</td>
                        <td id="rlt09"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n D</b></td>
                        <td></td>
                        <td id="rlt10"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Di???n ti???n</td>
                        <td id="rlt11"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n E</b></td>
                        <td></td>
                        <td id="rlt12"></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ch???n ??o??n</td>
                        <td id="rlt13a"></td>
                        <td id="rlt13b"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="printElement" class="card-body">
            <div class="card-title">
                <h3>????n thu???c</h3>
            </div>
            <?php
            $imgPath = asset('assets/img/minus.svg');
            $imgAdd = asset('assets/img/addition.png');
            ?>
            <input type="hidden" id="imgPath" value="<?= $imgPath ?>">
            <input type="hidden" id="imgAdd" width="25px" value="<?= $imgAdd ?>">
            <!-- =============== Form th??m ????n thu???c ============ -->
            <div class="table-responsive">
                <table id="autocomplete_table" class="table table-hover autocomplete_table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>T??n thu???c</th>
                            <th>Lo???i thu???c</th>
                            <th>S??? l?????ng</th>
                            <th>Li???u l?????ng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row_1">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="T??n thu???c" autocomplete="off" value="{{old('name')}}">
                                <div id="search-ajax">
                                </div>
                            </td>

                            <td>
                                <select aria-label="Default select example" data-field-name="type" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Lo???n th???n</option>
                                    <option value="{{old('type')}}">Tr???m c???m</option>
                                    <option value="{{old('type')}}">Co gi???t</option>
                                    <option value="{{old('type')}}">Nghi???n r?????u</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">M???t tr??</option>
                                </select>
                                <!-- <input type="text" data-field-name="type" name="Type[]" id="type_" class="form-control autocomplete_txt" placeholder="Lo???i thu???c" autocomplete="off" value="{{old('type')}}"> -->
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="S??? l?????ng" autocomplete="off" value="{{old('amount')}}">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Li???u l?????ng(vi??n)" autocomplete="off" value="{{old('treatment')}}">
                            </td>
                        </tr>
                        <tr id="row_2">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="T??n thu???c" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select aria-label="Default select example" data-field-name="type" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Lo???n th???n</option>
                                    <option value="{{old('type')}}">Tr???m c???m</option>
                                    <option value="{{old('type')}}">Co gi???t</option>
                                    <option value="{{old('type')}}">Nghi???n r?????u</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">M???t tr??</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="S??? l?????ng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Li???u l?????ng(vi??n)" autocomplete="off">
                            </td>
                        </tr>
                        <tr id="row_3">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="T??n thu???c" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select aria-label="Default select example" data-field-name="type" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Lo???n th???n</option>
                                    <option value="{{old('type')}}">Tr???m c???m</option>
                                    <option value="{{old('type')}}">Co gi???t</option>
                                    <option value="{{old('type')}}">Nghi???n r?????u</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">M???t tr??</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="S??? l?????ng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Li???u l?????ng(vi??n)" autocomplete="off">
                            </td>
                        </tr>
                        <tr id="row_4">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="T??n thu???c" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select data-field-name="type" aria-label="Default select example" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Lo???n th???n</option>
                                    <option value="{{old('type')}}">Tr???m c???m</option>
                                    <option value="{{old('type')}}">Co gi???t</option>
                                    <option value="{{old('type')}}">Nghi???n r?????u</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">M???t tr??</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="S??? l?????ng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Li???u l?????ng(vi??n)" autocomplete="off">
                            </td>
                        </tr>
                        <tr id="row_5">
                            <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                            <td>
                                <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="T??n thu???c" autocomplete="off">
                                <div id="search-ajax">
                                </div>
                            </td>
                            <td>
                                <select data-field-name="type" aria-label="Default select example" name="Type[]" id="type_" class="form-select autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                    <option value="{{old('type')}}" selected>Lo???n th???n</option>
                                    <option value="{{old('type')}}">Tr???m c???m</option>
                                    <option value="{{old('type')}}">Co gi???t</option>
                                    <option value="{{old('type')}}">Nghi???n r?????u</option>
                                    <option value="{{old('type')}}">CTC</option>
                                    <option value="{{old('type')}}">CLT</option>
                                    <option value="{{old('type')}}">M???t tr??</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="S??? l?????ng" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Li???u l?????ng(vi??n)" autocomplete="off">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button id="addNew" type="button" class='btn'><img src="<?= $imgAdd; ?>" width="25px" alt=""></button>
                <button type="submit" class="btn btn-success" id="submitBtn">L??u</button>
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