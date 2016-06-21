<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Quick Buy</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/select2.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		
		<?php include 'navbar.php';?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<?php include 'sidebar.php';?>
			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li><i class="ace-icon fa fa-home home-icon"></i> You are viewing <strong>"Viveka Nand Bharti's (CAN : XXXXXJCAXX)"</strong> profile</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">

						<div class="page-header">
							<h1>
								Quick Buy
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Quick Start for Bharosa Products
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="widget">
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Select Product</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">Bank Mandate</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">Review</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">Print Docket</span>
														</li>
													</ul>
												</div>

												<hr />

												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Select a quick start product</h3>

														<form class="form-horizontal" id="sample-form">
															<div class="form-group has-warning">
																<label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Product</label> 
																<div class="col-xs-12 col-sm-5">
																	<span class="input-icon block input-icon-right">
																		<select class="input-medium width-100" id="radAcType" name="radAcType">
																			<option value="UID" selected>3FM (3 Fund Model)</option>
																			<option value="PAS">2FM (2 Fund Model)</option>
																			<option value="VOT">TS (Tax Saver)</option>
																		</select>
																	</span>
																</div>
															</div>	
															<div class="form-group has-warning">
																<label for="radOpMode" class="col-xs-12 col-sm-3 control-label no-padding-right">Investment Type</label> 
																<div class="col-xs-12 col-sm-5">
																	<span class="input-icon block input-icon-right">
																		<input name="radOpMode" value="S" type="checkbox" class="ace input-lg" selected />
																		<span class="lbl"> Lumpsum</span>
																		<input name="radOpMode" value="M" type="checkbox" class="ace input-lg" checked />
																		<span class="lbl"> SIP</span>								
																	</span>
																</div>
															</div>	
																	
															<div class="form-group has-warning">
																<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Select your funds</label>

																<div class="col-xs-12 col-sm-5">
																	<?php include 'quickbuytable.php';?>
																</div>
															</div>
															<div class="form-group">
																<label for="radOcc" class="col-xs-12 col-sm-3 control-label no-padding-right">Frequency / Amount (Rs)</label> 
																<div class="col-xs-12 col-sm-2">
																	<span class="input-icon block input-icon-right">
																		<select class="input-medium width-100" id="radOcc" name="radOcc">
																			<option value="">------------------</option>
																			<option value="UID">Monthly</option>
																			<option value="PAS">Quarterly</option>
																		</select>							
																	</span>
																</div>
																<div class="col-xs-12 col-sm-3">
																	<span class="input-icon block input-icon-right">
																		<input type="text" id="txtOcc" class="width-100" placeholder="Please specify if others" value="8000"  readonly="" disabled />
																	</span>
																</div>													
															</div>	
														</form>
													</div>

													<div class="step-pane" data-step="2">
														<h3 class="lighter block green">Setup you bank mandates</h3>
														<form class="form-horizontal" id="sample-form">
															<div class="form-group has-warning">
																<label for="radNation" class="col-xs-12 col-sm-3 control-label no-padding-right">Mutual Fund KYC Status</label>
																<div class="col-xs-12 col-sm-4">
																	<span class="input-icon block input-icon-right">
																		<select class="input-medium width-100" id="radAcType" name="radAcType">
																			<option value="UID">Not Done</option>
																			<option value="PAS">Done</option>
																		</select>
																	</span>
																</div>
																<div class="col-xs-12 col-sm-1">
																	<span class="input-icon block input-icon-right">
																		<button class="btn btn-white btn-info btn-bold">
																			<i class="ace-icon fa fa-search bigger-120 blue"></i>
																			Click to Check
																		</button>
																	</span>
																</div>																		
																	
															</div>															
															<div class="form-group ">
																<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Maximum Amount for Bharosa</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputWarning" class="width-100" value="10000"/>
																		<i class="ace-icon fa fa-leaf"></i>
																	</span>
																</div>
															</div>

															<div class="form-group ">
																<label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Maximum Amount for MFU</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputError" class="width-100" value="500000" />
																		<i class="ace-icon fa fa-leaf"></i>
																	</span>
																</div>
															</div>

															<div class="form-group ">
																<label for="inputSuccess" class="col-xs-12 col-sm-3 control-label no-padding-right">Maximum Amount for Reliance</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputSuccess" class="width-100" value="500000" />
																		<i class="ace-icon fa fa-leaf"></i>
																	</span>
																</div>
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="3">
														<h4 class="lighter block green">Reviw your profile</h4>
														<div class="row">
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Basic Profile</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Name </div>
																				<div class="profile-info-value">
																					<span  id="username">Arvind Kaushal</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Mobile No </div>
																				<div class="profile-info-value">
																					<span  id="mobno">9899276400</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Email Id </div>
																				<div class="profile-info-value">
																					<span  id="emailid">arvind.kaushal@yahoo.com</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Date of Birth </div>
																				<div class="profile-info-value">
																					<span  id="username">03/06/1976</span>
																				</div>
																			</div>																		
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Father's Name </div>
																				<div class="profile-info-value">
																					<span  id="mobno">Mr. XXXXXXX MMMMM</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Gender </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Male</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Mrital Status </div>
																				<div class="profile-info-value">
																					<span  id="mobno">Married</span>
																				</div>
																			</div>
																		</div>																	
																	</div>
																</div>
															</div>
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">KYC Details</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										

																			<div class="profile-info-row">
																				<div class="profile-info-name"> Nationality </div>
																				<div class="profile-info-value">
																					<span  id="mobno">Indian</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Resident Status  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Resident India</span>
																				</div>
																			</div>																		
																			<div class="profile-info-row">
																				<div class="profile-info-name"> PAN Card No </div>
																				<div class="profile-info-value">
																					<span  id="emailid">AXXXX5555X</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> CAN  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">16021JCA01</span>
																				</div>
																			</div>																			
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Aadhar  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">999999999999</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Politically Exposed  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">No, nobody in my family is politically exposed</span>
																				</div>
																			</div>		
																		</div>																	
																	</div>
																</div>
															</div>
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Address Details (as per KYC)</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Address </div>
																				<div class="profile-info-value">
																					<span  id="username">XXXX / B1, BHH</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> City </div>
																				<div class="profile-info-value">
																					<span  id="mobno">Gurgaon</span>
																				</div>
																			</div>																		
																			<div class="profile-info-row">
																				<div class="profile-info-name"> State </div>
																				<div class="profile-info-value">
																					<span  id="mobno">Haryana</span>
																				</div>
																			</div>

																			<div class="profile-info-row">
																				<div class="profile-info-name"> Country </div>
																				<div class="profile-info-value">
																					<span  id="emailid">India</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Address Proof </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Aadhar</span>
																				</div>
																			</div>
																		</div>																	
																	</div>
																</div>
															</div>															
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Bank Details</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Account Type </div>
																				<div class="profile-info-value">
																					<span  id="username">Savings</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Account Number </div>
																				<div class="profile-info-value">
																					<span  id="mobno">8708978787887987</span>
																				</div>
																			</div>																		
																			<div class="profile-info-row">
																				<div class="profile-info-name"> IFSC/MICR Code </div>
																				<div class="profile-info-value">
																					<span  id="mobno">88888888888</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Mode of Operation </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Single</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Names printed on cheque? </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Yes</span>
																				</div>
																			</div>
																		</div>																	
																	</div>
																</div>
															</div>	
														</div>
														<div class="row">															
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Income Details</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Primary Source of Wealth  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Salary</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Income Bracket  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">10 lac - 25 Lac</span>
																				</div>
																			</div>																			
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Occupation  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Private Sector Service</span>
																				</div>
																			</div>	
																		</div>																	
																	</div>
																</div>
															</div>	
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Tax Details</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name"> City of Birth  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">New Delhi</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Country of Birth  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">India</span>
																				</div>
																			</div>																			
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Country of Citizenship  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">India</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Country of Nationality  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">India</span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Tax Residence  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Indian Tax Resident</span>
																				</div>
																			</div>																			
																		</div>																	
																	</div>
																</div>
															</div>	
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Nominee Details</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Name  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">ASDasf safsdf</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Relation  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">Spouse</span>
																				</div>
																			</div>																			
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Date of Birth  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">11/11/1979</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> Allocation  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">100 %</span>
																				</div>
																			</div>
																		</div>																	
																	</div>
																</div>
															</div>	
															<div class="col-sm-3 widget-container-col">
																<div class="widget-box transparent">
																	<div class="widget-header">
																		<h4 class="widget-title lighter">Bank Mandate (Maximum Amount)</h4>
																		<div class="widget-toolbar no-border">
																			<a href="#" data-action="settings">
																				<i class="ace-icon fa fa-cog"></i>
																			</a>
																		</div>
																	</div>
																	<div class="widget-body">
																		<div class="profile-user-info profile-user-info-striped">										
																			<div class="profile-info-row">
																				<div class="profile-info-name">  For Bharosa  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">10,000</span>
																				</div>
																			</div>	
																			<div class="profile-info-row">
																				<div class="profile-info-name"> For Bharosa  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">5,00,000</span>
																				</div>
																			</div>																			
																			<div class="profile-info-row">
																				<div class="profile-info-name"> For Reliance  </div>
																				<div class="profile-info-value">
																					<span  id="emailid">5,00,000</span>
																				</div>
																			</div>	
																		</div>																	
																	</div>
																</div>
															</div>																
														</div>
													</div>

													<div class="step-pane" data-step="4">
													<div class="row">
														<div class="col-sm-6">
															<div >
																<div class="widget-header widget-header-flat">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-quote-left smaller-80"></i>
																		Following documents have been generated for you
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<div class="row">
																			<div class="col-xs-12">
																				<blockquote>
																					<p class="lighter line-height-125">
																						<ol>
																							<li class="text-muted">KYC Individual</li>
																							<li class="text-muted">CRF Individual <span class="label label-sm label-primary arrowed arrowed-right">CRF Terms and Conditions</span></li>
																							<li class="text-muted">CTF Purchase <span class="label label-sm label-primary arrowed arrowed-right">CTF Terms and Conditions</span></li>
																							<li class="text-muted">MFU SIP Mandate <span class="label label-sm label-primary arrowed arrowed-right">MFU Terms and Conditions</span></li>
																							<li class="text-muted">SIP Bank Mandate</li>
																							<li class="text-muted">Bharosa Mandate</li>
																						</ol>
																					</p>
																				</blockquote>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-xs-12">
																				<div class="well">
																					<h4 class="green smaller lighter">Legend to complete your Docket :</h4>
																					<ul>
																						<li>Print all the documents and sign in the rows where ?? symbol appears.</li>
																						<li>Attach self-attested copies of following documents :
																							<ul class="list-unstyled">
																								<li>
																									<i class="ace-icon fa fa-caret-right blue"></i>
																									Copy of Latest Bank Statement/Passbook
																								</li>

																								<li>
																									<i class="ace-icon fa fa-caret-right blue"></i>
																									Copy of PAN Card
																								</li>

																								<li>
																									<i class="ace-icon fa fa-caret-right blue"></i>
																									You may also upload these documents to Document Vault for Bharosa Club to review.
																								</li>
																							</ul>
																						
																						</li>
																						<li>Enclose Cheque for ₹6000 in favour of MFU ESCROW ACCOUNT.</li>
																						<li>On KYC form, paste one photograph, 3.5cm x 2.5cm, in provided space and sign accross the photo.</li>																			
																					</ul>
																				</div>
																			</div>																		
																		</div>
																		
																		<h5 class="header smaller lighter red">Please send all documents (preferably via Speedpost) to our address :</h5>
																		<address>
																			<strong>Bharosa Technoserve Private Limited.</strong>
																			<br />
																			#566, Tower B-1, Spaze I-Tech Park,
																			<br />
																			Sohna Road, Sector 49, Gurgaon,
																			<br />
																			Haryana- 122001
																			<br />																			
																			<abbr title="Phone">P:</abbr>
																			+91-9313137373
																		</address>
																	</div>
																</div>
															</div>
															<div class="clearfix form-actions">
																<div class="col-md-offset-3 col-md-9">
																	<button class="btn btn-info" type="button">
																		<i class="ace-icon fa fa-check bigger-110"></i>
																		Save as PDF
																	</button>

																	&nbsp; &nbsp; &nbsp;
																	<button class="btn" type="reset">
																		<i class="ace-icon fa fa-undo bigger-110"></i>
																		Email to Self
																	</button>
																</div>
															</div>
														</div>
													</div>
													</div>
												</div>
											</div>

											<hr />
											<div class="wizard-actions">
												<button class="btn btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>


							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php include 'footer.php';?>
		
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/fuelux.wizard.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/additional-methods.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! Your information was successfully saved!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>
        
        <script>
