<?php

$dbUserName="";
   $dbPassword="your_database_name";
   $dbServerName="your_database_name";
   $dbDatabaseName="your_database_name";
   
   $connection=new mysqli($dbServerName, $dbUserName, $dbPassword, $dbDatabaseName);
   
   if($connection->connect_errno)
   {
        echo "The connection to the datbase failed".$connect_errno;
        exit();
    }
 
