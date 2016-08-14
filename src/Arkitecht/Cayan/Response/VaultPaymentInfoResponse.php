<?php

namespace Arkitecht\Cayan\Response;

class VaultPaymentInfoResponse
{

    /**
     * @var string $AvsStreetAddress
     */
    protected $AvsStreetAddress = null;

    /**
     * @var string $AvsZipCode
     */
    protected $AvsZipCode = null;

    /**
     * @var string $Cardholder
     */
    protected $Cardholder = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $CardType
     */
    protected $CardType = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $ExpirationDate
     */
    protected $ExpirationDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAvsStreetAddress()
    {
      return $this->AvsStreetAddress;
    }

    /**
     * @param string $AvsStreetAddress
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setAvsStreetAddress($AvsStreetAddress)
    {
      $this->AvsStreetAddress = $AvsStreetAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvsZipCode()
    {
      return $this->AvsZipCode;
    }

    /**
     * @param string $AvsZipCode
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setAvsZipCode($AvsZipCode)
    {
      $this->AvsZipCode = $AvsZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardholder()
    {
      return $this->Cardholder;
    }

    /**
     * @param string $Cardholder
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setCardholder($Cardholder)
    {
      $this->Cardholder = $Cardholder;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
      return $this->CardType;
    }

    /**
     * @param string $CardType
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setCardType($CardType)
    {
      $this->CardType = $CardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
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
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     * @return \Arkitecht\Cayan\VaultPaymentInfoResponse
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

}
