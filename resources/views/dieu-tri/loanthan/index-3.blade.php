@extends('layouts.main')
@section('content')
<div class="container-page">
    <script type="text/javascript">
        var kd = ["", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        function recalcHS() {

        }

        function recalc() {
            recalcHS();
        }

        function chkChange(chkid) {
            var chkobj = document.getElementById('kd' + chkid);
            kd[chkid - 1] = chkobj.checked ? 1 : 0;
            if (chkid > 21 && chkid < 28) recalcTDT(); //not recalcHS, recalcMT
            else recalc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kd' + txtid);
            kd[txtid - 1] = txtobj.value;
            recalc();
        }
    </script>

    @php
    $index=1
    @endphp
    <table class="table table-success table-striped table-bordered mt-3 mb-3" border="1" cellspacing="0" cellpadding="2">
        <h3 class="mx-auto mt-3 font-weight-bold">Thuốc Điều Trị Loạn Thần</h3>
        <thead>
            <tr>
                <th>STT</th>
                <th>Loại</th>
                <th>Nhóm</th>
                <th>Tên</th>
                <th>Thị trường</th>
                <th>Khởi đầu</th>
                <th>Điều trị</th>
                <th>Công ty</th>
                <th>Quốc gia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">FGA</td>
                <td id="dt">Chlorpromazine</td>
                <td id="dt">Chlorpromazine(25mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">100-200 mg</td>
                <td id="dt">Sanofi aventis</td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">FGA</td>
                <td id="dt">Chlorpromazine</td>
                <td id="dt">Chlorpromazine(100mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">100-200 mg</td>
                <td id="dt">Sanofi aventis</td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">FGA</td>
                <td id="dt">Butyrophenol</td>
                <td id="dt">Haloperidol (1 mg)</td>
                <td id="dt">2-3 mg</td>
                <td id="dt">6-9 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">FGA</td>
                <td id="dt">Butyrophenol</td>
                <td id="dt">Haloperidol (1,5 mg)</td>
                <td id="dt">2-3 mg</td>
                <td id="dt">6-9 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">FGA</td>
                <td id="dt">Butyrophenol</td>
                <td id="dt">Haloperidol (2 mg)</td>
                <td id="dt">2-3 mg</td>
                <td id="dt">6-9 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">FGA</td>
                <td id="dt">Butyrophenol</td>
                <td id="dt">Haloperidol (5 mg)</td>
                <td id="dt">2-3 mg</td>
                <td id="dt">6-9 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Clozapine</td>
                <td id="dt">Leponex (25mg)</td>
                <td id="dt">12,5-25 mg</td>
                <td id="dt">500 mg</td>
                <td id="dt">Novartis</td>
                <td id="dt">Thuy si</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Clozapine</td>
                <td id="dt">Leponex (100mg)</td>
                <td id="dt">12,5-25 mg</td>
                <td id="dt">500 mg</td>
                <td id="dt">Novartis</td>
                <td id="dt">Thuy si</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Risperidone</td>
                <td id="dt">Risperdal (1mg)</td>
                <td id="dt">2 mg</td>
                <td id="dt">4-16 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Risperidone</td>
                <td id="dt">Risperdal (2mg)</td>
                <td id="dt">2 mg</td>
                <td id="dt">4-16 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Risperidone</td>
                <td id="dt">Risperdal (4mg)</td>
                <td id="dt">2 mg</td>
                <td id="dt">4-16 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Olanzapine</td>
                <td id="dt">Zyprexa (5mg)</td>
                <td id="dt">5-10 mg</td>
                <td id="dt">5-20 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">Olanzapine</td>
                <td id="dt">Zyprexa (10mg)</td>
                <td id="dt">5-10 mg</td>
                <td id="dt">5-20 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">quetiapine</td>
                <td id="dt">Seroquel (50mg)</td>
                <td id="dt">25 mg</td>
                <td id="dt">500-800 mg</td>
                <td id="dt">Astra Zeneca</td>
                <td id="dt">Anh thuy dien</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">quetiapine</td>
                <td id="dt">Seroquel (200mg)</td>
                <td id="dt">25 mg</td>
                <td id="dt">500-800 mg</td>
                <td id="dt">Astra Zeneca</td>
                <td id="dt">Anh thuy dien</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C loạn thần</td>
                <td id="dt">SGA</td>
                <td id="dt">quetiapine</td>
                <td id="dt">Seroquel (300mg)</td>
                <td id="dt">25 mg</td>
                <td id="dt">500-800 mg</td>
                <td id="dt">Astra Zeneca</td>
                <td id="dt">Anh thuy dien</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C co giật</td>
                <td id="dt">Valproate</td>
                <td id="dt">Valproate</td>
                <td id="dt">Depakine (200 mg)</td>
                <td id="dt">600 mg</td>
                <td id="dt">2500 mg</td>
                <td id="dt">Sanofi aventis</td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C co giật</td>
                <td id="dt">Valproate</td>
                <td id="dt">Valproate</td>
                <td id="dt">Depakote (300mg)</td>
                <td id="dt">10mg/kg</td>
                <td id="dt">60mg/kg</td>
                <td id="dt">Sanofi aventis</td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C co giật</td>
                <td id="dt">Valproate</td>
                <td id="dt">Valproate</td>
                <td id="dt">Depakote (500mg)</td>
                <td id="dt">10mg/kg</td>
                <td id="dt">60mg/kg</td>
                <td id="dt">Sanofi aventis</td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Fluoxetine</td>
                <td id="dt">Prozac(10mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">10-80 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Fluoxetine</td>
                <td id="dt">Prozac(20mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">10-80 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Citalopram</td>
                <td id="dt">Celexa(10mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">40 mg</td>
                <td id="dt">Forest Laboratories</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Citalopram</td>
                <td id="dt">Celexa(20mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">40 mg</td>
                <td id="dt">Forest Laboratories</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Citalopram</td>
                <td id="dt">Celexa(40mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">40 mg</td>
                <td id="dt">Forest Laboratories</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Escitalopram</td>
                <td id="dt">Lexapro(10mg)</td>
                <td id="dt">10 mg</td>
                <td id="dt">20 mg</td>
                <td id="dt">Lundberk </td>
                <td id="dt">Đan Mạch</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Escitalopram</td>
                <td id="dt">Lexapro(20mg)</td>
                <td id="dt">10 mg</td>
                <td id="dt">20 mg</td>
                <td id="dt">Lundberk </td>
                <td id="dt">Đan Mạch</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Fluvoxamine</td>
                <td id="dt">Luvox(25mg)</td>
                <td id="dt">25 mg</td>
                <td id="dt">100-200 mg</td>
                <td id="dt">Abbott</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Fluvoxamine</td>
                <td id="dt">Luvox(50mg)</td>
                <td id="dt">25 mg</td>
                <td id="dt">100-200 mg</td>
                <td id="dt">Abbott</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Fluvoxamine</td>
                <td id="dt">Luvox(100mg)</td>
                <td id="dt">25 mg</td>
                <td id="dt">100-200 mg</td>
                <td id="dt">Abbott</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Paroxetine</td>
                <td id="dt">Paxil(10mg)</td>
                <td id="dt">10-20 mg</td>
                <td id="dt">40-60 mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Paroxetine</td>
                <td id="dt">Paxil(20mg)</td>
                <td id="dt">10-20 mg</td>
                <td id="dt">40-60 mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Paroxetine</td>
                <td id="dt">Paxil(30mg)</td>
                <td id="dt">10-20 mg</td>
                <td id="dt">40-60 mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Paroxetine</td>
                <td id="dt">Paxil(40mg)</td>
                <td id="dt">10-20 mg</td>
                <td id="dt">40-60 mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Sertraline</td>
                <td id="dt">Zoloft(25mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">150-200 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Sertraline</td>
                <td id="dt">Zoloft(50mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">150-200 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>C Trầm cảm</td>
                <td id="dt">SSRI</td>
                <td id="dt">Sertraline</td>
                <td id="dt">Zoloft(100mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">150-200 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection