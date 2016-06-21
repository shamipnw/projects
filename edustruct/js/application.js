// This js file should contain all customized scripts and plugins

// 0. Alert
//alert('Ahoa !!');

// 1. collapsible anchors

// 2. sliding panel
/*$('#nav_trigger').click(function() {
	$('aside')
	.animate({
		marginLeft: '0'
	});

	$(this).click(function() {
		$('aside')
		.animate({
			marginLeft: '-13%'
		});
	});
});*/

function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
ev.target.appendChild(document.getElementById(data));
}


