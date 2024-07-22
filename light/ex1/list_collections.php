<?php
   try {
      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      // Create a Command Instance
      $collectionList = new MongoDB\Driver\Command(["listCollections" => 1]);

      // Execute the command on the database
      $cursor = $manager->executeCommand("myDb", $collectionList);
   
      $collections = $cursor->toArray();
   
      foreach ($collections as $collection) {    
         echo $collection->name . "<br/>";
      }
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>