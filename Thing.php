<?php

class Thing
{
    protected $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function writeAlpha($string = 'forwards')
    {
        $alphabet = range('a', 'z');

        // Line break for readability
        echo "\n";

        if($string == 'backwards')
        {
            for($i=(count($alphabet)-1); $i>=0; $i--)
            {
                echo "$alphabet[$i]";
            }
        }
        else
        {
            foreach($alphabet as $letter)
            {
                echo "$letter";
            }    
        }
    }

    public function addNumbers($a, $b)
    {
        if(!is_numeric($a) || !is_numeric($b))
            throw new Exception('Parameters must be numeric');

        return $a+$b;
    }

    public function writeNumbers($step = 1)
    {
        for($i=$step; $i<=(10*$step); $i+=$step)
        {
            echo "$i\n";
        }
    }

    public function printFizzBuzz()
    {
        for ($i=1; $i<=100; $i++) 
        { 
            if(($i % 3 == 0) && ($i % 5 == 0))
            {
                echo "$i : FizzBuzz\n";
            }
            else if($i % 3 == 0)
            {
                echo "$i : Fizz\n";
            }
            else if($i % 5 == 0)
            {
                echo "$i : Buzz\n";
            }
            else 
            {
                echo "$i : No match\n";
            }
        }
    }
}

?>
