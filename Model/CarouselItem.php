<?php
namespace Volleyball\Component\Utility\Model;

use Volleyball\Component\Utiltiy\Interfaces\CarouselItemInterface;

class CarouselItem implements CarouselItemInterface
{
    /**
     * Name
     * @var String
     */
    protected $name;
    
    /**
     * Caption
     * @var String
     */
    protected $caption;
    
    /**
     * Image
     * @var String
     */
    protected $image;
    
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
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setCaption($caption)
    {
        $this->captoion = $caption;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * {@inheritdoc}
     */
    public function setImage($image)
    {
        $this->image = $image;
        
        return $this;
    }
}
