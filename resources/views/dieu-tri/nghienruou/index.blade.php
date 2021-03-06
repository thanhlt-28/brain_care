@extends('layouts.main')
@section('content')
<div class="container-wraper">

    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[3];
            document.getElementById("tc01b").innerHTML = (kc[3] == 1 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[4];
            document.getElementById('tc03a').innerHTML = kc[5];
            document.getElementById('tc04').innerHTML = kc[6];
            document.getElementById('tc05').innerHTML = kc[7];
            document.getElementById('tc06').innerHTML = kc[8];
            document.getElementById('tc07').innerHTML = kc[9];
            document.getElementById('tc08').innerHTML = kc[10];
            document.getElementById('tc09').innerHTML = kc[11];
            document.getElementById('tc10a').innerHTML = kc[12];
            document.getElementById('tc10b').innerHTML = kc[13];

            n = kc[12] + kc[13] >= 1 ? 1 : 0;
            document.getElementById("tc11").innerHTML = n;
            document.getElementById('tc12a').innerHTML = kc[14];
            document.getElementById('tc12b').innerHTML = kc[15];
            n = kc[14] + kc[15] >= 1 ? 1 : 0;
            document.getElementById("tc13").innerHTML = n;
            n = parseInt(document.getElementById('tc02a').innerHTML) + parseInt(document.getElementById('tc03a').innerHTML) + parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc05').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc07').innerHTML) + parseInt(document.getElementById('tc08').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc15').innerHTML = (n >= 2 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc15').innerHTML);
            document.getElementById('tc14a').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 2 ? "U???ng r?????u c?? h???i" : "K u???ng r?????u c?? h???i");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "U???ng r?????u c?? h???i";
            } else {
                document.getElementById("kc21").innerHTML = "Kh??ng u???ng r?????u c?? h???i";
            }
        }

        function recalc() {
            recalcTC();
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
            <h3>Kh??m theo d??i</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo d??i nghi???n r?????u</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('nghienruou.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Th??ng tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">H??? v?? t??n : </label>
                            <input type="text" value="{{$model->treat_name}}" name="treat_name" class="form-control-sm" placeholder="??i???n h??? t??n...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gi???i t??nh : </label>
                            <input type="text" class="form-control-sm" value="{{$model->treat_gender}}" name="treat_gender" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">N??m sinh : </label>
                            <input type="text" value="{{$model->treat_dob}}" name="treat_dob" class="form-control-sm" placeholder="N??m sinh...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">S??T : </label>
                            <input type="number" value="{{$model->treat_phone}}" name="treat_phone" placeholder="S??? ??i???n tho???i..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" value="{{$model->treat_email}}" name="treat_email" placeholder="??i???n email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">?????a ch??? : </label>
                            <input type="text" placeholder="?????a ch???..." value="{{$model->treat_address}}" name="treat_address" class="form-control-sm">
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <h5>Tri???u ch???ng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!--------Form Checkbox--------->
                <div class="row ml-1">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="nr" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Nghi???n r?????u</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd07" type="checkbox" name="symptom[]" value="unr" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'unr') !== false)
                            checked
                            @endif>
                            <label for="">U???ng nhi???u r?????u</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd08" type="checkbox" name="symptom[]" value="cktc" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'cktc') !== false)
                            checked
                            @endif>
                            <label for="cktc">Cai kh??ng th??nh c??ng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd15" type="checkbox" name="symptom[]" value="tur" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'tur') !== false)
                            checked
                            @endif>
                            <label for="">Th??m u???ng r?????u</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd16" type="checkbox" name="symptom[]" value="ahsh" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'ahsh') !== false)
                            checked
                            @endif>
                            <label for="">???nh h?????ng sinh ho???t</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="hvnh" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'hvnh') !== false)
                            checked
                            @endif>
                            <label for="">H??nh vi nguy hi???m</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="tc" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'tc') !== false)
                            checked
                            @endif>
                            <label for="">T??nh c???m</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="lt" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'lt') !== false)
                            checked
                            @endif>
                            <label for="">Lo???n th???n</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="la" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'la') !== false)
                            checked
                            @endif>
                            <label for="">Lo ??u</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="hl" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'hl') !== false)
                            checked
                            @endif>
                            <label for="">Ho???ng lo???n</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd09" type="checkbox" name="symptom[]" value="hathap" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hathap') !== false)
                            checked
                            @endif>
                            <label for="">Huy???t ??p th???p</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd10" type="checkbox" name="symptom[]" value="hacao" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'hacao') !== false)
                            checked
                            @endif>
                            <label for="">Huy???t ??p cao</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tm" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tm') !== false)
                            checked
                            @endif>
                            <label for="">Tim m???ch</label>
                        </div>
                    </div>

                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtd" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtd') !== false)
                            checked
                            @endif>
                            <label for="">????i th??o ???????ng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="td" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'td') !== false)
                            checked
                            @endif>
                            <label for="">T??nh d???c</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" type="checkbox" name="symptom[]" value="thai" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'thai') !== false)
                            checked
                            @endif>
                            <label for="">Thai</label>
                        </div>
                    </div>
                </div>
                <div class="row ml-1">
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="" class="form-label-dt">S??? tri???u ch???ng : </label>
                            <input type="text" name="sym_time" value="{{$model->sym_time}}" class="form-control-smt" id="kd21" onblur="txtBlur('21');">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thuy??n gi???m</label>
                            <input style="color: blue; font-weight:500" class="form-control-smt" name="result" value="{{$model->result}}" id="kd22" type="text" onblur="txtBlur('22');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thu???c CTC</label>
                            <input class="form-control-smt" name="medicine_once" value="{{$model->medicine_once}}" id="kd23" type="text" onblur="txtBlur('23');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thu???c CLT</label>
                            <input class="form-control-smt" name="medicine_twice" value="{{$model->medicine_twice}}" id="kd24" type="text" onblur="txtBlur('24');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label-dt" for="">Thu???c CCG</label>
                            <input class="form-control-smt" name="medicine_three" value="{{$model->medicine_three}}" id="kd25" type="text" onblur="txtBlur('25');" width="10">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Tr??? l???i</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection