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

    <!---------------Check---------------->
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám Chẩn Đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Kết quả chẩn đoán hoảng loạn</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('hoang-loan.update', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                <!----------Collum-1------------>
                <div class="row ml-5">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="conhoangloan" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'conhoangloan') !== false)
                            checked
                            @endif>
                            <label for="">Cơn hoảng loạn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="timdaphoihop" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'timdaphoihop') !== false)
                            checked
                            @endif>
                            <label for="">Tim đập hồi hộp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="domohoi" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'domohoi') !== false)
                            checked
                            @endif>
                            <label for="">Đổ mồ hôi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="runchantay" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'runchantay') !== false)
                            checked
                            @endif>
                            <label for="">Run chân tay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="khothohl" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'khothohl') !== false)
                            checked
                            @endif>
                            <label for="">Khó thở</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">

                        <div class="form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="somatkiemsoathl" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'somatkiemsoathl') !== false)
                            checked
                            @endif>
                            <label for="">Sợ mất kiểm soát</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc17" type="checkbox" name="symptom[]" value="sochethl" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'sochethl') !== false)
                            checked
                            @endif>
                            <label for="">Sợ chết</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="sinhhoathl" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'sinhhoathl') !== false)
                            checked
                            @endif>
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="nghetthohl" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'nghetthohl') !== false)
                            checked
                            @endif>
                            <label for="">Nghẹt thở</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="daunguchl" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'daunguchl') !== false)
                            checked
                            @endif>
                            <label for="">Đau ngực</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc18" type="checkbox" name="symptom[]" value="bibenh1thang" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'bibenh1thang') !== false)
                            checked
                            @endif>
                            <label for="">Bị bệnh 1 tháng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="lolanghl" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'lolanghl') !== false)
                            checked
                            @endif>
                            <label for="">Lo lắng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="roiloanhvi" onchange="chkChange('22');" @if (strpos($model->symptom[0], 'roiloanhvi') !== false)
                            checked
                            @endif>
                            <label for="">Rối loạn hành vi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc23" type="checkbox" name="symptom[]" value="dobenhcothehl" onchange="chkChange('23');" @if (strpos($model->symptom[0], 'dobenhcothehl') !== false)
                            checked
                            @endif>
                            <label for="">Do bệnh cơ thể</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc24" type="checkbox" name="symptom[]" value="dochathl" onchange="chkChange('24');" @if (strpos($model->symptom[0], 'dochathl') !== false)
                            checked
                            @endif>
                            <label for="">Do chất</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="daubungbuonnon" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'daubungbuonnon') !== false)
                            checked
                            @endif>
                            <label for="">Đau bụng, buồn nôn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="chongmatngatxiu" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'chongmatngatxiu') !== false)
                            checked
                            @endif>
                            <label for="">Chóng mặt ngất xỉu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="camgiacnonglanh" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'camgiacnonglanh') !== false)
                            checked
                            @endif>
                            <label for="">Cảm giác nóng, lạnh</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="techantayhl" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'techantayhl') !== false)
                            checked
                            @endif>
                            <label for="">Tê, kim châm tay chân</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kc25" type="checkbox" name="symptom[]" value="doroiloantamthankhachl" onchange="chkChange('25');" @if (strpos($model->symptom[0], 'doroiloantamthankhachl') !== false)
                            checked
                            @endif >
                            <label for="">Do rối loạn tâm thần khác</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Trở lại </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection