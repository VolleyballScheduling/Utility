<?php
namespace Volleyball\Component\Model;

use Volleyball\Component\Utility\Interfaces\ObjectInterface;

class Address implements ObjectInterface
{
    /**
     * {@inheritdoc}
     */
    protected $name;
    
    /**
     * Street
     * @var string
     */
    protected $street;
    
    /**
     * Suburb
     * @var string
     */
    protected $suburb;
    
    /**
     * City
     * @var string
     */
    protected $city;
    
    /**
     * Zone
     * @var string
     */
    protected $zone;
    
    /**
     * Country
     * @var string
     */
    protected $country;
    
    /**
     * Postal Code
     * @var string
     */
    protected $postalCode;
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     * @param string $name
     * @return Address
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get suburb
     * @return string
     */
    public function getSuburb()
    {
        return $this->suburb;
    }
    
    /**
     * Set subrub
     * @param string $string
     * @return Address
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;
        
        return $this;
    }
    
    /**
     * Get street
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
    
    /**
     * Set street
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        
        return $this;
    }
    
    /**
     * Get city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Set city
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        
        return $this;
    }
    
    /**
     * Get zone
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
    
    /**
     * Set zone
     * @param string $zone
     * @return Address
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
        
        return $this;
    }
    
    /**
     * Get country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Set country
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * Get postal code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    
    /**
     * Set postal code
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        
        return $this;
    }
}
