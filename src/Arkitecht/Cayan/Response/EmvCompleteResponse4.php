<?php

namespace Arkitecht\Cayan\Response;

class EmvCompleteResponse4
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Arkitecht\Cayan\EmvCompleteResponse4
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Arkitecht\Cayan\EmvCompleteResponse4
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

}
