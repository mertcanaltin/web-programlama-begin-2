<!DOCTYPE html>
<html>
	<head>
		<title>deneme</title>
		<meta charset="UTF-8" />
		
		<style>
			.tablo{
				border:1px solid black;
			}
		</style>
	</head>
	
	<body>
	<?php 
		$adi = "mertcan";
		$soyadi = "altın";
		$yasi = 4;
		$geliri = 50.75;
	?>
		<table class="tablo">
			<thead >
				<th>Adı</th>
				<th>Soyadı</th>
				<th>Yaşı</th>
				<th>Geliri</th>
			</thead>
			<tbody>
				<td><?php echo $adi?></td>
				<td><?php echo $soyadi?></td>
				<td><?php echo $yasi?></td>
				<td><?php echo $geliri?></td>
			</tbody>
		
		</table>
	</body>
</html>