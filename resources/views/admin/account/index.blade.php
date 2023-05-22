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
                                                <lyte-td style="width:50px;">
                                                    <div class="cxElementValue">
                                                        <div class="lyteInputBox">
                                                            <div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
                                                                <select name="" id="user_id" >
                                                                    <option value="">Select</option>
                                                                    @foreach($users as $user)
                                                                        <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </lyte-td>
                                                <lyte-td style="width:50px;">
                                                    <div class="customfieldValue">
                                                        <div class="crux-text-component">
                                                            <div class="cxElementValue">
                                                                <div class="lyteInputBox">
                                                                    <div class="lyteField">
                                                                        <input type="date" name="date1" id="date1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </lyte-td>
                                                <lyte-td style="width:50px;">
                                                    <div class="customfieldValue">
                                                        <div class="crux-text-component">
                                                            <div class="cxElementValue">
                                                                <div class="lyteInputBox">
                                                                    <div class="lyteField">
                                                                        <input type="date" name="date2"  id="date2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </lyte-td>
                                                <lyte-td>
                                                    <button class="customPlusBtn" id="searchbydate">Filter</button>
                                                </lyte-td>
                                                <lyte-td style="width: 160px;">
                                                    <div class="customfieldValue">
                                                        <div class="crux-text-component">
                                                            <div class="cxElementValue">
                                                                <div class="lyteInputBox">
                                                                    <div class="lyteField">
                                                                        <input type="search" placeholder="Search" name="search" id="search" style="width: 160px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </lyte-td>
                                                <lyte-td>
                                                    <button class="customPlusBtn" id="searchBtn">Search</button>
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
                            <!--<span class=" totalRecordsInNumbers  mWidth75" data-zcqa="lv_summaryArea">Total Records :-->
                            <!--    <span id="totalCountNo" class="newDarkColor"> -->
                            <!--    </span>   -->
                            <!--</span>   -->
                        </div>  
                    </div>
                </div>
                <div id="idForCV" class="idForCV pT0">   
                    <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                        <div class="lv_table_holder "> 
                            <div class="ltTable pR newListOLY listWAutoClass" style="min-height: 465px;"> 
                                <div class="container-fluid">
                                    <div class="row">
                                        <!--<div class="col-12 form-group">-->
                                        <!--    <input type="search" name="search" id="search">-->
                                        <!--    <button class="btn btn-primary my-3" id="searchBtn">Search</button>-->
                                        <!--</div>-->
                                        <div class="col-12">
                                            <table id="datatable" class="table" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th> Actions </th>
                                                        <th> Account Name </th>
                                                        <th> Why added to ICP </th>
                                                        <th> Contact# </th>
                                                        <th> Account Lead </th>
                                                        <th> Notes </th>
                                                        <th> Updated At</th>
                                                    </tr>
                                                </thead>
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    {{-- Data table Code --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('#datatable').DataTable({
                aoColumnDefs: [
                    { "bSortable": false, "aTargets": [0, 2,] }, 
                    { "bSearchable": false, "aTargets": [0, 2] }
                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('listAccount') }}',
                    type: "POST",
                    data: function(data) {
                        data.cSearch = $("#search").val();
                        data.user = $("#user_id").val();
                        data.date1 = $("#date1").val();
                        data.date2 = $("#date2").val();
                    }
                },
                order: ['1', 'ASC'],
                pageLength: 100,
                searching: false,
                aoColumns: [
                    {
                        data: 'id',
                        // render: function(data, type, row) {
                        //     return `<a class="edit btn btn-success btn-sm"  href='edit_account/${row.id}' ><i class="fas fa-edit"></i></a>`;
                        // }
                    },
                    {
                        data: 'account_name',
                        // render: function(data, type, row) {
                        //     return `<a href='view_account/${row.id}'>${row.account_name}</a>`;
                        // }
                    },
                    {
                        data: 'added_to_icp',
                    },
                    {
                        data: 'employees_count',
                    },
                    {
                        data: 'marketing',
                    },
                    {
                        data: 'notes',
                    },
                    {
                        data: 'updated_at',
                    },
                ]
            });
        });

        $("#searchBtn").click(function(){
            $('#datatable').DataTable().ajax.reload();
        });
        $("#user_id").change(function(){
            $('#datatable').DataTable().ajax.reload();
        });
        $("#searchbydate").click(function(){
            var date1 = $("#date1").val();
            var date2 = $("#date2").val();
            if(date1 !=='' && date2 !=''){
                $('#datatable').DataTable().ajax.reload();
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#user_id").select2({
            placeholder: "Select",
            allowClear: true,
        });
    </script>
    <style>
        .table{
            border: 2px solid #c3c5e0;
        }
        table {
            table-layout:fixed;
            width:100% !important;
        }
        td{
            overflow:hidden;
            text-overflow: ellipsis;
        }
    </style>
    @endsection