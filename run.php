<?php
require_once 'SequenceGenerator.php';



(new SequenceGenerator(1,5))->generate(new MultiplierConfigurator(["test"=>"Fizz", 5=>"Buzz"]));
