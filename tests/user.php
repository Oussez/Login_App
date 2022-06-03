<?php 

class User {

    public $username;
    public $email;

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

  }

  $userOne = new User('Oussez12', 'mario@thenetninja.co.uk');

  echo $userOne->addFriend();

?>