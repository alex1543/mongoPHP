<?php
   try {
	  // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	  
      $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);

      $bulk->insert(['title' => "MongoDB Overview", 
         'description' => 'MongoDB is no SQL database', 
         'by' => 'tutorials point',
         'url' => 'http://www.tutorialspoint.com',
         'comments' => [
		 ['user' => "user1", 'message' => "My First Comment", 'dateCreated' => "20/2/2020", 'like' => 0],
		 ['user' => "user2", 'message' => "My Second Comment", 'dateCreated' => "20/2/2020", 'like' => 0],
		 ]]);

      $result = $manager->executeBulkWrite('myDb.sampleCollection', $bulk);

      printf("Inserted %d document(s).\n", $result->getInsertedCount());
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>