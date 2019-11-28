function updateLabel(increment){
	$(".progress-bar").html(increment+"%"+"complete");
}

function incrementProgress(){
	var progress = parseInt($(".progress-bar").attr("aria-valuenow"));
	 var incremented_progress;
	if(progress+25 <= 100){
		incremented_progress = progress+25;}
	else{
		incremented_progress = 100;
	}
	
	$(".progress-bar").css("width",incremented_progress+"%");
	$(".progress-bar").attr("aria-valuenow",incremented_progress);
	updateLabel(incremented_progress);
}

function decrementProgress(){
	var progress = parseInt($(".progress-bar").attr("aria-valuenow"));
	var decremented_progress;
	if(progress-25 >= 0){
		decremented_progress = progress-25;}
	else{
		decremented_progress = 0;
	}	
	$(".progress-bar").css("width",decremented_progress+"%");
	$(".progress-bar").attr("aria-valuenow",decremented_progress);
	updateLabel(decremented_progress);
}






$(document).ready(function(){
	$('input').on("input",function(){
		if(!parseInt($(this).attr("data-state"))){
			if($(this).val()){
				incrementProgress();
				$(this).attr("data-state",1);

				
			}

		}	
		else if(parseInt($(this).attr("data-state"))==1){
			
			if($(this).val().length == 0){
				decrementProgress();
				$(this).attr("data-state",0);
			}
		}
		




	});});



