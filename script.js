$(document).ready(function(){
  
  
   $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
		//alert(param);
	});
	
	$("#search").on("keyup", function() {
		var filter_sel = ($('#search_param').val());
		if(filter_sel == null || filter_sel == ''){
			filter_sel = 'title';
		}
    var value = $(this).val().toLowerCase();
    $("#list_movies .movie").filter(function() {
      $(this).toggle($(this).attr(filter_sel).toLowerCase().indexOf(value) > -1)
    });
  });
	
	
});

