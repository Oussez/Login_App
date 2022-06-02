<?php
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD

require 'vendor/autoload.php';

=======
require 'vendor/autoload.php';
>>>>>>> 862336e33de4e2a8f1dabcc26caed20bee89c673
class Maintest extends TestCase { 
     
    public function test() 
   { $p1 = new Prod('P1', 5);
               $p1->increase_QT(5);

            echo "*1* AssertingEquals : ".$this->assertEquals(10, $p1->Get_QT());
            echo "\n*Qt retournée est :" . $p1->Get_QT();
            $p1->increase_QT(1); //fault_value
            echo "\n*2* AssertingEquals : ".$this->assertEquals(11, $p1->Get_QT());
            echo "\n*Qt retournée est :" . $p1->Get_QT();

//         $this->assertSame($string1,$string2);

        //if(!preg_match('/theking/',$string2)) throw new \Exception('invalid string');
   }
}
?>