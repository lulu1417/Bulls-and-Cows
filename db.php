<?php
$db = mysqli_connect("localhost", "root", "0000", "game") or die(mysqli_error());
//define('HOSTSPEC', NULL);
//define('USERNAME', 'd44041122');
//define('PASSWORD', '[MY_DBMS_PASSWORD]');
//define('DATABASE_INSTANCE_NAME', NULL); // Or the name of a database instance within your Cloud SQL instance.
//define('PORT', NULL);
//define('SOCKET', '/cloudsql/guessnumber:[GOOGLE_CLOUD_REGION]:asia-east1-c');
//
//// Option 1. Object-oriented style...
//$mysqli = new mysqli(HOSTSPEC, USERNAME, PASSWORD, DATABASE_INSTANCE_NAME, PORT, SOCKET);
//
//// Option 2. Procedural style...
//$DBMSresource = mysqli_connect(HOSTSPEC, USERNAME, PASSWORD, DATABASE_INSTANCE_NAME, PORT, SOCKET);
//if (!$DBMSresource)