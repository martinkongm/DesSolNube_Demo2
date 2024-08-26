<?php
	function conexion(){

	$host = "host=dpg-cr6g01g8fa8c73e4btu0-a";
	$port = "port=5432";
	$dbname = "dbname=dbprueba_b1no";
	$user = "user=dbprueba_b1no_user";
	$password = "password=ZHjXJMUKjO0Fv9FFspffhw9aLVEkldVG";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
