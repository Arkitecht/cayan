<?php

namespace Arkitecht\Cayan;

class TransportResponse
{

    /**
     * @var string $TransportKey
     */
    protected $TransportKey = null;

    /**
     * @var string $ValidationKey
     */
    protected $ValidationKey = null;

    /**
     * @var ArrayOfMessage $Messages
     */
    protected $Messages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTransportKey()
    {
      return $this->TransportKey;
    }

    /**
     * @param string $TransportKey
     * @return \Arkitecht\Cayan\TransportResponse
     */
    public function setTransportKey($TransportKey)
    {
      $this->TransportKey = $TransportKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidationKey()
    {
      return $this->ValidationKey;
    }

    /**
     * @param string $ValidationKey
     * @return \Arkitecht\Cayan\TransportResponse
     */
    public function setValidationKey($ValidationKey)
    {
      $this->ValidationKey = $ValidationKey;
      return $this;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages()
    {
      return $this->Messages;
    }

    /**
     * @param ArrayOfMessage $Messages
     * @return \Arkitecht\Cayan\TransportResponse
     */
    public function setMessages($Messages)
    {
      $this->Messages = $Messages;
      return $this;
    }

}
