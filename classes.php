<?php
        abstract class Animal {
            public $name;
            abstract function makeSound();
        }

        class Apa extends Animal {
            public $image = "<img src='images/monkey.jpg' class='apa' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
    
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "ooaa";
            }
        }

        class Giraff extends Animal {
            public $image = "<img src='images/giraffe.jpg' class='giraff' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "Fjoooom!";
            }
        }

        class Tiger extends Animal {
            public $image = "<img src='images/tiger.jpg' class='tiger' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
                
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "RAWR!";
            }
        }

        class Coconut extends Animal {
            public $image = "<img src='images/coconut.jpg' class='coco' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "Duns!";
            }
        }
    ?>