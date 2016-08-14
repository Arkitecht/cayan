<?php

namespace Arkitecht\Cayan;

class Refund
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
     * @param string $registerNumber
     * @param string $merchantTransactionId
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $token = null, $overrideAmount = null, $registerNumber = null, $merchantTransactionId = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->token = $token;
      $this->overrideAmount = $overrideAmount;
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
     * @return \Arkitecht\Cayan\Refund
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
     * @return \Arkitecht\Cayan\Refund
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
     * @return \Arkitecht\Cayan\Refund
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
     * @return \Arkitecht\Cayan\Refund
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
     * @return \Arkitecht\Cayan\Refund
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
     * @return \Arkitecht\Cayan\Refund
     */
    public function setOverrideAmount($overrideAmount)
    {
      $this->overrideAmount = $overrideAmount;
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
     * @return \Arkitecht\Cayan\Refund
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
     * @return \Arkitecht\Cayan\Refund
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
      $this->merchantTransactionId = $merchantTransactionId;
      return $this;
    }

}
