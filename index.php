<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form id="form1" action="externa.php" method="get">
		<select name="name" id="name">
			<option value="1">seleccione1</option>
			<option value="2">seleccione2</option>
			<option value="3">seleccione3</option>
		</select>
	</form>	

	<div id="output"></div>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script>
	$(function(){
		$('#name').on('change',function(){
			$('#output').hide();
			$('#form1').trigger('submit');
		});
		$('#form1').on('submit',function(e){
			e.preventDefault();
			var params = { name : $('#name').val() };
			$.get('externa.php', params, function( data ){
				$('#output').html( data );
				$('#output').show('slow');
			});
			//return false;
		});
		$('#name').change();
	});
	</script>
</body>
</html>

