<?php
   try {
      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      // Create a Command Instance
      $dropCollection = new MongoDB\Driver\Command(["drop" => "sampleCollection"]);

      // Execute the command on the database
      $cursor = $manager->executeCommand("myDb", $dropCollection);
   
      echo "Collection dropped.";
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>