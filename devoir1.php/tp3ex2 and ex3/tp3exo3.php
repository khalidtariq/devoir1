<?php
	
	$file = fopen("donnee.txt", "r");

	if( $file == false ) {
            echo ( "Erreur lors de l'ouverture du fichier" );
            exit();
         }
        $j=0;
		while(!feof($file)){
	    	$array[$j] = (explode("|", fgets($file)));
	    	$j++;
	    }
	fclose($file);
?>


<html>
<head>
	<title> TP3 EXR3</title>
</head>
<body>
	<h1> Centrale d'achats </h1>
	<h3> Commande clients</h3>
	<table border="2">
		<tr>
			<td> Numero de commandE</td>
			<td> Numero Client </td>
			<td> Date de commande </td>
			<td> Désignation article</td>
			<td> Quantité (Pal) </td>
			<td> Prix unitaire (Dh) </td>
			<td> Date de livraison </td>
			<td> Adresse client </td>
		</tr>
	<?php 
		$i=0;
		while($i < $j ){
	   		print("<tr>");
	   		print("<td>".$array[$i][0]."</td>");
	   		print("<td>".$array[$i][1]."</td>");
			print("<td>".$array[$i][2]."</td>");
			print("<td>".$array[$i][3]."</td>");
			print("<td>".$array[$i][4]."</td>");
			print("<td>".$array[$i][5]."</td>");
			print("<td>".$array[$i][6]."</td>");
			print("<td>".$array[$i][7]."</td>");
			print("</tr>");
			$i++;
	   	}
   	?>

</body>
</html>
