<?php

namespace slvler\mysqlconnectors;

class Constant{

    private $DBHost = 'localhost';
    private $DBName = 'eticaret';
    private $DBUser = 'root';
    private $DBPassword = '';
    private $Connection = 'connection';

    function showDBHost() 
    {
        return $this->DBHost;    
    }

    function showDBName() 
    {
        return $this->DBName;
    }

    function showDBUser() 
    {
       return $this->DBUser;
    }

    function showDBPassword() 
    {
       return $this->DBPassword;
    }

    function showConnection() 
    {
        return $this->Connection;
    }



    /*

    const DBHost = "localhost";
    const DBHost = "localhost";
    const DBHost = "localhost";
    const DBHost = "localhost";
    const DBHost = "localhost";

    define("localhost","localhost");
define("dbname","sifirdanphp");
define("dbuser","postgres");
define("dbpass","489623sunA");
define("connection1","connection");

define("DBHost","localhost");
define("DBName","northwind");
define("DBUser","root");
define("DBPassword","");
define("connection","connection");
*/



}

?>