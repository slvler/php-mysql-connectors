<?php

namespace qwerty\Database;

use \PDO;

abstract class Database implements DatabaseFace {

    protected $dbhost;
    protected $dbname;
    protected $dbuser;
    protected $dbpass;
    protected $connection;

    public function __construct($dbhost, $dbname, $dbuser, $dbpass, $connection)
    {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->connection = $connection;
    
    }


   public function MysqlConnection(){
       $this->connection = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname.";charset=utf8", $this->dbuser, $this->dbpass);
       return $this->connection;
            //echo "accept";
   }

   public function PostgresqlConnection(){
    $this->connection = new PDO("pgsql:host=".$this->dbhost.";port=5432;dbname=".$this->dbname.";",$this->dbuser,$this->dbpass);
      //echo "accept";
      return $this->connection;
    
   }
   


}



?>

