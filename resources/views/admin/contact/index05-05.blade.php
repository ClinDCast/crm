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
                                                <lyte-td class="w50New "> 
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
                                                                        All Contacts
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
                                                        <a href="{{ route('create_contact') }}"><button class="customPlusBtn">Create Contact</button> </a>
                                                    </span>   
                                                    <span class="normalDropDown"> 
                                                        <a href="{{ route('file-import-export') }}">
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
                                    {{count($contacts)}}
                                </span>   
                            </span>   
                        </div>  
                    </div>
                </div>
                <div id="idForCV" class="idForCV pT0">   
                    <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                        <div class="lv_table_holder "> 
                            <div class="ltTable pR newListOLY listWAutoClass" style="min-height: 465px;"> 
                                <div class="container-fluid">
                                <div class="card shadow mb-4">
                                    <div class="container-fluid"><br>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                 <table class="export_example" id="table_dashboard">
                                                    <thead>
                                                        <tr>
                                                            <th>Actions</th>
                                                            <th>Contact Name  </th>
                                                            <th> Account Name  </th>
                                                            <th> Campaign Name</th> 
                                                            <th> Designation</th>
                                                            <th> Notes</th>
                                                            <th> Email    </th>
                                                            <th> Secondary Email</th>
                                                            <th> Phone    </th>
                                                            <th> Mobile   </th>
                                                            <th> Linkedin ID</th>
                                                            <th>Follow up date </th>
                                                            <th>Description </th>
                                                        </tr>
                                                    </thead> 
                                                    <?php /*
                                                    <tbody>
                                                        @foreach($contacts as $contact)
                                                            <tr>
                                                                <td>
                                                                    <a class="btn btn-primary btn-circle btn-sm"  href="{{route('view_contact', $contact->id)}}"  title="View"><i class="fas fa-eye"></i></a>
                                                                    <a class="btn btn-success btn-circle btn-sm"  href="{{route('edit_contact', $contact->id)}}"  title="Edit"><i class="fas fa-edit"></i></a> 
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('view_contact', $contact->id)}}">{{$contact->first_name}} {{$contact->last_name}}</a>
                                                                </td>
                                                                <td>
                                                                    @foreach($accounts as $account)
                                                                        @if($contact->account_id == $account->id)
                                                                        {{$account->account_name}}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td> 
                                                                    {{$contact->designation}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->campaign_name}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->notes}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->email}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->secondary_email}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->phone}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->mobile}}
                                                                </td>
                                                                <td>  
                                                                   {{$contact->linkedin}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->follow_up_date}}
                                                                </td>
                                                                <td>
                                                                    {{$contact->description}}
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                    </tbody>  */ ?>
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
                    "url":"{{ route('postContact') }}",
                    data: function(data){
                        data._token = "{{ csrf_token() }}";
                    }
                },

                "columns": [
                        { data: "action" },
                        { data: "name" },
                        { data: "account_id" },
                        { data: "campaign_name" },
                        { data: "designation" },
                        { data: "notes" },
                        { data: "email" },
                        { data: "secondary_email" },
                        { data: "phone" },
                        { data: "mobile" },
                        { data: "linkedin" },
                        { data: "follow_up_date" },
                        { data: "description" },
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
        });
    </script>
@endsection