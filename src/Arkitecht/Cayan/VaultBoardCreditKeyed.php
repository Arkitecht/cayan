<?php

namespace Arkitecht\Cayan;

class VaultBoardCreditKeyed
{

    /**
     * @var string $merchantName
     */
    protected $merchantName = null;

    /**
     * @var string $merchantSiteId
     */
    protected $merchantSiteId = null;

    /**
     * @var string $merchantKey
     */
    protected $merchantKey = null;

    /**
     * @var string $merchantDefinedToken
     */
    protected $merchantDefinedToken = null;

    /**
     * @var string $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var string $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var string $cardholder
     */
    protected $cardholder = null;

    /**
     * @var string $avsStreetAddress
     */
    protected $avsStreetAddress = null;

    /**
     * @var string $avsStreetZipCode
     */
    protected $avsStreetZipCode = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $merchantDefinedToken
     * @param string $cardNumber
     * @param string $expirationDate
     * @param string $cardholder
     * @param string $avsStreetAddress
     * @param string $avsStreetZipCode
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $merchantDefinedToken = null, $cardNumber = null, $expirationDate = null, $cardholder = null, $avsStreetAddress = null, $avsStreetZipCode = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->merchantDefinedToken = $merchantDefinedToken;
      $this->cardNumber = $cardNumber;
      $this->expirationDate = $expirationDate;
      $this->cardholder = $cardholder;
      $this->avsStreetAddress = $avsStreetAddress;
      $this->avsStreetZipCode = $avsStreetZipCode;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
      return $this->merchantName;
    }

    /**
     * @param string $merchantName
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setMerchantName($merchantName)
    {
      $this->merchantName = $merchantName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantSiteId()
    {
      return $this->merchantSiteId;
    }

    /**
     * @param string $merchantSiteId
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setMerchantSiteId($merchantSiteId)
    {
      $this->merchantSiteId = $merchantSiteId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantKey()
    {
      return $this->merchantKey;
    }

    /**
     * @param string $merchantKey
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setMerchantKey($merchantKey)
    {
      $this->merchantKey = $merchantKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantDefinedToken()
    {
      return $this->merchantDefinedToken;
    }

    /**
     * @param string $merchantDefinedToken
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setMerchantDefinedToken($merchantDefinedToken)
    {
      $this->merchantDefinedToken = $merchantDefinedToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setExpirationDate($expirationDate)
    {
      $this->expirationDate = $expirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardholder()
    {
      return $this->cardholder;
    }

    /**
     * @param string $cardholder
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setCardholder($cardholder)
    {
      $this->cardholder = $cardholder;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvsStreetAddress()
    {
      return $this->avsStreetAddress;
    }

    /**
     * @param string $avsStreetAddress
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setAvsStreetAddress($avsStreetAddress)
    {
      $this->avsStreetAddress = $avsStreetAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvsStreetZipCode()
    {
      return $this->avsStreetZipCode;
    }

    /**
     * @param string $avsStreetZipCode
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyed
     */
    public function setAvsStreetZipCode($avsStreetZipCode)
    {
      $this->avsStreetZipCode = $avsStreetZipCode;
      return $this;
    }

}
