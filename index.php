<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Alay Generator</title>

	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/icon.css">
</head>
	<style>
		body{
  			background: url("img/bgD.png") repeat;
		}
		/* label color */
	   .input-field label {
	     color: #ffffff;
	   }
	   /* label focus color */
	   .input-field textarea[type=text]:focus + label{ 
	     color: #ffffff !important;
	   }
	   /* label underline focus color */
	   .input-field textarea[type=text]:focus {
	     border-bottom: 1px solid #ffffff !important;
	     box-shadow: 0 1px 0 0 #ffffff !important;
	   }
	   /* valid color */
	   .input-field textarea[type=text].valid {
	     border-bottom: 1px solid #ffffff !important;
	     box-shadow: 0 1px 0 0 #ffffff !important;
	   }
	   /* invalid color */
	   .input-field textarea[type=text].invalid {
	     border-bottom: 1px solid #ffffff !important;
	     box-shadow: 0 1px 0 0 #ffffff !important;
	   }
	   /* icon prefix focus color */
	   .input-field .prefix.active {
	     color: #ffffff !important;
	   }
	</style>

<body bgcolor="#f5f5f5 ">
	<div class="container">
		<div class="row center">
			<h1>Al4y G3nerat0r</h1>
			<hr>
		</div>
		<div class="row white-text">
	        <div class="col s12 m12">
	        	<div class="card teal">
	            	<div class="card-content white-text">
	              		<div class="row">
				    		<form method="post">
        						<div class="input-field col s12 m6">
          							<i class="material-icons prefix">mode_edit</i>
          							<textarea id="icon_prefix2" type="text" name="text" class="materialize-textarea"></textarea>
          							<label for="icon_prefix2">Masukan Kata Kata</label>

          							<div class="card-action">
			              				<button value="submit" name="submit" class="btn waves-effect waves-teal teal lighten-2">OK
			                				<i class="material-icons right">send</i>
			              				</button>
          			  				</div>
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
								<div class="input-field col s12 m6">
          							<i class="material-icons prefix">chevron_right</i>
          							<textarea id="icon_prefix2" type="text" class="materialize-textarea white-text" readonly><?php 
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
</body>
</html>
