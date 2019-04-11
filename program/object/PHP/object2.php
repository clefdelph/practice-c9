
<?php 

class Human{
    public $name;  
    
    public function __construct($name){
        $this-> name = $name;
        echo " $this->name が自己紹介をします";
    }
    public function hello(){
        echo "hello! My name is $this->name .";
    }
}

// インスタンス生成
$human1 = new Human("Tom");
$human1->hello();


$human2 = new Human("Ken");
$human2->hello();
?>
     

