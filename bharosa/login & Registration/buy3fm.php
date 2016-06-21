										<div id="faq-tab-kyc" class="tab-pane fade">
											<form class="form-horizontal" id="sample-form">
												<div class="form-group has-warning">
													<label for="txtName" class="col-xs-12 col-sm-3 control-label no-padding-right">Name</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input type="text" readonly="" disabled id="txtName" class="width-100" placeholder="Name as appearing on PAN Card"/>
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Include name as on PAN Card so that there is no mismatch later" class="ace-icon fa fa-info-circle"></i>
														</span>
													</div>
												</div>
												<div class="form-group has-warning">
													<label for="radNation" class="col-xs-12 col-sm-3 control-label no-padding-right">Nationality</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input name="radNation" value="S" type="checkbox" class="ace input-lg" />
															<span class="lbl"> Indian</span>
															<input name="radNation" value="M" type="checkbox" class="ace input-lg" />
															<span class="lbl"> Other</span>								
															<input type="text" id="txtNation" class="width-50" />
														</span>
													</div>
												</div>
												<div class="form-group has-warning">
													<label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Resident Status</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<select class="input-medium width-100" id="radAcType" name="radAcType">
																<option value="UID">Resident Individual</option>
																<option value="PAS">NRI - NRE</option>
																<option value="VOT">NRI - NRO</option>
																<option value="DL">Foreign National</option>
																<option value="DL">PIO</option>
															</select>
														</span>
													</div>
												</div>												
												<div class="form-group has-warning">
													<label for="txtPan" class="col-xs-12 col-sm-3 control-label no-padding-right">PAN</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input type="text" id="txtPan" class="width-100" />
															<i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Enclose a duly attested copy of PAN" class="ace-icon fa fa-info-circle"></i>
														</span>
													</div>
												</div>
												<div class="form-group">
													<label for="txtAadhar" class="col-xs-12 col-sm-3 control-label no-padding-right">Aadhar Number</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input type="text" id="txtAadhar" class="width-100" />
														</span>
													</div>
												</div>
												<div class="form-group">
													<label for="chkPol" class="col-xs-12 col-sm-3 control-label no-padding-right">Politically Exposed</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input name="chkPol" value="S" type="checkbox" class="ace input-lg" />
															<span class="lbl"> Yes, I am politically exposed.</span>
														</span>
													</div>
												</div>
												<div class="form-group">
													<label for="radNation" class="col-xs-12 col-sm-3 control-label no-padding-right">&nbsp;</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input name="radNation" value="S" type="checkbox" class="ace input-lg" />
															<span class="lbl"> Yes, my relative is politically exposed.</span>
														</span>
													</div>
												</div>	
												<div class="form-group">
													<label for="radNation" class="col-xs-12 col-sm-3 control-label no-padding-right">&nbsp;</label> 
													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block input-icon-right">
															<input name="radNation" value="S" type="checkbox" class="ace input-lg" />
															<span class="lbl"> No, nobody in my family is politically exposed.</span>
														</span>
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