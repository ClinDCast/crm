@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
				<div id="BodyContent" class="DetailsPageRevampBox">
					<div id="detailViewButtonLayerDiv" class="pL50 tag_topSectionFixed pB0 dvheaderScrollFIxed" style="width: 1259px;">
						<table cellpadding="0" cellspacing="0" width="100%" class="dvbtnlayer robotoRegular" id="detailViewButtonLayerMainTable">
							<tbody>
								<tr id="detailViewButtonLayerMainTableRow">
									<td align="center" nowrap="" class="pR detailView_visible alignleft" style="width: 19px;"> 
										<a id="backArrowDV" href="{{ route('contact_lists') }}" class="mLMinus41" data-cid="backOneLevel" data-zcqa="backOneLevel" data-params="{&quot;step&quot;:&quot;&quot;}"> 
										<span class="backtoIcon dIB mT3" width="38px" height="23px" border="0" lt-prop-title="Back">
										</span> 
										</a> 
									</td>
									<td class="pL10 detailView_visible" id="dv_title">
										<div id="cpq-breadcrumb"></div>
										<div id="topSectionTitle" class="sectionTitle">
											<span id="headervalue_contactNAME" class="dvTitle crm-font-bold f20 dvtitle_color lh26">
												<span class="busniess_card_Hover formatLtr w100per  ">
												<span class="bCardHover formatLtr">{{$contact->first_name}} {{$contact->last_name}}
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
														<!-- <ul class="lpUl bgLiUl" id="lp_rellist">
															<li class="bgLi cP black"> 
																<a href="javascript:;" class="robotoRegular">Notes
																</a> 
															</li>
														</ul> -->
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
														<div>
															<span id="recevent" class="mandatory">
															</span> 
															<div class="dvScrollContainier">
																<div id="pb_processButtonLayer" class="flex-grid-skeleton p20 robotoRegular relatedlist-bg"></div>
																<div id="pb_processPreviewLayer"></div>
																<div style="position:relative; height:1px;z-index:2">
																	
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
																							<div class="viewParentSection mT18   " id="secDiv_contact_Information">
																								<div class="mB5">
																									<div class="contHeadInfo color_5 sum crm-font-bold p0">contact Information</div>
																								</div>
														<div class="contInfoTab_0 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Name
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$contact->first_name}} {{$contact->last_name}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Designation
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$contact->designation}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_8 ">
																<div class="tabDiv pR dblClk ">
																	<span id="labelTD_SMOWNERID" class="columnCal1 labelTab" style="width: 137.599px;">Campaign Name
																	</span>
																	<span  class="labelVal crm-font-regular mL45 formatLtr" >
																		<span>
																			<lyte-text class="wsnormal vam">{{$contact->campaign_name}}</lyte-text>
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
																			<lyte-text class="wsnormal vam">{{$contact->notes}}</lyte-text>
																		</span>
																	</span>
																</div>
															</div>
														</div>
														<div class="contInfoTab_1 floatL dobColLayout">
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Email ID
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$contact->email}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Secondary Email ID 
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$contact->secondary_email}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Phone No.
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$contact->phone}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Mobile No.
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$contact->mobile}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Linkedin ID
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$contact->linkedin}}
																	</span>
																	</span>
																</div>
															</div>
															<div class="tabdiv  pR  uitype_2 ">
																<div class="tabDiv pR dblClk"> 
																	<span class="columnCal1 labelTab columnCal2" style="width: 140.786px;">Follow up date
																	</span>
																	<span class="labelVal crm-font-regular mL45 formatLtr">
																	<span class="formatLtr">{{$contact->follow_up_date}}
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
																			<lyte-text class="wsnormal vam">{{$contact->description}}</lyte-text>
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
								</div>
							</div>
							<div class="cB"></div>

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
	        <h4 class="modal-title" style="color: var(--primaryColor);">Add Note</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	    </div>
        <div class="modal-body">
            <div class="row justify-content-between">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-white border-0 b-shadow-4">
                                <div class="card-body ">
                                    <form action="{{ route('add_comment_contact') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label required">Note</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="60"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="contact_id" value="{{$contact->id}}">
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
            $(document).on('click','#save_comment',(function(){
				var _token = $('input[name="_token"]').val();
				var notes = $('#notes').val();
				var contact_id = $('#contact_id').val();
				var title = $('#title').val();
	            $.ajax({
	                url: "{{ route('add_comment_contact') }}",
	                method: 'POST',
	                data:{contact_id:contact_id,title:title,notes:notes, _token:_token},
	                success: function(response) {
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