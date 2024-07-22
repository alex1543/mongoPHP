<?php
   try {
      $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);

      $bulk->delete(['First_Name' => "Mahesh"]);

      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      $result = $manager->executeBulkWrite('myDb.sampleCollection', $bulk);

      echo "Document deleted.";
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>