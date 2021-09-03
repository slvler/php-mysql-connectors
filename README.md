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


