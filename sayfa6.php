<!doctype html>
<html>
	<head>
		<title>PHP ile Metin Yazdırma</title>
		<meta charset="UTF-8" />
	</head>
	
	<body>
		<?php
			$degisken = "1650.75 TL'dir";
			
			echo ("Değişkenin Tipi : " . getType($degisken) . "</br>");
			echo ("Değişkenin Değeri : ". $degisken . "</br>");
			
			//tip dönüşümü int
			
			setType($degisken,"integer");
			echo ("Değişkenin Tipi : " . getType($degisken) . "</br>");
			echo ("Değişkenin Değeri : ". $degisken . "</br>");
			
			//tip dönüşümü double
			
			setType($degisken,"double");
			echo ("Değişkenin Tipi : " . getType($degisken) . "</br>");
			echo ("Değişkenin Değeri : ". $degisken . "</br>");
		?>
	</body>
</html>