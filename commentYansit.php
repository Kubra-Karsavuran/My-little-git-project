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

 

