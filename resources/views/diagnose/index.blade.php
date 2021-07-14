@extends('layouts.main')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Post</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            var rowcount, addBtn, tableBody, imgPath, basePath;
            addBtn = $("#addNew");
            rowcount = $("#autocomplete_table tbody tr").length + 1;
            tableBody = $("#autocomplete_table tbody");
            imgPath = $("#imgPath").val();
            basePath = $("#basePath").val();


            function formHtml() {
                html = '<tr id="row_' + rowcount + '">';
                html += '<th id="delete_"' + rowcount + ' scope="row" class="delete_row",deleteRow><img width = "30px" src="' + imgPath + '"alt = ""></th>';
                html += '<td>';
                html += '<input type="text" data-ee="name" name="name[]" id="medicineName_' + rowcount + '" class="form-control autocomplete_table">';
                html += '</td>';
                html += '<td>';
                html += '<input type="number" min="0" data-ee="amount" name="amount[]" id="amountName_' + rowcount + '" class="form-control autocomplete_table">';
                html += '</td>';
                html += '<td>';
                html += '<input type="text" data-ee="type" name="type[]" id="typeName_' + rowcount + '" class="form-control autocomplete_table">';
                html += '</td>';
                html += '<td>';
                html += '<input type="text" data-ee="treatment" name="treatment" id="treatmentName_' + rowcount + '" class="form-control autocomplete_table">';
                html += '</td>';
                html += '</tr>';
                rowcount++;
                return html;
            }

            function addNewRow() {
                var html = formHtml();
                console.log(html);
                tableBody.append(html);
            };

            function deleteRow() {
                var rowNo;
                id = $(this).attr('id');
                console.log(id);
                idArr = id.split("_");
                console.log(idArr);
                rowNo = idArr[idArr.length - 1];
                console.log(rowNo);
                $("#rowNo" + rowNo).remove();
                // console.log($(this).parent());
                // $(this).parent().remove();
            }

            function getId(element) {
                var id, idArr;
                id = element.attr('id');
                idArr = id.split("_");
                return idArr[idArr.length - 1];
            }

            function handleAutocomplete() {
                var fieldName, currentEle;
                currentEle = $(this);
                fieldName = currentEle.data('field-name');

                if (typeof fieldName === 'undifined') {
                    return false;
                }
                currentEle.autocomplete({
                    source: function(data, cb) {
                        console.log(data);
                        $.ajax({
                            url: basePath + '{{route("getallfields")}}',
                            method: 'post',
                            dataType: 'json',
                            data: {
                                name: data.term,
                                fieldName: fieldName
                            },
                            success: function(res) {
                                var result;
                                result = [{
                                    label: 'There is not found' + data.term,
                                    value: ''
                                }];
                                if (res.length) {
                                    result = $.map(res, function(obj) {
                                        return {
                                            label: obj[fieldName],
                                            value: obj[fieldName],
                                            data: obj
                                        };
                                    });
                                }
                                cb(result);
                            }
                        });
                    },
                    autofocus: true,
                    minLength: 1,
                    select: function(event, selectData) {
                        if (selectData && selectData.item && selectData.item.data) {
                            console.log(seclectData);
                            var rowNo, data;
                            rowNo = getId(currentEle);
                            data = seclectData.item.data;
                            $('medicineName_' + rowNo).val(data.name);
                            $('amountName_' + rowNo).val(data.amount);
                            $('typeName_' + rowNo).val(data.type);
                            $('treatmentName_' + rowNo).val(data.treatment);
                        }
                    }
                })
            }

            function registerEvents() {
                addBtn.on("click", addNewRow);
                $(document).on('click', 'delete_row', deleteRow);

                $(document), on('focus', 'autocomplete_txt', handleAutocomplete);

            }
            registerEvents();
        });
    </script>
</head>

<body>
    <?php
    $imgPath = asset('assets/img/iconmonstr-minus-5.svg');
    ?>
    <input type="hidden" id="imgPath" value='<?= $imgPath ?>'>
    <div class="container-wraper">
        <div class="row">
            <div class="container">
                <h3>ADD</h3>
                <table id="autocomplete_table" class="table border border-colapse">
                    <thead class="thead-light">
                        <tr>
                            <th>&nbsp;</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Treatment</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class='row_1'>
                            <th id="delete_" scope="row" class="delete_row" , deleteRow>
                                <img width="30px" src='<?= $imgPath ?>' alt="">
                            </th>
                            <td>
                                <input type="text" data-ee="name" name="name[]" id="medicineName" class="form-control autocomplete_table" autocomplete="off">
                            </td>
                            <td>
                                <input type="number" min="0" data-ee="amount" name="amount[]" id="amountName" class="form-control autocomplete_table" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-ee="type" name="type[]" id="typeName" class="form-control autocomplete_table" autocomplete="off">
                            </td>
                            <td>
                                <input type="text" data-ee="treatment" name="treatment" id="treatmentName" class="form-control autocomplete_table" autocomplete="off">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <input type='button' class="btn btn-success" value='Add more' id='addNew'>
                <!-- <input type='button' class="btn btn-danger" value='Delete' id='delete'> -->
            </div>

            <!-- <script type="text/javascript">
                $(document).ready(function() {
                    $("#medicineName").autocomplete({
                        source: [{
                            label: 'VietNam',
                            value: '84',
                            a: {
                                "id": "84",
                                "name": "Viet Nam",
                                "type": "TramCam",
                                "begin": "100mg",
                                "national": "vietnammese",
                            },
                        }],
                    })
                });
            </script> -->
        </div>
    </div>
</body>

@endsection