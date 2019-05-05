window.addEventListener("load", function(){
	function load(){
		var load_screen = document.getElementById("load-screen");
		document.body.removeChild(load_screen);
	}
	setTimeout(load, 1000);
});