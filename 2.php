<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>teste</title>
</head>
<body style="background-color: #f3f3f3;">
<?php print_r($_POST);?>

<script type="text/javascript">
	window.onload = function(e) {
	  window.addEventListener('message', event => {
	  	console.log(event);
	  }, false);
	  mario();
	};
	function mario () {
		setInterval(function () {
			parent.postMessage('testeretorno', '*');
		}, 3000);
	}
</script>
</body>
</html>