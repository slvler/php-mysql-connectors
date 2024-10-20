# php-mysql-connectors

[![tests](https://github.com/slvler/php-mysql-connectors/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/php-mysql-connectors)
[![Latest Stable Version](https://poser.pugx.org/slvler/mysql-connectors/v)](https://packagist.org/packages/slvler/mysql-connectors) 
[![Latest Unstable Version](https://poser.pugx.org/slvler/mysql-connectors/v/unstable)](https://packagist.org/packages/slvler/mysql-connectors) 
[![License](https://poser.pugx.org/slvler/mysql-connectors/license)](https://packagist.org/packages/slvler/mysql-connectors)
[![Total Downloads](https://poser.pugx.org/slvler/mysql-connectors/downloads)](https://packagist.org/packages/slvler/mysql-connectors)

Mysql driver development that can be used on the php side

## Installation

To install this package tou can use composer:

```bash
composer require slvler/mysql-connectors
```
## Usage 

```php
use slvler\mysqlconnectors\Constant;
use slvler\mysqlconnectors\Config\Method;
use slvler\mysqlconnectors\Database\DatabaseController;

$Constant = new Constant();

$db = new DatabaseController($Constant->showDBHost(), $Constant->showDBName(), $Constant->showDBUser(), $Constant->showDBPassword(), $Constant->showConnection());

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
### Insert Method
```php
$methodInsert = $method->Insert($tableName,$data);
```
#### Update Method (TableName, Id = array() , Data = array()):
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

### Update Method
```php
$methodUpdate = $method->Update($tableName', $id, $data);
```

### Delete Method (TableName, Id = array()):
TableName, Id:

```php
$tableName = "Orders";

$Id = array(
 "OrderID" => "1"
);

```
### Delete Method
```php
$methodDelete = $method->Delete($tableName,$id);
```
### Select_all Method (TableName):
TableName:
```php
$tableName = "Orders";
```
### Select_all Method
```php
$methodSelectAll = $method->Select_all($tableName);
```
### Select_ch Method (TableName, Data = array()):
TableName, Data:

```php
$tableName = "Orders";

$data = Array
(
  "ShipName", "ShipAddress", "ShipCity"
);

```
### Select_ch Method
```php
$methodSelectCh = $method->Select_ch($tableName,$data);
```
#### Select_wh Method (TableName, Data = array(), Conn = array(), If = array()):
TableName, Data, Conn, If:
```php
$tableName = "Orders";
$data = Array
(  
    "EmployeeID" => "4"
);
$conn = Array
(  
    "!="
);
$if = Array
(  
    "AND"
);
```
### Select_wh Method
```php
$methodSelectWh =  $method->Select_wh($tableName, $data, $conn, $if);
```
### Testing

```bash
vendor\bin\phpunit
```
## Credits
- [slvler](https://github.com/slvler)

## License
The MIT License (MIT). Please see [License File](https://github.com/slvler/slvler/blob/main/LICENSE.md) for more information.
