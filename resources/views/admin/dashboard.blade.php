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
                                                <lyte-td>
                                                	
                                                </lyte-td>
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>  
                            </div>  
                        </div>  
                        <div class="actionDetailsArea alignCenter spaceBetween boxBB dF"> 
                        </div>  
                    </div>
                </div>
                <div id="idForCV" class="idForCV pT0">   
                    <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                        <div class="lv_table_holder" style="padding-top: 18px;"> 
                            <div class="ltTable pR newListOLY listWAutoClass" style="min-height: 465px;"> 
                            	<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
						                    <div class="card-header" style="background: #0c6ead;">
						                        <h1 class="m-0 font-weight-bold" style=" color: white !important; text-align: center;">
						                            ClinDCast Meetings 2023 
						                        </h1>
						                    </div>
						                </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <table style="width:100%">
                                                <thead>
                                                	@php
                                                	@endphp
                                                    <tr>
                                                    	@foreach($months as $month)
                                                        	<th> {{$month}} </th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                	<tr>
                                                		@foreach($data1 as $dat1)
                                                        	<th> {{$dat1}} </th>
                                                        @endforeach
                                                	</tr>
                                                </tfoot>
                                                <tbody>
                                                	@foreach($data as $dat)
                                                		<tr>
                                                			@foreach($dat as $da)
                                                				<td>{{$da}}</td>
                                                			@endforeach
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
                </div> 
            </div>
        </div>
        <style type="text/css">
        	table, thead, tfoot, th, td {
  				border: 1px solid black;
  				border-collapse: collapse;
			}
        </style>
    @endsection