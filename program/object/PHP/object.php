<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>template</title>
    </head>
    <body>

<?php 

class Human{
    public $name;  
    
    public function __construct($name){
        $this-> name = $name;
        echo "<p> $this->name が自己紹介をします</p>";
    }
    public function hello(){
        echo "<strong>hello! My name is $this->name</strong> .";
    }
}


// インスタンス生成
$human1 = new Human("Tom");

$human1->hello();


$human2 = new Human("Ken");
$human2->hello();
?>        
    </body>
</html>