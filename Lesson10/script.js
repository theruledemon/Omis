var x = 10;
var y = 5;


function changeStory () {
	var story = document.getElementById("story");
	story.innerHTML = "About";
}

function changeSite(url) {
	window.open(url ,'_self');
}

function hideStory(){
	var story = document.getElementById("story");
	if (story.style.display == "none") {
		story.style.display = "block";
	} else {
		story.style.display = "none";
	}
}

function red(el) {
	el.style.color = "red";
}

function regular(el) {
	el.style.color = "black";
}

function newStory(newTxt) {
	var story = document.getElementById("story");
	story.innerHTML = newTxt;
}

$(document).ready(function() {
	$("#trigger").click(function() {
		$.post("simple.php")
		  .done(function( data ) {
			$("#story").html(data);
		  });
	});
});