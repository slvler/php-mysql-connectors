<?php

namespace slvler\mysqlconnectors\Config;

Abstract class Sql implements SqlPattern {

    private $connetction;
    private $sql;
    private $query;
    private $rt;
    private $quote;
    private $res;

public function __construct($connetction)
{
    $this->connetction = $connetction;
}

public function Select_ch($table,$data = array())
{
   array_keys($data);
   $qt = "";
    foreach(array_merge($data) as $item){
        $qt .= $item.", ";
    }
    $res = rtrim($qt,", ");

    $this->sql = "Select ".$res." from ".$table;
    $this->query = $this->connetction->prepare($this->sql);
    $this->query->execute();

    while($this->rt = $this->query->fetchAll()) {
        return $this->rt;
    };
    // TODO: Implement Select_ch() method.
}

public function Select_all($table)
 {
    $this->sql = "Select * from ".$table;
    $this->query = $this->connetction->prepare($this->sql);
		$this->query->execute();

		while($this->rt = $this->query->fetchAll()) {
			return $this->rt;
		};

     
 }

 public function Select_wh($table,$data = array(),$con = array(),$if = array()){


    $q = "";
    $i = 0;
    $b = 1;
     foreach($data as $x => $val) {
         $q .= " $x ".$con[$i]." $val ".$if[$b - 1];
         $i++;
     }

    $res = rtrim($q,"AND");


     $this->sql = "SELECT * FROM ".$table."  WHERE ". $res;

     $this->query = $this->connetction->prepare($this->sql);
     $this->query->execute();

     while($this->rt = $this->query->fetchAll()) {
         return $this->rt;
     };



 }

public function Insert($table, $data = array())
{
    $quote = "";
    foreach (array_keys($data) as $item){
        $quote .= $item." = :". "$item, ";
    }
     $res = rtrim($quote,", ");

     $this->sql = "INSERT INTO ".$table." SET " . $res;
     $this->query = $this->connetction->prepare($this->sql);
     $this->rt = $this->query->execute($data);
     if ($this->rt) {
        //return $this->connection->lastInsertId();
        return $this->rt;
     }


    // TODO: Implement Insert() method.
}

public function Update($table, $id = array(), $data = array())
 {

    $quete = "";

     foreach($data as $x => $val) {
         $quete .=  "$x =  '$val', ";
     }

     $res = rtrim($quete,", ");

     $wher = "";

     foreach($id as $x => $val) {
         $wher .=  "$x = $val, ";
     }

     $wh = rtrim($wher,", ");


     $this->sql = "UPDATE ".$table." SET " . $res . " WHERE ".$wh.";";

     $this->query = $this->connetction->prepare($this->sql);

     $this->rt = $this->query->execute();
     if ($this->rt) {
         return $this->rt;

     }

 }

 public function Delete($table, $id = array())
 {

     $wher = "";

     foreach($id as $x => $val) {
         $wher .=  "$x = $val, ";
     }

     $wh = rtrim($wher,", ");

     $this->sql = "DELETE FROM ".$table." WHERE ".$wh.";";
     $this->query = $this->connetction->prepare($this->sql);
     $this->rt = $this->query->execute();
     if ($this->rt) {
         return $this->rt;

     }
 }




}




?>