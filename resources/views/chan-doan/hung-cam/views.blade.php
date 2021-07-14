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
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Năm sinh</th>
                                <th>Địa chỉ</th>
                                <th>Kết quả</th>
                                <th>
                                    <a href="{{ route('hung-cam.create') }}" class="btn btn-success">Thêm chẩn đoán mới</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cust as $item)
                            <tr>
                                <td>{{ $item->cust_name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->cust_email }}</td>
                                <td>{{ $item->cust_dob }}</td>
                                <td>{{ $item->cust_address }}</td>
                                <td>{{ $item->result }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('hung-cam.index', $item->id)}}">Xem chi tiết</a>
                                    <a class="btn btn-warning" href="{{route('hung-cam.destroy', ['id' => $item->id])}}">Xóa</a>
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

@endsection