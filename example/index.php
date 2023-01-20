<?php

require __DIR__ . '/../vendor/autoload.php';


use slvler\mysqlconnectors\Constant;
use slvler\mysqlconnectors\Config\Method;
use slvler\mysqlconnectors\Database\DatabaseController;


$Constant = new Constant();

$db = new DatabaseController($Constant->showDBHost(), $Constant->showDBName(), $Constant->showDBUser(), $Constant->showDBPassword(), $Constant->showConnection());

$connection = $db->MysqlConnection();
$method = new Method($connection);

$example = $method->Select_all("orders");



$data = array(
    'ShipName' => "deneme",
    'ShipAddress' => "deneme",
    'ShipCity' => "deneme"
);

$method = $method->Insert("orders",$data);

?>