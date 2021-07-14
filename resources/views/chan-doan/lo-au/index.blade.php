@extends('layouts.main')
@section('content')

<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[19];
            document.getElementById('tc01b').innerHTML = (kc[19] >= 180 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[3];
            document.getElementById('tc02b').innerHTML = (kc[3] == 1 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc02b').innerHTML);
            document.getElementById('tc03a').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById('tc04').innerHTML = kc[4];
            document.getElementById('tc05').innerHTML = (kc[4] == 0 ? 0 : 1);
            var n = kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById('tc06').innerHTML = n;
            document.getElementById('tc07').innerHTML = (n >= 3 ? 1 : 0);
            document.getElementById('tc08').innerHTML = kc[12] + kc[13];
            document.getElementById('tc09').innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            document.getElementById('tc10').innerHTML = kc[14];
            document.getElementById('tc11').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('tc12').innerHTML = (n == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tc03a').innerHTML) + parseInt(document.getElementById('tc05').innerHTML) + parseInt(document.getElementById('tc07').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc12').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 5 ? 1 : 0);

            document.getElementById('tc14b').innerHTML = (n == 5 ? "Lo âu" : "K lo âu");
        }

        function recalcTCB() {
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById("tcb01").innerHTML = n;
            document.getElementById("tcb02").innerHTML = (n >= 4 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[14];
            document.getElementById("tcb05").innerHTML = (kc[14] == 1 ? 1 : 0);
            document.getElementById("tcb06").innerHTML = kc[11];
            document.getElementById("tcb07").innerHTML = (kc[11] == 0 ? 1 : 0);

            document.getElementById("tcb08").innerHTML = kc[21];
            document.getElementById("tcb09").innerHTML = (kc[21] == 0 ? 1 : 0);
            document.getElementById("tcb10").innerHTML = kc[12] + kc[13];

            document.getElementById("tcb11").innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tcb02").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML) + parseInt(document.getElementById("tcb11").innerHTML);
            n = n == 5 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Lo âu thực thể" : "Không LA thực thể");
        }

        function recalcTCC() {
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById("tcc01").innerHTML = n;
            document.getElementById("tcc03").innerHTML = (n >= 4 ? 1 : 0);
            document.getElementById("tcc04").innerHTML = kc[15];
            document.getElementById("tcc05").innerHTML = (kc[15] == 1 ? 1 : 0);

            document.getElementById("tcc06").innerHTML = kc[11];;
            document.getElementById("tcc07").innerHTML = (kc[11] == 0 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[21];
            document.getElementById("tcc09").innerHTML = (kc[21] == 0 ? 1 : 0);
            document.getElementById("tcc10").innerHTML = kc[12] + kc[13];
            document.getElementById("tcc11").innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tcc03").innerHTML) + parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 5 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "LA do chất" : "Không LA do chất");
        }

        function recalcRLT() {
            document.getElementById("rlt01").innerHTML = kc[18];
            document.getElementById("rlt02").innerHTML = (kc[18] == 1 ? 1 : 0);
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById("rlt03").innerHTML = (n >= 4 ? 1 : 0);
            document.getElementById("rlt05").innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("rlt03").innerHTML) + parseInt(document.getElementById("rlt05").innerHTML);
            document.getElementById("rlt06").innerHTML = (n == 2 ? 1 : 0);

            document.getElementById("rlt07").innerHTML = kc[11];
            document.getElementById("rlt08").innerHTML = (kc[11] == 0 ? 1 : 0);
            document.getElementById("rlt09").innerHTML = kc[22];
            document.getElementById("rlt10").innerHTML = (kc[22] == 0 ? 1 : 0);
            document.getElementById("rlt11").innerHTML = kc[23];
            document.getElementById("rlt12").innerHTML = (kc[23] == 0 ? 0 : 1);
            n = (parseInt(document.getElementById("rlt02").innerHTML) + parseInt(document.getElementById("rlt06").innerHTML) + parseInt(document.getElementById("rlt08").innerHTML) + parseInt(document.getElementById("rlt10").innerHTML) + parseInt(document.getElementById("rlt12").innerHTML)) == 5 ? 1 : 0;
            document.getElementById("rlt13a").innerHTML = n;
            document.getElementById("rlt13b").innerHTML = (n == 1 ? "RL thích nghi voi LA" : "Không RLTN với LA");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "LA thực thể";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "LA do chất";
            } else
            if (parseInt(document.getElementById("rlt13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL thích nghi LA";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "LA lan tỏa";
            } else {
                document.getElementById("kc21").innerHTML = "Không lo âu";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
            recalcRLT();
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

    <!---------------Check---------------->
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám Chẩn Đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Kết quả chấn đoán lo âu</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('lo-au.update', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="row ml-1">
                    <!----------Collum-1------------>
                    <div class="col-md-2 ml-1">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="loauquamuc" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'loauquamuc') !== false)
                            checked
                            @endif>
                            <label for="">Lo âu quá mức</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="bonchonla" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'bonchonla') !== false)
                            checked
                            @endif>
                            <label for="">Bồn chồn</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="debimetla" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'debimetla') !== false)
                            checked
                            @endif>
                            <label for="">Dễ bị mệt</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-2 ml-4">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="cangthangla" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'cangthangla') !== false)
                            checked
                            @endif>
                            <label for="">Căng thẳng</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="quanhela" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'quanhela') !== false)
                            checked
                            @endif>
                            <label for="">Quan hệ</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="lamviecla" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'lamviecla') !== false)
                            checked
                            @endif>
                            <label for="">Làm việc</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2 ml-4">

                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="cobenhcothela" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'cobenhcothela') !== false)
                            checked
                            @endif>
                            <label for="">Có bệnh cơ thể</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="codungthuocla" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'codungthuocla') !== false)
                            checked
                            @endif>
                            <label for="">Có dùng thuốc</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="khochiula" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'khochiula') !== false)
                            checked
                            @endif>
                            <label for="">Khó chịu</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-2 ml-4">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="cochuyenbuonla" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'cochuyenbuonla') !== false)
                            checked
                            @endif>
                            <label for="">Có chuyện buồn</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="mesangla" onchange="chkChange('22');" @if (strpos($model->symptom[0], 'mesangla') !== false)
                            checked
                            @endif>
                            <label for="">Mê sảng</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc24" type="checkbox" name="symptom[]" value="dientienla" onchange="chkChange('24');" @if (strpos($model->symptom[0], 'dientienla') !== false)
                            checked
                            @endif>
                            <label for="">Diễn tiến</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc23" type="checkbox" name="symptom[]" value="cotangla" onchange="chkChange('23');" @if (strpos($model->symptom[0], 'cotangla') !== false)
                            checked
                            @endif>
                            <label for="">Có tang</label>
                        </div>
                    </div>
                    <!---------Collum-5 ------------>
                    <div class="col-md-3 ml-4">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="loaukssla" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'loaukssla') !== false)
                            checked
                            @endif>
                            <label for="">Lo âu không kiểm soát</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="roiloanttkhacla" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'roiloanttkhacla') !== false)
                            checked
                            @endif>
                            <label for="">Rối loạn tâm thần khác</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="roiloangiacngula" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'roiloangiacngula') !== false)
                            checked
                            @endif>
                            <label for="">Rối loạn giấc ngủ</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="kotaptrungla" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'kotaptrungla') !== false)
                            checked
                            @endif>
                            <label for="">Không tập trung</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Thời gian cơn :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" value="{{$model->time_sym}}" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                        </div>
                    </div>
                    <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Trở lại </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection