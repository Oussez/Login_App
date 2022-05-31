<?php 


include 'Product.php';
 echo $_SERVER['DOCUMENT_ROOT'];
    if(include_once 'Product.php'){echo 'yes';}

    $p = new Product('Iphone', 5);
    echo "\n**Showing the right value of Iphone\n";
    
    echo "\n<<QT : ". $p->Get_QT();
  



?>