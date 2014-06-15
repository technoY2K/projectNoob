<?php

//file with database credentials
require_once( 'config.php' );

try {
  $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
  $db->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $db->exec("SET NAMES 'utf8'" );
    
  } catch ( Exception $e ) { 
  echo "Could not link to mysql database.";
  exit();
  }