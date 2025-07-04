<!-- PHP Mini Projects
Project 1: Number Classifier
Make a PHP script that checks a number. First, check if the number is positive or negative. Then, check if the number is even or odd.

Take input or define variable -->
<?php 
echo "Enter the value:";
$number = (int)readline();

if($number > 0){
    if($number % 2 == 0){
        echo "This number is positive and even";
    } else{
        echo "This number is positive and odd";
    }
} else if($number < 0){
    if($number % 2 == 0){
        echo "This number is negative and even";
    } else{
        echo "This number is negative and odd";
    }
} else{
    echo "This number is zero";
}