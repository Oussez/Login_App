<?php 

class Prod {
    private $name;
    private $qt;


    public function __construct($n, $q)
    {
        $this->name = $n;
        $this->qt = $q;
        echo "\nnew product has been created: namme :".$this->name." | QT: ".$this->qt."\n";
    }

    public function increase_QT($QT){

            if( $QT <=0 ){

                echo "the new quantiy: ".$qt." can not be used!!!";
                throw new \InvalidArgumentException('Negatif value of quantity can\'t be used !'); 
            }
        
                $this->qt = $this->qt+$QT;
                echo "\n->the quantiy of the prd has been increased to [ ".$this->qt." ] | Quantity added: ".$QT." ProductN: ".$this->name."\n";
    
     

        }


    public function Get_QT(){ 
        return $this->qt;
    }
    public function Get_N(){ 
        return $this->name;
    }
}

?>