<?php
require_once 'dbcontroller.php';
class DBcontr_test {
    public function tesztFuttat()
    {
        echo "teszt indítása...\n";
        $db= new DBController();

        //DB kapcsolat
        if ($this->csatlakozasteszt($db))
        {
            echo " Sikeres csati \n";
        } 
        else 
        {
            echo "Sikertelen csati \n";
        }
    
        //lekerdezes végrehajtása
        if ($this->SelectQueryteszt($db))
        {
            echo "sikeres lekerdezes \n";
        }
        else
        {
            echo "sikertelen lekerdezes \n";
        }

        $db->closeDB();
        
    }
    
    private function csatlakozasteszt($db)
        {
            $informacio=new ReflectionClass($db);
            $tulajdonsag= $informacio->getProperty('conn');
            $tulajdonsag->setAccessible(true);
            return !is_null($tulajdonsag->getValue($db));


        }
    
    private function SelectQueryteszt($db)
    {
        $eredmeny=$db->executeSelectQuery("Select m_type from tbl_mobile
         where m_id=1");
         print_r($eredmeny);
         //return is_array($eredmeny) && !empty($eredmeny);
         return is_array($eredmeny) 
         && !empty($eredmeny) && isset($eredmeny[0]['m_type'])
          && $eredmeny[0]['m_type']==1;
    }
 }

 //futi
 $teszt = new DBcontr_test();
 $teszt->tesztFuttat();