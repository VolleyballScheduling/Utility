<?php
namespace Volleyball\Component\Utility\Model;

class Carousel
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
     * Get items
     *
     * @return ArrayCollection
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * Set items
     *
     * @param array $items items
     *
     * @return self
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    /**
     * Get a item
     *
     * @param CarouselItem|String $item item
     *
     * @return CarouselItem
     */
    public function getItem($item)
    {
        return (isset($this->items[$item]) ? $this->items[$item] : false);
    }

    /**
     * Add a item
     *
     * @param CarouselItem $item item
     *
     * @return self
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
