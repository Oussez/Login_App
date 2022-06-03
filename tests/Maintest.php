<?php
use PHPUnit\Framework\TestCase;
require 'vendor/autoload.php';
class Maintest extends TestCase { 
     
    public function test() 
   {  echo "\[*****] The begining of testing Prod.php class";
         $p1 = new Prod('P1', 5);
         $p1->increase_QT(5);

            echo "[**] AssertingEquals : ".$this->assertEquals(10, $p1->Get_QT());
            echo "\n*Qt retournée est :" . $p1->Get_QT();
            $p1->increase_QT(1); //fault_value
            echo "\n[**]  AssertingEquals : ".$this->assertEquals(11, $p1->Get_QT());
            echo "\n[**] Qt retournée est :" . $p1->Get_QT();

      echo "\n[*****] The end of testing Prod.php class\n\n";

//         $this->assertSame($string1,$string2);

        //if(!preg_match('/theking/',$string2)) throw new \Exception('invalid string');
   }
}
?>