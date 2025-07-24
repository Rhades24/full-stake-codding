<?php
 
class product 
{
    public $name;
    public $price;
    public $description;

    public function _construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

}

$product1 = new product('Smartphone', 5000000, 'Smartphone terbaru dengan kamera berkualitas tinggi');
$product2 = new product('Samsung', 4000000, 'Smartphone terbaru dengan build qualityu tebaik');