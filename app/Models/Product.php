<?php 
namespace App\Models;
class Product {
    public $id;
    public $name;
    public $photo;
    public $price;
    public $quantity;

    public function __construct($id,$name,$photo,$price,$quantity){
        $this->id = $id;
        $this ->name = $name;
        $this ->photo = $photo;
        $this ->price = $price;
        $this ->quantity = $quantity;
    }
    
}
?>