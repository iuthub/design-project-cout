window.addEventListener("load", function(){
	function load(){
		var load_screen = document.getElementById("load-screen");
		document.body.removeChild(load_screen);
	}
	setTimeout(load, 1000);
});

$('.like-action').on('click', function(event){
	event.preventDefault();

    var postId = event.target.offsetParent.getElementsByClassName('pid')[0].value;
	var isLike = event.target.previousElementSibling == null;
    console.log(_token);
	$.ajax({
		method: 'POST',
		url: urlLike,
		data: {postId: postId, _token: _token},
        success: function (result) {
           alert(result);
        }
	})

	.done(function(){
		//change the page
	})
});