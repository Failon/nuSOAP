<?php
 
require_once ('lib/nusoap.php');
//realitzo un formulari per a la entrada dels valors i les operacions.
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
</head>
<body>
	<form action="#" method="POST">
		<label>Numero 1</label><input type="text" name="number1">
		<label>Numero 2</label><input type="text" name="number2">
		<select name="operation" id="operation">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="producte">producte</option>
			<option value="quocient">quocient</option>
		</select>
		<button>calcula</button>
	</form>
</body>
</html>

<?php
if(isset($_POST['operation'])){

	$wsdl="http://2daw10.cesnuria.com//nuSOAP/calc_server.php?wsdl";
	$client = new nusoap_client($wsdl,'wsdl');
	$params = array('a' => $_POST['number1'], 'b'=>$_POST['number2']);
	switch($_POST['operation']){
		case 'suma':
			$result= $client->call('Suma', $params);
			echo "<h2>Operacion: ".$_POST['operation']."</h2>";
			break;

		case 'resta':
			$result= $client->call('Resta', $params);
			echo "<h2>Operacion: ".$_POST['operation']."</h2>";
			break;

		case 'producte':
			$result= $client->call('Producte', $params);
			echo "<h2>Operacion: ".$_POST['operation']."</h2>";
			break;

		case 'quocient':
			$result= $client->call('Quocient', $params);
			echo "<h2>Operacion: ".$_POST['operation']."</h2>";
			break;

		default:		
			break;
		}
	echo '<h2>Resultat</h2><pre>';
	$err = $client->getError();
	if ($err) {
		// Display the error
		echo '<p><b>Error: '.$err.'</b></p>';
	} else {
		// Display the result
		print_r($result);
	}	
}


?>



