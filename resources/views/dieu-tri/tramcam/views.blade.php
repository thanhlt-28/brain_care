@extends('layouts.main')
@section('content')
<div class="container-wraper">

    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[19];
            document.getElementById('tc01b').innerHTML = (kc[19] >= 14 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[9] + kc[10];
            document.getElementById('tc02b').innerHTML = (kc[9] + kc[10] >= 1 ? 1 : 0);
            var n = kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11];
            document.getElementById('tc03a').innerHTML = n;
            document.getElementById('tc03b').innerHTML = (n >= 5 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc02b').innerHTML) + parseInt(document.getElementById('tc03b').innerHTML);
            document.getElementById('tc04').innerHTML = (n == 3 ? 1 : 0);
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById('tc05').innerHTML = n;
            document.getElementById('tc06').innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById('tc07').innerHTML = kc[14];
            document.getElementById('tc08').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('tc09').innerHTML = (n == 0 ? 1 : 0);
            document.getElementById('tc10').innerHTML = kc[16];
            document.getElementById('tc11').innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById('tc12').innerHTML = kc[17];
            document.getElementById('tc13').innerHTML = (kc[17] == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 5 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 5 ? "Tr???m c???m" : "Kh??ng tr???m c???m");
        }

        function recalcTCB() {
            var n = (kc[9] + kc[10]) >= 1 ? 1 : 0;
            document.getElementById("tcb01").innerHTML = n;
            var m = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("tcb02").innerHTML = m;
            document.getElementById("tcb03").innerHTML = (n + m == 2 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[14];
            document.getElementById("tcb05").innerHTML = kc[14];
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("tcb06").innerHTML = n;
            n = parseInt(document.getElementById("tcb06").innerHTML);
            document.getElementById("tcb07").innerHTML = (n == 0 ? 1 : 0);
            document.getElementById("tcb08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('tcb09').innerHTML = 0;
            else
                document.getElementById('tcb09').innerHTML = 1;
            n = kc[3] + kc[5] + kc[12] + kc[14];
            document.getElementById("tcb10").innerHTML = n;
            document.getElementById("tcb11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML) + parseInt(document.getElementById("tcb11").innerHTML);
            n = n == 5 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Tr???m c???m th???c th???" : "Kh??ng TC th???c th???");
        }

        function recalcTCC() {
            var n = kc[9] + kc[10] >= 1 ? 1 : 0;
            document.getElementById("tcc01").innerHTML = n;
            var m = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("tcc02").innerHTML = m;
            document.getElementById("tcc03").innerHTML = (m + n == 2 ? 1 : 0);
            document.getElementById("tcc04").innerHTML = kc[15];
            document.getElementById("tcc05").innerHTML = kc[15];
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("tcc06").innerHTML = n;
            document.getElementById("tcc07").innerHTML = (n == 0 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('tcc09').innerHTML = 0;
            else
                document.getElementById('tcc09').innerHTML = 1;
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("tcc10").innerHTML = n;
            document.getElementById("tcc11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcc03").innerHTML) + parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 5 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "Tr???m c???m do ch???t" : "Kh??ng TC do ch???t");
        }

        function recalcRLT() {
            var n = kc[18];
            document.getElementById("rlt01").innerHTML = n;
            document.getElementById("rlt02").innerHTML = n;
            n = kc[9] + kc[10] >= 1 ? 1 : 0;
            document.getElementById("rlt03").innerHTML = n;
            n = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("rlt04").innerHTML = n;
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("rlt05").innerHTML = n;
            document.getElementById("rlt06").innerHTML = (n >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("rlt07").innerHTML = n;
            document.getElementById("rlt08").innerHTML = (n == 0 ? 1 : 0);
            var n = kc[22]
            document.getElementById("rlt09").innerHTML = n;
            document.getElementById("rlt10").innerHTML = (n == 0 ? 1 : 0);
            var n = kc[23]
            document.getElementById("rlt11").innerHTML = n;
            document.getElementById("rlt12").innerHTML = (n == 0 ? 0 : 1);
            n = (parseInt(document.getElementById("rlt02").innerHTML) + parseInt(document.getElementById("rlt06").innerHTML) + parseInt(document.getElementById("rlt08").innerHTML) + parseInt(document.getElementById("rlt10").innerHTML) + parseInt(document.getElementById("rlt12").innerHTML)) == 5 ? 1 : 0;
            document.getElementById("rlt13a").innerHTML = n;
            document.getElementById("rlt13b").innerHTML = (n == 1 ? "RL Th??ch nghi" : "Kh??ng RL Th??ch nghi");

        }

        function recalcHC() {
            document.getElementById("hc01").innerHTML = kc[17];
            document.getElementById("hc02").innerHTML = kc[17];
            var n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("hc03").innerHTML = n;
            document.getElementById("hc04").innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById("hc05").innerHTML = kc[14];
            document.getElementById("hc06").innerHTML = kc[15];
            document.getElementById("hc07").innerHTML = (kc[14] + kc[15] >= 1 ? 0 : 1);
            n = (parseInt(document.getElementById("hc02").innerHTML) + parseInt(document.getElementById("hc04").innerHTML) + parseInt(document.getElementById("hc07").innerHTML)) == 3 ? 1 : 0;
            document.getElementById("hc08a").innerHTML = n;
            document.getElementById("hc08b").innerHTML = (n == 1 ? "H??ng c???m" : "Kh??ng h??ng c???m");
        }

        function chandoan() {
            if (parseInt(document.getElementById("hc08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "H??ng c???m";
            } else
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TC Th???c th???";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TC Do ch???t";
            } else
            if (parseInt(document.getElementById("rlt13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL Th??ch nghi";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Tr???m c???m";
            } else {
                document.getElementById("kc21").innerHTML = "Kh??ng tr???m c???m";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
            recalcRLT();
            recalcHC();
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
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">K???t qu??? theo d??i</button>
                </li>
            </ul>
        </div>
    </div>

    <!---/////------------check-----------/////------->
    <div class="tab-content" id="">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-12 mt-2">
                <div class="card-title mx-auto">
                    <h4 class="t">Th??ng tin theo d??i</h4>
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
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>H??? t??n</th>
                                    <th>S??? ??i???n tho???i</th>
                                    <th>Email</th>
                                    <th>N??m sinh</th>
                                    <th>?????a ch???</th>
                                    <th>K???t qu???</th>
                                    <th>
                                        <a href="{{ route('tramcam.create') }}" class="btn btn-success">Th??m ch???n ??o??n m???i</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($treat as $item)
                                <tr>
                                    <td>{{ $item->treat_name }}</td>
                                    <td>{{ $item->treat_phone }}</td>
                                    <td>{{ $item->treat_email }}</td>
                                    <td>{{ $item->treat_dob }}</td>
                                    <td>{{ $item->treat_address }}</td>
                                    <td>{{ $item->result }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('tramcam.index', $item->id)}}">Xem chi ti???t</a>
                                        <a class="btn btn-warning" href="{{route('tramcam.destroy', ['id' => $item->id])}}">X??a</a>
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