function clicked() {
	alert("Clicked!");
}
function cc() {
	var color = document.getElementById("_theirColor");
	document.getElementById("d1").innerHTML.style.color = color;
}
/function cc() {
	var xhttp = new XMLHttpRequest();
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status ==200){
			document.getElementById("_theirColor").innerHTML = 
			this.responseText;
		}
	};
	xhttp.open("POST", "/", true);
	xhttp.send();
	document.getElementById("d1").style.color = color;
}