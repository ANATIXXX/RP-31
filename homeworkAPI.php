<?php
abstract class Plane
{
    public abstract function carriageOfGoods();
}
class passengerPlane extends Plane
{
    public function carriageOfGoods()
    {
        $passseats = 400;
        echo "Кол-во доступных пассажирских мест: $passseats <br/>";
    }
}
class cargoPlane extends Plane
{
    public function carriageOfGoods()
    {
        $cargospace = 5000;
        echo "Кол-во доступных пассажирских мест: $cargospace";
    }
}

class Planes
{
    public function COD(Plane $plane)
    {
        return $plane->carriageOfGoods();
    }
}
$passengerPlane1 = new passengerPlane();
$cargoPlane = new cargoPlane();

$i = new Planes();
$i->COD($passengerPlane1);
$i->COD($cargoPlane);
