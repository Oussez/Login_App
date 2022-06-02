<?php 
require 'vendor/autoload.php';

 echo $_SERVER['DOCUMENT_ROOT'];
    if(include_once 'Prod.php'){echo "*** including successfuly Prod.php";}

    $p = new Prod('Iphone', 5);
    echo "\n**Showing the right value of Iphone\n";
    
    echo "\n<<QT : ". $p->Get_QT();
  



?>