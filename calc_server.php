<?php
	require_once 'lib/nusoap.php';
	$servei = 'http://2daw10.cesnuria.com//nuSOAP';
	$soap = new soap_server;
	$soap->configureWSDL('AddService', $servei);
	$soap->wsdl->schemaTargetNamespace = $servei;
	$soap->register('Suma', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), $servei);
	$soap->register('Resta', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), $servei);
	$soap->register('Producte', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), $servei);
	$soap->register('Quocient', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), $servei);
	$soap->service(isset($HTTP_RAW_POST_DATA) ?$HTTP_RAW_POST_DATA : '');

function Suma($a, $b){
	return $a + $b;
}
function Resta($a, $b){
	return $a - $b;
}
function Producte($a, $b){
	return $a * $b;
}
function Quocient($a, $b){
	return $a / $b;
}
?>

