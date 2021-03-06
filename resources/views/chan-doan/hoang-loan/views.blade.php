@extends('layouts.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    <!---------------Check---------------->

    <div class="container-fluid">
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">K???t qu??? ch???n ??o??n</button>
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
                    <h4>Th??ng tin ch???n ??o??n</h4>
                </div>
                <div class="card-body">
                    <div class="single-content brand webdesign grid-item">
                        <input class="form-control-sm mb-2 dataTables_filter" id="myInput" type="text" placeholder="T??m ki???m theo S??T...">
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
                                    <th>H??? t??n</th>
                                    <th>S??? ??i???n tho???i</th>
                                    <th>Email</th>
                                    <th>N??m sinh</th>
                                    <th>?????a ch???</th>
                                    <th>K???t qu???</th>
                                    <th>Thu???c</th>
                                    <th>
                                        <a href="{{ route('hoang-loan.create') }}" class="btn btn-success">Th??m ch???n ??o??n m???i</a>
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
                                    <td> <a href="{{route('hoang-loan.viewer', $item->id)}}">????n thu???c</a></td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('hoang-loan.index', $item->id)}}">Xem chi ti???t</a>
                                        <a class="btn btn-warning" href="{{route('hoang-loan.destroy', ['id' => $item->id])}}">X??a</a>
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