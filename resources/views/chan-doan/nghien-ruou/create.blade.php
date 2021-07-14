@extends('layouts.main')
@section('content')
<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{asset('js/multi.js')}}"></script>
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
            document.getElementById('tc14b').innerHTML = (n == 2 ? "Uống rượu có hại" : "K uống rượu có hại");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Uống rượu có hại";
            } else {
                document.getElementById("kc21").innerHTML = "Không uống rượu có hại";
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

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Chẩn đoán mới</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="contact" aria-selected="false">Uống rượu có hại</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="contact" aria-selected="false">Uống rượu có hại (kết quả)</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane ml-5 fade show active" id="tab0" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <form class="mt-3" action="{{route('nghien-ruou.store')}}" method="POST" enctype="multipart/form-data">
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
                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!----------Collum-1------------>
                <div class="row ml-1">
                    <div class="col-md-4">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc04" type="checkbox" value="cvdvrt12thang" onchange="chkChange('04');">
                            <label for="">Có vấn đề về rượu trong 12 tháng qua</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc05" type="checkbox" value="unrhld" onchange="chkChange('05');">
                            <label for="">Uống nhiều rượu hoặc lâu dài</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc06" type="checkbox" value="ccgcnktc" onchange="chkChange('06');">
                            <label for="">Có cố gắng cai, nhưng không thành công</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc07" type="checkbox" value="ttgmrhur" onchange="chkChange('07');">
                            <label for="">Tốn thời gian mua rượu hoặc uống rượu</label>
                        </div>

                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-4">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc09" type="checkbox" value="ahvlht" onchange="chkChange('09');">
                            <label for="">Ảnh hưởng việc làm, học tập</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc10" type="checkbox" value="ahqhxh" onchange="chkChange('10');">
                            <label for="">Ảnh hưởng quan hệ xã hội</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc11" type="checkbox" value="ahnn" onchange="chkChange('11');">
                            <label for="">Ảnh hưởng nghề nghiệp</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc12" type="checkbox" value="gnhntngt" onchange="chkChange('12');">
                            <label for="">Gây nguy hiểm như tai nạn giao thông</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc13" type="checkbox" value="unnh" onchange="chkChange('13');">
                            <label for="">Uống ngày nhiều hơn</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-4">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc08" type="checkbox" value="ctur" onchange="chkChange('08');">
                            <label for="">Cơn thèm uống rượu</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc14" type="checkbox" value="uitkchqnbd" onchange="chkChange('14');">
                            <label for="">Uống ít rượu, không còn hiệu quả như ban đầu</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc15" type="checkbox" value="ctccr" onchange="chkChange('15');">
                            <label for="">Có triệu chứng cai rượu</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" id="kc16" type="checkbox" value="msclgtcc" onchange="chkChange('16');">
                            <label for="">Rượu, một số chất làm giảm triệu chứng cai</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="time_sym">Thời gian cơn <br> (tính theo ngày)</label>
                            <input class="form-control-sm" name="time_sym" id="kc20" onblur="txtBlur('20');" width="10">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="margin-top:20px; color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1"></textarea>
                            <!-- <h5>Chẩn đoán: <span id="kc21" style="color:blue;"></span></h5> -->
                        </div>
                    </div>
                </div>
        </div>
        <div class="tab-pane ml-5 fade" id="tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h4>Uống rượu có hại</h4>
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
                        <td>Trong 12 tháng qua</td>
                        <td id="tc01a">&nbsp;</td>
                        <td id="tc01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Uống nhiều rượu</td>
                        <td id="tc02a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Cai, không thành công </td>
                        <td id="tc03a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mất thời gian mua, uống rượu</td>
                        <td id="tc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Cơn thèm rượu</td>
                        <td id="tc05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảnh hưởng việc làm học tập</td>
                        <td id="tc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Ảnh hưởng quan hệ xã hội</td>
                        <td id="tc07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Nghề nghiệp, xã hội</td>
                        <td id="tc08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Gây nguy hiểm</td>
                        <td id="tc09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane ml-5 fade" id="tab2" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h4>Uống rượu có hại</h4>
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
                        <td>Lên liều</td>
                        <td id="tc10a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Kém hiệu quả</td>
                        <td id="tc10b">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Dung nạp</td>
                        <td>&nbsp;</td>
                        <td id="tc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Triệu chứng cai</td>
                        <td id="tc12a">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Một số chất làm giảm Tc cai></td>
                        <td id="tc12b">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Tình trạng cai</td>
                        <td>&nbsp;</td>
                        <td id="tc13">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Triệu chứng</td>
                        <td>&nbsp;</td>
                        <td id="tc15">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tc14a">&nbsp;</td>
                        <td id="tc14b" title="IF(tc14a=1;'Uống rượu có hại';'K uống rượu có hại')">&nbsp;</td>
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