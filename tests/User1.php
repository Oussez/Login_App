<?php 

use PHPUnit\Framework\TestCase;

class User {

    public $username;
    public $email;

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
      echo "\n[**] new user has been created";  
      }

    public function addFriend(){
      
      return "\n[**] $this->username just added a new friend\n";
    }

    public function getUname(){
      
      return $this->username;
    }

    public function getMail(){
      
      return $this->email;
    }
    // public function testName()
    // {
    //     $this->assertSame('Oussez', $this->username);
    // }

    // public function testMail()
    // {
    //     $this->assertSame('Oussez@gmail.com', $this->email);
    // }

  }

 
?>