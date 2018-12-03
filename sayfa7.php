<!DOCTYPE html>
<html>
	<head>
		<title>Sabir Değişken Tanımlama</title>
		<meta charset="UTF-8" />
	</head>
	
	<body>
		<?php
			#Sabir değişken define komutuyla yapılır
			#Sabit ismi genellikle büyük harfle yazılır
			
			$urun_fiyati = 15.25;
			define("KDV_ORAN",0.18);
		
			$satis_fiyati = $urun_fiyati + ($urun_fiyati * KDV_ORAN);
			
			echo "Fiyatı $urun_fiyati olan ürünün, satış fiyatı $satis_fiyati";
			
		?>
	</body>
</html>