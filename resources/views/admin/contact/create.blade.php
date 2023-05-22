@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
		<form action="{{ route('store_contact') }}" method="post" enctype="multipart/form-data">
             @csrf 
			<div class="crm-create-layout">
				<div class="create-titlebar pR stick">
					<div class="lcreate-t-contents">
						<div class="lcreate-t-innerContents">
							<div class="pL30 pR30 heading_title">
								<div class="heading_title_inner">
									<label class="dIB vam create-title-label">Create Contact</label>
								</div>
							</div>
							<div class="alignright create-title-right">
								<div class="create_button_comp">
									<div class="lyte-button fR">
										<!-- <button type="button" class="lyte-button primarybtn lytePrimaryBtn">Save
										</button> -->
										<input type="submit" class="lyte-button primarybtn lytePrimaryBtn" value="Save">
									</div>
									<div class="lyte-button fR">
										<a class="lyte-button primarybtn lytePrimaryBtn"  href="{{ route('contact_lists') }}">Cancel</a>
									</div>
									<!-- <div class="lyte-button fR">
										<button type="button" class="lyte-button basicbutton lyteDefaultBtn">Save and New
										</button>
									</div>
									<div class="lyte-button">
										<button type="button" class="lyte-button basicbutton lyteDefaultBtn">Cancel 
										</button>
									</div> -->
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
									<div class="fL">Contact Information</div>
									<div class="clearB"></div>
								</div>
								<div class="create-two-column dF">
									<div class="container1">
									    <div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">
													Account Name
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="account_id" id="account_id" style="width: 100%;height: 33px;border-radius: 6px" required>
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
												<div class="customfieldLabel" style="width:220px;">
													First Name
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="first_name">
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
													Last Name   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="last_name">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Designation</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="designation">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Campaign Name </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="campaign_name">
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
																<div class="lyteField">
																	<input type="text" name="notes">
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
												<div class="customfieldLabel" style="width:220px;">Email ID</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="email">
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
													Secondary Email ID  
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="secondary_email">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Phone No.</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="phone">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Mobile No.</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="mobile">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Linkedin ID</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="linkedin">
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
													Follow up date   
												</div>
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
								</div>
							</div>
						</div>
					</div>
					<div class="396265000000000171_3 dispB">
						<div  class="crm-cs-inner">
							<div class="mainDetailsContainer mB40">
								<div class="create-det-title">
									<div id="sectitle" class="fL">
										Description Information
									</div>
									<div class="clearB">
									</div>
								</div>
								<div class="singleContainer">
									<div class="crm-create-fields">
										<div class="custabDivCreate">
											<div class="customfieldLabel create-ml-label" style="width:220px;">
												Description   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
														<div class="lyteField">
																<input type="text" name="description">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#account_id").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
    </script>
    <style type="text/css">
    	#account_id{
    		width: 100% ! !important;
    		border: 1px solid !important;
    		width: 100%;height: 33px !important;
    		border-radius: 6px !important;
    		border: 1px solid var(--formBorderHover);
    	}
    	.select2-results{
    		width: 390px;
    	}
    </style>
@endsection