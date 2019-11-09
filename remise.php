






<form method="post" action="">
Prix : <input type="number" name="prix" id='prix'><br>
Remise en pourcentage : <input type="number" name="pourcentage" id='pourcentage'><br>
<input name='btnOk' type="submit" value="OK">
</form>

<?php


if (isset($_POST['btnOk'])){
		$prix = $_POST['prix'];
		$pourcentage = $_POST['pourcentage'];
		$pourcentage_payer=100-$pourcentage;
		$diff=100/$pourcentage_payer;
		$prix_final=$prix*$diff;  
		echo 'le prix initial est de : '.$prix_final.'€';
	}


?>