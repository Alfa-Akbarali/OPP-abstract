<?php

abstract class ElectronicItems {
    public $name;
    public function __construct($name) {
            $this->name = $name;
    }
    abstract public function getType() : string;
}
    trait Make
    {
        public function getType() : string {
            return "$this->name";
        }
    }
    class Phones extends ElectronicItems {
        use Make;
    } 

    class MobilePhones extends Phones {
        use Make;
    }   

    class Iphone extends MobilePhones {
        use Make;
    }
    class Samsung extends MobilePhones {
        use Make;
    }
    $phones = new Phones("-Phones-");
    $mobilePhones = new MobilePhones("Mobile Phones");
    $iphone = new Iphone("   -Iphone 14 pro max");
    $samsung = new Samsung("   -Samsung S24 ultra");

    $devises = array($phones, $mobilePhones, $iphone, $samsung);

        foreach($devises as $devise)
        {
            echo $devise->getType(). PHP_EOL;
        }
    //cordPhones
    class CordPhones extends Phones {
       use Make;
    }
    class CordedPhone extends CordPhones {
        use Make;
    }

    class CordlessPhone extends CordPhones {
        use Make;
    } 

    $cordPhones = new CordPhones("Cord Phones");
    $cordedPhone = new CordedPhone("   -Corded Phone");
    $cordlessPhone = new CordlessPhone("   -Cordless Landline");

    $phones = array($cordPhones, $cordedPhone, $cordlessPhone);
    
    foreach ($phones as $phone) {
        echo $phone->getType(). PHP_EOL;
    }

    //soundSystems
    class SoundSystems extends ElectronicItems {
        use Make;
    }   

    class Earplugs extends SoundSystems {
        use Make;
    }  
    class Pods extends Earplugs {
        use Make;
    }
    
    class Stereos extends SoundSystems{
        use Make;
    }
    class Jbl extends Stereos {
        use Make;
    }
    $soundSystems = new SoundSystems("\n-Sound Systems-");
    $earplugs = new Earplugs("Earplugs");
    $pods = new Pods("   -AirPods");
    $stereos = new Stereos("Stereos");
    $jbl = new Jbl("   -JBL");
    $systems = array($soundSystems, $earplugs, $pods, $stereos, $jbl);

    foreach ($systems as $system) {
        echo $system->getType(). PHP_EOL;
    }