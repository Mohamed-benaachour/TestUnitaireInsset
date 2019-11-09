






<form method="post" action="">
Prix : <input type="number" name="prix" id='prix'><br>
Remise en pourcentage : <input type="number" name="pourcentage" id='pourcentage'><br>
<input name='btnOk' type="submit" value="OK">
</form>

<?php


if (isset($_POST['btnOk'])){
		$prix = $_POST['prix'];
		$pourcentage = $_POST['pourcentage'];

		$prix_final=$prix*(1-($pourcentage/100));
		echo 'le prix final est de : '.$prix_final.'€';
	}


?>