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


    <!---------------Check---------------->
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám Chẩn Đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Kết quả chẩn đoán hưng cảm</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp

        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('hung-cam.update', $model->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="row ml-5">
                    <!-- ---Collum-1 -->
                    <div class="col-md-3">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="vuivehc" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'vuivehc') !== false)
                            checked
                            @endif>
                            <label for="">Vui vẻ</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="debikichthichhc" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'debikichthichhc') !== false)
                            checked
                            @endif>
                            <label for="">Dễ bị kích thích</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="ytuongtucaohc" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'ytuongtucaohc') !== false)
                            checked
                            @endif>
                            <label for="">Ý tưởng tự cao</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-3">

                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="dangtrihc" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'dangtrihc') !== false)
                            checked
                            @endif>
                            <label for="">Đãng trí</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="sinhhoathc" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'sinhhoathc') !== false)
                            checked
                            @endif>
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="hanhvinguyhienhc" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'hanhvinguyhienhc') !== false)
                            checked
                            @endif>
                            <label for="">Hành vi nguy hiểm</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="noinhieuhc" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'noinhieuhc') !== false)
                            checked
                            @endif>
                            <label for="">Nói nhiều</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="suynghinhieuhc" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'suynghinhieuhc') !== false)
                            checked
                            @endif>
                            <label for="">Suy nghĩ nhiều</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="giamnhucaunguhc" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'giamnhucaunguhc') !== false)
                            checked
                            @endif>
                            <label for="">Giảm nhu cầu ngủ</label>
                        </div>
                    </div>
                    <!---------Collum-4------------>
                    <div class="col-md-3">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="giatanghdhc" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'giatanghdhc') !== false)
                            checked
                            @endif>
                            <label for="">Gia tăng hoạt động</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="benhcothesdc" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'benhcothesdc') !== false)
                            checked
                            @endif>
                            <label for="">Bệnh cơ thể, sử dụng chất</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Thời gian cơn :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" value="{{$model->time_sym}}" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
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