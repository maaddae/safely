<?php

//PDO server connection 
 header('Access-Control-Allow-Origin: *');

   // Define database connection parameters
   $hn 		= 'localhost';
   $un 		= 'username';
   $pwd		= 'password';
   $db 		= 'safely';
   $cs 		= 'utf8';

   // Set up the PDO parameters
   $dsn 	= "mysql:host=" . $hn . ";port=3306;dbname=" . $db . ";charset=" . $cs;
   $opt 	= array(
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                       );
   // Create a PDO instance (connect to the database)
   $pdo 	= new PDO($dsn, $un, $pwd, $opt);
   $data        = array();



?>