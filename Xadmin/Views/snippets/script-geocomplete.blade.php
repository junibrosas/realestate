<script>
  $(function(){
	
	var options = {
	  map: ".map_canvas"
	};
	
	$("#geocomplete").geocomplete(options)
	  .bind("geocode:result", function(event, result){
		$.log("Result: " + result.formatted_address);
	  })
	  .bind("geocode:error", function(event, status){
		$.log("ERROR: " + status);
	  })
	  .bind("geocode:multiple", function(event, results){
		$.log("Multiple: " + results.length + " results found");
	  });
	
	$("#find").click(function(){
		$("#geocomplete").trigger("geocode");
	});

	$("#geocomplete").trigger("geocode");
	
	$("#examples a").click(function(){
	  $("#geocomplete").val($(this).text()).trigger("geocode");
	  return false;
	});
	
  });
</script>