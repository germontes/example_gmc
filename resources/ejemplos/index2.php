<?php

class CoffeMaker{

public function brew(){

    var_dump('Brewing the coffee');
}

}

class SpecialtyCoffeMaker extends CoffeMaker {

public function brewLatte(){

    var_dump('Brewing Latte');
}

}

(new SpecialtyCoffeMaker())->brewLatte();