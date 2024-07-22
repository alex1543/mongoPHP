<?php
   try {
      $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);

      $bulk->insert(['First_Name' => "Mahesh", 
         'Last_Name' => 'Parashar', 
         'Date_Of_Birth' => '1990-08-21',
         'e_mail' => 'mahesh_parashar.123@gmail.com',
         'phone' => '9034343345']);

      $bulk->insert(['First_Name' => "Radhika", 
         'Last_Name' => 'Sharma', 
         'Date_Of_Birth' => '1995-09-26',
         'e_mail' => 'radhika_sharma.123@gmail.com',
         'phone' => '9000012345']);	

      $bulk->insert(['First_Name' => "Rachel", 
         'Last_Name' => 'Christopher', 
         'Date_Of_Birth' => '1990-02-16',
         'e_mail' => 'rachel_christopher.123@gmail.com',
         'phone' => '9000054321']);

      $bulk->insert(['First_Name' => "Fathima", 
         'Last_Name' => 'Sheik', 
         'Date_Of_Birth' => '1990-02-16',
         'e_mail' => 'fathima_sheik.123@gmail.com',
         'phone' => '9000012345']);

      // connect to mongodb
      $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      $result = $manager->executeBulkWrite('myDb.sampleCollection', $bulk);

      printf("Inserted %d document(s).\n", $result->getInsertedCount());
   } catch (MongoDB\Driver\Exception\Exception $e) {	   
      echo "Exception:", $e->getMessage(), "\n";
   }
?>