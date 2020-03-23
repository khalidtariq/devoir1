<?php
	$FruitTAb = array("BOT.jpg","TOM.jpg","ananas.jpg","apple.jpg","avocat.jpg","banana.jpg","grenadine.jpg","peach.jpg");
	shuffle($FruitTAb);

?>


<html>
<head>
	<title>TP3 EXO1</title>
	</meta charset="UTF-8">
</head>
<body>
	<h1 align="center"> Délice des Fruits ET Légumes</h1>
	<table>
		<tr>
			<td name="img1"> 
				<img src="<?php print($FruitTAb[0]); ?>"> 
			</td>

			<td name="img2"> 
				<img src="<?php print($FruitTAb[1]); ?>"> 
			</td>

			<td name="img3"> 
				<img src="<?php print($FruitTAb[2]); ?>"> 
			</td>
		</tr>
	</table>
</body>
</html>