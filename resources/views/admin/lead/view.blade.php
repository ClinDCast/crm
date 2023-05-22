@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
				<div id="BodyContent" class="DetailsPageRevampBox">
					<div id="detailViewButtonLayerDiv" class="pL50 tag_topSectionFixed pB0 dvheaderScrollFIxed" style="width: 1259px;">
						<table cellpadding="0" cellspacing="0" width="100%" class="dvbtnlayer robotoRegular" id="detailViewButtonLayerMainTable">
							<tbody>
								<tr id="detailViewButtonLayerMainTableRow">
									<td align="center" nowrap="" class="pR detailView_visible alignleft" style="width: 19px;"> 
										<a id="backArrowDV" href="{{ route('account_lists') }}" class="mLMinus41" data-cid="backOneLevel" data-zcqa="backOneLevel" data-params="{&quot;step&quot;:&quot;&quot;}"> 
										<span class="backtoIcon dIB mT3" width="38px" height="23px" border="0" lt-prop-title="Back">
										</span> 
										</a> 
									</td>
									<td class="pL10 detailView_visible" id="dv_title">
										<div id="cpq-breadcrumb"></div>
										<div id="topSectionTitle" class="sectionTitle">
											<span id="headervalue_ACCOUNTNAME" class="dvTitle crm-font-bold f20 dvtitle_color lh26">
												<span class="busniess_card_Hover formatLtr w100per  ">
												<span class="bCardHover formatLtr">{{$account->account_name}}
												</span>
												</span>
											</span>
										</div>
									</td>
									<td nowrap="" class="pL10 dvmo  send_mailbtndetailpage alignright">
										<div id="fixedBtn" class="dIB vam"></div>
										<div class="dIB vam">
											<!-- <button name="Edit" id="editRecordbtn" class="newgraybtn dIB mL0">Edit
											</button> -->
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<table width="100%" cellspacing="0" cellpadding="0" id="panelTab">
						<tbody>
							<tr>
								<!--<td valign="top" class="w260 newLeftPanelTd newDetailLeftPanelTd" style="position: relative;">-->
								<!--	<div class="showhideDetailpanel p3 h30" id="dv_leftPanel_showHide">-->
								<!--		<span class="showhideDetailpanelIcon fCollapseIn" onclick="detailView.showHideDetailViewLeftPanel(this);">-->
								<!--		</span>-->
								<!--	</div>-->
								<!--	<div id="newLeftPanel" class="leftNewPanel newDetailLeftPanel pR oH lyteScrollBar" style="height: 508px;" tabindex="0">-->
								<!--		<div class="leftNewPanelInner">-->
								<!--			<div>-->
								<!--				<div id="newlpdiv">-->
								<!--					<div class="lpRelList lpDiv">-->
								<!--						<ul class="lpUl bgLiUl" id="lp_rellist">-->
								<!--							<li class="bgLi cP black"> -->
								<!--								<a href="javascript:;" class="robotoRegular">Notes-->
								<!--								</a> -->
								<!--							</li>-->
								<!--						</ul>-->
								<!--					</div>-->
								<!--				</div>-->
								<!--			</div>-->
								<!--		</div>-->
								<!--	</div>-->
								<!--</td>-->
								<td valign="top">
									<div class="DetailViewInnerPage DetailsPageBox">
										<div class="DetailViewInnerTabs dvtabsFixed" id="DetailViewInnerTabs">
											<div class="pDetails lpDiv pR">
												<div class="pDetList " id="detailViewTabs">
													<ul class="lpUl pDetListUl bgLiUl pR">
														<li id="newleft_History" class="cP bgLi innertabsli " data-zcqa="newleft_timeline" >
															<a href="javascript:;" class="crm-font-regular">overview
															</a>
														</li>
														<!-- <span id="tabsInnerBackAni" class="tabsInnerBackAni">
														<span>Overview
														</span>
														</span> 
														<li id="newleft_Info" class="sel cP innertabsli " data-zcqa="newleft_info"> 
															<a href="javascript:;" class="activeTabCl crm-font-regular">Overview
															</a> 
														</li> -->
														<!--<li id="newleft_History" class="cP bgLi innertabsli " data-zcqa="newleft_timeline" > -->
														<!--	<a href="javascript:;" class="crm-font-regular">Timeline-->
														<!--	</a> -->
														<!--</li>-->
													</ul>
												</div>
											</div>
										</div>
										<div id="newInfoDiv" style="overflow:hidden">
											<div id="leftPanel" class="newDetailPageStyle">
												<div id="virusDetectionContainer" class="p25 newPopup w550 scaleZ scaleOne" style="margin-left: -300px; left: 50%; top: 50%; margin-top: -100px; z-index: 300; position: fixed;">
													<i id="virusContainerIcon">
													</i>
													<div class="f20 color_2a2b2f crm-font-bold fL mL15 fontSmooth w80per" id="virusDetectionTitle"></div>
													<div class="clearB"></div>
													<div class="f14 mT15 mL40">
														<div class="color_434d5f crm-font-regular f15" id="virusDetectionMsg"></div>
													</div>
													<div class="mT30 aligncenter tgl">
														<input type="button" id="virusDetectionOkButton" class="redbtn">
														<input type="button" id="virusDetectionCancelButton" class="newgraybtn">
														<div class="clearB"></div>
													</div>
												</div>
												<form method="post" name="viewentityform" onsubmit="return false">
													<div class="dvEmptyButtonDiv" id="dvEmptyButtonDiv"></div>
													<div id="dvinner" class="p30 pT15 pb0 " style="overflow: auto; box-sizing: border-box;">
														<div style="width: 100%;">
															<span id="recevent" class="mandatory">
															</span> 
															<div class="dvScrollContainier">
																<div id="pb_processButtonLayer" class="flex-grid-skeleton p20 robotoRegular relatedlist-bg"></div>
																<div id="pb_processPreviewLayer"></div>
																<div style="position:relative; height:1px;z-index:2">
																	
																</div>
																<div id="newRelDetails" class="newRelDetails flex-grid-skeleton-table relatedlist-bg" style="position: relative;">
																	<div id="newRelDetailsScroll" class="lyteScrollBar" tabindex="0">
																		<table cellpadding="0" cellspacing="0" width="100%" class="newRelDetailsTable">
																			<tbody>
																				<tr>
																					<td valign="top" class="newRelDetailsTd " id="newRelModule_Contacts">
																						<span class="lpDivHeadD crm-font-bold f17">Accounts
																						</span>  
																						<table cellpadding="0" cellspacing="0" class="mT15 crm-font-semibold f15" style="">
																						<tbody>
																							<tr>
																								<td valign="top">
																									<div>
																										<span> 
																										{{$account->account_name}}
																										</span> 
																										<div class="mT10 f12 fontsmooth lh16 color_5">
																											<div class="crm-font-regular f15 newRelDetails_EMAIL color_1D3">
																												{{$account->business_email}}
																											</div>
																										</div>
																									</div>
																								</td>
																							</tr>
																						</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
																<div id="widget_businessCard" class="widget_businessCardDiv relatedlist-bg"></div>
																<div class="showhideDetailsDivEle flex-grid-skeleton-table dvp20 pR">
																	<div class="showhideDetailsDivEleInner relatedlist-bg mB15">
																		<div id="showhideDetailsDiv" class="showhideDetailsDivHide"> 
																			<span>
																			Details
																			</span> 
																		</div>
																		<div class="cb"></div>
																		<div id="fullInfoDiv" style="display:block;">
																			<div class="maininfo p20">
																				<div id="preHTMLContainer" class="set_mw">
																					<div class="whiteBg detailViewContainer">
																						<div id="zia-vision-popup"></div>
																						<div class="contactInfo ">
																							<div class="viewParentSection mT18   " id="secDiv_Account_Information">
																								<div class="mB5">
																									<div class="contHeadInfo color_5 sum crm-font-bold p0">Account Information</div>
																								</div>
														<div class="contInfoTab_0 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Account# 
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->account}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Account Name
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->account_name}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Why added to ICP
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->added_to_icp}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Account Type
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->account_type}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Description
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->description}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Source
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->source}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Employees Count
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->employees_count}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">SIC Code
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->sic_code}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Created by
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">
																			    @foreach($salesteam as $sales)
            																		@if($account->created_by == $sales->id) 
            																			{{$sales->name}} {{$sales->last_name}}
            																		@endif
            																	@endforeach
																		    </lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Notes
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$account->notes}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
														</div>
														<div class="contInfoTab_1 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Website
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->website}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Linkedin
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->linkedin}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Business Phone
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->business_phone}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Business Email 
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->business_email}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Twitter
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->twitter}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Email-1
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->email1}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Email-2
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->email2}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Phone-1
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->phone1}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Phone-2
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->phone2}}
																	</span>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="clearB"></div>
													<div class="viewParentSection mT18">
														<div class="mB5">
															<div class="contHeadInfo color_5 sum fL p0">Lead Generation Process</div>
															<div class="clearB"></div>
														</div>
														<div class="contInfoTab_0 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">SOAP Status  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->soap_status}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Source  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->lead_source}}</span>
																	</span>
																</div>
															</div>
														</div>
														<div class="contInfoTab_1 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Lead Generator  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">
																	    @foreach($salesteam as $sales)
    																		@if($account->lead_generator == $sales->id) 
    																			{{$sales->name}} {{$sales->last_name}}
    																		@endif
    																	@endforeach
																	</span>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="clearB"></div>
													<div class="viewParentSection mT18">
														<div class="mB5">
															<div class="contHeadInfo color_5 sum fL p0">Marketing Process</div>
															<div class="clearB"></div>
														</div>
														<div class="contInfoTab_0 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">SOAP Status  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->marketing_soap_status}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">#of Contacts added  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->contact_added}}</span>
																	</span>
																</div>
															</div>
														</div>
														<div class="contInfoTab_1 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Marketing  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">@foreach($salesteam as $sales)
																		@if($account->marketing == $sales->id) 
																			{{$sales->name}} {{$sales->last_name}}
																		@endif
																	@endforeach</span>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="clearB"></div>
													<div class="viewParentSection mT18">
														<div class="mB5">
															<div class="contHeadInfo color_5 sum fL p0">Address Information</div>
															<div class="clearB"></div>
														</div>
														<div class="contInfoTab_0 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Billing Street  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->billing_street}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Billing City  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->billing_city}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Billing State  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->billing_state}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Billing Code  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->billing_code}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Billing Country  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$account->billing_country}}</span>
																	</span>
																</div>
															</div>
														</div>
														<div class="contInfoTab_1 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Shipping Street  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">{{$account->shipping_street}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Shipping City  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">{{$account->shipping_city}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Shipping State
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">{{$account->shipping_state}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Shipping Code   
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">{{$account->shipping_code}}</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_1 ">
																<div class="tabDiv pR dblClk " > 
																	<span class="columnCal1 labelTab"  style="width: 137.599px;">Shipping Country  
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr" >
																	<span class="formatLtr">{{$account->shipping_country}}</span>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="clearB"></div>
												</div>
											</div>
											<div class="clearB"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div id="widget_businessCard" class="widget_businessCardDiv relatedlist-bg"></div>
						<div class="showhideDetailsDivEle flex-grid-skeleton-table dvp20 pR">
							<div class="showhideDetailsDivEleInner relatedlist-bg mB15">
								<div id="showhideDetailsDiv" class="showhideDetailsDivHide"> 
									<span>
									Contacts
									</span> 
								</div>
								<div class="cb"></div>
								<div id="fullInfoDiv">
									<div class="maininfo p20">
										<div class="set_mw">
											<div class="whiteBg detailViewContainer">
												<div class="contactInfo ">
													<div class="viewParentSection mT18">
														<div class="lyteExpOriginalTable">  
	                                                    <div class="lyteExpTableHeaderGroup"> 
	                                                        <div class="lyte-exptable-tr">   
	                                                            <div class="lyte-exptable-th"> 
	                                                                Contact Name  
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Designation
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Campaign Name
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Notes
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Email    
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Secondary Email
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Phone    
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Mobile   
	                                                            </div>
	                                                            <div class="lyte-exptable-th"> 
	                                                                Linkedin ID
	                                                            </div>
	                                                            <div class="lyte-exptable-th">
	                                                                Follow up date 
	                                                            </div>
	                                                            <div class="lyte-exptable-th">
	                                                                Description 
	                                                            </div>
	                                                        </div> 
	                                                    </div> 
	                                                    <div class="lyteExpTableRowGroup">
	                                                        @foreach($contacts as $contact)
	                                                            <div class="lyte-exptable-tr">
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->first_name}} {{$contact->last_name}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td"> 
	                                                                    {{$contact->designation}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->campaign_name}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->notes}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->email}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->secondary_email}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->phone}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->mobile}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">  
	                                                                   {{$contact->linkedin}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->follow_up_date}}
	                                                                </div>
	                                                                <div class="lyte-exptable-td">
	                                                                    {{$contact->description}}
	                                                                </div>
	                                                            </div>
	                                                         @endforeach
	                                                    </div>  
                                                </div> 
													</div>
													<div class="clearB"></div>
												</div>
											</div>
											<div class="clearB"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

																<div id="noteDetails" name="noteDetails" class="fL clearAfterB relatedlist-bg">
																	<table class="w600 dvw720 detailsNotesSection dvnotesTable dvcompHeader mB15">
																		<tbody>
																			<tr>
																				<td class="NoteHeadtitle">
																					<div class="ntit feedsTextclr cP">  Notes </div>
																					<a href="javascript:void(0);" class="btn btn-primary" id="mpopupLink"><i class="fa fa-plus tt" style="color: white;"></i></a>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<div id="toggleNotes" class="w600 dvw720 flex-grid-skeleton mB0">
																		<div id="fullInfoNoteDiv" class="p10 fL w100per">
@foreach($notes as $note)																	<div>
<div class="actnotes" style="width:100%;">
	
	<div class="singleNoteBorder addedNotesList pT7 pB7">
		<table class="w100p">
			<tbody>
				<tr class="n pR w100p pB0">
					<td class=" pL10 pR10 w100p pR">
						<div class="pB5 cBafter feedchatDesEle">
							<!--<div id="ntitle_396265000000500003" class="bold wwbw f14 dispAddNotesTitle">Title - {{$note->title}}</div>-->
							
							<pre id="ncontent_396265000000500003" wrap="soft" class="pre f14 fL cB col333 p5 pT10 ">Notes - {{$note->notes}}
							</pre>
							<span style="clear:left;">
							</span>     
							<div class="mT5 f13 gray2 fL cB lh20 notesBtmDet"> 
								<span class="notesModdet fL"> 
								<span class="notesgray fL ellipsistext cD" style="max-width: 100px;" title="Account">Account
								</span> 
								<span class="pL5 pR5 fL">-
								</span> 
								{{$note->added_by}}
								</span> 
								<span class="fL pL10 pR10 notesDot">•
								</span>  
								<span class="fL pR5 notesgray dIB">
								<span class="timerIcon-notes fL mR5">
								</span>{{$note->created_at}}
								</span> 
								<span class="fL pR5 notesgray dIB">by
								</span> 
								<span class="fL pR5 notesgray dIB">{{$note->added_by}}
								</span>   
								<span class="pA whiteBg notes_actions_container" id="noteOper_396265000000500003" style="visibility: hidden; top: 10px; right: 0px;">  
								</span>  
							</div>  
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endforeach
</br>
					<div class="pL10 pR10" style="padding-left: 12px;" id="notes-element-parent">
						<table>
							<tbody>
								<!-- <tr id="title_tr">
									<td>
										<input class="nobdr w100p p5 lineHgt20 f14" id="notes" placeholder="Add a note...">
									</td>
								</tr> 
								<tr>
									<td>
										<input type="hidden" id="account_id" value="{{$account->id}}">
										<div class="w100per feed_newpost_textarea_bg">
											<div class="notescontent-revamp w100per"> 
												
												<input class="nobdr w100p p5 lineHgt20 f14" id="notes" placeholder="Add a note..." style="height:60px; overflow:auto !important; resize:vertical !important;padding: 5px;">
											</div>
											<div class="notesbuttonlayer-revamp flexAlignCenter spaceBetween feedButtonLayer">
												
												<div class="dF"> 
													<input type="button" class="newgraybtn newgraynotesbtn bt-mediumnewgraybtn" value="Cancel"> 
													<input id="save_comment"  type="button" class="primarybtn mR0 primarynotesbtn bt-mediumprimarybtn" value="Save"> 
												</div>
											</div>
										</div>
													
									</td>
								</tr>-->
							</tbody>
						</table>
					</div>
																	</div>
																</div>
																<div class="cB"></div>
																<div id="attributionDetails">&nbsp;</div>
															</div>
															<div class="cB"></div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	<!-- Modal popup box -->
<div id="mpopupBox" class="mpopup">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
	        <h4 class="modal-title">Add Notes</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	    </div>
        <div class="modal-body">
            <div class="row justify-content-between">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-white border-0 b-shadow-4">
                                <div class="card-body ">
                                    <form action="{{ route('add_comment') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label required">Note</label>
                                            <div class="col-sm-9">
                                               <textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="60"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="account_id" value="{{$account->id}}">
                                        <input type="hidden" name="popup" value="1">
                                        <input type="submit" class="btn btn-primary" value="Save"> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
    </div>
</div>
	{{ csrf_field() }}
	<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(document).on('click','#save_comment',(function(){
				var _token = $('input[name="_token"]').val();
				var notes = $('#notes').val();
				var account_id = $('#account_id').val();
				var title = $('#title').val();
	            $.ajax({
	                url: "{{ route('add_comment') }}",
	                method: 'POST',
	                data:{account_id:account_id,title:title,notes:notes, _token:_token},
	                success: function(response) {
	                    //$('#clock').html(response);
	                    location.reload();
	                }
	            });
			}));
			
			var mpopup = document.getElementById('mpopupBox');

			// Select trigger link
			var mpLink = document.getElementById("mpopupLink");

			// Select close action element
			var close = document.getElementsByClassName("close")[0];

			// Open modal once the link is clicked
			mpLink.onclick = function() {
			    mpopup.style.display = "block";
			};

			// Close modal once close element is clicked
			close.onclick = function() {
			    mpopup.style.display = "none";
			};

			// Close modal when user clicks outside of the modal box
			window.onclick = function(event) {
			    if (event.target == mpopup) {
			        mpopup.style.display = "none";
			    }
			};
        });
    </script>
    <style type="text/css">
    	.mpopup {
		    display: none;
		    position: fixed;
		    z-index: 1;
		    padding-top: 100px;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    overflow: auto;
		    background-color: rgb(0,0,0);
		    background-color: rgba(0,0,0,0.4);
		}
		.modal-content {
		    position: relative;
		    background-color: #fff;
		    margin: auto;
		    padding: 0;
		    width: 700px;
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		    -webkit-animation-name: animatetop;
		    -webkit-animation-duration: 0.4s;
		    animation-name: animatetop;
		    animation-duration: 0.4s;
		    border-radius: 0.3rem;
		}
		.modal-header {
		    padding: 2px 12px;
		    background-color: #ffffff;
		    color: #333;
		    border-bottom: 1px solid #e9ecef;
		    border-top-left-radius: 0.3rem;
		    border-top-right-radius: 0.3rem;
		}
		.modal-header h2{
		    font-size: 1.25rem;
		    margin-top: 14px;
		    margin-bottom: 14px;
		}
		.modal-body {
		    padding: 2px 12px;
		}
		.modal-footer {
		    padding: 1rem;
		    background-color: #ffffff;
		    color: #333;
		    border-top: 1px solid #e9ecef;
		    border-bottom-left-radius: 0.3rem;
		    border-bottom-right-radius: 0.3rem;
		    text-align: right;
		}

		.close {
		    color: #888;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}
		.close:hover, .close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}

		/* add animation effects */
		@-webkit-keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}

		@keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}
    </style>
@endsection