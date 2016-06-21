$(document).ready(function () {
	// Visit gallery
	(function () {
		$('.visitgallery').flipping_gallery({
			direction: "forward",
			selector: "> div",
			spacing: 40,
			showMaximum: 3,
			flipDirection: "bottom",
			autoplay: false
		});
		
		$(".next").click(function() {
			$(".gallery").flipForward();
			return false;
		});
			
		$(".prev").click(function() {
			$(".gallery").flipBackward();
			return false;
		});
	}) ();

	// Summit gallery
	/*(function () {
		$('.summitgallery').flipping_gallery({
			direction: "forward",
			selector: "> div",
			spacing: 40,
			showMaximum: 3,
			flipDirection: "bottom",
			autoplay: false
		});
		
		$(".next").click(function() {
			$(".gallery").flipForward();
			return false;
		});
			
		$(".prev").click(function() {
			$(".gallery").flipBackward();
			return false;
		});
	}) ();*/
	
	/*$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		e.target // newly activated tab
		e.relatedTarget // previous active tab
		
		$('.visitgallery, .summitgallery').flipping_gallery({
			direction: "forward",
			selector: "> div",
			spacing: 40,
			showMaximum: 3,
			flipDirection: "bottom",
			autoplay: false
		});
				
		$(".next").click(function() {
			$(".gallery").flipForward();
			return false;
		});
			
		$(".prev").click(function() {
			$(".gallery").flipBackward();
			return false;
		});
	});*/
});