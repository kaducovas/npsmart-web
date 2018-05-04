<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<button class="button" id='save_btn'>Gerar PPT</button>
	</body>
	<script>
	
	$('#save_btn').click(function(){
		
		var day = $('#daterange').datepicker('getDate').getDate();
		var year = $('#daterange').datepicker('getDate').getFullYear();
		var month = $('#daterange').datepicker('getDate').getMonth()+1;
		var date = year+'-'+month+'-'+day;
		document.getElementById('reportdate').value = date;
		document.reportopt.submit();	
		
	});
	
	</script>
</html>	