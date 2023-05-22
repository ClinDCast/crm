@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
		<form action="{{ route('store_meeting') }}" method="post" enctype="multipart/form-data">
             @csrf 
			<div class="crm-create-layout">
				<div class="create-titlebar pR stick">
					<div class="lcreate-t-contents">
						<div class="lcreate-t-innerContents">
							<div class="pL30 pR30 heading_title">
								<div class="heading_title_inner">
									<label class="dIB vam create-title-label">Create Meeting</label>
								</div>
							</div>
							<div class="alignright create-title-right">
								<div class="create_button_comp">
									<div class="lyte-button fR">
										<input type="submit" class="lyte-button primarybtn lytePrimaryBtn" value="Save">
									</div>
									<div class="lyte-button fR">
										<a class="lyte-button primarybtn lytePrimaryBtn"  href="{{ route('meeting_lists') }}">Cancel</a>
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
																	<select name="organizer" id="organizer">
																		<option value="">Select</option>
																		@foreach($users as $sales)
																			<option value="{{$sales->id}}">{{$sales->name}} {{$sales->last_name}}</option>
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
																		<option value="New">New</option>
																		<option value="Follow-up">Follow-up</option>
																		<option value="Other">Other</option>
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
																	<input type="date" name="m_date">
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
																	<input type="text" name="m_time">
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
																	<input type="text" name="meeting_title">
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
																	<input type="date" name="follow_up_date">
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
												<div class="customfieldLabel" style="width:220px;">Account Name</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="client_name" id="client_name" style="width: 387px;height: 32px">
																		<option value="">Select</option>
																		@foreach($accounts as $account)
																			<option value="{{$account->id}}">{{$account->account_name}}</option>
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
																	<select name="contact[]" id="contact" style="width: 100%;height: 32px;" multiple>
																		<option value="">Select</option>
																		@foreach($contacts as $contact)
																			<option value="{{$contact->id}}">{{$contact->name}} {{$contact->last_name}}</option>
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
																<textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="4" cols="48"></textarea>
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
																<div class="lyteField">
																	<!--<input type="text" name="status">-->
																	<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																		<select name="status" style="width: 100%;height: 32px;">
																		<option value="">Select</option>
																		<option value="1st meeting">1st meeting</option>
																		<option value="2nd meeting">2nd meeting</option>
																		<option value="3rd meeting">3rd meeting</option>
																		<option value="In-process">In-process</option>
																		<option value="MSA in Process">MSA in Process</option>
																		<option value="NDA in Process">NDA in Process</option>
																		<option value="Not ICP">Not ICP</option>
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
			</div>
		</form>
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
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
		
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
    	.select2-results{
    	    width: 390px;
    	}
    </style>
@endsection