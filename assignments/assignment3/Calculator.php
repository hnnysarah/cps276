
<?php class Calculator {
    private $num1;
    private $num2;
    private $op;

    public function calc($op, $num1 = '', $num2 = '') {
        if ( $num1 == '' || $num2 == '') {
            echo "You must enter a string and two numbers<br>";
        } else {
            switch($op) {
                case "+":
                    echo "The sum of the numbers is " .($num1+$num2) ."<br>";
                    break;
                case "-":
                    echo "The difference of the numbers is " .($num1-$num2) ."<br>";
                    break;
                case "*":
                    echo "The product of the numbers is " .($num1*$num2) ."<br>";
                    break;
                case "/":
                    if ($num2 == 0) {
                        echo "Cannot divide by zero" ."<br>";
                        break;
                    } else {
                    echo "The division of the numbers is " .($num1/$num2) ."<br>";
                    break; 
                    }   
                    default:
                    echo "You must enter a string and two numbers<br>";
            } 
        }
          
    }
}

?> 


