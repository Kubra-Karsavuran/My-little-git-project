<?php 
if ( isset( $_POST['nameveri'] ) ) {
	if (isset( $_POST['emailveri'] )) {
		if (isset( $_POST['mesajveri'] )) {
			$nameveri=$_POST['nameveri'];
			$emailveri=$_POST['emailveri'];
			$mesajveri=$_POST['mesajveri'];
			echo "name:".$nameveri."email:".$emailveri."mesaj:".$mesajveri;
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İletisimdeki Veriler</title>
</head>
<body>

	<div style="width: 50%; height: 250px; background-color: pink; margin-left: 25%;  ">
		<h1 style=" text-align: center; color: grey; " >VERİLER</h1>

		<div>
			<h1 style="color: brown;padding-left: 20px; ">
				<?php 
				if ( isset($_POST['emailveri']) ) {
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

 

