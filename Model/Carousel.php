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
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get items
     *
     * @return ArrayCollection
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Set items
     *
     * @param array $items items
     *
     * @return self
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get a item
     *
     * @param CarouselItem|String $item item
     *
     * @return CarouselItem
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
     */
    public function getItem($item)
    {
        return (isset($this->items[$item]) ? $this->items[$item] : false);
    }
<<<<<<< HEAD
    
    /**
     * {@inheritdoc}
=======

    /**
     * Add a item
     *
     * @param CarouselItem $item item
     *
     * @return self
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
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
