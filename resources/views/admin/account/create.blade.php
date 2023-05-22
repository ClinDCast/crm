@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
		<form action="{{ route('store_account') }}" method="post" enctype="multipart/form-data">
             @csrf
			<div class="crm-create-layout">
				<div class="create-titlebar pR stick">
					<div class="lcreate-t-contents">
						<div class="lcreate-t-innerContents">
							<div class="pL30 pR30 heading_title">
								<div class="heading_title_inner">
									<label class="dIB vam create-title-label">Create Account</label>
								</div>
							</div>
							<div class="alignright create-title-right">
								<div class="create_button_comp">
									<div class="lyte-button fR">
										<input type="submit" class="lyte-button primarybtn lytePrimaryBtn" value="Save">
									</div>
									<div class="lyte-button fR">
										<a class="lyte-button primarybtn lytePrimaryBtn"  href="{{ route('account_lists') }}">Cancel</a>
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
									<div class="fL">Account Information</div>
									<div class="clearB"></div>
								</div>
								<?php $total = App\Models\Account::count()+1; ?>
								<div class="create-two-column dF">
									<div class="container1">
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Account#</div>
												<div class="customfieldValue">
													<div class="customfieldValue">
														<div class="crux-text-component">
															<div class="cxElementValue">
																<div class="lyteInputBox">
																	<div class="lyteField">
																		<input type="number" min="1" name="account"  value="{{$total}}" disabled>
																	</div>
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
													Account Name
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="account_name">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Why added to ICP</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="added_to_icp">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Account Type</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																	<select name="account_type" id="account_type" style="width: 100%;height: 32px;">
																		@foreach($account_types as $account_type)
																		<option value="{{$account_type->value}}">{{$account_type->value}}</option>
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
													Description  
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<!-- <div class="lyteField"> -->
																	<textarea type="text" name="description" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="48"></textarea>
																<!-- </div> -->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Source</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<!-- <input type="text" name="source"> -->
																	<select name="source" style="width: 100%;height: 33px;border-radius: 6px">
																	    <option value="">Select</option>
																		<option value="Conference">Conference</option>
																		<option value="Professional Contact">Professional Contact</option>
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
												<div class="customfieldLabel" style="width:220px;">Employees Count </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="employees_count">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">SIC Code</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="sic_code">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Created by </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" value="{{Auth::user()->id}}" name="created_by" disabled>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Notes </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<!-- <div class="lyteField"> -->
																	<textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="48"></textarea>
																<!-- </div> -->
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
												<div class="customfieldLabel" style="width:214.22335815429688px;">
													Website   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="website">
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
													Linkedin   
												</div>
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
												Business Phone   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="business_phone">
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
													Business Email   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="business_email">
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
													Twitter   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="twitter">
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
													Email-1   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="email1">
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
													Email-2   
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="email2">
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
													Phone-1  
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="phone1">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" id="Crm_Contacts_SKYPEIDENTITY_label" style="width:214.22335815429688px;">
													Phone-2  
												</div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" name="phone2">
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
					<div class="396265000000000171_2 dispB">
						<div class="crm-cs-inner">
							<div class="mainDetailsContainer mB40">
								<div class="create-det-title">
									<div class="fL">
										Lead Generation Process
									</div>
								</div>
							</div>
							<div class="create-two-column dF">
								<div class="container1">
									<div class="crm-create-fields">
										<div class="custabDivCreate">
											<div class="customfieldLabel"style="width:220px;">
												SOAP Status   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<select name="soap_status" style="width: 100%;height: 33px;border-radius: 6px">
																    <option value="">Select</option>
																	<!-- <option value="Selection">Selection</option> -->
																	<option value="Observation">Observation</option>
																	<option value="Activation">Activation</option>
																	<option value="Position">Position</option>
																	<option value="NOT ICP">NOT ICP</option>
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
											<div class="customfieldLabel"style="width:220px;">
												Source   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<select name="lead_source" style="width: 100%;height: 33px;border-radius: 6px">
																    <option value="">Select</option>
																	<option value="Conference">Conference</option>
																	<option value="Professional Contact">Professional Contact</option>
																	<option value="Other">Other</option>
																</select>
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
											<div class="customfieldLabel" style="width:214.22335815429688px;">
												Lead Generator
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																<select name="lead_generator" id="lead_generator" style="width: 100%;height: 32px;">
																	<option value="">Select</option>
																	@foreach($salesteam as $sales)
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
								</div>
							</div>
						</div>
					</div>
					<div class="396265000000000171_2 dispB">
						<div class="crm-cs-inner">
							<div class="mainDetailsContainer mB40">
								<div class="create-det-title">
									<div class="fL">
										Marketing Process
									</div>
								</div>
							</div>
							<div class="create-two-column dF">
								<div class="container1">
									<div class="crm-create-fields">
										<div class="custabDivCreate">
											<div class="customfieldLabel"style="width:220px;">
												SOAP Status   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<select name="marketing_soap_status" style="width: 100%;height: 33px;border-radius: 6px">
																	 <option value="">Select</option> 
																	<option value="Observation">Observation</option>
																	<option value="Activation">Activation</option>
																	<option value="Position">Position</option>
																	<option value="NOT ICP">NOT ICP</option>
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
											<div class="customfieldLabel"style="width:220px;">
												#of Contacts added   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="contact_added">
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
											<div class="customfieldLabel" style="width:214.22335815429688px;">
												Marketing
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField" style="border: 2px solid var(--formBorder); border-radius: 6px; height: 35px;">
																<!--<input type="text" name="marketing">-->
																<select name="marketing" id="marketing" style="width: 100%;height: 32px;">
																	<option value="">Select</option>
																	@foreach($salesteam as $sales)
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
								</div>
							</div>
						</div>
					</div>
					<div class="396265000000000171_2 dispB">
						<div class="crm-cs-inner">
							<div class="mainDetailsContainer mB40">
								<div class="create-det-title">
									<div class="fL">
										Address Information
									</div>
								</div>
							</div>
							<div class="create-two-column dF">
								<div class="container1">
									<div class="crm-create-fields">
										<div class="custabDivCreate">
											<div class="customfieldLabel"style="width:220px;">
												Billing Street   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="billing_street">
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
												Billing City   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="billing_city">
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
												Billing State
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="billing_state">
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
												Billing Code   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="billing_code">
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
												Billing Country   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="billing_country">
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
											<div class="customfieldLabel" style="width:214.22335815429688px;">
												Shipping Street
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="shipping_street">
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
												Shipping City
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="shipping_city">
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
												Shipping State   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="shipping_state">
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
												Shipping Code   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="shipping_code">
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
												Shipping Country   
											</div>
											<div class="customfieldValue">
												<div class="crux-text-component">
													<div class="cxElementValue">
														<div class="lyteInputBox">
															<div class="lyteField">
																<input type="text" name="shipping_country">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script>
        $("#lead_generator").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
      	$("#marketing").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
      	$("#account_type").select2({
          	placeholder: "Select",
          	allowClear: true,
      	});
    </script>
    <style type="text/css">
    	.select2-results{
    		width: 390px;
    	}
    </style>
@endsection