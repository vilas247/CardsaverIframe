<?php
/**
	* Main Config
	* Author 247Commerce
	* Date 22 FEB 2021
*/
define('BASE_URL','http://'.$_SERVER['HTTP_HOST'].'/cardsaveriframe/');
define('STORE_URL','https://api.bigcommerce.com/stores/');
define('CSIFRAME_URL','https://gateway.cardstream.com/hosted/modal');

define('CSIFRAME_SDK','https://gateway.cardstream.com/sdk/web/v1/js/hostedforms.min.js');
define('JSVALIDATE_SDK',BASE_URL.'js/jquery.validate.min.js');
define('JS_SDK',BASE_URL.'js/jquery.min.js');
?>