<?php
// https://pecl.php.net/package/mongodb/1.5.3/windows
// php_mongodb-1.5.3-7.3-ts-vc15-x64.zip
// в php.ini добавить: extension=php_mongodb.dll
class DbManager {
	//Database configuration
	private $dbhost = 'localhost';
	private $dbport = '27017';
	private $conn;
	
	function __construct(){
        //Connecting to MongoDB
        try {
			//Establish database connection
            $this->conn = new MongoDB\Driver\Manager('mongodb://'.$this->dbhost.':'.$this->dbport);
        }catch (MongoDBDriverExceptionException $e) {
            echo $e->getMessage();
			echo nl2br("n");
        }
    }
	function getConnection() {
		return $this->conn;
	}
}
?>