<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İletisimdeki Veriler</title>
</head>
<body>

	<div style="width: 50%; height: 400px; background-color: pink; margin-left: 25%;  ">
		<h1 style=" text-align: center; color: grey; " >VERİLER</h1>

		<div>
			<h1 style="color: brown;padding-left: 20px; ">
				<?php 
				if ( isset($_POST['nameveri']) ) {
					$nameveri=$_POST['nameveri'];
					echo "name:".$nameveri; 
				}
				?>
			</h1>
			<br> 
			<h1 style="color: brown;padding-left: 20px; ">
				<?php 
				if (isset($_POST['emailveri'])) {
					$emailveri=$_POST['emailveri'];
					echo "email:".$emailveri;
				}
				?>
			</h1>
			<br> 
			<h1 style="color: brown;padding-left: 20px; ">
				<?php 
				if (isset($_POST['mesajveri'])) {
					$mesajveri=$_POST['mesajveri'];
					echo "mesaj:".$mesajveri;
				}
				?>
			</h1>
		</div>



	</div>


	

</body>
</html> 

 

