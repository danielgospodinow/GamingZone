 $(document).ready(function() {	
 
    var lbutton=$(".l");

	lbutton.hover(function(){
		$(this).stop().animate({
		 opacity:1,
		 marginLeft: "-5px"
		},300);
	}, function(){
		$(this).stop().animate({
		 opacity:0.4,
		 marginLeft: "0px"
		},500, "easeOutBounce");
	});
	
});
