<?php
// 1) Беспилотный грузовой космический корабль
class cargoSpacecraft{
    public $size;
    public $enginePower;
    public $carryingCapacity;

    public function startEngine(){

    }
    public function inclusionOfTheLoadingManipulator(){

    }
}
$firstCargo = new cargoSpacecraft();
$firstCargo->size = "4.4 meters";
$firstCargo->enginePower = "246 thousand horse power";
$firstCargo->carryingCapacity = "6,000 kilograms";


// 2) Чайник
class kettle{
    public $material;
    public $power;
    public $capacity;

    public function kettleIncluded(){

    }
    public function kettleHeatsTheWater(){

    }
    public function theKettleBeeps(){

    }
}
$firstKettle = new kettle();
$firstKettle->material = "Metal";
$firstKettle->power =  "2200 wt" ;
$firstKettle->capacity = "1.7 liters";


// 3) Преподаватель колледжа
class collegeTeacher{
    public $specialization;
    public $knowledge;
    public $personalCharacteristics;

    public function Educate(){

    }
    public function Learn(){

    }
}
$firstCollegeTeacher = new collegeTeacher();
$firstCollegeTeacher->specialization = "Math";
$firstCollegeTeacher->knowledge = "Several higher educations";
$firstCollegeTeacher->personalCharacteristics = "Cute, Fair, Smart";


// 4) Лекарственный препарат
class medicinalProduct{
    public $dose;
    public $methodOfApplication;
    public $termOfApplication;

    public function treat(){

    }
}
$firstMedicinalProduct = new medicinalProduct();
$firstMedicinalProduct->dose = "0.5 mg / kg per day";
$firstMedicinalProduct->methodOfApplication = "3 times a day with meals";
$firstMedicinalProduct->termOfApplication = "5 months";


// 5) Пассажирский самолет
class passengerPlane{
    public $size;
    public $maximumSpeed;
    public $numberOfPassengerSeats;
    public $maximumFlightRange;

    public function startEngine(){

    }
    public function fly(){

    }
}
$firstPassengerPlane = new passengerPlane();
$firstPassengerPlane->size = "40 meters";
$firstPassengerPlane->maximumSpeed = 840;
$firstPassengerPlane->numberOfPassengerSeats = 189;
$firstPassengerPlane->maximumFlightRange = "5765 km";


// 6) Линер
class liner{
    public $thickness;
    public $applicationArea;

    public function drawProcess(){

    }
}
$firstLiner = new liner();
$firstLiner->thickness = 0.4;
$firstLiner->applicationArea = "Blueprints";
// 7) Медицинская маска
class medicalMask{
    public $classification;
    public $filtrationEfficiency;

    public function protectProcess(){

    }
}
$firstMedicalMask = new medicalMask();
$firstMedicalMask->classification = "Type I";
$firstMedicalMask->filtrationEfficiency = "95% of aerosol droplets are larger than 3 micrometers";


// 8) БелАЗ
class belAZ{
   public $dimensions;
   public $weight;
   public $carryingCapacity;

   public function engineIsRunning(){

   }
   public function go(){

   }
   public function UsingTheDirectAbilitiesOfTheDumpTruck(){

   }
}
$firstBelAZ = new belAZ();
$firstBelAZ->dimensions = "WheelBase 8 m, Length 20.6m, Width 9.87 m";
$firstBelAZ->weight = "360000 kg";
$firstBelAZ->carryingCapacity = "450-tonne";


// 9) Компьютерная мышь
class computerMouse{
    public $ergonomics;
    public $wiredOrWireless;
    public $DPI;
    public $weight;

    public function processOfUsingComputerMouse(){

    }
}
$firstComputerMouse = new computerMouse();
$firstComputerMouse->ergonomics = "For right-handers";
$firstComputerMouse->wiredOrWireless = "Wired";
$firstComputerMouse->DPI = 16000;
$firstComputerMouse->weight = "130g";


// 10) Астронавт
class Astronaut{
    public $physicalFitness;
    public $roleInTeam;
    public $Knowledge;

    public function stayInSpace(){

    }
    public function repair(){

    }
}
$firstAsronaut = new Astronaut();
$firstAsronaut->physicalFitness = "Good";
$firstAsronaut->roleInTeam = "Engineer";
$firstAsronaut->Knowledge = "Higher education";
?>