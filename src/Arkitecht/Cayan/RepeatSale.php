<?php

namespace Arkitecht\Cayan;

class RepeatSale
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
     * @var string $invoiceNumber
     */
    protected $invoiceNumber = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $overrideAmount
     */
    protected $overrideAmount = null;

    /**
     * @var string $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var string $avsStreetAddress
     */
    protected $avsStreetAddress = null;

    /**
     * @var string $avsStreetZipCode
     */
    protected $avsStreetZipCode = null;

    /**
     * @var string $registerNumber
     */
    protected $registerNumber = null;

    /**
     * @var string $merchantTransactionId
     */
    protected $merchantTransactionId = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $invoiceNumber
     * @param string $token
     * @param string $overrideAmount
     * @param string $expirationDate
     * @param string $avsStreetAddress
     * @param string $avsStreetZipCode
     * @param string $registerNumber
     * @param string $merchantTransactionId
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $token = null, $overrideAmount = null, $expirationDate = null, $avsStreetAddress = null, $avsStreetZipCode = null, $registerNumber = null, $merchantTransactionId = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->token = $token;
      $this->overrideAmount = $overrideAmount;
      $this->expirationDate = $expirationDate;
      $this->avsStreetAddress = $avsStreetAddress;
      $this->avsStreetZipCode = $avsStreetZipCode;
      $this->registerNumber = $registerNumber;
      $this->merchantTransactionId = $merchantTransactionId;
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
     * @return \Arkitecht\Cayan\RepeatSale
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
     * @return \Arkitecht\Cayan\RepeatSale
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
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setMerchantKey($merchantKey)
    {
      $this->merchantKey = $merchantKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setInvoiceNumber($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverrideAmount()
    {
      return $this->overrideAmount;
    }

    /**
     * @param string $overrideAmount
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setOverrideAmount($overrideAmount)
    {
      $this->overrideAmount = $overrideAmount;
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
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setExpirationDate($expirationDate)
    {
      $this->expirationDate = $expirationDate;
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
     * @return \Arkitecht\Cayan\RepeatSale
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
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setAvsStreetZipCode($avsStreetZipCode)
    {
      $this->avsStreetZipCode = $avsStreetZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegisterNumber()
    {
      return $this->registerNumber;
    }

    /**
     * @param string $registerNumber
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setRegisterNumber($registerNumber)
    {
      $this->registerNumber = $registerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionId()
    {
      return $this->merchantTransactionId;
    }

    /**
     * @param string $merchantTransactionId
     * @return \Arkitecht\Cayan\RepeatSale
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
      $this->merchantTransactionId = $merchantTransactionId;
      return $this;
    }

}
