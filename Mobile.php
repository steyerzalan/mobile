<?php
require_once 'dbcontroller.php';

//Restful web szolgáltatás

Class Mobile 
{
    private $mobiles = array();

    public function getAllMobile()
    {
        $query = "Select * from tbl_mobile";
        $dbcontroller = new DBController();
        $this->mobiles = $dbcontroller->executeSelectQuery($query);
        return $this->mobiles;
    }
}