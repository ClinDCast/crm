@extends('admin.layoutnew')
@section('content')
	<div class="bodycontainer">
		<div class="outerElem newListviewRevamp">
            <div id="idForCV" class="idForCV pT0">   
                @include('admin.master_sidebar')
                <div class="viewcontainer fL vat newListOLY pR filterOn" style="width: calc(100% - 303px);">
                    <div class="lv_table_holder ">
                        <div class="ltTable pR newListOLY listWAutoClass" style="min-height: 550px;"> 
                            <div class="lyte-expresstable" style="height: 550px;"> 
								<form action="{{ route('store_of_contact_added') }}" method="post" enctype="multipart/form-data">
						             @csrf 
									<div class="crm-create-layout">
										<div class="create-titlebar pR stick">
											<div class="lcreate-t-contents">
												<div class="lcreate-t-innerContents">
													<div class="pL30 pR30 heading_title">
														<div class="heading_title_inner">
															<label class="dIB vam create-title-label">Master Data</label>
														</div>
													</div>
													<div class="alignright create-title-right">
														<div class="create_button_comp">
															<div class="lyte-button fR">
																<input type="submit" class="lyte-button primarybtn lytePrimaryBtn" value="Save">
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
															<div class="fL">#of Contacts added</div>
															<div class="clearB"></div>
														</div>
														<div class="create-two-column dF">
															<div class="container1">
																<div class="crm-create-fields">
																	<div class="custabDivCreate">
																		<div class="customfieldLabel" style="width:214.22335815429688px;">
																		 Value   
																		</div>
																		<div class="customfieldValue">
																			<div class="crux-text-component">
																				<div class="cxElementValue">
																					<div class="lyteInputBox">
																						<div class="lyteField">
																							<input type="text" name="value">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection