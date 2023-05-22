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
                                                    <!-- <span class="normalDropDown">
                                                        <span class="dIB listViewMoreAction">Actions </span>
                                                    </span> -->
                                                </lyte-td> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actionDetailsArea alignCenter spaceBetween boxBB dF">
                            <span class=" totalRecordsInNumbers  mWidth75" data-zcqa="lv_summaryArea">Total Records  
                                <span id="totalCountNo" class="newDarkColor">
                                    <img src="{{ asset('assets/css/moreloading_90b33f4_.gif') }}" alt="loading" width="10px;">
                                </span>
                            </span>
                            <span class="flexAlignCenter">
                                <span class="fL nLVKanbanViewSetting nRecPerPage">
                                    <div class="dash_currentOption crmSmallDropdown lyte-dropdown">
                                        <div class="lyteDummyEventContainer">
                                            <div class="lyte-drop-button">
                                                <span class="lyteMarginRight lyteDropdownLabel" >50 Records Per Page
                                                </span>
                                                <div class="lyte-icon dropdown">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <div class="mL10 flexAlignCenter" lyte-rendered="">
                                    <span class="pageCount crm-font-bold f14 fL mR10">1 - 50
                                    </span>
                                    <div class="lyte-navigator bgNavigator">
                                        <div class="lyteNavigator">
                                            <div class="lyteSingleBack lyteIconSingleBack lyteDisabled">
                                            </div>
                                            <div class="lyteSingleFront lyteIconSingleFront">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="idForCV" class="idForCV pT0">
                    <!--<div class="fL">-->
                    <!--    <div id="lv_left_filter" class="cvLeftPane pR oA newListOLY filterEnableReq" style="height: 465px;">-->
                    <!--        <form name="customViewSmartFilters">-->
                    <!--            <div class="cvFilters pT10">-->
                    <!--                <div id="customFilter" class="smartFilter_accounts  newSmartFilter">-->
                    <!--                    <div class="filterSearchElement">-->
                    <!--                        <div class="lyte-text filterSearchHeader">Filter Accounts by-->
                    <!--                        </div>-->
                    <!--                        <div class="w100per mT10 pR">-->
                    <!--                            <div id="searchId" class="lyte-search w100per">-->
                    <!--                                <div lt-prop-type="search" class="lyte-input lyteSearchInput lyteInputBox vertical" style="width: 100%;">-->
                    <!--                                    <div class="lyteField lyteInputBoxSearch">-->
                    <!--                                        <input type="text" id="inputId" class="" maxlength="25" name="" placeholder="Search">-->
                    <!--                                        <span class="searchIcon"></span>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div style="position: relative;">-->
                    <!--                        <div id="lv_filter_scroll" class="cxSmartFilterScrollElem leftFilterHead oA pR lyteScrollBar" style="height: 383.2px;">-->
                    <!--                            <div class="setHorizontalPadding">-->
                    <!--                                <div class="lyte-accordion-header">System Defined Filters-->
                    <!--                                    <div class="lyte-icon lyteAccordionArrow"></div>-->
                    <!--                                </div>-->
                    <!--                                <div class="lyte-accordion-body" id="lyte_accordion_body_0" style="overflow: auto; height: auto;">-->
                    <!--                                    <div class="pB10">-->
                    <!--                                        <div class="cvFilterList">-->
                    <!--                                            <div class="leftElements">-->
                    <!--                                                <div class="lyte-checkbox"  id="field_cxFilter_TouchedRecords">-->
                    <!--                                                    <label class="lyteCheckbox lyteDefault">-->
                    <!--                                                        <input type="checkbox" name="" value="">-->
                    <!--                                                        <span class="lyteCheckBoxDefault"> Touched Records</span>-->
                    <!--                                                    </label>-->
                    <!--                                                </div>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="lyte-accordion-header" id="lyte_accordion_header_1">Filter By Fields-->
                    <!--                                    <div class="lyte-icon lyteAccordionArrow"></div>-->
                    <!--                                </div>-->
                    <!--                                <div class="lyte-accordion-body" id="lyte_accordion_body_1" style="overflow: auto; height: auto;">-->
                    <!--                                    <div class="pB10">-->
                    <!--                                        <div class="cvFilterList">-->
                    <!--                                            <div class="leftElements">-->
                    <!--                                                <div class="lyte-checkbox">-->
                    <!--                                                    <label class="lyteCheckbox lyteDefault">-->
                    <!--                                                        <input type="checkbox" name="" value="" tabindex="0">-->
                    <!--                                                        <span class="lyteCheckBoxDefault">-->
                    <!--                                                            Account Name-->
                    <!--                                                        </span>-->
                    <!--                                                    </label>-->
                    <!--                                                </div>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </form>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                        <div class="lv_table_holder ">
                            <div id="listviewtablescroll" class="ltTable pR newListOLY listWAutoClass" style="min-height: 465px;">
                                <div class="lyte-expresstable" style="height: 465px;">
                                    <div class="lyteExpTableWrapper lyteExpStickyTable">
                                        <div class="lyteExpTableOrigTableWrapper ">
                                            <div class="lyteExpTableOrigTableInnerWrap">
                                                <div class="lyteExpOriginalTable">
                                                    <div class="lyteExpTableHeaderGroup">
                                                        <div class="lyte-exptable-tr">
                                                            <!--<div class="lyte-exptable-th">-->
                                                            <!--    <div>-->
                                                            <!--        <div class="lyte-checkbox" class="uSelN">-->
                                                            <!--            <label class="lyteCheckbox lyteDefault">-->
                                                            <!--                <input type="checkbox" name="" value="" tabindex="0">-->
                                                            <!--                <span class="customCheckBox">-->
                                                            <!--                </span>-->
                                                            <!--            </label>-->
                                                            <!--        </div>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <div class="lyte-exptable-th">
                                                                Account Name
                                                            </div>
                                                            <div class="lyte-exptable-th"> 
                                                                Why added to ICP
                                                            </div>
                                                            <div class="lyte-exptable-th"> 
                                                                Account Type
                                                            </div>
                                                            <!--<div class="lyte-exptable-th"> -->
                                                            <!--    Description-->
                                                            <!--</div>-->
                                                            <div class="lyte-exptable-th">
                                                                Source
                                                            </div>
                                                            <div class="lyte-exptable-th">
                                                                Employees Count
                                                            </div>
                                                            <div class="lyte-exptable-th">
                                                                SIC Code
                                                            </div>
                                                            <div class="lyte-exptable-th">
                                                                Created by
                                                            </div>
                                                            <div class="lyte-exptable-th">
                                                                Notes
                                                            </div>
                                                            <div class="lyte-exptable-th">
                                                                Actions
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lyteExpTableRowGroup">
                                                        @foreach($accounts as $account)
                                                            <div class="lyte-exptable-tr">
                                                                <!--<div class="lyte-exptable-td" style="left: 35px;" fixed="enable" width="10px">-->
                                                                <!--    <div class="lyte-checkbox">-->
                                                                <!--        <label class="lyteCheckbox lyteDefault">-->
                                                                <!--            <input type="checkbox" name="" value="">-->
                                                                <!--            <span class="customCheckBox"> </span>-->
                                                                <!--        </label>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->account_name}}
                                                                </div>
                                                                <div class="lyte-exptable-td"> 
                                                                    {{$account->added_to_icp}}
                                                                </div>
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->account_type}}
                                                                </div>
                                                                <!--<div class="lyte-exptable-td">-->
                                                                <!--    {{$account->description}}-->
                                                                <!--</div>-->
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->source}}
                                                                </div>
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->employees_count}}
                                                                </div>
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->sic_code}}
                                                                </div>
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->created_by}}
                                                                </div>
                                                                <div class="lyte-exptable-td">
                                                                    {{$account->notes}}
                                                                </div>
                                                                <div class="lyte-exptable-td">
                                                                   <a class="btn btn-primary btn-circle btn-sm"  href="{{route('view_account', $account->id)}}"  title="View"><i class="fas fa-eye"></i></a>
                                                                    <a class="btn btn-success btn-circle btn-sm"  href="{{route('edit_account', $account->id)}}"  title="Edit"><i class="fas fa-edit"></i></a>
                                                                </div>
                                                            </div>  
                                                        @endforeach

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
        </div>
    </div>
@endsection