$(document).ready(function() {
    $('#orderForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        // This option will not ignore invisible fields which belong to inactive panels
        excluded: ':disabled',
        fields: {
            quantity: {
                validators: {
                    notEmpty: {
                        message: 'The quantity is required'
                    },
                    greaterThan: {
                        value: 1,
                        message: 'The quantity must be greater than 0'
                    },
                    integer: {
                        message: 'The quantity must be a number'
                    }
                }
            },
            'size[]': {
                validators: {
                    notEmpty: {
                        message: 'The size is required'
                    }
                }
            },
            'color[]': {
                validators: {
                    notEmpty: {
                        message: 'The color is required'
                    }
                }
            },
            firstName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'The first name can only consist of alphabetical and space'
                    }
                }
            },
            lastName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'The last name can only consist of alphabetical and space'
                    }
                }
            },
            cellPhone: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required'
                    },
                    phone: {
                        country: 'US',
                        message: 'The value is not valid US phone number'
                    }
                }
            },
            street: {
                validators: {
                    notEmpty: {
                        message: 'The street is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required'
                    }
                }
            },
            zipCode: {
                validators: {
                    notEmpty: {
                        message: 'The zip code is required'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'The value is not valid US zip code'
                    }
                }
            }
        }
    });

    $('#orderWizard')
        // Call the wizard plugin
        .wizard()

        // Triggered when clicking the Next/Prev buttons
        .on('actionclicked.fu.wizard', function(e, data) {
            var fv         = $('#orderForm').data('formValidation'), // FormValidation instance
                step       = data.step,                              // Current step
                // The current step container
                $container = $('#orderForm').find('.step-pane[data-step="' + step +'"]');

            // Validate the container
            fv.validateContainer($container);

            var isValidStep = fv.isValidContainer($container);
            if (isValidStep === false || isValidStep === null) {
                // Do not jump to the target panel
                e.preventDefault();
            }
        })

        // Triggered when clicking the Complete button
        .on('finished.fu.wizard', function(e) {
            var fv         = $('#orderForm').data('formValidation'),
                step       = $('#orderWizard').wizard('selectedItem').step,
                $container = $('#orderForm').find('.step-pane[data-step="' + step +'"]');

            // Validate the last step container
            fv.validateContainer($container);

            var isValidStep = fv.isValidContainer($container);
            if (isValidStep === true) {
                // Uncomment the following line to submit the form using the defaultSubmit() method
                // fv.defaultSubmit();

                // For testing purpose
                $('#thankModal').modal();
            }
        });
});
</script>
	</body>
</html>
