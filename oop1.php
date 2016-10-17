<?php

class car{
    public $color; //property
    public function setColor($c) { //function  
        return 'Car is : '.$this->color=$c;
    }
    
    
    public function sayHello() {//function  
        return 'say Hello';
        
    }
    
    
}

//การเรียกใช้ 
$newcar =new car; //การสร้าง oop จากชื่อ class คือ car
$test = $newcar->setColor('red');
echo '$test';
echo '<hr>';
echo $newcar->sayHello();


