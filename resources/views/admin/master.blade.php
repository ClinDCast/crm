@extends('admin.layoutnew')
@section('content')
    <div class="bodycontainer">
        <div class="outerElem newListviewRevamp">
            <div id="idForCV" class="idForCV pT0">   
                @include('admin.master_sidebar')
                <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                    <div class="lv_table_holder ">
                        <div class="ltTable pR newListOLY listWAutoClass" style="min-height: 550px;"> 
                            <div class="lyte-expresstable" style="height: 550px;"> 
                                <div class="lyteExpTableWrapper lyteExpStickyTable">  
                                    <div class="lyteExpTableOrigTableWrapper ">   
                                        <div class="lyteExpTableOrigTableInnerWrap"> 
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
@endsection