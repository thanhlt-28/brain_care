@extends('layouts.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc02a').innerHTML = kc[10];
            document.getElementById('tc03a').innerHTML = kc[12];
            document.getElementById('tc04').innerHTML = kc[11];
            document.getElementById('tc05').innerHTML = kc[15];
            document.getElementById('tc06').innerHTML = kc[16];
            document.getElementById('tc07').innerHTML = kc[17];
            document.getElementById('tc08').innerHTML = (kc[22] == 0 ? 1 : 0);
            n = kc[10] + kc[12] + kc[11] + kc[15] + kc[16] + kc[17] + kc[22];
            document.getElementById('tc14a').innerHTML = (n == 6 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 6 ? "AA sợ đặc hiệu" : "Không ám ảnh");
        }

        function recalcTCB() {
            document.getElementById("tcb01").innerHTML = kc[9];
            document.getElementById("tcb02").innerHTML = kc[14];
            document.getElementById("tcb03").innerHTML = kc[12];
            document.getElementById("tcb04").innerHTML = kc[11];
            document.getElementById("tcb05").innerHTML = kc[15];
            document.getElementById("tcb06").innerHTML = kc[16];
            document.getElementById("tcb07").innerHTML = kc[17];
            document.getElementById("tcb08").innerHTML = (kc[18] + kc[21] >= 1 ? 0 : 1);
            document.getElementById("tcb09").innerHTML = (kc[22] == 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcb01").innerHTML) + parseInt(document.getElementById("tcb02").innerHTML) + parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb04").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb06").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb08").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML);
            document.getElementById("tcb12a").innerHTML = (n == 9 ? 1 : 0);
            document.getElementById("tcb12b").innerHTML = (n == 9 ? "AA sợ xã hội" : "Không AA xa hoi");
        }

        function recalcTCC() {
            document.getElementById("tcc01").innerHTML = kc[4];
            document.getElementById("tcc02").innerHTML = kc[5];
            document.getElementById("tcc03").innerHTML = kc[6];
            document.getElementById("tcc04").innerHTML = kc[7];
            document.getElementById("tcc05").innerHTML = kc[8];
            n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8]
            document.getElementById("tcc06").innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[12];

            document.getElementById("tcc09").innerHTML = kc[11];

            document.getElementById("tcc10").innerHTML = kc[15];
            document.getElementById("tcc11").innerHTML = kc[16];
            document.getElementById("tcc13").innerHTML = kc[17];
            document.getElementById("tcc14").innerHTML = (kc[18] + kc[21] >= 1 ? 0 : 1);
            n = parseInt(document.getElementById("tcc06").innerHTML) + parseInt(document.getElementById("tcc08").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc10").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML) + parseInt(document.getElementById("tcc13").innerHTML) + parseInt(document.getElementById("tcc14").innerHTML);
            n = (n == 7 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "AA sợ khoảng không" : "Không AA so khoang trong");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "AA so xa hoi";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "AA so khoang trong";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "AA dac hieu";
            } else {
                document.getElementById("kc21").innerHTML = "Không ám ảnh";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
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
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Kết quả chẩn đoán</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-12 mt-2">
                <div class="card-title mx-auto">
                    <h4>Thông tin chẩn đoán</h4>
                </div>
                <div class="card-body">
                    <div class="single-content brand webdesign grid-item">
                        <input class="form-control-sm mb-2 dataTables_filter" id="myInput" type="text" placeholder="Tìm kiếm theo SĐT...">
                        <script>
                            $(document).ready(function() {
                                $("#myInput").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function() {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                        <table id="dtStatusSent" class="table table-hover" cellspacing="0" width="100%">

                            <thead class="table-light">
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Năm sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Kết quả</th>
                                    <th>Đơn thuốc</th>
                                    <th>
                                        <a href="{{ route('am-anh.create') }}" class="btn btn-success">Thêm chẩn đoán mới</a>
                                    </th>

                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach($cust as $item)
                                <tr>
                                    <td> {{$index++}}</td>
                                    <td>{{ $item->cust_name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->cust_email }}</td>
                                    <td>{{ $item->cust_dob }}</td>
                                    <td>{{ $item->cust_address }}</td>
                                    <td>{{ $item->result }}</td>
                                    <td>
                                        <a class="modal-lg" data-bs-toggle="modal-lg" data-bs-target="#exampleModal" href="{{route('am-anh.viewer', $item->id)}}">Đơn thuốc</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('am-anh.index', $item->id)}}">Xem chi tiết</a>
                                        <a class="btn btn-warning" href="{{route('am-anh.destroy', ['id' => $item->id])}}">Xóa</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection