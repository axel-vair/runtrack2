<?php 

    for($i = 0; $i <= 100; $i++) { 
        // Si i modulo 3 est égal à 0 et si i modulo 5 égal 0 alors "FizzBuzz"
        if ($i % 3 == 0 && $i % 5 == 0){
            echo "FizzBuzz<br>";
        //Si modulo 3 égal alors "Fizz"
        }else if ($i % 3 == 0) {
            echo "Fizz<br>";
        // Si modulo 5 égal 0 alors Buzz
        }else if ($i % 5 == 0){
            echo "Buzz<br>";
        //Sinon afficher $i
        }else { 
            echo "$i<br>";
        }
    }