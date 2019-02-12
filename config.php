<?php
	// date_default_timezone_set('/Mexico_City');
	// error_reporting(E_ALL);
	// ini_set('display_errors', 'off');

	define( 'URL' ,"http://localhost/".basename(getcwd())."/");

	define( 'CSS' , URL."public/css/");
	define( 'JS' , URL."public/js/" );
	define( 'IMG', URL."public/images/");
	define( 'LIB', URL."libs/");

	//Crean el archivo de config.js
	//Constantes de la base de datos
	// define( 'DB_HOST' , '148.220.52.120');
	// define( 'DB_USER' , 'womenit2018');
	// define( 'DB_PASS' , 'womenit2018.!');
	// define( 'DB_NAME' , 'womenit');
	define( 'DB_HOST' , 'localhost');
	define( 'DB_USER' , 'root');
	define( 'DB_PASS' , '');
	define( 'DB_NAME' , 'womenit');

	define( 'DB_CHARSET' ,'utf8');

	define( 'ALGOR', 'sha512');
	define( 'KEY', 'dWVjbzIxrdNw==');
	define( 'ID_SESSION', 'womenit218');
?>
