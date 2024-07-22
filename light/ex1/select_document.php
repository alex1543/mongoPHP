<?php
   try {
      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      $filter = [];

      // Create a Query Object
      $query = new MongoDB\Driver\Query($filter);

      // Execute the query
      $rows = $manager->executeQuery("myDb.sampleCollection", $query);

      foreach ($rows as $row) {  
         printf("First Name: %s, Last Name: %s.<br/>", $row->First_Name, $row->Last_Name);   
      }
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>