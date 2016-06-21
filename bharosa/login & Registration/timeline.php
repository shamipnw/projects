<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Timeline</title>

		<meta name="description" content="based on widget boxes with 2 different styles" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

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
								Timeline
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									based on your activities at member's portal
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div id="timeline-2" >
									<div class="row">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>Today</b>
												</span>

												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">Next Steps</span>

															<i class="timeline-indicator btn btn-info no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="bigger-110">
																		Setup <span class="green bolder">Smart SIP</span> for equity funds
																	</span>
																</div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">&nbsp;</span>

															<i class="timeline-indicator btn btn-info no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="green bolder">Go Direct :</span>
																	Redeem old Regular funds OR Switch to Direct funds
																	<a href="#">
																		Click to see
																		<i class="ace-icon fa fa-search-plus blue bigger-110"></i>
																	</a>																	
																</div>
															</div>
														</div>
													</div>

												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->

											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>16-Sep-2015</b>
												</span>

												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">Invested in Equity Fund</span>

															<i class="timeline-indicator btn btn-success no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<div class="clearfix">
																		<div class="pull-left">
																			<span class="orange2 bolder">Invested in 3FM funds</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">Invested in Debt Fund</span>

															<i class="timeline-indicator btn btn-success no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="pink2 bolder">Equity Fund : </span> ₹5000 in Motilal Oswal XYZ </br>
																	<span class="pink2 bolder">Debt Fund : </span> ₹1000 in Reliance ABC 																	
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->

											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>15-Sep-2015</b>
												</span>
												<div class="timeline-item clearfix">
													<div class="timeline-info">
														<span class="timeline-date">Completed KYC</span>

														<i class="timeline-indicator btn btn-success no-hover"></i>
													</div>

													<div class="widget-box transparent">
														<div class="widget-body">
															<div class="widget-main no-padding">
																<span class="red bolder">Received KYC, CAN numbers from MFU</span>
															</div>
														</div>
													</div>
												</div>
												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">Received CAN number</span>

															<i class="timeline-indicator btn btn-grey no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="pink2 bolder">CAN Number: </span> 1234RE567 </br>
																	<span class="pink2 bolder">KYC Number : </span> 8765df1231 
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->
											
											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>26-Aug-2015</b>
												</span>
												<div class="timeline-item clearfix">
													<div class="timeline-info">
														<span class="timeline-date">Added Household Members</span>

														<i class="timeline-indicator btn btn-success no-hover"></i>
													</div>

													<div class="widget-box transparent">
														<div class="widget-body">
															<div class="widget-main no-padding">
																<span class="bolder">Added Household members, Submitted relevant documents</span>
															</div>
														</div>
													</div>
												</div>
												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">Submitted all Documents</span>

															<i class="timeline-indicator btn btn-grey no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<a href="#">
																		Click to see the documents
																		<i class="ace-icon fa fa-search-plus blue bigger-110"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->		
											
											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>15-Jul-2015</b>
												</span>
												<div class="timeline-item clearfix">
													<div class="timeline-info">
														<span class="timeline-date">Completed Bank and Identity Details</span>

														<i class="timeline-indicator btn btn-success no-hover"></i>
													</div>

													<div class="widget-box transparent">
														<div class="widget-body">
															<div class="widget-main no-padding">
																<span class="bolder">Shared Identity details, Bank details and ID number online</span>					</br></br>										
																<span class="orange bolder">ID and Age proof: </span> PAN card </br>
																<span class="orange bolder">Address proof : </span> Driver's license 
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->	
											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>1-Jul-2015</b>
												</span>
												<div class="timeline-item clearfix">
													<div class="timeline-info">
														<span class="timeline-date">Registration Complete</span>

														<i class="timeline-indicator btn btn-success no-hover"></i>
													</div>

													<div class="widget-box transparent">
														<div class="widget-body">
															<div class="widget-main no-padding">
																<span class="">You registered with Bharosa Club</span>					</br>										
																<span class="green bolder">Email Id: </span> arvind@abc.com </br>
																<span class="green bolder">Mobile Number : </span> 9811199999 
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->	

										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
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

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('[id*="timeline-"]').addClass('hide');
					$('#timeline-'+which).removeClass('hide');
				});
			});
		</script>
	</body>
</html>
