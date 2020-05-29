<?php
    class Animal{
        protected $name;
        public function __construct($name = '')
        {
            $this->name = $name;
        }
        public function eat(){
            printf("%s is eating\n",$this->name);
        }
        public function run(){
            printf("%s is running\n",$this->name);
        }
        public function sleep(){
            printf("%s is sleeping\n",$this->name);
        }

        public function greet(){
        }
    }

    class Human extends Animal{
        public function greet(){
            printf("Hi,i am %s \n",$this->name);
        }
    }

    class Cat extends Animal{
        public function greet(){
            printf("%s  says meow\n",$this->name);
        }
    }

    $h1 = new Human("Rabiul Hasan");
    $h1->greet();

    $c1 = new Cat('Tom');
    $c1->greet();