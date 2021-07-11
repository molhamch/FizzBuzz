<?php
require_once 'SequenceGenerator.php';



(new SequenceGenerator())->generate(new MultiplierConfigurator([3=>"Fizz", 5=>"Buzz"]));
