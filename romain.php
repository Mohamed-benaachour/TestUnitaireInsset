






<form method="post" action="">
Chiffre Romain : <input type="text" name="chiffre_romain" id='chiffre_romain'><br>
<input name='btnOk' type="submit" value="OK">
</form>

<?php

function chifToRome($num)
{
  //I V X  L  C   D   M
  //1 5 10 50 100 500 1k
  $rome =array("","I","II","III","IV","V","VI","VII","VIII","IX");
  $rome2=array("","X","XX","XXX","XL","L","LX","LXX","LXXX","XC");
  $rome3=array("","C","CC","CCC","CD","D","DC","DCC","DCCC","CM");
  $rome4=array("","M","MM","MMM","IVM","VM","VIM","VIIM","VIIIM","IXM");
  $str=$rome[$num%10];
  $num-=($num%10);
  $num/=10;
  $str=$rome2[$num%10].$str;
  $num-=($num%10);
  $num/=10;
  $str=$rome3[$num%10].$str;
  $num-=($num%10);
  $num/=10;
  $str=$rome4[$num%10].$str;
  return $str;
}
 

// Retourne CLII

if (isset($_POST['btnOk'])){
	$chiffre_romain = $_POST['chiffre_romain'];	
	echo chifToRome($chiffre_romain);


	}


echo '</br><a href="index.php">Retour Menu</a>';
?>