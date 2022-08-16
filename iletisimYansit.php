<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İletisimdeki Veriler</title>
</head>
<body>

	<div style="width: 50%; height: 200px; background-color: pink; margin-left: 25%;  ">
		
		<h1 style=" text-align: center; color: grey; " >VERİLER</h1>
	</div>


	<div>
		<h1>
			<?php 
			if ( isset($_POST['emailveri']) ) {
				$emailveri=$_POST['emailveri'];
				if (isset($_POST['mesajveri'])) {
					$mesajveri=$_POST['mesajveri'];

					echo "email:".$emailveri."mesaj:".$mesajveri;
				}
			}
			?>
		</h1>
	</div>

</body>
</html> 