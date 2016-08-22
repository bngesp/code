
<div>
	<form method='post' action=#>
		<label>texte</label>
		<input type='text' name='text' value="test"><br/>
		<label>choix</label><br/>
		<input type='radio' name='code' value='qr' checked>QRCode<br>
		<input type='radio' name='code' value='bar'>code Bar
		<input type='submit' value='qrcode'>
	</form>
</div>
 
<?php
include "lib/fonctions.php";
if(isset($_POST) and !empty($_POST['text'])){
	if($_POST['code']=='qr'){
		$src=genererQRCode($_POST['text']);
		echo "<img src=$src>";
	}else if($_POST['code']=='bar'){
		$src=genererBarCode($_POST['text']);
		echo "<img src=$src>";
	}
}
?>
