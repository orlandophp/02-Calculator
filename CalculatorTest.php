<?php

require_once 'PHPUnit/Framework.php';

require_once 'Calculator.php';

class CalculatorTest
extends PHPUnit_Framework_TestCase
{

    public function setUp(){
        $this->Calc = new Calculator;
    }

    public function test_add ( )
    {
        

        $this->assertEquals(2, $this->Calc->add(1,1),
            'The $this->Calc should be able to add 1 + 1'
        );

        $this->assertEquals(3, $this->Calc->add(1,2),
            'The $this->Calc should be able to add 1 + 2'
        );

        $this->assertEquals(4, $this->Calc->add(2,2),
            'The $this->Calc should be able to add 2 + 2'
        );

        $this->assertEquals(3, $this->Calc->add(1, 1, 1),
            'This $this->Calc should be able to add 1 + 1 + 1'
         );
    } // END test_add


    public function test_subtract ( )
    {

        $this->assertEquals(1, $this->Calc->sub(2,1),
            'The $this->Calc should be able to subtract 2 - 1'
        );
    
        $this->assertEquals(5, $this->Calc->sub(15, 10),
            'The $this->Calc should be able to subtract 15 - 10'
        );  

        $result = $this->Calc->sub(10, 5, 2);
        $this->assertEquals(3, $result,
            "10-5-2 should be 3, but it's $result"
         );

    } // END test_subtract

    public function test_multiply(){
    
        $result = $this->Calc->multiply(10, 10);
        $this->assertEquals(100, $result,
            "10 x 10 should be 100 but it's $result"
        );  
      $result = $this->Calc->multiply(10, 11);       
     $this->assertEquals(110, $result,
          "10 X 11 should be 110 but it's $result"
          );
          
          
 
    }

    public function test_division(){

     $result = $this->Calc->division(10, 10);
      $this->assertEquals(1, $result,
      "10 / 10 should be 1 but its $result"
      );

    $this->setExpectedException('Exception',$result,"
        Division by zero throws an exception, but one was not thrown"
    );

    $result = $this->Calc->division(10,0);


    }


public function test_add_multvals(){

    $result = $this->Calc->add(5,5,5);
    $this->assertEquals(15, $result,
"5+5+5 should equals 15 got $result");
    

}



} // END CalculatorTest