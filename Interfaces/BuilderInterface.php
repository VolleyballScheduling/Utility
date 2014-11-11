<?php
namespace Volleyball\Component\Utility\Interfaces;

class BuilderInterface
{
    /**
     * Call a method on the object
     * @param mixed $method
     * @param array $arguments
     * @return \Volleyball\Component\Utility\Builder\Builder
     * @throws \BadMethodCallException
     */
    public function __call($method, $arguments);
    
    /**
     * Create object
     * @param string $name
     * @return BuilderInterface
     */
    public function create($name);
    
    /**
     * Save Object
     * @param boolean $flush defaults to true
     * @return \Doctrine\Common\Persistence\ObjectManger
     */
    public function save($flush = true);
}
