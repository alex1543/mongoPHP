<?php
   try {
      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      // Create a Command Instance
      $createCollection = new MongoDB\Driver\Command(["create" => "sampleCollection"]);

      // Execute the command on the database
      $cursor = $manager->executeCommand("myDb", $createCollection);
   
      echo "Collection created.";
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>