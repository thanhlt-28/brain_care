@extends('layouts.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcSPS() {
            document.getElementById('sps1a').innerHTML = kc[19];
            document.getElementById('sps1b').innerHTML = (kc[19] >= 2 ? 1 : 0);
            document.getElementById('sps2a').innerHTML = kc[3] + kc[5];
            document.getElementById('sps2b').innerHTML = (kc[3] + kc[5] >= 1 ? 1 : 0);
            document.getElementById('sps3').innerHTML = kc[7];
            document.getElementById('sps4').innerHTML = (kc[7] >= 1 ? 0 : 1);
            n = parseInt(document.getElementById('sps1b').innerHTML) + parseInt(document.getElementById('sps2b').innerHTML) + parseInt(document.getElementById('sps4').innerHTML);
            document.getElementById('sps5a').innerHTML = (n == 3 ? 1 : 0);
            document.getElementById('sps5b').innerHTML = (n == 3 ? "Động kinh cục bộ đơn giản" : "Không động kinh cục bộ đơn giản");
        }

        function recalcCPS() {
            document.getElementById('cps1a').innerHTML = kc[19];
            document.getElementById('cps1b').innerHTML = (kc[19] >= 2 ? 1 : 0);
            document.getElementById('cps2a').innerHTML = kc[3] + kc[5];
            document.getElementById('cps2b').innerHTML = (kc[3] + kc[5] >= 1 ? 1 : 0);
            document.getElementById('cps3').innerHTML = kc[7];
            document.getElementById('cps4').innerHTML = (kc[7] == 1 ? 1 : 0);
            n = parseInt(document.getElementById('cps1b').innerHTML) + parseInt(document.getElementById('cps2b').innerHTML) + parseInt(document.getElementById('cps4').innerHTML);
            document.getElementById('cps5a').innerHTML = (n == 3 ? 1 : 0);
            document.getElementById('cps5b').innerHTML = (n == 3 ? "Động kinh cục bộ phức tạp" : "Không động kinh cục bộ phức tạp");
        }

        function recalcGM() {
            document.getElementById('gm1a').innerHTML = kc[19];
            document.getElementById('gm1b').innerHTML = (kc[19] >= 2 ? 1 : 0);
            document.getElementById('gm2a').innerHTML = kc[4] + kc[6];
            document.getElementById('gm2b').innerHTML = (kc[4] + kc[6] >= 1 ? 1 : 0);
            document.getElementById('gm3').innerHTML = kc[7];
            document.getElementById('gm4').innerHTML = (kc[7] == 1 ? 1 : 0);
            n = parseInt(document.getElementById('gm1b').innerHTML) + parseInt(document.getElementById('gm2b').innerHTML) + parseInt(document.getElementById('gm4').innerHTML);
            document.getElementById('gm5a').innerHTML = (n == 3 ? 1 : 0);
            document.getElementById('gm5b').innerHTML = (n == 3 ? "Động kinh cơn lớn" : "Không động kinh cơn lớn");
        }

        function chandoan() {
            if (parseInt(document.getElementById("gm5a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Động kinh cơn lớn";
            } else
            if (parseInt(document.getElementById("cps5a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Động kinh cục bộ phức tạp";
            } else
            if (parseInt(document.getElementById("sps5a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Động kinh cục bộ đơn giản";
            } else {
                document.getElementById("kc21").innerHTML = "Không động kinh";
            }
        }

        function recalc() {
            recalcGM()
            recalcCPS()
            recalcSPS();
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
                                    <th>Họ tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Năm sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Kết quả</th>
                                    <th>Thuốc</th>
                                    <th>
                                        <a href="{{ route('dong-kinh.create') }}" class="btn btn-success">Thêm chẩn đoán mới</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach($cust as $item)
                                <tr>
                                    <td>{{ $item->cust_name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->cust_email }}</td>
                                    <td>{{ $item->cust_dob }}</td>
                                    <td>{{ $item->cust_address }}</td>
                                    <td>{{ $item->result }}</td>
                                    <td><a href="{{route('dong-kinh.viewer', $item->id)}}">Đơn thuốc</a></td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('dong-kinh.index', $item->id)}}">Xem chi tiết</a>
                                        <a class="btn btn-warning" href="{{route('dong-kinh.destroy', ['id' => $item->id])}}">Xóa</a>
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