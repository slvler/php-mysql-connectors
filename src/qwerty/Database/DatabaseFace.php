<?php

namespace qwerty\Database;
interface DatabaseFace{

    public function __construct($dbhost,$dbname,$dbuser,$dbpass,$connection);
    public function MysqlConnection();
    public function PostgresqlConnection();
}


?>