<?php

namespace Arkitecht\Cayan;

class PreAuthorizationKeyed
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
     * @var string $amount
     */
    protected $amount = null;

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
     * @var string $cardSecurityCode
     */
    protected $cardSecurityCode = null;

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
     * @param string $amount
     * @param string $cardNumber
     * @param string $expirationDate
     * @param string $cardholder
     * @param string $avsStreetAddress
     * @param string $avsStreetZipCode
     * @param string $cardSecurityCode
     * @param string $registerNumber
     * @param string $merchantTransactionId
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $amount = null, $cardNumber = null, $expirationDate = null, $cardholder = null, $avsStreetAddress = null, $avsStreetZipCode = null, $cardSecurityCode = null, $registerNumber = null, $merchantTransactionId = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->amount = $amount;
      $this->cardNumber = $cardNumber;
      $this->expirationDate = $expirationDate;
      $this->cardholder = $cardholder;
      $this->avsStreetAddress = $avsStreetAddress;
      $this->avsStreetZipCode = $avsStreetZipCode;
      $this->cardSecurityCode = $cardSecurityCode;
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
     */
    public function setInvoiceNumber($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
     */
    public function setAvsStreetZipCode($avsStreetZipCode)
    {
      $this->avsStreetZipCode = $avsStreetZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardSecurityCode()
    {
      return $this->cardSecurityCode;
    }

    /**
     * @param string $cardSecurityCode
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
     */
    public function setCardSecurityCode($cardSecurityCode)
    {
      $this->cardSecurityCode = $cardSecurityCode;
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
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
     * @return \Arkitecht\Cayan\PreAuthorizationKeyed
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
      $this->merchantTransactionId = $merchantTransactionId;
      return $this;
    }

}
