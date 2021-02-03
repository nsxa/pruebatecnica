<html>

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
		
	$("#boton").click(function(){
		$.ajax({
		url : "data",
		type: "POST",
    data: {
        "_token": $("meta[name='csrf-token']").attr("content")
    },
		success: function(r)
		{
        $("#response").html(r);
		},

		});
		
		$.ajaxSetup({
      headers: {
        'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
	
});
});
</script>

        <style>
            div {
  width: 33.33%;
}

button {

}
        </style>
		

   <div class="w-33">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button id="boton">
    Consumir api
  </button>
</div>


<div id="response">
</div>
</html>
