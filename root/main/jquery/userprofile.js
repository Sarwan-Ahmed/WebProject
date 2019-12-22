$(document).ready(function(){
	$("#profile-pic").click(function(){
		  $("#myModal").modal();
	});;

	$("#upload").click(function(){
		("#form-upload").submit();
	});

	$("#likes").click(function(){
		$("#gallery").html("");
	});

	$("#collections").click(function(){
		getCollection();
	});
  	
  	getCollection();

  	$('#gallery').on('click', '.single-img img', function() {
	 	on();
	 	$("#post-date").append("Posted on "+$(this).attr("data-pdate"));
	 	
	 	$("#image-tray").attr("src",$(this).attr("src"));

});

});


function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}




function getCollection(){
	  var xhttp;
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    		var myCollection = JSON.parse(this.responseText);
	    		populateCollection(myCollection);}};
	  xhttp.open("GET", "./script/collectionAPI.php", true);
	  xhttp.send();}


function populateCollection(myCollection){
	$("#gallery").html("");
	for(var i = 0; i < myCollection.length; i++){
		var element = '<div class="single-img"><img src="'+myCollection[i]["picture_url"]+'"'+'width="250" height="250" data-pid="'+myCollection[i]["picture_id"]+'"'+'data-pdate="'+myCollection[i]["picture_date"]+'"'+'></div>';		
		$("#gallery").append(element);
	}

}
