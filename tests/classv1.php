<?php 
<<<<<<< HEAD
require 'vendor/autoload.php';

 echo $_SERVER['DOCUMENT_ROOT'];
    if(include_once 'Prod.php'){echo "*** including successfuly Prod.php";}

    $p = new Prod('Iphone', 5);
=======


include 'Product.php';
 echo $_SERVER['DOCUMENT_ROOT'];
    if(include_once 'Product.php'){echo 'yes';}

    $p = new Product('Iphone', 5);
>>>>>>> 862336e33de4e2a8f1dabcc26caed20bee89c673
    echo "\n**Showing the right value of Iphone\n";
    
    echo "\n<<QT : ". $p->Get_QT();
  



?>