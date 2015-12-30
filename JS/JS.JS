$(document).ready(function(){
	var button=$(".b");
	var lbutton=$(".l");
	
	button.hover(function(){
		$(this).stop().animate({
		 opacity:1,
		 marginTop: "0px"
		},300);
	}, function(){
		$(this).stop().animate({
		 opacity:0.4,
		 marginTop: "4px"
		},500, "easeOutBounce");
	});
	

	lbutton.hover(function(){
		$(this).stop().animate({
		 opacity:1,
		 marginLeft: "5px"
		},300);
	}, function(){
		$(this).stop().animate({
		 opacity:0.4,
		 marginLeft: "0px"
		},500, "easeOutBounce");
	});

	
});