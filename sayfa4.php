<!DOCTYPE html>
<html>
	<head>
		<title>Sayfa 4</title>
		<meta charset="UTF-8" />
	</head>
	
	<body>
		<?php
			$adi = "Efe";
			$soyadi = "Yalı";
			$yasi = 4;
			$geliri = 50.75;
			
			$br = "<br/>";
			
			
			echo ("Adı : $adi <br/>");
			echo ("Değişken Adı : \$adi <br/>");
			echo ("Değişkenin Türü : ". gettype($adi) ."</br></br>" );
			
			echo ("Yaşı : $soyadi <br/>");
			echo ("Değişken Adı : \$soyadi <br/>");
			echo ("Değişkenin Türü : ". gettype($soyadi) ."</br><br/>" );
			
			echo ("Geliri : $geliri <br/>");
			echo ("Değişken Adı : \$geliri <br/>");
			echo ("Değişkenin Türü : ". gettype($geliri) ."</br></br>" );
			//$br . "Soyadı : " . $soyadi . $br . "Yaşı : " . $yasi . $br . "Geliri : " . $geliri . $br);
		?>
	</body>
</html>