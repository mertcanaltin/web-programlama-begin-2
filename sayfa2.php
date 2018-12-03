<!DOCTYPE html>
<html>
	<head>
		<title>Değişken Tanımlama</title>
		<meta charset="UTF-8" />
	</head>
	
	<body>
		<?php
			#php de değişken isimleri dolar ($) işaretiyle başlar.
			
			/* "" arasına değişken yazılırsa değişkenin değerini alır
				'' arasına yazılırsa onu metin sanar.
			*/
			$sayi = 15;
			$metin = "Muğla";
			$metin2 = "Menteşe";
			$ondalik = 15.751;
			$mantiksal = true;
			$br = "<br/>";
			
			echo ("$metin $metin2. ilk yazılan metinler $br");
			
			echo ($sayi . $br . $metin . $br . $metin2 . $br . $ondalik . $br. $mantiksal .$br);
		?>
	</body>
</html>
