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
        <h3 class="mx-auto mt-3 font-weight-bold">Thuốc Điều Trị Nghiện Rượu</h3>
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
                <td>ĐTNRuou</td>
                <td id="dt">ĐTNRuou</td>
                <td id="dt">Naltrexone</td>
                <td id="dt">Revia (25mg)</td>
                <td id="dt">50mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>ĐTNRuou</td>
                <td id="dt">ĐTNRuou</td>
                <td id="dt">Naltrexone</td>
                <td id="dt">Revia (50mg)</td>
                <td id="dt">50mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>ĐTNRuou</td>
                <td id="dt">ĐTNRuou</td>
                <td id="dt">Naltrexone</td>
                <td id="dt">Revia (100mg)</td>
                <td id="dt">50mg</td>
                <td id="dt"></td>
                <td id="dt"></td>
                <td id="dt">Phap</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>ĐTNRuou</td>
                <td id="dt">ĐTNRuou</td>
                <td id="dt">Disulfiram</td>
                <td id="dt">Esperal</td>
                <td id="dt">500mg</td>
                <td id="dt"></td>
                <td id="dt">Sanofi aventis</td>
                <td id="dt">Quốc gia</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>ĐTNRuou</td>
                <td id="dt">ĐTNRuou</td>
                <td id="dt">Acamprosate</td>
                <td id="dt">Campral</td>
                <td id="dt">666mg*3</td>
                <td id="dt"></td>
                <td id="dt">Forest laboratories</td>
                <td id="dt"></td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
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
                <td>CTC</td>
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
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Citalopam</td>
                <td id="dt">Celexa(10mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">40 mg</td>
                <td id="dt">Forest Laboratories</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Citalopam</td>
                <td id="dt">Celexa(20mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">40 mg</td>
                <td id="dt">Forest Laboratories</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Citalopam</td>
                <td id="dt">Celexa(40mg)</td>
                <td id="dt">20 mg</td>
                <td id="dt">40 mg</td>
                <td id="dt">Forest Laboratories</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Escitalopam</td>
                <td id="dt">Lexapro(10mg)</td>
                <td id="dt">10 mg</td>
                <td id="dt">20 mg</td>
                <td id="dt">Lundberk </td>
                <td id="dt">Đan Mạch</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Escitalopam</td>
                <td id="dt">Lexapro(20mg)</td>
                <td id="dt">10 mg</td>
                <td id="dt">20 mg</td>
                <td id="dt">Lundberk </td>
                <td id="dt">Đan Mạch</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
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
                <td>CTC</td>
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
                <td>CTC</td>
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
                <td>CTC</td>
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
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Sertraline</td>
                <td id="dt">Zoloft(25mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">150-200 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Sertraline</td>
                <td id="dt">Zoloft(50mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">150-200 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SSRI</td>
                <td id="dt">Sertraline</td>
                <td id="dt">Zoloft(100mg)</td>
                <td id="dt">25-50 mg</td>
                <td id="dt">150-200 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SNRI</td>
                <td id="dt">Venlafaxine</td>
                <td id="dt">Effexor(37,5mg)</td>
                <td id="dt">37,5-75mg</td>
                <td id="dt">225 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SNRI</td>
                <td id="dt">Venlafaxine</td>
                <td id="dt">Effexor(75mg)</td>
                <td id="dt">37,5-75mg</td>
                <td id="dt">225 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">SNRI</td>
                <td id="dt">Venlafaxine</td>
                <td id="dt">Effexor(150mg)</td>
                <td id="dt">37,5-75mg</td>
                <td id="dt">225 mg</td>
                <td id="dt">Pfizer </td>
                <td id="dt">Australia</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">TCA</td>
                <td id="dt">Amitriptyline</td>
                <td id="dt">Laroxyl(12,5mg)</td>
                <td id="dt">12,5-25mg</td>
                <td id="dt">25-150 mg</td>
                <td id="dt">Roche</td>
                <td id="dt">Thuy si</td>
            </tr>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">TCA</td>
                <td id="dt">Amitriptyline</td>
                <td id="dt">Laroxyl(25mg)</td>
                <td id="dt">12,5-25mg</td>
                <td id="dt">25-150 mg</td>
                <td id="dt">Roche</td>
                <td id="dt">Thuy si</td>
            </tr>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">Thuốc khác</td>
                <td id="dt">Mirtazapine</td>
                <td id="dt">Remeron(15mg)</td>
                <td id="dt">15 mg</td>
                <td id="dt">45-60 mg</td>
                <td id="dt">Organon</td>
                <td id="dt">Ha lan</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CTC</td>
                <td id="dt">Thuốc khác</td>
                <td id="dt">Mirtazapine</td>
                <td id="dt">Remeron(30mg)</td>
                <td id="dt">15 mg</td>
                <td id="dt">45-60 mg</td>
                <td id="dt">Organon</td>
                <td id="dt">Ha lan</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CLthan</td>
                <td id="dt">The he 2</td>
                <td id="dt">Olanzapine</td>
                <td id="dt">Zyprexa (5mg)</td>
                <td id="dt">5-10 mg</td>
                <td id="dt">5-20 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CLthan</td>
                <td id="dt">The he 2</td>
                <td id="dt">Olanzapine</td>
                <td id="dt">Zyprexa (10mg)</td>
                <td id="dt">5-10 mg</td>
                <td id="dt">5-20 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CLthan</td>
                <td id="dt">The he 2</td>
                <td id="dt">Olanzapine</td>
                <td id="dt">Zyprexa (15mg)</td>
                <td id="dt">5-10 mg</td>
                <td id="dt">5-20 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CLthan</td>
                <td id="dt">The he 2</td>
                <td id="dt">Olanzapine</td>
                <td id="dt">Zyprexa (20mg)</td>
                <td id="dt">5-10 mg</td>
                <td id="dt">5-20 mg</td>
                <td id="dt">Eli Lilly</td>
                <td id="dt">Hoa ky</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CLthan</td>
                <td id="dt">The he 2</td>
                <td id="dt">Risperidone</td>
                <td id="dt">Risperdal (1mg)</td>
                <td id="dt">2 mg</td>
                <td id="dt">4-16 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
            <tr>
                <th>{{$index++}}</th>
                <td>CLthan</td>
                <td id="dt">The he 2</td>
                <td id="dt">Risperidone</td>
                <td id="dt">Risperdal (2mg)</td>
                <td id="dt">2 mg</td>
                <td id="dt">4-16 mg</td>
                <td id="dt">Janssen-Cilag</td>
                <td id="dt">Y</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection