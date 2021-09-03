<?php
require_once "autoload.php";
require_once "constants.php";

use \qwerty\Database\DatabaseController as DatabaseController;
use \qwerty\Config\Method as Method;


$db = new DatabaseController(DBHost, DBName, DBUser, DBPassword,connection);


$cn = $db->MysqlConnection();
//$baglanti = $db->PostgresqlConnection();

$method = new Method($cn);

//$veri = $method->Select_all("orders");
/*

$data = array(
    'ShipName' => "deneme",
    'ShipAddress' => "deneme",
    'ShipCity' => "deneme"
);
*/
//$method = $method->Insert("orders",$data);

$id = array(
  'OrderID',"CustomerID"
);

/*
$data = array(
    'ShipName' => "12",
    'ShipAddress' => "12",
    'ShipCity' => "12"
);


$method = $method->Update('orders', $id, $data);
*/

//$method = $method->Delete('orders',$id);

$data = array(
    "EmployeeID" => "4"
);
$con = array("!=");
$if = array("AND");

//$a = $method->Select_ch("orders",$id);

$a = $method->Select_wh('orders',$data,$con,$if);

print_r($a);


?>