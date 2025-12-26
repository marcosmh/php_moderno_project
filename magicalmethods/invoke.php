<?php

class Add {

    public function __invoke($a, $b)
    {
        return $a + $b;
    }

}

class Validator {
    private int $min = 0;
    private int $max = 0;
    public $error = "";

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->min = $max;
    }

    public function __invoke($text)
    {
        $long = strlen($text);

        if($long < $this->min || $long > $this->max) {
            echo "false <br/>";
            $this->error = "El texto es muy pequeño o es muy grande";
            return false;
        }

        return true;
    }
}



$add = new Add();
//echo $add(2,4);

$val = new Validator(1, 20);
if( $val("lkssjlajlksjdalkjlksdakjkldaj") ) {
    echo "Todo bien";
} else {
   echo $val->error;
}