@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
		<form action="{{ route('update_account',$account->id) }}" method="post" enctype="multipart/form-data">
             @csrf 
			<input type="submit" class="pA" style="top:-1000px">
			<div class="crm-create-layout">
				<div class="create-titlebar pR stick">
					<div class="lcreate-t-contents">
						<div class="lcreate-t-innerContents">
							<div class="pL30 pR30 heading_title">
								<div class="heading_title_inner">
									<label class="dIB vam create-title-label">Edit Account</label>
								</div>
							</div>
							<div class="alignright create-title-right">
								<div class="create_button_comp">
									<div class="lyte-button fR">
										<input type="submit" class="lyte-button primarybtn lytePrimaryBtn" value="Update">
									</div>
									<div class="lyte-button fR">
										<a class="lyte-button primarybtn lytePrimaryBtn"  href="{{ route('account_lists') }}">Cancel</a>
									</div>
									<div class="lyte-button fR">
										<button type="button" class="primarybtn" id="mpopupLink">Add Note
										</button>
									</div>
									<!-- <div class="lyte-button fR">
										<button type="button" class="lyte-button basicbutton lyteDefaultBtn">Save and New
										</button>
									</div> -->
									<!-- <div class="lyte-button">
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
									<div class="fL">Account Information</div>
									<div class="clearB"></div>
								</div>
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
																		<input type="number" min="1" name="account"  value="{{$account->account}}" disabled>
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
																	<input type="text" value="{{$account->account_name}}" name="account_name">
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
																	<input type="text" value="{{$account->added_to_icp}}" name="added_to_icp">
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
																		<option value="{{$account_type->value}}" @if($account->account_type ==$account_type->value) Selected @endif>{{$account_type->value}}</option>
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
																<textarea type="textarea" name="description" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="48">{{$account->description}}</textarea>
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
																	<select name="source" style="width: 100%;height: 33px;border-radius: 6px">
																	    <option value="">Select</option>
																		<option value="Conference" @if($account->source =='Conference') Selected @endif>Conference</option>
																		<option value="Professional Contact" @if($account->source =='Professional Contact') Selected @endif>Professional Contact</option>
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
																	<input type="text" value="{{$account->employees_count}}" name="employees_count">
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
																	<input type="text" value="{{$account->sic_code}}" name="sic_code">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								        @php
    										$name ='';
    										$User = App\Models\User::select('name','last_name')->where('id', $account->created_by)->first();
    										if(!empty($User)){
    											$name = $User->name.' '.$User->last_name;
    										}
										@endphp
										<div class="crm-create-fields">
											<div class="custabDivCreate">
												<div class="customfieldLabel" style="width:220px;">Created by </div>
												<div class="customfieldValue">
													<div class="crux-text-component">
														<div class="cxElementValue">
															<div class="lyteInputBox">
																<div class="lyteField">
																	<input type="text" value="{{$name}}" name="created_by" disabled>
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
																<textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="48">{{$account->notes}}</textarea>
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
																	<input type="text" value="{{$account->website}}" name="website">
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
																	<input type="text" value="{{$account->linkedin}}" name="linkedin">
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
																	<input type="text" value="{{$account->business_phone}}" name="business_phone">
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
																	<input type="text" value="{{$account->business_email}}" name="business_email">
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
																	<input type="text" value="{{$account->twitter}}" name="twitter">
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
																	<input type="text" value="{{$account->email1}}" name="email1">
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
																	<input type="text" value="{{$account->email2}}" name="email2">
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
																	<input type="text" value="{{$account->phone1}}" name="phone1">
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
																	<input type="text" value="{{$account->phone2}}" name="phone2">
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
																	<option value="Observation" @if($account->soap_status =='Observation') Selected @endif>Observation</option>
																	<option value="Activation" @if($account->soap_status =='Activation') Selected @endif>Activation</option>
																	<option value="Position" @if($account->soap_status =='Position') Selected @endif>Position</option>
																	<option value="NOT ICP" @if($account->soap_status =='NOT ICP') Selected @endif>NOT ICP</option>
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
																	<option value="Conference" @if($account->lead_source =='Conference') Selected @endif>Conference</option>
																	<option value="Professional Contact" @if($account->lead_source =='Professional Contact') Selected @endif>Professional Contact</option>
																	<option value="Other" @if($account->lead_source =='Other') Selected @endif>Other</option>
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
																		<option value="{{$sales->id}}" @if($sales->id == $account->lead_generator) Selected @endif>{{$sales->name}} {{$sales->last_name}}</option>
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
																	<option value="Observation" @if($account->marketing_soap_status =='Observation') Selected @endif>Observation</option>
																	<option value="Activation" @if($account->marketing_soap_status =='Activation') Selected @endif>Activation</option>
																	<option value="Position" @if($account->marketing_soap_status =='Position') Selected @endif>Position</option>
																	<option value="NOT ICP" @if($account->marketing_soap_status =='NOT ICP') Selected @endif>NOT ICP</option>
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
																<input type="text" value="{{$account->contact_added}}" name="contact_added">
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
																<select name="marketing" id="marketing" style="width: 100%;height: 32px;">
																	<option value="">Select</option>
																	@foreach($salesteam as $sales)
																		<option value="{{$sales->id}}" @if($sales->id == $account->marketing) Selected @endif>{{$sales->name}} {{$sales->last_name}}</option>
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
																<input type="text" value="{{$account->billing_street}}" name="billing_street">
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
																<input type="text" value="{{$account->billing_city}}" name="billing_city">
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
																<input type="text" value="{{$account->billing_state}}" name="billing_state">
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
																<input type="text" value="{{$account->billing_code}}" name="billing_code">
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
																<input type="text" value="{{$account->billing_country}}" name="billing_country">
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
																<input type="text" value="{{$account->shipping_street}}" name="shipping_street">
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
																<input type="text" value="{{$account->shipping_city}}" name="shipping_city">
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
																<input type="text" value="{{$account->shipping_state}}" name="shipping_state">
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
																<input type="text" value="{{$account->shipping_code}}" name="shipping_code">
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
																<input type="text" value="{{$account->shipping_country}}" name="shipping_country">
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
                                    <form action="{{ route('add_comment_edit') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label required">Note</label>
                                            <div class="col-sm-9">
                                               <textarea type="textarea" name="notes" style="border-radius: 8px;border: 2px solid;border-color: #c0c6cc;" rows="5" cols="60"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="account_id" value="{{$account->id}}">
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