@extends('layouts.main')
@section('content')
<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{asset('js/multi.js')}}"></script>
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
            document.getElementById('tc14b').innerHTML = (n == 4 ? "RL ho???ng lo???n" : "Kh??ng RL ho???ng lo???n");
        }

        function recalcTCB() {
            document.getElementById("tcb01a").innerHTML = kc[3];
            document.getElementById('tcb01b').innerHTML = (kc[3] == 1 ? 1 : 0);
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11] + kc[12] + kc[13] + kc[14] + kc[15] + kc[16];
            document.getElementById("tcb02a").innerHTML = n;
            document.getElementById('tcb02b').innerHTML = (n >= 4 ? 1 : 0);
            n = parseInt(document.getElementById('tcb01b').innerHTML) + parseInt(document.getElementById('tcb02b').innerHTML);
            document.getElementById('tcb03a').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById('tcb03b').innerHTML = (n == 2 ? "C??n ho???ng lo???n" : "Kh??ng c??n ho???ng lo???n");

        }



        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL ho???ng lo???n";
            } else
            if (parseInt(document.getElementById("tcb03a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "C??n ho???ng lo???n";
            } else {
                document.getElementById("kc21").innerHTML = "Kh??ng ho???ng lo???n";
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
            <h3>Kh??m ch???n ??o??n</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Ch???n ??o??n ho???ng lo???n</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">R???i lo???n ho???ng lo???n</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="home" aria-selected="true">C??n ho???ng lo???n</button>
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
                    <h5>Th??ng tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">H??? v?? t??n : </label>
                            <input type="text" name="cust_name" class="form-control-sm" placeholder="??i???n h??? t??n..." id="kc01">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gi???i t??nh : </label>
                            <input type="radio" class="form-input" name="cust_gender" value="Nam" checked="1" id="kc02"> Nam
                            <input type="radio" class="form-input" name="cust_gender" value="N???" id="kc02"> N???
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">N??m sinh : </label>
                            <input type="text" name="cust_dob" class="form-control-sm" placeholder="N??m sinh..." id="kc02">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">S??T : </label>
                            <input type="number" name="phone" placeholder="S??? ??i???n tho???i..." class="form-control-sm" id="kc03">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" name="cust_email" placeholder="??i???n email..." class="form-control-sm" id="kc03">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">?????a ch??? : </label>
                            <input type="text" placeholder="?????a ch???..." name="cust_address" class="form-control-sm" id="kc03">
                        </div>
                    </div>
                </div>
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Tri???u ch???ng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <div class="row ml-5">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="conhoangloan" onchange="chkChange('04');">
                            <label for="">C??n ho???ng lo???n</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="timdaphoihop" onchange="chkChange('05');">
                            <label for="">Tim ?????p h???i h???p</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="domohoi" onchange="chkChange('06');">
                            <label for="">????? m??? h??i</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="runchantay" onchange="chkChange('07');">
                            <label for="">Run ch??n tay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="khothohl" onchange="chkChange('08');">
                            <label for="">Kh?? th???</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">

                        <div class="form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="somatkiemsoathl" onchange="chkChange('16');">
                            <label for="">S??? m???t ki???m so??t</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="sochethl" onchange="chkChange('17');">
                            <label for="">S??? ch???t</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="sinhhoathl" onchange="chkChange('15');">
                            <label for="">Sinh ho???t</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="nghetthohl" onchange="chkChange('09');">
                            <label for="">Ngh???t th???</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="daunguchl" onchange="chkChange('10');">
                            <label for="">??au ng???c</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc18" type="checkbox" name="symptom[]" value="bibenh1thang" onchange="chkChange('18');">
                            <label for="">B??? b???nh 1 th??ng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="lolanghl" onchange="chkChange('19');">
                            <label for="">Lo l???ng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="roiloanhvi" onchange="chkChange('22');">
                            <label for="">R???i lo???n h??nh vi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc23" type="checkbox" name="symptom[]" value="dobenhcothehl" onchange="chkChange('23');">
                            <label for="">Do b???nh c?? th???</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc24" type="checkbox" name="symptom[]" value="dochathl" onchange="chkChange('24');">
                            <label for="">Do ch???t</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="daubungbuonnon" onchange="chkChange('11');">
                            <label for="">??au b???ng, bu???n n??n</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="chongmatngatxiu" onchange="chkChange('12');">
                            <label for="">Ch??ng m???t ng???t x???u</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="camgiacnonglanh" onchange="chkChange('13');">
                            <label for="">C???m gi??c n??ng, l???nh</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="techantayhl" onchange="chkChange('14');">
                            <label for="">T??, kim ch??m tay ch??n</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc25" type="checkbox" name="symptom[]" value="doroiloantamthankhachl" onchange="chkChange('25');">
                            <label for="">Do r???i lo???n t??m th???n kh??c</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Ch???n ??o??n: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1"></textarea>
                        </div>
                    </div>
                </div>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3>R???i lo???n ho???ng lo???n</h3>
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
                        <td>C??n ho???ng lo???n</td>
                        <td id="tc02a">&nbsp;</td>
                        <td id="tc02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng </td>
                        <td id="tc03a">&nbsp;</td>
                        <td id="tc03b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A</b></td>
                        <td>&nbsp;</td>
                        <td id="tc04">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Th???i gian b???nh 1 th??ng</td>
                        <td id="tc05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo l???ng</td>
                        <td id="tc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>EL h??nh vi</td>
                        <td id="tc06b">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh ho???t</td>
                        <td id="tc07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n B</b></td>
                        <td id="tc08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>B???nh c?? th???</td>
                        <td id="tc09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? d???ng ch???t</td>
                        <td id="tc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n C</b></td>
                        <td>&nbsp;</td>
                        <td id="tc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo???n th???n kh??c</td>
                        <td id="tc12">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n D</b></td>
                        <td>&nbsp;</td>
                        <td id="tc13">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ch???n ??o??n</td>
                        <td id="tc14a">&nbsp;</td>
                        <td id="tc14b" title="IF(tc14a=1;'Tr???m c???m';'Kh??ng tr???m c???m')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>C??n ho???ng lo???n</h3>
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
                        <td>C??n ho???ng lo???n</td>
                        <td id="tcb01a">&nbsp;</td>
                        <td id="tcb01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>S??? tri???u ch???ng </td>
                        <td id="tcb02a">&nbsp;</td>
                        <td id="tcb02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Ti??u chu???n A</b></td>
                        <td id="tcb03a">&nbsp;</td>
                        <td id="tcb03b">&nbsp;</td>
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