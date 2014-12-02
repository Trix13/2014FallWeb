<!DOCTYPE HTML>
<Html>
	<head>
		<style> @import "../Content/style.css";</style>
		
		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	 	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link href="https://css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
			<div><? include __DIR__.'/nav.html'; ?></div>
			<div class="container"><? include __DIR__."/../$veiw"; ?></div>
			
		<footer>
			<div class="container" id="footer">
				 <p>Copyright &copy; of Tina's Pizza since 1985</p>	
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>		
	</body>
</Html>