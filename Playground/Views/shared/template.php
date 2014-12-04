<!DOCTYPE HTML>
<Html>
	<head>
		<style> @import "../Content/FitnessStyle.css";</style>
		
		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	 	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link href="https://css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '297433267122189',
		      xfbml      : true,
		      version    : 'v2.2'
		    });
		  };
		
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
			<div><? include __DIR__.'/nav.html'; ?></div>
			<div class="container"><? include __DIR__."/../$veiw"; ?></div>
			<br />
		<footer>
			<div  id="footer">
				 <p>Copyright &copy; of Frank Moscatello and Fitness Website</p>	
				<br />
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>		
	</body>
</Html>