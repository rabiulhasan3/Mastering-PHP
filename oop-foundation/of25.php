<?php
// __isset && __unset magic method
class MotorCycle {
    private $parameters, $displacement, $capacity, $milage;
    public function __construct($displacement, $capacity, $milage) {
        $this->parameters                 = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity']     = $capacity;
        $this->parameters['milage']       = $milage;
    }

    public function __isset($name) {
        if (!isset($this->parameters[$name])) {
            echo   "{$name} is not found \n";
            return false;
        }
        return true;
    }

    public function __unset($name)
    {
        if(isset($this->parameters[$name])){
            print_r($this->parameters);
            unset($this->parameters[$name]);
            print_r($this->parameters);
        }else{
            echo "{$name} is not set";
        }
    }

    public function __set($name, $value) {
        $this->parameters[$name] = $value;
    }

    public function __get($name) {
        return $this->parameters[$name];
    }

    public function __call($name, $arguments)
    {
        if("run" == $name){
            if($arguments){
                $arg = join(",",$arguments);
                echo "the bike is running {$arg} \n";
            }
           
        }
    }

    static function __callStatic($name, $arguments)
    {
        $args = join(",",$arguments);
        echo "function name is {$name} and argument is {$args}";
    }

}

$pulser = new MotorCycle('150cc', '16ltr', '40kmph');

if (isset($pulser->price)) {
    $pulser->price;
}

unset($pulser->milage);
$pulser->run('faster','speeder');

MotorCycle::wash("tirewash","bodywash");