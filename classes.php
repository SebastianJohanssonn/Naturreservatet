<?php
        abstract class Animal {
            public $name;
            abstract function makeSound();
        }

        class Apa extends Animal {
            
            public $image = "<img src='images/monkey.jpg' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
    
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "wefasfasf";
            }
            public function getImage(){
               return $this->image;
            }
            public function __toString()
            {
                return $this->name;
    
            }
        }

        class Giraff extends Animal {
            public $image = "<img src='images/giraffe.jpg' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "wefasfasf";
            }
            public function getImage(){
                return $this->image;
            }
        }

        class Tiger extends Animal {
            public $image = "<img src='images/tiger.jpg' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
                
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "wefasfasf";
            }
            public function getImage(){
                return $this->image;
            }
        }

        class Coconut extends Animal {
            public $image = "<img src='images/coconut.jpg' height='200px' width='200px'>";
            function __construct($name)
            {
                $this->name = $name;
            }
            public function get_name(){
                return $this->name;
            }
            public function makeSound(){
                return "wefasfasf";
            }
            public function getImage(){
                return $this->image;
            }
        }
        
    ?>