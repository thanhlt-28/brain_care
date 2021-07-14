@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <script type="text/javascript">
        var kd = ["", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        function recalcHS() {

        }

        function recalc() {
            recalcHS();
        }

        function xulythuoc() {
            document.getElementById('0111').innerHTML = (kd[01] == 0 ? 0 : 1);
            document.getElementById('kb1').innerHTML = (kd[01] == 0 ? 0 : 1);
            document.getElementById('0112').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('kb2').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0113').innerHTML = (kd[03] == 0 ? 0 : 1);
            document.getElementById('kb3').innerHTML = (kd[03] == 0 ? 0 : 1);
            var k0111 = parseInt(document.getElementById('0111').innerHTML);
            var k0112 = parseInt(document.getElementById('0112').innerHTML);
            var k0113 = parseInt(document.getElementById('0113').innerHTML);
            document.getElementById('0116').innerHTML = Math.max(k0111, k0112, k0113);

            document.getElementById('0211').innerHTML = (kd[01] == 0 ? 0 : 1);
            document.getElementById('0212').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0213').innerHTML = (kd[03] == 0 ? 0 : 1);
            var k0211 = parseInt(document.getElementById('0211').innerHTML);
            var k0212 = parseInt(document.getElementById('0212').innerHTML);
            var k0213 = parseInt(document.getElementById('0213').innerHTML);
            document.getElementById('0216').innerHTML = Math.max(k0211, k0212, k0213);

            document.getElementById('0311').innerHTML = (kd[01] == 0 ? 0 : 3);
            document.getElementById('0312').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0313').innerHTML = (kd[03] == 0 ? 0 : 1);
            var k0311 = parseInt(document.getElementById('0311').innerHTML);
            var k0312 = parseInt(document.getElementById('0312').innerHTML);
            var k0313 = parseInt(document.getElementById('0313').innerHTML);
            document.getElementById('0316').innerHTML = Math.max(k0311, k0312, k0313);

            document.getElementById('0411').innerHTML = (kd[01] == 0 ? 0 : 3);
            document.getElementById('0412').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0413').innerHTML = (kd[03] == 0 ? 0 : 2);
            var k0411 = parseInt(document.getElementById('0411').innerHTML);
            var k0412 = parseInt(document.getElementById('0412').innerHTML);
            var k0413 = parseInt(document.getElementById('0413').innerHTML);
            document.getElementById('0416').innerHTML = Math.max(k0411, k0412, k0413);

            document.getElementById('0511').innerHTML = (kd[01] == 0 ? 0 : 3);
            document.getElementById('0512').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0513').innerHTML = (kd[03] == 0 ? 0 : 3);
            var k0511 = parseInt(document.getElementById('0511').innerHTML);
            var k0512 = parseInt(document.getElementById('0512').innerHTML);
            var k0513 = parseInt(document.getElementById('0513').innerHTML);
            document.getElementById('0516').innerHTML = Math.max(k0511, k0512, k0513);

            document.getElementById('0121').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('ct1').innerHTML = (kd[08] == 0 ? 0 : 1);
            document.getElementById('0122').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('ct2').innerHTML = (kd[09] == 0 ? 0 : 1);
            document.getElementById('0123').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('ct3').innerHTML = (kd[10] == 0 ? 0 : 1);
            document.getElementById('0124').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('ct4').innerHTML = (kd[11] == 0 ? 0 : 1);
            document.getElementById('0125').innerHTML = (kd[12] == 0 ? 0 : 4);
            document.getElementById('ct5').innerHTML = (kd[12] == 0 ? 0 : 1);

            var k0121 = parseInt(document.getElementById('0121').innerHTML);
            var k0122 = parseInt(document.getElementById('0122').innerHTML);
            var k0123 = parseInt(document.getElementById('0123').innerHTML);
            var k0124 = parseInt(document.getElementById('0124').innerHTML);
            var k0125 = parseInt(document.getElementById('0125').innerHTML);
            document.getElementById('0127').innerHTML = Math.max(k0121, k0122, k0123, k0124, k0125);

            document.getElementById('0221').innerHTML = (kd[08] == 0 ? 0 : 4);
            document.getElementById('0222').innerHTML = (kd[09] == 0 ? 0 : 4);
            document.getElementById('0223').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0224').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0225').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0221 = parseInt(document.getElementById('0221').innerHTML);
            var k0222 = parseInt(document.getElementById('0222').innerHTML);
            var k0223 = parseInt(document.getElementById('0223').innerHTML);
            var k0224 = parseInt(document.getElementById('0224').innerHTML);
            var k0225 = parseInt(document.getElementById('0225').innerHTML);
            document.getElementById('0227').innerHTML = Math.max(k0221, k0222, k0223, k0224, k0225);

            document.getElementById('0321').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0322').innerHTML = (kd[09] == 0 ? 0 : 5);
            document.getElementById('0323').innerHTML = (kd[10] == 0 ? 0 : 4);
            document.getElementById('0324').innerHTML = (kd[11] == 0 ? 0 : 4);
            document.getElementById('0325').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0321 = parseInt(document.getElementById('0321').innerHTML);
            var k0322 = parseInt(document.getElementById('0322').innerHTML);
            var k0323 = parseInt(document.getElementById('0323').innerHTML);
            var k0324 = parseInt(document.getElementById('0324').innerHTML);
            var k0325 = parseInt(document.getElementById('0325').innerHTML);
            document.getElementById('0327').innerHTML = Math.max(k0321, k0322, k0323, k0324, k0325);

            document.getElementById('0421').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0422').innerHTML = (kd[09] == 0 ? 0 : 4);
            document.getElementById('0423').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0424').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0425').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0421 = parseInt(document.getElementById('0421').innerHTML);
            var k0422 = parseInt(document.getElementById('0422').innerHTML);
            var k0423 = parseInt(document.getElementById('0423').innerHTML);
            var k0424 = parseInt(document.getElementById('0424').innerHTML);
            var k0425 = parseInt(document.getElementById('0425').innerHTML);
            document.getElementById('0427').innerHTML = Math.max(k0421, k0422, k0423, k0424, k0425);

            document.getElementById('0521').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0522').innerHTML = (kd[09] == 0 ? 0 : 4);
            document.getElementById('0523').innerHTML = (kd[10] == 0 ? 0 : 5);
            document.getElementById('0524').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0525').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0521 = parseInt(document.getElementById('0521').innerHTML);
            var k0522 = parseInt(document.getElementById('0522').innerHTML);
            var k0523 = parseInt(document.getElementById('0523').innerHTML);
            var k0524 = parseInt(document.getElementById('0524').innerHTML);
            var k0525 = parseInt(document.getElementById('0525').innerHTML);
            document.getElementById('0527').innerHTML = Math.max(k0521, k0522, k0523, k0524, k0525);


            document.getElementById('0131').innerHTML = (kd[16] == 0 ? 0 : 4);
            document.getElementById('sh1').innerHTML = (kd[16] == 0 ? 0 : 1);
            document.getElementById('0132').innerHTML = (kd[17] == 0 ? 0 : 5);
            document.getElementById('sh2').innerHTML = (kd[17] == 0 ? 0 : 1);
            var k0131 = parseInt(document.getElementById('0131').innerHTML);
            var k0132 = parseInt(document.getElementById('0132').innerHTML);
            document.getElementById('0135').innerHTML = Math.max(k0131, k0132);

            document.getElementById('0231').innerHTML = (kd[16] == 0 ? 0 : 4);
            document.getElementById('0232').innerHTML = (kd[17] == 0 ? 0 : 3);
            var k0231 = parseInt(document.getElementById('0231').innerHTML);
            var k0232 = parseInt(document.getElementById('0232').innerHTML);
            document.getElementById('0235').innerHTML = Math.max(k0231, k0232);

            document.getElementById('0331').innerHTML = (kd[16] == 0 ? 0 : 3);
            document.getElementById('0332').innerHTML = (kd[17] == 0 ? 0 : 5);
            var k0331 = parseInt(document.getElementById('0331').innerHTML);
            var k0332 = parseInt(document.getElementById('0332').innerHTML);
            document.getElementById('0335').innerHTML = Math.max(k0331, k0332);

            document.getElementById('0431').innerHTML = (kd[16] == 0 ? 0 : 3);
            document.getElementById('0432').innerHTML = (kd[17] == 0 ? 0 : 3);
            var k0431 = parseInt(document.getElementById('0431').innerHTML);
            var k0432 = parseInt(document.getElementById('0432').innerHTML);
            document.getElementById('0435').innerHTML = Math.max(k0431, k0432);

            document.getElementById('0531').innerHTML = (kd[16] == 0 ? 0 : 2);
            document.getElementById('0532').innerHTML = (kd[17] == 0 ? 0 : 3);
            var k0531 = parseInt(document.getElementById('0531').innerHTML);
            var k0532 = parseInt(document.getElementById('0532').innerHTML);
            document.getElementById('0535').innerHTML = Math.max(k0531, k0532);

            document.getElementById('x0116').innerHTML = document.getElementById('0116').innerHTML;
            document.getElementById('x0127').innerHTML = document.getElementById('0127').innerHTML;
            document.getElementById('x0135').innerHTML = document.getElementById('0135').innerHTML;
            var x0116 = parseInt(document.getElementById('0116').innerHTML);
            var x0127 = parseInt(document.getElementById('0127').innerHTML);
            var x0135 = parseInt(document.getElementById('0135').innerHTML);
            document.getElementById('x0141').innerHTML = Math.max(x0116, x0127, x0135);

            document.getElementById('x0216').innerHTML = document.getElementById('0216').innerHTML;
            document.getElementById('x0227').innerHTML = document.getElementById('0227').innerHTML;
            document.getElementById('x0235').innerHTML = document.getElementById('0235').innerHTML;
            var x0216 = parseInt(document.getElementById('0216').innerHTML);
            var x0227 = parseInt(document.getElementById('0227').innerHTML);
            var x0235 = parseInt(document.getElementById('0235').innerHTML);
            document.getElementById('x0241').innerHTML = Math.max(x0216, x0227, x0235);

            document.getElementById('x0316').innerHTML = document.getElementById('0316').innerHTML;
            document.getElementById('x0327').innerHTML = document.getElementById('0327').innerHTML;
            document.getElementById('x0335').innerHTML = document.getElementById('0335').innerHTML;
            var x0316 = parseInt(document.getElementById('0316').innerHTML);
            var x0327 = parseInt(document.getElementById('0327').innerHTML);
            var x0335 = parseInt(document.getElementById('0335').innerHTML);
            document.getElementById('x0341').innerHTML = Math.max(x0316, x0327, x0335);

            document.getElementById('x0416').innerHTML = document.getElementById('0416').innerHTML;
            document.getElementById('x0427').innerHTML = document.getElementById('0427').innerHTML;
            document.getElementById('x0435').innerHTML = document.getElementById('0435').innerHTML;
            var x0416 = parseInt(document.getElementById('0416').innerHTML);
            var x0427 = parseInt(document.getElementById('0427').innerHTML);
            var x0435 = parseInt(document.getElementById('0435').innerHTML);
            document.getElementById('x0441').innerHTML = Math.max(x0416, x0427, x0435);

            document.getElementById('x0516').innerHTML = document.getElementById('0516').innerHTML;
            document.getElementById('x0527').innerHTML = document.getElementById('0527').innerHTML;
            document.getElementById('x0535').innerHTML = document.getElementById('0535').innerHTML;
            var x0516 = parseInt(document.getElementById('0516').innerHTML);
            var x0527 = parseInt(document.getElementById('0527').innerHTML);
            var x0535 = parseInt(document.getElementById('0535').innerHTML);
            document.getElementById('x0541').innerHTML = Math.max(x0516, x0527, x0535);

            var n = kd[06] + kd[07] + kd[14];
            document.getElementById('kd21').value = kd[06] + kd[07] + kd[14]
            document.getElementById('kd21').value = n;
            if (n == 3) {
                document.getElementById('kd22').value = "Không thuyên giảm";
            } else {
                if (n == 0) {
                    document.getElementById('kd22').value = "Thuyên giảm";
                } else {
                    document.getElementById('kd22').value = "Thuyên giảm một phần";
                }
            }
            if (n == 3) {
                document.getElementById('kd23').value = 2;
            } else {
                if (n == 0) {
                    document.getElementById('kd23').value = 0;
                } else {
                    document.getElementById('kd23').value = 1;
                }
            }

        }

        function chkChange(chkid) {
            var n, chkobj = document.getElementById('kd' + chkid);
            kd[chkid - 1] = chkobj.checked ? 1 : 0;
            if (chkid > 21 && chkid < 28) recalcTDT(); //not recalcHS, recalcMT
            else recalc();
            xulythuoc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kd' + txtid);
            kd[txtid - 1] = txtobj.value;
            recalc();
        }
    </script>

    <!---/////------------check-----------/////------->
    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám theo dõi</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo dõi ám ảnh</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Lâm sàng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Bệnh cơ thể</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="contact1" aria-selected="false">Đặc điểm</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tabss" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contacts" aria-selected="false">Tổng hợp</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp

        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('amanh.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Thông tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="treat_name" class="form-label">Họ và tên : </label>
                            <input type="text" name="treat_name" class="form-control-sm" placeholder="Điền họ tên..." id="kc01">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Giới tính : </label>
                            <input type="radio" class="form-input" name="treat_gender" value="Nam" checked="1" id="kc02"> Nam
                            <input type="radio" class="form-input" name="treat_gender" value="Nữ" id="kc02"> Nữ
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">Năm sinh : </label>
                            <input type="text" name="treat_dob" class="form-control-sm" placeholder="Năm sinh..." id="kc02">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">SĐT : </label>
                            <input type="number" min="0" name="treat_phone" placeholder="Số điện thoại..." class="form-control-sm" id="kc03">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" name="treat_email" placeholder="Điền email..." class="form-control-sm" id="kc03">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ : </label>
                            <input type="text" placeholder="Địa chỉ..." name="treat_address" class="form-control-sm" id="kc03">
                        </div>
                    </div>
                </div>
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!----------checkbox------------>
                <div class="row ml-5">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" name="symptom[]" value="amanh" type="checkbox" onchange="chkChange('02');">
                            <label for="">Ám ảnh</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd07" name="symptom[]" value="sohai" type="checkbox" onchange="chkChange('07');">
                            <label for="">Sợ hãi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd08" name="symptom[]" value="tranhne" type="checkbox" onchange="chkChange('08');">
                            <label for="">Tránh né</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd15" name="symptom[]" value="sinhhoat" type="checkbox" onchange="chkChange('15');">
                            <label for="">Sinh hoạt</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" name="symptom[]" value="tcaa" type="checkbox" onchange="chkChange('03');">
                            <label for="">Tình cảm</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd10" name="symptom[]" value="tmaa" type="checkbox" onchange="chkChange('10');">
                            <label for="">Tim mạch</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd11" name="symptom[]" value="dongkinhaa" type="checkbox" onchange="chkChange('11');">
                            <label for="">Động kinh</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" name="symptom[]" value="thaiaa" type="checkbox" onchange="chkChange('18');">
                            <label for="">Thai</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" name="symptom[]" value="parkinson" type="checkbox" onchange="chkChange('13');">
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" name="symptom[]" value="tdaa" type="checkbox" onchange="chkChange('17');">
                            <label for="">Tình dục</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" name="symptom[]" value="dtdaa" type="checkbox" onchange="chkChange('12');">
                            <label for="">Đái tháo đường</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" name="symptom[]" value="hlaa" type="checkbox" onchange="chkChange('04');">
                            <label for="">Hoảng loạn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd09" name="symptom[]" value="hacaoaa" type="checkbox" onchange="chkChange('09');">
                            <label for="">Huyết áp cao</label>
                        </div>
                    </div>
                    <div class="row ml-5 mt-3">
                        <div class="col-md-4">
                            <div class="">
                                <label for="" class="form-label-dt">Số triệu chứng: </label>
                                <input type="text" name="sym_time" placeholder="Tính theo ngày" class="form-control-smt" id="kd21" onblur="txtBlur('21');">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <label class="form-label-dt" for="">Thuyên giảm</label>
                                <input class="form-control-smt" name="result" id="kd22" type="text" onblur="txtBlur('22');" width="10">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <label class="form-label-dt" for="">Thuốc CTC</label>
                                <input class="form-control-smt" name="medicine_once" id="kd23" type="text" onblur="txtBlur('23');" width="10">
                            </div>
                        </div>
                    </div>
                    <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary" type="submit"> Lưu lại</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3>Lâm sàng</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thuốc</th>
                        <th>Nhóm</th>
                        <th>Hoảng loạn</th>
                        <th>Ngủ ít</th>
                        <th>Tình cảm</th>
                        <th>Lo âu</th>
                        <th>Tình cảm</th>
                        <th>Lâm sàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Khám bệnh</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="kb1">0
                        <td id="kb2">0
                        <td id="kb3">0
                        <td id="kb4">0
                        <td id="kb5">0
                        <td id="kb5">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0111">0
                        <td id="0112">0
                        <td id="0113">0
                        <td id="0114">0</td>
                        <td id="0115">0
                        <td id="0116">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SNRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0211">0
                        <td id="0212">0
                        <td id="0213">0
                        <td id="0214">0</td>
                        <td id="0215">0
                        <td id="0216">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TCA</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0311">0
                        <td id="0312">0
                        <td id="0313">0
                        <td id="0314">0</td>
                        <td id="0315">0
                        <td id="0316">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mirtazapne</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0411">0
                        <td id="0412">0
                        <td id="0413">0
                        <td id="0414">0</td>
                        <td id="0415">0
                        <td id="0416">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0511">0
                        <td id="0512">0
                        <td id="0513">0
                        <td id="0514">0</td>
                        <td id="0515">0
                        <td id="0516">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Quetiapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0611">0
                        <td id="0612">0
                        <td id="0613">0
                        <td id="0614">0</td>
                        <td id="0615">0
                        <td id="0616">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0711">0
                        <td id="0712">0
                        <td id="0713">0
                        <td id="0714">0</td>
                        <td id="0715">0
                        <td id="0716">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="0811">0
                        <td id="0812">0
                        <td id="0813">0
                        <td id="0814">0</td>
                        <td id="0815">0
                        <td id="0816">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Bệnh cơ thể</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thuốc</th>
                        <th>Nhóm</th>
                        <th>Huyết áp thấp</th>
                        <th>Huyết áp cao</th>
                        <th>Tim mạch</th>
                        <th>Đái tháo đường</th>
                        <th>Parkinson</th>
                        <th>Bệnh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="ct1">0
                        <td id="ct2">0
                        <td id="ct3">0
                        <td id="ct4">0</td>
                        <td id="ct5">0</td>
                        <td id="ct5">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0121">0
                        <td id="0122">0
                        <td id="0123">0
                        <td id="0124">0
                        <td id="0125">0
                        <td id="0127">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SNRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0221">0
                        <td id="0222">0
                        <td id="0223">0
                        <td id="0224">0
                        <td id="0225">0
                        <td id="0227">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TCA</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0321">0
                        <td id="0322">0
                        <td id="0323">0
                        <td id="0324">0
                        <td id="0325">0
                        <td id="0327">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mirtazapine</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0421">0
                        <td id="0422">0
                        <td id="0423">0
                        <td id="0424">0
                        <td id="0425">0
                        <td id="0427">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0521">0
                        <td id="0522">0
                        <td id="0523">0
                        <td id="0524">0
                        <td id="0525">0
                        <td id="0527">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Quetiapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0621">0
                        <td id="0622">0
                        <td id="0623">0
                        <td id="0624">0
                        <td id="0625">0
                        <td id="0627">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0721">0
                        <td id="0722">0
                        <td id="0723">0
                        <td id="0724">0
                        <td id="0725">0
                        <td id="0727">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="0821">0
                        <td id="0822">0
                        <td id="0823">0
                        <td id="0824">0
                        <td id="0825">0
                        <td id="0827">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <h3>Đặc điểm</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thuốc</th>
                        <th>Nhóm</th>
                        <th>Tình dục</th>
                        <th>Thai</th>
                        <th>Sinh hoạt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="sh1">0
                        <td id="sh2">0</td>
                        <td id="">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0131">0
                        <td id="0132">0
                        <td id="0135">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SNRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0231">0
                        <td id="0232">0
                        <td id="0235">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TCA</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0331">0
                        <td id="0332">0
                        <td id="0335">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mirtazapine</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0431">0
                        <td id="0432">0
                        <td id="0435">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0531">0
                        <td id="0532">0
                        <td id="0535">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Quetiapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0631">0
                        <td id="0632">0
                        <td id="0635">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0731">0
                        <td id="0732">0
                        <td id="0735">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="0831">0
                        <td id="0832">0
                        <td id="0835">0</td>
                    </tr>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab4" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <h3>Tổng hợp</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Thuốc</th>
                    <th>Nhóm</th>
                    <th>Lâm sàng</th>
                    <th>Bệnh</th>
                    <th>Sinh hoạt</th>
                    <th>X nhóm</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Đ Trục</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="sh1">0
                        <td id="sh2">0
                        <td id="sh3">0</td>
                        <td id="">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0116">0
                        <td id="x0127">0
                        <td id="x0135">0</td>
                        <td id="x0141">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SNRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0216">0
                        <td id="x0227">0
                        <td id="x0235">0</td>
                        <td id="x0241">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TCA</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0316">0
                        <td id="x0327">0
                        <td id="x0335">0</td>
                        <td id="x0341">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mirtazapine</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0416">0
                        <td id="x0427">0
                        <td id="x0435">0</td>
                        <td id="x0441">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="x0516">0
                        <td id="x0527">0
                        <td id="x0535">0</td>
                        <td id="x0541">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Quetiapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="x0616">0
                        <td id="x0627">0
                        <td id="x0635">0</td>
                        <td id="x0641">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="x0716">0
                        <td id="x0727">0
                        <td id="x0735">0</td>
                        <td id="x0741">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="x0816">0
                        <td id="x0827">0
                        <td id="x0835">0</td>
                        <td id="x0841">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.formMultiple')
    </div>
</div>
@endsection