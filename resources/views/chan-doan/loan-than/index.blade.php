@extends('layouts.main')
@section('content')
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
            document.getElementById('pl14b').innerHTML = (n == 5 ? "TT Ph??n li???t" : "Kh??ng TTPL");

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
            document.getElementById('dpl14b').innerHTML = (n == 4 ? "D???ng ph??n li???t" : "Kh??ng d???ng ph??n li???t");

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
            document.getElementById("lttt12b").innerHTML = (n == 1 ? "Lo???n th???n th???c th???" : "Kh??ng lo???n th???n th???c th???");

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
            document.getElementById("ltc12b").innerHTML = (n == 1 ? "Lo???n th???n do ch???t" : "Kh??ng lo???n th???n do ch???t");

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
            document.getElementById("ht13b").innerHTML = (n == 1 ? "R???i lo???n hoang t?????ng" : "Kh??ng r???i lo???n hoang t?????ng");
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
            document.getElementById("ltn11b").innerHTML = (n == 1 ? "Lo???n th???n ng???n" : "Kh??ng lo???n th???n ng???n");
        }


        function chandoan() {
            if (parseInt(document.getElementById("lttt12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Lo???n th???n th???c th???";
            } else
            if (parseInt(document.getElementById("ltc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Lo???n th???n do ch???t";
            } else
            if (parseInt(document.getElementById("pl14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TT ph??n li???t";
            } else
            if (parseInt(document.getElementById("dpl14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "D???ng ph??n li???t";
            } else
            if (parseInt(document.getElementById("ht13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "R???i lo???n hoang t?????ng";
            } else
            if (parseInt(document.getElementById("ltn11a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Lo???n th???n ng???n";
            } else {
                document.getElementById("kc21").innerHTML = "Kh??ng lo???n th???n";
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

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Kh??m Ch???n ??o??n</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Ch???n ??o??n</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">T??m th???n ph??n li???t</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">D???ng ph??n li???t</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="contact" aria-selected="false">Lo???n th???n do b???nh c?? th???</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contact" aria-selected="false">Lo???n th???n do ch???t</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="contact" aria-selected="false">Lo???n th???n ng???n</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="contact" aria-selected="false">R???i lo???n hoang t?????ng</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('loan-than.update', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Th??ng tin
                        <!-- <hr width="10%"> -->
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
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Tri???u ch???ng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!----------Collum-1------------>
                <div class="row ml-1">
                    <div class="col-md-3">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="hoangtuongbihai" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'hoangtuongbihai') !== false)
                            checked
                            @endif>
                            <label for="">Hoang t?????ng b??? h???i</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="hoangtuongtucao" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'hoangtuongtucao') !== false)
                            checked
                            @endif>
                            <label for="">Hoang t?????ng t??? cao</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="hoangtuongvotu" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'hoangtuongvotu') !== false)
                            checked
                            @endif>
                            <label for="">Hoang t?????ng h?? v??</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="hoangtuongkiquai" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'hoangtuongkiquai') !== false)
                            checked
                            @endif>
                            <label for="">Hoang t?????ng k?? qu??i</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-2">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="aogiac" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'aogiac') !== false)
                            checked
                            @endif>
                            <label for="">???o gi??c</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="amtinh" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'amtinh') !== false)
                            checked
                            @endif>
                            <label for="">??m t??nh</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="quanhelt" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'quanhelt') !== false)
                            checked
                            @endif>
                            <label for="">Quan h???</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="lamvieclt" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'lamvieclt') !== false)
                            checked
                            @endif>
                            <label for="">L??m vi???c</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="tramcamuuthe" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'tramcamuuthe') !== false)
                            checked
                            @endif>
                            <label for="">Tr???m c???m ??u th???</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="mesanglt" onchange="chkChange('22');" @if (strpos($model->symptom[0], 'mesanglt') !== false)
                            checked
                            @endif>
                            <label for="">M?? s???ng</label>
                        </div>

                        <div class=" form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="kolienquanlt" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'kolienquanlt') !== false)
                            checked
                            @endif>
                            <label for="">Kh??ng li??n quan</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-4">
                        <div class=" form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="cobenhcothelt" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'cobenhcothelt') !== false)
                            checked
                            @endif>
                            <label for="">C?? b???nh c?? th??? (l??m s??ng, XN l??m s??ng)</label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="codungthuocdieutribenhlt" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'codungthuocdieutribenhlt') !== false)
                            checked
                            @endif>
                            <label for="">C?? d??ng thu???c ??i???u tr??? b???nh, thu???c g??y nghi???n</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Lo???n th???n :</label>
                            <input class="form-control-sm" placeholder="T??nh theo ng??y" name="time_sym" value="{{$model->time_sym}}" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Ch???n ??o??n: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Tr??? l???i </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection