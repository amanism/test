<!doctype html>
<!-- <html lang="en"> -->
<html lang="zh-Hant">

<!-- begin html header [[[ -->
<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#group").change(function(){
		var id=$(this).val();

		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: {
					'group':id,
			},
			// data: dataString,
			cache: false,
			success: function(html)
			{
				// alert(html);
				$("#rows").html(html);
			} 
		});
		});

	});
	</script>

</head>
<!-- end html header ]]] -->

<body>

<select id="group">
	<option value='1'>Draft</option>
	<option value='2'>Published</option>
</select>

body goes here... 

<div id="rows">

</div>

</body>

</html>
