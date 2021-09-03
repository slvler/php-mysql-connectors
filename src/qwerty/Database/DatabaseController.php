<?php
namespace qwerty\Database;

class DatabaseController extends Database{

 public $dbhost;
 public $dbname;
 public $dbuser;
 public $dbpass;
 public $connection;


    public function __construct($dbhost,$dbname,$dbuser,$dbpass,$connection) {

      parent::__construct($dbhost, $dbname, $dbuser, $dbpass, $connection);
    
    }


    


    

}














?>