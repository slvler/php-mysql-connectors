# PHP-MySQL-Class
Mysql Connection V1




Initialize
------------
```php
<?php
define('DBHost', 'localhost');
define('DBName', 'northwind');
define('DBUser', 'root');
define('DBPassword', '');
define("connection","connection");
$db = new DatabaseController(DBHost, DBName, DBUser, DBPassword,connection);

?>
```



Basic Table // use northwind
------------

#### table "orders"

| OrderID   | EmployeeID  | ShipName
|:-----------:|:------------:|:------------:|
| 10249       |     6    |     red    
| 10250       |     4    |     yellow  
| 10251       |     3    |     green   
| 10252       |     4    |     yellow    
| 10253       |     3    |     red    




#### Insert Method (TableName, Data = array()):

TableName, Data:

```php
$tableName = "Orders";

$data = Array
(
  "ShipName" => "Blue",
  "ShipAddress" => "Nottingham",
  "ShipCity" => "UK"
);
```

```php
Insert Method
<?php
$methodInsert = $method->Insert($tableName,$data);
?>
```




#### Update Method (TableName, $Id = array() , Data = array()):



TableName, Id , Data:

```php
$tableName = "Orders";

$Id = array(
 "OrderID" => "1"
);

$data = Array
(
  "ShipName" => "Blue",
  "ShipAddress" => "Nottingham",
  "ShipCity" => "UK"
);
```

```php
Update Method
<?php
$methodUpdate = $method->Update($tableName', $id, $data);
?>
```






#### Delete Method (TableName, $Id = array()):

TableName, Id;

```php
$tableName = "Orders";

$Id = array(
 "OrderID" => "1"
);

```

```php
Delete Method
<?php
//$methodDelete = $method->Delete($tableName,$id);
?>
```







