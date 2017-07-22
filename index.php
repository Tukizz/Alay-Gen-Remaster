<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Alay Generator Remaster</title>

	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/icon.css">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
</head>
<body bgcolor="#f5f5f5 ">
	<div class="container">	
		<center><h1>Al4y G3nerat0r</h1></center>
<hr>
<br><br>
		<div class="card">
			<div class="card-content black-text z-depth-1">
				<div class="container">	
              		<div class="col m12">
						<div class="row">
							<form method="post">
        						<div class="input-field col s6">
          							<i class="material-icons prefix">mode_edit</i>
          							<textarea id="icon_prefix2" name="text" class="materialize-textarea"></textarea>
          							<label for="icon_prefix2">Masukan Kata Kata</label>
          							<button value="submit" name="submit" class="waves-effect waves-blue btn blue"><i class="material-icons right">send</i><b>Submit</b></button>
        						</div>		
    						</form>
<?php
if(isset($_POST['submit'])){
$asli=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$alay=array( "4","3","C","d)","3","F","9","(-)","!","J","I<","I_","111","11","()","P","Q","12","5","7","(_)","\/","UU","X","Y","Z");
$text=$_POST['text'];
$kecil=strtolower($text);
$hasil=str_replace($asli,$alay,$kecil);
};
?>
        						<div class="input-field col s6">
          							<i class="material-icons prefix">chevron_right</i>
          							<textarea id="icon_prefix2" class="materialize-textarea black-text" readonly><?php 
										if(!empty($hasil)){
											echo $hasil;
										}else{
											echo "";
										}?>
									</textarea>
          							<label for="icon_prefix2">Hasil</label>
        						</div>
      					</div>
              		</div>
          		</div>
			</div>
		</div>
	</div>
</body>
</html>
