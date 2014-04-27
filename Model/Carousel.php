<?php
namespace Volleyball\Component\Model;

use Volleyball\Component\Utility\Interfaces\CarouselInterface;

class Carousel implements CarouselInterface
{
    /**
     * Name
     * @var String $name
     */
    protected $name;
    
    /**
     * Description
     * @var String $description
     */
    protected $description;
    
    /**
     * Items
     * @var array $items
     */
    protected $items;
    
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getItem($item)
    {
        return (isset($this->items[$item]) ? $this->items[$item] : false);
    }
    
    /**
     * {@inheritdoc}
     */
    public function addItem(CarouselItem $item)
    {
        $this->items[] = $item;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
}
