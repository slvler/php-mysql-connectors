<?php

namespace qwerty\Config;

interface SqlPattern{

    public function __construct($connection);
    public function Select_ch($table,$data = array());
    public function Select_All($table);
    public function Select_wh($table,$data = array(),$con = array(), $if = array());
    public function Insert($table,$data = array());
    public function Update($table, $id = array(), $data = array());
    public function Delete($table, $id = array());
}