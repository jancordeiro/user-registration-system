var search = document.getElementById('searchbox');
	
search.addEventListener("keydown", function(event) {
	if (event.key === "Enter")
	{
		searchData();
	}
});
	
function searchData()
{
	window.location = 'dashboard.php?search='+search.value;
}