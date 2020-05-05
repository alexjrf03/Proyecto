<?php

	require_once '../Model/App.php';
	require_once '../Model/Lenguaje.php';
	require_once '../Model/Service.php';
	require_once '../Model/Sistema.php';
	require_once '../Model/Env.php';
	require_once '../Model/Device.php';
	require_once '../Model/Database.php';
	require_once '../Model/Provider.php';
	   
	if (isset($_POST['id']))
	{
		$table = 'aplicacion';
		$item = "id_app";
		$value = $_POST['id'];
	
		$app = App::consultarApp($table,$item,$value);
		$leng = Lenguaje::read($table,$value);
		$serviweb = Service::read($table,$value);
		$so = Sistema::read($table,$value);
		$env = Env::read($table,$value);
		$device = Device::read($table,$value);
		$db = Database::read($table,$value);
		$provider = Provider::read($table,$value);

		$response = [];
		array_push_assoc($response, $app);
		array_push_assoc($response, $leng);
		array_push_assoc($response, $serviweb);
		array_push_assoc($response, $so);
		array_push_assoc($response, $env);
		array_push_assoc($response, $device);
		array_push_assoc($response, $db);
		array_push_assoc($response, $provider);
		
		return print_r(json_encode($response));
	}

	// Function for join two array associative
	function array_push_assoc(array &$arrayDatos, array $values){
		$arrayDatos = array_merge($arrayDatos, $values);
	}