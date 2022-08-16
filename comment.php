<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Git İle İletişim</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>


	<div style="width: 100%;height: 70px;background-color: rgb(252, 228, 236) ;">
		<h1 style=" color: grey;text-align: center; " > <i>İLETİŞİM FORM</i> </h1>
	</div>


	<div style="margin-top: 60px;" class="container">
		<div class="row"> 
			<!-- form konuldu alt tarafa  --> 
			<div class="col-6">
				<form action="iletisimYansit.php" method="POST">
					<div>
						<h4 style="color: grey; text-align: center;padding-bottom: 20px; ">FORMU DOLDURUNUZ</h4>
					</div>  
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon3">Email</span>
						<input name="emailveri" type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3">
					</div> 
					<div class="input-group">
						<span class="input-group-text">Mesajınız</span>
						<textarea name="mesajveri"  class="form-control" aria-label="With textarea"></textarea>
					</div>
					<button style="margin-top: 20px;" type="submit" class="btn btn-secondary">Gönder</button> 
				</form>
			</div>
			<!-- araya form konuldu -->


			<!-- card konuldu alt tarafa  -->
			<div style=" text-align: center;padding-left: 200px;  " class="col-6">
				<div class="card" style="width: 18rem;">
					<img src="http://www.askmasali.com/manzararesimleri/manzara9.jpg" class="card-img-top" alt="...">
					<div class="card-body"> 
						<p class="card-text">Teşekkürler....</p> 
					</div>
				</div>
			</div>
			<!-- araya card konuldu  --> 
		</div>
	</div>



	<div style="width: 100%;height: 100px;background-color: rgb(237, 231, 246); margin-top: 170px;">
		<h1 style=" color: grey;text-align: center; " > <i>   </i> </h1>
	</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>

