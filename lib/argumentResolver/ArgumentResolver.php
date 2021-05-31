<?php

namespace Resolver;

class ArgumentResolver 
{

    public function __construct(string $className, string $method)
    {

        $this->resolve_constructor_arguments($className);
    }

    public function resolve_constructor_arguments($className) {
        $reflection = new \ReflectionClass($className);

        if(is_null($reflection->getConstructor()) || $reflection->getConstructor()->getNumberOfRequiredParameters() == 0) {

            return null;
        } 

        $constructor_parameters = $reflection->getConstructor()->getParameters();

        foreach($constructor_parameters as $parameter) {
            if(!is_null($parameter->getClass())) {
                $class = $parameter->getClass()->getName();
                print_r($class);
                print "<br>";
    
                $this->resolve_constructor_arguments($class);
            }
            
        }

    }
}