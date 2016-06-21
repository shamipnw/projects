										<div id="faq-tab-1" class="tab-pane fade in active">
											<form class="form-horizontal" id="sample-form">
												<div class="form-group has-warning">
													<label for="txtName" class="col-xs-12 col-sm-3 control-label no-padding-right">Name</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input type="text" id="txtName" class="width-100" placeholder="Name as appearing on PAN Card"/>
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Include name as on PAN Card so that there is no mismatch later" class="ace-icon fa fa-info-circle"></i>
														</span>
													</div>
												</div>
												<div class="form-group has-warning">
													<label for="txtFather" class="col-xs-12 col-sm-3 control-label no-padding-right">Father's Name</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input type="text" id="txtFather" class="width-100" />
														</span>
													</div>
												</div>															
												<div class="form-group">
													<label for="radGender" class="col-xs-12 col-sm-3 control-label no-padding-right">Gender</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
																<input name="radGender" value="M" type="checkbox" class="ace input-lg" selected />
																<span class="lbl"> Male</span>
																<input name="radGender" value="F" type="checkbox" class="ace input-lg" />
																<span class="lbl"> Female</span>
														</span>
													</div>
												</div>	
												<div class="form-group">
													<label for="radMarital" class="col-xs-12 col-sm-3 control-label no-padding-right">Marital Status</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
																<input name="radMarital" value="S" type="checkbox" class="ace input-lg" />
																<span class="lbl"> Single</span>
																<input name="radMarital" value="M" type="checkbox" class="ace input-lg" />
																<span class="lbl"> Married</span>
														</span>
													</div>
												</div>	
												<div class="form-group  has-warning">
													<label for="txtDob" class="col-xs-12 col-sm-3 control-label no-padding-right">Date of Birth</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<select class="input-medium width-30" id="txtDob" name="txtDob">
																<option value="">----Day-----</option>
																<option value="UID">1</option>
																<option value="PAS">2</option>
																<option value="VOT">3</option>
																<option value="DL">4</option>
																<option value="OTH">5</option>
															</select>
															<select class="input-medium width-30" id="txtDob2" name="txtDob2">
																<option value="">----Month-----</option>
																<option value="UID">Jan</option>
																<option value="PAS">Feb</option>
																<option value="VOT">Mar</option>
																<option value="DL">Apr</option>
																<option value="OTH">May</option>
															</select>
															<input type="text" id="txtDob3" class="width-30" />
														</span>
													</div>													
												</div>	
												<div class="form-group has-warning">
													<label for="txtFather" class="col-xs-12 col-sm-3 control-label no-padding-right">Mobile No</label> 

													<div class="col-xs-12 col-sm-3">
														<span class="input-icon block input-icon-right">
															<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" placeholder="Primary Mobile No" />
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Verified" class="ace-icon fa fa-check-circle"></i>	
														</span>
													</div>
													<div class="col-xs-12 col-sm-2">
														<span class="input-icon block input-icon-right">
															<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" placeholder="Alternate Mobile No" />
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Verified" class="ace-icon fa fa-question-circle"></i>	
														</span>	
														<a href="#"><small class="text-warning">Click to Verify</small></a>
													</div>														
													
												</div>	
												<div class="form-group has-warning">
													<label for="txtFather" class="col-xs-12 col-sm-3 control-label no-padding-right">Email Id</label> 
													<div class="col-xs-12 col-sm-3">
														<span class="input-icon block input-icon-right">
															<input class="form-control" type="text" id="form-field-mask-2" placeholder="Primary Email Id" />
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Click verify link to get your email verified" class="ace-icon fa fa-question-circle"></i>	
														</span>
														<a href="#"><small class="text-warning">Click to Verify</small></a>
													</div>
													<div class="col-xs-12 col-sm-2 ">
														<span class="input-icon block input-icon-right">
															<input class="form-control" type="text" id="form-field-mask-2" placeholder="Alternate Email Id"  />
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Click verify link to get your email verified" class="ace-icon fa fa-question-circle"></i>	
														</span>
														<a href="#"><small class="text-warning">Click to Verify</small></a>
													</div>
												</div>	
												<div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;	Guardian Details (if minor)
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-3-1">
															<div class="panel-body">
																<div class="form-group has-warning">
																	<label for="txtPan" class="col-xs-12 col-sm-3 control-label no-padding-right">Guardian PAN</label> 
																	<div class="col-xs-12 col-sm-4">
																		<span class="input-icon block input-icon-right">
																			<input type="text" id="txtPan" class="width-100" placeholder="PAN of the guardian" />
																			<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Duly attested copy of PAN required" class="ace-icon fa fa-info-circle"></i>
																		</span>
																	</div>
																	<div class="col-xs-12 col-sm-1">
																		<span class="input-icon block input-icon-right">
																			<button class="btn btn-white btn-info btn-bold">
																				<i class="ace-icon fa fa-search bigger-120 blue"></i>
																				Search
																			</button>
																		</span>
																	</div>																	
																</div>	
																<div class="form-group">
																	<label for="txtAadhar" class="col-xs-12 col-sm-3 control-label no-padding-right">Aadhar Number</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right" >
																			<input type="text" id="txtAadhar" class="width-100" placeholder="If PAN Exempt" />
																		</span>
																	</div>
																</div>																
																<div class="form-group has-warning">
																	<label for="txtFather" class="col-xs-12 col-sm-3 control-label no-padding-right">Guardian Name</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right">
																			<input type="text" id="txtGuardian" class="width-100" />
																		</span>
																	</div>
																</div>	
																<div class="form-group  has-warning">
																	<label for="txtDob" class="col-xs-12 col-sm-3 control-label no-padding-right">Guardian Date of Birth</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right">
																			<select class="input-medium width-30" id="txtDob" name="txtDob">
																				<option value="">----Day-----</option>
																				<option value="UID">1</option>
																				<option value="PAS">2</option>
																				<option value="VOT">3</option>
																				<option value="DL">4</option>
																				<option value="OTH">5</option>
																			</select>
																			<select class="input-medium width-30" id="txtDob2" name="txtDob2">
																				<option value="">----Month-----</option>
																				<option value="UID">Jan</option>
																				<option value="PAS">Feb</option>
																				<option value="VOT">Mar</option>
																				<option value="DL">Apr</option>
																				<option value="OTH">May</option>
																			</select>
																			<input type="text" id="txtDob3" class="width-30" />
																		</span>
																	</div>
																	
																</div>																	
																<div class="form-group">
																	<label for="radGender" class="col-xs-12 col-sm-3 control-label no-padding-right">Relationship with Minor</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right">
																				<input name="radGender" value="M" type="radio" class="ace" selected />
																				<span class="lbl"> Father</span>
																				<input name="radGender" value="F" type="radio" class="ace" />
																				<span class="lbl"> Mother</span>
																				<input name="radGender" value="F" type="radio" class="ace" />
																				<span class="lbl"> Court Appointed Legal Guardian</span>
																		</span>
																	</div>
																</div>
																<div class="form-group">
																	<label for="txtRelProof" class="col-xs-12 col-sm-3 control-label no-padding-right">Relationship Proof</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right" placeholder="If PAN Exempt">
																			<input type="text" id="txtRelProof" class="width-100" placeholder="Specify proof type"/>
																		</span>
																	</div>
																</div>	
																<div class="form-group">
																	<label for="txtFather" class="col-xs-12 col-sm-3 control-label no-padding-right">Mobile No</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right">
																			<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" placeholder="Guardian Mobile No" />
																		</span>
																	</div>
																</div>	
																<div class="form-group">
																	<label for="txtFather" class="col-xs-12 col-sm-3 control-label no-padding-right">Email Id</label> 
																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block input-icon-right">
																			<input class="form-control" type="text" id="form-field-mask-2" placeholder="Guardian Email Id" />
																		</span>
																	</div>
																</div>																	
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="button">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											</form>
										</div>
