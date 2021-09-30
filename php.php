<?php
//============================1
class kettle{
    public $material;
    public $power;
    public $capacity;

    public function setMaterial (string $mat)
    {$this->material = $mat;}

    public function setPower (int $pow)
    {$this->power = $pow;}

    public function setCapacity (int $cap)
    {$this->capacity = $cap;}


    public function getMaterial ()
    {return $this->material;}

    public function getPower()
    {return $this->power;}

    public function getCapacity ()
    {return $this->capacity;}


    public function __construct($material,$power,$capacity)
    {
        $this->material = $material;
        $this->power = $power;
        $this->capacity = $capacity;
    }

}

$kettle1 = new kettle('металл', 2200, 1.7);

$kettle1->setMaterial('металл');
$kettle1->setPower(2200);
$kettle1->setCapacity(1.7);

echo 'Материал чайника'.$kettle1->getMaterial().'<br>';
echo 'Объём чайника'.$kettle1->getCapacity().'<br>';
echo 'Стоимость чайника'.$kettle1->getPower().'<br>';
}


//============================2
class passengerPlane{
    public $size;
    public $maximumSpeed;
    public $numberOfPassengerSeats;
    public $maximumFlightRange;

    public function setSize (int $sz)
    {$this->size = $sz;}

    public function setMaxSpeed (int $MXS)
    {$this->maximumSpeed = $MXS;}

    public function setNumOfPasSeats (int $NOPS)
    {$this->numberOfPassengerSeats = $NOPS;}

    public function setMaxFlightRange (int $MFR)
    {$this->maximumFlightRange = $MFR;}


    public function getSize ()
    {return $this->size;}

    public function getMaxSpeed()
    {return $this->maximumSpeed;}

    public function getNumOfPasSeats ()
    {return $this->numberOfPassengerSeats;}

    public function getMaxFlightRange ()
    {return $this->maximumFlightRange;}


    public function __construct($size,$maximumSpeed,$numberOfPassengerSeats, $maximumFlightRange)
    {
        $this->size = $size;
        $this->maximumSpeed = $maximumSpeed;
        $this->numberOfPassengerSeats = $numberOfPassengerSeats;
        $this->maximumFlightRange = $maximumFlightRange;
    }

}

$passengerPlane1 = new passengerPlane(40, 840, 189, 5765);

$passengerPlane1->setSize(40);
$passengerPlane1->setMaxSpeed(840);
$passengerPlane1->setNumOfPasSeats(189);
$passengerPlane1->setMaxFlightRange(5765);
echo 'Размер самолета'.$passengerPlane1->getSize().'<br>';
echo 'Максимальная скорость'.$passengerPlane1->getMaxSpeed().'<br>';
echo 'Кол-во мест'.$passengerPlane1->getNumOfPasSeats().'<br>';
echo 'Максимальная дистанция полета'.$passengerPlane1->getMaxFlightRange().'<br>';
}


//============================3
class liner{
    public $thickness;
    public $price;

    public function setThickness (int $th)
    {$this->thickness = $th;}

    public function setPrice (int $pr)
    {$this->price = $pr;}


    public function getThickness ()
    {return $this->thickness;}

    public function getPrice()
    {return $this->price;}



    public function __construct($th,$pr)
    {
        $this->thickness = $th;
        $this->price = $pr;
    }

}

$liner1 = new liner(0.4, 4);

$liner1->setThickness(40);
$liner1->setPrice(840);

echo 'Толщина линера'.$liner1->getThickness().'<br>';
echo 'Цена линера'.$liner1->getPrice().'<br>';

}
//============================4


class computerMouse{
    public $price;
    public $material;
    public $brand;
    public $weight;

    public function setPrice (int $pr)
    {$this->price = $pr;}

    public function setMaterial (string $mat)
    {$this->material = $mat;}

    public function setBrand (string $br)
    {$this->brand = $br;}

    public function setWeight (string $wg)
    {$this->weight = $wg;}


    public function getPrice()
    {return $this->price;}

    public function getMaterial ()
    {return $this->material;}

    public function getBrand ()
    {return $this->brand;}

    public function getWeight ()
    {return $this->weight;}

    public function __construct($pr, $mat, $br, $wg)
    {
        $this->price = $pr;
        $this->material = $mat;
        $this->brand = $br;
        $this->weight = $wg;
    }

}

$computerMouse1 = new computerMouse(5000, "Прочный пластик", "HyperX", 130);

$computerMouse1->setPrice(5000);
$computerMouse1->setMaterial("Прочный пластик");
$computerMouse1->setBrand("HyperX");
$computerMouse1->setWeight(130);

echo 'Цена компьютерной мыши'.$computerMouse1->getPrice().'<br>';
echo 'Материал компьютерной мыши'.$computerMouse1->getMaterial().'<br>';
echo 'Бренд компьютерной мыши'.$computerMouse1->getBrand().'<br>';
echo 'Вес компьютерной мыши'.$computerMouse1->getWeight().'<br>';

}


//============================5
class cargoSpacecraft{
    public $size;
    public $price;
    public $enginePower;
    public $carryingCapacity;

    public function setSize (int $sz)
    {$this->size = $sz;}

    public function setPrice (int $pr)
    {$this->price = $pr;}

    public function setEnginePower (int $EP)
    {$this->enginePower = $EP;}

    public function setCarryingCapacity (int $CC)
    {$this->carryingCapacity = $CC;}


    public function getSize ()
    {return $this->size;}

    public function getPrice()
    {return $this->price;}

    public function getEnginePower()
    {return $this->enginePower;}

    public function getCarryingCapacity()
    {return $this->carryingCapacity;}

    public function __construct($sz, $pr, $EP, $CC)
    {
        $this->size = $sz;
        $this->price = $pr;
        $this->enginePower = $EP;
        $this->carryingCapacity = $CC;
    }

}

$cargoSpaceCraft1 = new cargoSpaceCraft(4.4, 700-000-000, 246, 6000);

$cargoSpaceCraft1->setSize(4.4);
$cargoSpaceCraft1->setPrice(700-000-000);
$cargoSpaceCraft1->setEnginePower(246);
$cargoSpaceCraft1->setCarryingCapacity(6000);

echo 'Размер грузового космического корабля'.$cargoSpaceCraft1->getSize().'<br>';
echo 'Цена грузового космического корабля'.$cargoSpaceCraft1->getPrice().'<br>';
echo 'Мощность двигателя'.$cargoSpaceCraft1->getEnginePower().'<br>';
echo 'Объём грузового космического корабля'.$cargoSpaceCraft1->getCarryingCapacity().'<br>';

}
?>