<?php
class Food {
    private $name;
    private $price;

    public function show_price(string $price) {
         echo $this->price . "\n";
    }
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function show_height(int $height) {
        echo $this->height . "\n";
    }

    public function __construct( string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$food = new Food("potato", 250);
print_r($food);
$food->show_price();


$animal = new Animal("dog", 60, 5000);
print_r($animal);
$animal->show_height();

?>
