<?php

class Calculator
{
    public function add ( )
    {
        $args = func_get_args();
        return array_sum($args);
    } // END add

    public function sub ( $num1, $num2 )
    {
        $args = func_get_args();

        $total=array_shift($args);
        foreach($args as $arg )
        {
            $total -= $arg; 
        }

        return $total;
    } // END sub

    public function multiply( $num1, $num2) 
{ 
         return $num1 * $num2;

    }

    public function division($num1, $num2){
    
    return $num1 / $num2;

    }
} // END Calculator