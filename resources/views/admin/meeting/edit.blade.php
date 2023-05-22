@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
		<form action="{{ route('update_meeting',$meeting->id) }}" method="post" enctype="multipart/form-data">
             @csrf 
			<div class="crm-create-layout">
				<div class="create-titlebar pR stick">
					<div class="lcreate-t-contents">
						<div class="lcreate-t-innerContents">
							<div class="pL30 pR30 heading_title">
								<div class="heading_title_inner">
									<label class="dIB vam create-title-label">Edit Meeting</label>
								</div>
							</div>
							<div class="alignright create-title-right">
								<div class="create_button_comp">
									<div class="lyte-button fR">
										<input type="submit" class="lyte-button primarybtn lytePrimaryBtn" value="Update">
									</div>
									<div class="lyte-button fR">
										<a class="lyte-button primarybtn lytePrimaryBtn"  href="{{ route('meeting_lists') }}">Cancel</a>
									</div>
									<div class="lyte-button fR">
										<button type="button" class="primarybtn" id="mpopupLink">Add Note
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lcrm-details-sections lcrm-create-sections lbox newInputStyleEle1">
					<div class="396265000000000171_1 dispB">
						<div  class="crm-cs-inner">
							<div class="mainDetailsContainer mB40">
								<div class="create-det-title">
									<div class="fL">Meeting Information</div>
									<div class="clearB"></div>
								</div>
								<div class="create-two-column dF">
									<div class="container1">
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:214.22335815429688px;">
													Organizer
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="organizer" id="organizer" style="width: 100%;height: 33px;border-radius: 6px">
																		<option value="">Select</option>
																		@foreach($users as $sales)
																			<option value="{{$sales->id}}" @if($sales->id == $meeting->organizer) Selected @endif>{{$sales->name}} {{$sales->last_name}}</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">
													Type
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="type" style="width: 100%; height: 100%; border-radius: 4px;">
																		<option value="New" @if($meeting->type=='New') Selected @endif>New</option>
																		<option value="Follow-up" @if($meeting->type=='Follow-up') Selected @endif>Follow-up</option>
																		<option value="Other" @if($meeting->type=='Other') Selected @endif>Other</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:214.22335815429688px;">
													Date   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="date" name="m_date" value="{{$meeting->m_date}}">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Time</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="m_time" value="{{$meeting->m_time}}">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Meeting Title </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="meeting_title" value="{{$meeting->meeting_title}}">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Follow-up Date  </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="date" name="follow_up_date" value="{{$meeting->follow_up_date}}">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="container2">
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Client Name</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="client_name" id="client_name">
																		<option value="">Select</option>
																		@foreach($accounts as $account)
																			<option value="{{$account->id}}" @if($account->id == $meeting->client_name) selected @endif>{{$account->account_name}}</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:214.22335815429688px;">
													Contact 
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																    @php $contact_id_arr = explode(',', $meeting->contact); @endphp
																	<select name="contact[]" id="contact" style="width: 100%;height: 32px;" multiple>
																		<option value="">Select</option>
																		@foreach($contacts as $contact)
																			<option value="{{$contact->id}}" @if(in_array($contact->id, $contact_id_arr)) Selected @endif>{{$contact->first_name}} {{$contact->last_name}}</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> 
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Notes</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="4" cols="48">{{$meeting->notes}}</textarea>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Status</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<!--<div class="lyteField">-->
																<!--	<input type="text" name="status" value="{{$meeting->status}}">-->
																<!--</div>-->
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="status" style="width: 100%;height: 32px;">
																		<option value="">Select</option>
																		<option value="1st meeting" @if('1st meeting' == $meeting->status) Selected @endif>1st meeting</option>
																		<option value="2nd meeting" @if('2nd meeting' == $meeting->status) Selected @endif>2nd meeting</option>
																		<option value="3rd meeting" @if('3rd meeting' == $meeting->status) Selected @endif>3rd meeting</option>
																		<option value="In-process" @if('In-process' == $meeting->status) Selected @endif>In-process</option>
																		<option value="MSA in Process" @if('MSA in Process' == $meeting->status) Selected @endif>MSA in Process</option>
																		<option value="NDA in Process" @if('NDA in Process' == $meeting->status) Selected @endif>NDA in Process</option>
																		<option value="Not ICP" @if('Not ICP' == $meeting->status) Selected @endif>Not ICP</option>
																	</select>
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
			</div>
		</form>
		<div id="BodyContent" class="DetailsPageRevampBox">
			<table width="100%" cellspacing="0" cellpadding="0" id="panelTab">
				<tbody>
					<tr>
						<td valign="top">
							<div class="DetailViewInnerPage DetailsPageBox">
								<div id="newInfoDiv" style="overflow:hidden">
									<div id="leftPanel" class="newDetailPageStyle">
										<form method="post" name="viewentityform" onsubmit="return false">
											<div class="dvEmptyButtonDiv" id="dvEmptyButtonDiv"></div>
											<div id="dvinner" class="p30 pT15 pb0 " style="overflow: auto;box-sizing: border-box;">
												<div style="width: 100%;">
													<div class="dvScrollContainier">
														<div id="widget_businessCard" class="widget_businessCardDiv relatedlist-bg"></div>
														<div id="noteDetails" name="noteDetails" class="fL clearAfterB relatedlist-bg">
															<table class="w600 dvw720 detailsNotesSection dvnotesTable dvcompHeader mB15">
																<tbody>
																	<tr>
																		<td class="NoteHeadtitle">
																			<div class="ntit feedsTextclr cP">  Notes </div>
																		</td>
																	</tr>
																</tbody>
															</table>
															<div id="toggleNotes" class="w600 dvw720 flex-grid-skeleton mB0">
																<div id="fullInfoNoteDiv" class="p10 fL w100per">
																	@foreach($notes as $note)
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
																</div>
															</div>
														</div>
														<div class="cB"></div>
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
                                    <form action="{{ route('add_comment_meeting_edit') }}" method="post" enctype="multipart/form-data">
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
	<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(document).on('change','#client_name',(function(){
				var _token = $('input[name="_token"]').val();
				var account_id = $('#client_name').val();
	            $.ajax({
	                url: "{{ route('get_contact') }}",
	                method: 'POST',
	                data:{account_id:account_id, _token:_token},
	                success: function(response) {
	                    $("#contact").html(response);
	                }
	            });
			}));
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#organizer").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
      	$("#contact").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
      	$("#client_name").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
    </script>
    <style type="text/css">
    	#organizer{
    		width: 100% ! !important;
    		border: 1px solid !important;
    		width: 100%;height: 33px !important;
    		border-radius: 6px !important;
    	}
    </style>
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