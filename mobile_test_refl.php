<?php
require_once('Mobile.php');

// Tesztelés ReflectionClass segítségével
function testGetAllMobileUsingReflection() {
    // Létrehozzuk a ReflectionClass objektumot a Mobile osztályhoz
    $reflectionClass = new ReflectionClass('Mobile');
    
    // Lekérjük az osztályhoz tartozó metódust
    $method = $reflectionClass->getMethod('getAllMobile');
    
    // Ellenőrizzük, hogy a metódus elérhető (public)
    if ($method->isPublic()) {
        echo "A getAllMobile metódus elérhető.\n";
        
        // Létrehozzuk az osztály példányát
        $mobileObj = $reflectionClass->newInstance();
        
        // Meghívjuk a metódust a ReflectionClass segítségével
        $mobiles = $method->invoke($mobileObj);
        
        // Ellenőrizzük, hogy van-e adat
        if (empty($mobiles)) {
            echo "Nincs adat a mobileszközökről.\n";
        } else {
            echo "Mobilok listája:\n";
            print_r($mobiles);
            foreach ($mobiles as $mobile) 
            {
                echo "ID: " . $mobile['m_id'] . " | Név: "
                 . $mobile['m_desc'] . "\n";
            }
        }
    } else {
        echo "A getAllMobile metódus nem elérhető.\n";
    }
}

// Teszt futtatása
testGetAllMobileUsingReflection();
?>