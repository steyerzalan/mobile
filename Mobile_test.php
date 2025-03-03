<?php

require_once("Mobile.php");

//Tesztelés funkció
function testGetAllMobile()
{   
    //Létrehozzuk az objektumot
    $mobileObj = new Mobile();
    //Hívjuk a getAllMobile metódust
    $mobiles = $mobileObj->getAllMobile();

    //Ellenőrizzük, hogy a lekérdezés nem üres
    if (empty($mobiles))
    {
        echo "Nincs adat a mobileszközről.\n";
    }
    else
    {
        echo "Mobilok listája:\n";
    
        foreach($mobiles as $mobile)
        {
            echo "ID: " . $mobile['m_id'] . " | Név: " . $mobile["m_desc"] . "\n";
        }
    }
}

//Teszt fttatása
testGetAllMobile();

?>