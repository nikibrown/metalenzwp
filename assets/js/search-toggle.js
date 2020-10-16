$(document).ready(function() {
	const $searchLabel = $(".search-label");
	const $headerTopSearch = $(".header-top-search");
	
	$searchLabel.on("click", function() {
		$headerTopSearch.toggleClass("show");
	});
});