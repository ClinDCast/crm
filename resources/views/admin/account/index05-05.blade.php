@extends('admin.layoutnew')
@section('content')
    <div class="bodycontainer">
        <div>
            <div class="outerElem newListviewRevamp">
                <div class="cvpadding cvbtnAnimate">
                    <div class="affects newPLR25 newListOLY">
                        <div class="lyte-table">
                            <div class="lyteTableScroll">
                                <div>
                                    <div class="lyte-table-structure" style="width: 100%; height: 100%;">
                                        <div class="lyte-tbody">
                                            <div class="lyte-tr">
                                                <lyte-td class="w50New">
                                                    <span class="newListviewFilterIcon activeLabel">
                                                        <span class="filterIcon">
                                                        </span>
                                                    </span>
                                                </lyte-td>
                                                <lyte-td>
                                                    <div class="editWithRefIcon pR alignLeft">
                                                        <div class="fL customViewDD lyte-dropdown">
                                                            <div class="lyteDummyEventContainer">
                                                                <div class="lyte-drop-button">
                                                                    <span class="cVDropMax">
                                                                        All Accounts
                                                                    </span>
                                                                    <div class="lyte-icon dropdown">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </lyte-td>
                                                <lyte-td class="alignRight">
                                                    <span class="customPluswithImpotBtnCon">
                                                        <a href="{{ route('create_account') }}"><button class="customPlusBtn">Create Account</button> </a>
                                                    </span>
                                                    <span class="normalDropDown"> 
                                                        <a href="{{ route('file-import-export-account') }}">
                                                            <span class="dIB listViewMoreAction">Import </span> 
                                                        </a>
                                                    </span>
                                                </lyte-td> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actionDetailsArea alignCenter spaceBetween boxBB dF">
                            <span class=" totalRecordsInNumbers  mWidth75" data-zcqa="lv_summaryArea">Total Records :
                                <span id="totalCountNo" class="newDarkColor">
                                    <!-- <img src="{{ asset('assets/css/moreloading_90b33f4_.gif') }}" alt="loading" width="10px;"> -->
                                    {{count($accounts)}}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="idForCV" class="idForCV pT0">
                    <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                        <div class="ltTable pR newListOLY listWAutoClass" style="min-height: 465px;">
                            <div class="container-fluid">
                                <div class="card shadow mb-4">
                                    <div class="container-fluid"><br>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <!-- <div class="col-md-3">
                                                    <div class="text-center">
                                                        <div class="input-group input-box">
                                                            <input type="text" name="q" id="q" value="" class="form-control input-sm pull-right search-input" placeholder="Search">
                                                            &nbsp;&nbsp;&nbsp;
                                                            <div class="input-group input-box" style="width: 3%;">
                                                            <button type="button" class="btn btn-sm btn-success search-btn form-control input-sm search-input" id="payplan">
                                                            <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- class="export_example" -->
                                                 <table class="export_example" id="table_dashboard">
                                                    <thead>
                                                        <tr>
                                                            <th>Actions</th>
                                                            <th>Account Name</th>
                                                            <th> Why added to ICP</th>
                                                            <th> Account Type</th>
                                                            <th>Source</th>
                                                            <th>Employees Count</th>
                                                            <th>SIC Code</th>
                                                            <th>Created by</th>
                                                            <th>Notes</th>
                                                        </tr>
                                                    </thead>
                                                     <?php /*
                                                    <tbody>
                                                        @foreach($accounts as $account)
                                                            <tr>
                                                                <td>
                                                                   <a class="btn btn-primary btn-circle btn-sm"  href="{{route('view_account', $account->id)}}"  title="View"><i class="fas fa-eye"></i></a>
                                                                    <a class="btn btn-success btn-circle btn-sm"  href="{{route('edit_account', $account->id)}}"  title="Edit"><i class="fas fa-edit"></i></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('view_account', $account->id)}}"  title="View">{{$account->account_name}}</a>
                                                                </td>
                                                                <td> 
                                                                    {{$account->added_to_icp}}
                                                                </td>
                                                                <td>
                                                                    {{$account->account_type}}
                                                                </td>
                                                                <td>
                                                                    {{$account->source}}
                                                                </td>
                                                                <td>
                                                                    {{$account->employees_count}}
                                                                </td>
                                                                <td>
                                                                    {{$account->sic_code}}
                                                                </td>
                                                                <td>
                                                                    {{$account->created_by}}
                                                                </td>
                                                                <td>
                                                                    {{$account->notes}}
                                                                </td>
                                                            </tr>  
                                                        @endforeach
                                                    </tbody>
                                                    */ ?>
                                                </table>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>  
                </div> 
            </div> 
        </div>
    </div>
    <style>
        .dt-buttons{
            display: none;
        }
        .export_example{
            border: 2px solid #c3c5e0;
        }
        table {
            table-layout:fixed;
            width:95% !important;
        }
        td{
            overflow:hidden;
            text-overflow: ellipsis;
        }
        .dataTables_filter{
            display: block;
        }
    </style>
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var table='';
            var table = $("#table_dashboard").DataTable({
                "destroy": true,
                "orderCellsTop": true,
                "fixedHeader": true,
                "processing": true,
                "serverSide": true,
                "serverMethod": "post",
                "ajax": {
                    "url":"{{ route('postAccount') }}",
                    data: function(data){
                        data._token = "{{ csrf_token() }}";
                    }
                },

                "columns": [
                        { data: "action" },
                        { data: "account_name" },
                        { data: "added_to_icp" },
                        { data: "account_type" },
                        { data: "source" },
                        { data: "employees_count" },
                        { data: "sic_code" },
                        { data: "created_by" },
                        { data: "notes" }
                    ],
                "oLanguage": {sProcessing: $("#appendmyloader").html("<div id='switchloader'></div>")},
                "lengthMenu": [[10, 25, 50, 100, 200, 300 ], [10, 25, 50, 100, 200, 300]],
                "pageLength": 200,
                "aoColumnDefs": [{
                    bSortable: false,
                    aTargets: [-1]
                }],
                "scrollY": "auto",
                "scrollX": "true",
                "scrollCollapse": true,
                "order": [[ 2, "desc" ]],
                "ordering": true,
                /*"fnDrawCallback": function (o){
                    $('.remove-plan').click(function(){
                        var id = $(this).data('id');
                        deletePlan(id);
                    });

                    $('.view-plan').click(function(event){
                        event.preventDefault();
                        var id = $(this).data('id');
                        $.ajax({
                            type: "POST",
                            url: ADMIN_PATH+"/comp_pay_plan/pay-plan-edit",
                            data: {id: id},
                            dataType: 'json',
                            beforeSend: function(){
                                $("#appendmyloader").html("<div id='switchloader'></div>");
                            },
                            success: function(res){
                                $("#appendmyloader").html("");
                                $('#edit-all').modal({
                                    backdrop: 'static',
                                    keyboard: false
                                });
                                $('#edit').html(res.editpayplan);
                            }
                        })
                    });
                }*/
            });

           /* $('#payplan').on('click',function(){
                var table='';
                var table = $("#table_dashboard").DataTable({
                    "destroy": true,
                    "orderCellsTop": true,
                    "fixedHeader": true,
                    "processing": true,
                    "serverSide": true,
                    "serverMethod": "post",
                    "ajax": {
                        "url":"{{ route('postAccount') }}",
                        data: function(data){
                            data.q = $('#q').val();
                            data._token = "{{ csrf_token() }}";
                        }
                    },

                    "columns": [
                            { data: "action" },
                            { data: "account_name" },
                            { data: "added_to_icp" },
                            { data: "account_type" },
                            { data: "source" },
                            { data: "employees_count" },
                            { data: "sic_code" },
                            { data: "created_by" },
                            { data: "notes" }
                        ],
                    "oLanguage": {sProcessing: $("#appendmyloader").html("<div id='switchloader'></div>")},
                    "lengthMenu": [[10, 25, 50, 100, 200, 300 ], [10, 25, 50, 100, 200, 300]],
                    "pageLength": 200,
                    "aoColumnDefs": [{
                        bSortable: false,
                        aTargets: [-1]
                    }],
                    "scrollY": "auto",
                    "scrollX": "true",
                    "scrollCollapse": true,
                    "order": [[ 2, "desc" ]],
                    "ordering": true,
                });
            });*/
        });
    </script>
@endsection