@extends('layouts.main')
@section('content')
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
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc02b')
                .innerHTML) + parseInt(document.getElementById('tc03b').innerHTML);
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
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) +
                parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) +
                parseInt(document.getElementById('tc13').innerHTML);
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
            n = parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb05")
                .innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById(
                "tcb09").innerHTML) + parseInt(document.getElementById("tcb11").innerHTML);
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
            n = parseInt(document.getElementById("tcc03").innerHTML) + parseInt(document.getElementById("tcc05")
                .innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById(
                "tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
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
            n = (parseInt(document.getElementById("rlt02").innerHTML) + parseInt(document.getElementById("rlt06")
                .innerHTML) + parseInt(document.getElementById("rlt08").innerHTML) + parseInt(document
                .getElementById(
                    "rlt10").innerHTML) + parseInt(document.getElementById("rlt12").innerHTML)) == 5 ? 1 : 0;
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
            n = (parseInt(document.getElementById("hc02").innerHTML) + parseInt(document.getElementById("hc04").innerHTML) +
                parseInt(document.getElementById("hc07").innerHTML)) == 3 ? 1 : 0;
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
            <h3>Kh??m Ch???n ??o??n</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">K???t qu??? ???? ch???n ??o??n</button>
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
            <form class="mt-3 ml-5 mr-5" action="{{route('tram-cam.update', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>
                        Th??ng tin
                        <!-- <hr width=" 10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">H??? v?? t??n : </label>
                            <input type="text" name="cust_name" value="{{$model->cust_name}}" class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_gender" class="form-label">Gi???i t??nh : </label>
                            <input type="text" name="cust_gender" value="{{$model->cust_gender}}" class="form-control-sm" id="cust_gender" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">N??m sinh : </label>
                            <input type="text" value="{{$model->cust_dob}}" name="cust_dob" class="form-control-sm" placeholder="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">S??T : </label>
                            <input type="number" value="{{$model->phone}}" name="phone" placeholder="S??? ??i???n tho???i..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" value="{{$model->cust_email}}" name="cust_email" placeholder="??i???n email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">?????a ch??? : </label>
                            <input type="text" placeholder="?????a ch???..." value="{{$model->cust_address}}" name="cust_address" class="form-control-sm">
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <h5>Tri???u ch???ng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!--------Form Checkbox--------->

                <div class="row ml-1">
                    <div class="col-md-2">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="buon" id="kc10" type="checkbox" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'buon') !== false)
                            checked
                            @endif>
                            <label for="symptom">Bu???n</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="nguit" id="kc04" type="checkbox" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'nguit') !== false)
                            checked
                            @endif>
                            <label for="symptom">Ng??? ??t</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="anit" id="kc06" type="checkbox" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'anit') !== false)
                            checked
                            @endif>
                            <label for="symptom">??n ??t</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="tutu" id="kc12" type="checkbox" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'tutu') !== false)
                            checked
                            @endif>
                            <label for="symptom">T??? t???</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="metmoi" id="kc05" type="checkbox" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'metmoi') !== false)
                            checked
                            @endif>
                            <label for="symptom">M???t m???i</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="matthichthu" id="kc11" type="checkbox" onchange="chkChange('11');" @if (strpos($model->symptom[0],
                            'matthichthu') !== false)
                            checked
                            @endif>
                            <label for="symptom">M???t th??ch th??</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="hayquen" id="kc07" type="checkbox" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'hayquen') !== false)
                            checked
                            @endif>
                            <label for="symptom">Hay qu??n</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="lamviecchamchap" id="kc08" type="checkbox" onchange="chkChange('08');" @if (strpos($model->symptom[0],
                            'lamviecchamchap') !== false)
                            checked
                            @endif>
                            <label for="symptom">L??m vi???c ch???m ch???p</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="ytuongbiquan" id="kc09" type="checkbox" onchange="chkChange('09');" @if (strpos($model->symptom[0],
                            'ytuongbiquan') !== false)
                            checked
                            @endif>
                            <label for="symptom">?? t?????ng bi quan</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="mesang" id="kc22" type="checkbox" onchange="chkChange('22');" @if (strpos($model->symptom[0], 'mesang') !== false)
                            checked
                            @endif>
                            <label for="symptom">M?? s???ng</label>
                        </div>

                    </div>

                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="colucnaovuivequamuc" id="kc18" type="checkbox" onchange="chkChange('18');" @if (strpos($model->symptom[0],
                            'colucnaovuivequamuc') !== false)
                            checked
                            @endif>
                            <label for="symptom">C?? l??c n??o vui v??? qu?? m???c</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="sangchantamly" id="kc19" type="checkbox" onchange="chkChange('19');" @if (strpos($model->symptom[0],
                            'sangchantamly') !== false)
                            checked
                            @endif>
                            <label for="symptom">Sang ch???n t??m l??</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="quanhetronggiadinh" id="kc13" type="checkbox" onchange="chkChange('13');" @if (strpos($model->symptom[0],
                            'quanhetronggiadinh') !== false)
                            checked
                            @endif>
                            <label for="symptom">Quan h??? trong gia ????nh</label>
                        </div>

                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="dienbientheotramcam" id="kc24" type="checkbox" onchange="chkChange('24');" @if (strpos($model->symptom[0],
                            'dienbientheotramcam') !== false)
                            checked
                            @endif>
                            <label for="symptom">Di???n bi???n theo tr???m c???m</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="6thang" id="kc25" type="checkbox" onchange="chkChange('25');" @if (strpos($model->symptom[0], '6thang') !== false)
                            checked
                            @endif>
                            <label for="symptom">6 th??ng</label>
                        </div>
                    </div>

                    <!---------Collum-4 ------------>
                    <div class="col-md-4">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cotang" id="kc23" type="checkbox" onchange="chkChange('23');" @if (strpos($model->symptom[0], 'cotang') !== false)
                            checked
                            @endif>
                            <label for="symptom">C?? tang</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="lamviec" id="kc14" type="checkbox" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'lamviec') !== false)
                            checked
                            @endif>
                            <label for="symptom">L??m vi???c</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cobenhcothe" id="kc15" type="checkbox" onchange="chkChange('15');" @if (strpos($model->symptom[0],
                            'cobenhcothe') !== false)
                            checked
                            @endif>
                            <label for="symptom">C?? b???nh c?? th???</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cdtdtbtgn" id="kc16" type="checkbox" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'cdtdtbtgn') !== false)
                            checked
                            @endif>
                            <label for="symptom">C?? d??ng thu???c ??i???u tr??? b???nh, thu???c g??y nghi???n</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cyncngntn" id="kc17" type="checkbox" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'cyncngntn') !== false)
                            checked
                            @endif>
                            <label for="symptom">C?? ?? ngh?? c?? ng?????i h???i, nghe ti???ng n??i</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="time_sym">Th???i gian c??n <br> (t??nh theo ng??y)</label>
                            <input class="form-control-sm" name="time_sym" id="kc20" value="{{$model->time_sym}}" onblur="txtBlur('20');" width="10">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Ch???n ??o??n: </label>
                            <textarea style="margin-top:20px; color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                            <!-- <h5>Ch???n ??o??n: <span id="kc21" style="color:blue;"></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Tr??? l???i </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection