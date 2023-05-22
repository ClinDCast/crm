@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
				<div id="BodyContent" class="DetailsPageRevampBox">
					<div id="detailViewButtonLayerDiv" class="pL50 tag_topSectionFixed pB0 dvheaderScrollFIxed" style="width: 1259px;">
						<table cellpadding="0" cellspacing="0" width="100%" class="dvbtnlayer robotoRegular" id="detailViewButtonLayerMainTable">
							<tbody>
								<tr id="detailViewButtonLayerMainTableRow">
									<td align="center" nowrap="" class="pR detailView_visible alignleft" style="width: 19px;"> 
										<a id="backArrowDV" href="{{ route('meeting_lists') }}" class="mLMinus41" data-cid="backOneLevel" data-zcqa="backOneLevel" data-params="{&quot;step&quot;:&quot;&quot;}"> 
										<span class="backtoIcon dIB mT3" width="38px" height="23px" border="0" lt-prop-title="Back">
										</span> 
										</a> 
									</td>
									<td class="pL10 detailView_visible" id="dv_title">
										<div id="cpq-breadcrumb"></div>
										<div id="topSectionTitle" class="sectionTitle">
											<span id="headervalue_meetingNAME" class="dvTitle crm-font-bold f20 dvtitle_color lh26">
												<span class="busniess_card_Hover formatLtr w100per  ">
												<span class="bCardHover formatLtr">{{$meeting->meeting_title}}
												</span>
												</span>
											</span>
										</div>
									</td>
									<td nowrap="" class="pL10 dvmo  send_mailbtndetailpage alignright">
										<div id="fixedBtn" class="dIB vam"></div>
										<div class="dIB vam">
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<table width="100%" cellspacing="0" cellpadding="0" id="panelTab">
						<tbody>
							<tr>
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
													<div id="dvinner" class="p30 pT15 pb0 " style="overflow: auto;box-sizing: border-box;">
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
																						<span class="lpDivHeadD crm-font-bold f17">Meeting
																						</span>  
																						<table cellpadding="0" cellspacing="0" class="mT15 crm-font-semibold f15" style="">
																						<tbody>
																							<tr>
																								<td valign="top">
																									<div>
																										<span> 
																										{{$meeting->meeting_title}}
																										</span> 
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
																							<div class="viewParentSection mT18   " id="secDiv_meeting_Information">
																								<div class="mB5">
																									<div class="contHeadInfo color_5 sum crm-font-bold p0">Meeting Information</div>
																								</div>
														<div class="contInfoTab_0 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Organizer 
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">
																			@foreach($salesteam as $sales)
            																		@if($meeting->organizer == $sales->id) 
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
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Type
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$meeting->type}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Date
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{date("M d , Y", strtotime($meeting->m_date))}}</</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Time
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$meeting->m_time}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Meeting Title
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$meeting->meeting_title}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Follow-up Date
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$meeting->follow_up_date}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															@php
															$Clientname ='';
															if($meeting->client_name !=''){
															    $Clientname = App\Models\Account::select('account_name')->where('id', $meeting->client_name)->first()->account_name;
															}
															$Contactname ='';
															if($meeting->contact !=''){
																$contact_arr = explode(',', $meeting->contact);
																$i=0;
																foreach($contact_arr as $contact_ar){
																	if($i!=0){
																		$Contactname .=', ';
																	}
	    															$Contact = App\Models\Contact::select('first_name','last_name')->where('id', $contact_ar)->first();
	    															if(!empty($Contact)){
	    																$Contactname .= $Contact->first_name.' '.$Contact->last_name;
	    															}
	    															$i++;
	    														}
    														}
															
															@endphp
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Client Name
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$Clientname}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Contact
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$Contactname}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Note
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$meeting->notes}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Status
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$meeting->status}}</lyte-text>
																		</span>
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
@foreach($notes as $note)
<div>
<div class="actnotes" style="width:100%;">
	
	<div class="singleNoteBorder addedNotesList pT7 pB7">
		<table class="w100p">
			<tbody>
				<tr class="n pR w100p pB0">
					<td class=" pL10 pR10 w100p pR">
						<div class="pB5 cBafter feedchatDesEle">
							<pre id="ncontent_396265000000500003" wrap="soft" class="pre f14 fL cB col333 p5 pT10 ">Notes - {{$note->notes}}
							</pre>
							<span style="clear:left;">
							</span>     
							<div class="mT5 f13 gray2 fL cB lh20 notesBtmDet"> 
								<span class="notesModdet fL"> 
								<span class="notesgray fL ellipsistext cD" style="max-width: 100px;" title="meeting">meeting
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
	        <h4 class="modal-title"  style="color: var(--primaryColor);">Add Note</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	    </div>
        <div class="modal-body">
            <div class="row justify-content-between">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-white border-0 b-shadow-4">
                                <div class="card-body ">
                                    <form action="{{ route('add_comment_meeting') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label required">Note</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="60"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="meeting_id" value="{{$meeting->id}}">
                                        <input type="hidden" name="popup" value="1">
                                        <input type="submit" class="primarybtn" value="Save"> 
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
		    padding-top: 150px;
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
		    padding: 6px 12px;
		    background-color: #0c6ead;
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
		    color: var(--primaryColor);
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