$(document).ready(function () {
	$(".navbar-toggler, .overlay").on("click", function(){
		$(".mobileMenu, .overlay").toggleClass("open");
	});
});