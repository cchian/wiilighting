<html>
<head>
	<script>
	function c(obj,b){
		if(b=='1'){
			document.getElementById('text').style.display='block';
		}else{
			document.getElementById('text').style.display='none';
		}
	}
	</script>
</head>
<body>
	<a href="#" onclick=c(this,'1')>Text</a>
	<a href="#" onclick=c(this,'0')>Text</a>
	<input type='text' id='text'>

	<b><b>txt</b></b><br>
	<strong>txt</strong>
</body>
</html>