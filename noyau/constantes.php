<?php
// noyau/constantes.php

$url = explode('index.php', $_SERVER['SCRIPT_NAME']);
define('BASE_URL','http://' . $_SERVER['HTTP_HOST'] . $url[0]);

$urlz = explode('index.php', $_SERVER['SCRIPT_NAME']);
  define('BASE_URLZ', 'http://' . $_SERVER['HTTP_HOST'] . $urlz[0]);
