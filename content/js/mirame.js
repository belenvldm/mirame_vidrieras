$(document).ready(function() {
	$(".simplificado").mouseenter(function(){
    	$(".simplificado").css("display", "none");
	    $(".ampliado").css("display", "block");
    });
    $(".ampliado").mouseleave(function() {
        $(".ampliado").css("display", "none");
		$(".simplificado").css("display", "block");
    });

    $('#linkVideo').click(function() {
    	$('#posterVideo').css("display", "none");
		$('#videoProject').css("display", "block");
    });
});