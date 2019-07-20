<?php


class Calculator
{
    function Calculation( $data ){
        $firstNumber = $data['first_number'];
        $lastNumber = $data['last_number'];
        $oprt = $data['btn'];
        switch ( $oprt ){
            case '+':
                $result = $firstNumber + $lastNumber;
                return $result;
                break;
            case '-':
            $result = $firstNumber - $lastNumber;
            return $result;
            break;
            case '*':
            $result = $firstNumber * $lastNumber;
            return $result;
            break;
            case '/':
            $result = $firstNumber /  $lastNumber;
            return $result;
            case '%':
            $result = $firstNumber %  $lastNumber;
            return $result;
            break;
        }
    }
}