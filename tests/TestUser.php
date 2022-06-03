<?php 
use PHPUnit\Framework\TestCase;
include_once 'User.php';

class TestUser extends TestCase {

    public function test(){echo "\n[*****] The begining of testing User.php class";
        $userOne = new User('Oussez', 'Oussez@gmail.com');

        echo $userOne->addFriend();
        $this->assertSame('Oussez', $userOne->username);
        $this->assertSame('Oussez@gmail.com', $userOne->email);
         echo "[*****] The end of testing User.php class";
    }
        
    //     public function testName()
    // {
        
    // }

    // public function testMail()
    // {
    //     );
    // }
    
}


?>