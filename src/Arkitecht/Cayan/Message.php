<?php

namespace Arkitecht\Cayan;

class Message
{

    /**
     * @var string $Field
     */
    protected $Field = null;

    /**
     * @var string $Information
     */
    protected $Information = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param string $Field
     * @return \Arkitecht\Cayan\Message
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return string
     */
    public function getInformation()
    {
      return $this->Information;
    }

    /**
     * @param string $Information
     * @return \Arkitecht\Cayan\Message
     */
    public function setInformation($Information)
    {
      $this->Information = $Information;
      return $this;
    }

}
