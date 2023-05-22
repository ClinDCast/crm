<div class="fL">
    <div id="lv_left_filter" class="cvLeftPane pR oA newListOLY filterEnableReq" style="height:550px;"> 
        <form name="customViewSmartFilters">
            <div class="cvFilters pT10">
                <div class="smartFilter_Contacts  newSmartFilter">
                    <div style="position: relative;">
                        <div id="lv_filter_scroll" class="cxSmartFilterScrollElem leftFilterHead oA pR lyteScrollBar" style="height: 383.2px;">
                            <div class="setHorizontalPadding">
                                <div class="lyte-accordion-header">
                                    <div class="lyteItem {{(Route::currentRouteName()=='account_type') ? 'lyteMenuActive' : ''}}"> 
										<a class="focusVisibleModule" href="{{ route('account_type') }}"> 
                                            <div class="lyte-exptable-th"> 
                                                <span>Account Type</span>
                                            </div>
										</a>
									</div>
                                    <div class="lyteItem {{(Route::currentRouteName()=='source') ? 'lyteMenuActive' : ''}}"> 
                                        <a class="focusVisibleModule" href="{{ route('source') }}"> 
                                            <div class="lyte-exptable-th"> 
                                                <span>Source</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="lyteItem {{(Route::currentRouteName()=='soap_status') ? 'lyteMenuActive' : ''}}"> 
                                        <a class="focusVisibleModule" href="{{ route('soap_status') }}"> 
                                            <div class="lyte-exptable-th"> 
                                                <span>Lead Soap Status</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="lyteItem {{(Route::currentRouteName()=='soap_source') ? 'lyteMenuActive' : ''}}"> 
                                        <a class="focusVisibleModule" href="{{ route('soap_source') }}"> 
                                            <div class="lyte-exptable-th"> 
                                                <span>Lead Soap Source</span>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="lyteItem {{(Route::currentRouteName()=='marketing_soap_status') ? 'lyteMenuActive' : ''}}"> 
                                        <a class="focusVisibleModule" href="{{ route('marketing_soap_status') }}"> 
                                            <div class="lyte-exptable-th"> 
                                                <span>Marketing Soap Status</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="lyteItem {{(Route::currentRouteName()=='of_contact_added') ? 'lyteMenuActive' : ''}}"> 
                                        <a class="focusVisibleModule" href="{{ route('of_contact_added') }}"> 
                                            <div class="lyte-exptable-th"> 
                                                <span>#of Contacts added</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>  
        </form>
    </div>
</div>