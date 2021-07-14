<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="container-wraper">
            <div class="row">
                <div class="col-md-12 offset-md-0">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kê đơn thuốc</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" id="formMultiple" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input class='check_all' type='checkbox' onclick="select_all()" /></th>
                                            <th>STT</th>
                                            <th>Tên thuốc</th>
                                            <th>Loại</th>
                                            <!-- <th>CustID</th> -->
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class='row_1'>
                                            <div class="row">
                                                <td><input type='checkbox' class='chkbox' /></td>
                                                <td><span id='sn'>1.</span></td>
                                                <td>
                                                    <input id="medicineName" name="Name" type="text" class="form-control" placeholder="Tên thuốc ...">
                                                    <div id="search-ajax">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="type_name" name="type" placeholder="Loại thuốc">
                                                </td>
                                                <!-- <td>
                                                    <input type="text" class="form-control" id="CustID" name="CustID" placeholder="CustID">
                                                </td> -->
                                                <td>
                                                    <input type="number" min="0" class="form-control" name="Amount" placeholder="Số lượng">
                                                </td>

                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class='btn btn-danger delete'>- Xóa</button>
                                <button type="button" class='btn btn-success addbtn'>+ Thêm</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //SUBMIT 2 form
        // $(document).ready(function() {
        //     $('#submitBtn').on('click', function() {
        //         $('#form1').submit();
        //         $('#formMultiple').submit();
        //     });
        //     console.log(document)
        // });

        $(".delete").on('click', function() {
            $('.chkbox:checkbox:checked').parents("tr").remove();
            $('.check_all').prop("checked", false);
            updateSerialNo();
        });
        var i = $('table tr').length;
        $(".addbtn").on('click', function() {
            count = $('table tr').length;
            var data = "<tr id='row_" + count + "'>";
            data += "<td><input type='checkbox' class='chkbox'/></td>";
            data += "<td><span id='sn" + i + "'>" + count + ".</span></td>";
            data += "<td>";
            data += "<input type='text' class='form-control' data-type='medicineName' id='medicineName" + i + "' name='Name' placeholder='Tên thuốc ...'/>";
            data += "<div id='search-ajax'" + i + '>';
            data += "</div>";
            data += "</td>";
            data += "<td><input class='form-control' type='text' data-type='type_name' id='type_name" + i + "' name='type' placeholder='Loại thuốc'/></td>";
            data += "<td><input class='form-control' type='number' data-type='amount_1' id='amount_1" + i + "' name='Amount' placeholder='Số lượng'/></td>";
            data += "</tr>";

            $('table').append(data);
            i++;
        });

        function select_all() {
            $('input[class=chkbox]:checkbox').each(function() {
                if ($('input[class=check_all]:checkbox:checked').length == 0) {
                    $(this).prop("checked", false);
                } else {
                    $(this).prop("checked", true);
                }
            });
        }

        function updateSerialNo() {
            obj = $('table tr').find('span');
            $.each(obj, function(key, value) {
                id = value.id;
                $('#' + id).html(key + 1);
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#medicineName').keyup(function() {
                var data = $(this).val();
                if (data != '') {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('autocomplete')}}",
                        method: 'POST',
                        data: {
                            data: data,
                            _token: _token
                        },
                        success: function(data) {
                            let medicine = JSON.parse(data);
                            let output = '<ul class="dropdown-menu" style="display:block; position:relative;">';

                            let content = '';
                            $.each(medicine, function(index, value) {
                                // console.log(index, value);
                                //search-ajax
                                output += '<li><a href="#" class="ml-2" style="color:black; font-weight: bold">' + value.Name + ' </a></li>';

                                //content
                                // content += "<h3>Name: " + value.Name + "; Type: " + value.Type + "</h3>";
                            });
                            output += "</ul>";

                            $('#search-ajax').fadeIn();
                            $('#search-ajax').html(output);
                            $('#content').html(content);
                        }
                    })
                } else {
                    $('#search-ajax').fadeOut();
                }
            });

            $(document).on('click', 'li', function(ui, event) {
                console.log(ui.item);
                $('#medicineName').val($(this).text());
                // $('#mediId').val($(this).text());
                // $('#type').val($(this).text());
                $('#search-ajax').fadeOut();
                // return false;
            });

        });
    </script>
</div>
</div>