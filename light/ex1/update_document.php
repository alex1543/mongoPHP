<?php
   try {
      $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);

      $bulk->update(['First_Name' => "Mahesh"],['$set' => ['e_mail' => 'maheshparashar@gmail.com']]);

      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      $result = $manager->executeBulkWrite('myDb.sampleCollection', $bulk);

      printf("Updated %d document(s).\n", $result->getModifiedCount());
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>