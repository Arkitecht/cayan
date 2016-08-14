<?php

namespace Arkitecht\Cayan;

class Level2SaleVault
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
     * @var string $vaultToken
     */
    protected $vaultToken = null;

    /**
     * @var string $customerCode
     */
    protected $customerCode = null;

    /**
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $forceDuplicate
     */
    protected $forceDuplicate = null;

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
     * @param string $vaultToken
     * @param string $customerCode
     * @param string $poNumber
     * @param string $taxAmount
     * @param string $forceDuplicate
     * @param string $registerNumber
     * @param string $merchantTransactionId
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $amount = null, $vaultToken = null, $customerCode = null, $poNumber = null, $taxAmount = null, $forceDuplicate = null, $registerNumber = null, $merchantTransactionId = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->amount = $amount;
      $this->vaultToken = $vaultToken;
      $this->customerCode = $customerCode;
      $this->poNumber = $poNumber;
      $this->taxAmount = $taxAmount;
      $this->forceDuplicate = $forceDuplicate;
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
     * @return \Arkitecht\Cayan\Level2SaleVault
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
     * @return \Arkitecht\Cayan\Level2SaleVault
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
     * @return \Arkitecht\Cayan\Level2SaleVault
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
     * @return \Arkitecht\Cayan\Level2SaleVault
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
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getVaultToken()
    {
      return $this->vaultToken;
    }

    /**
     * @param string $vaultToken
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setVaultToken($vaultToken)
    {
      $this->vaultToken = $vaultToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
      return $this->customerCode;
    }

    /**
     * @param string $customerCode
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setCustomerCode($customerCode)
    {
      $this->customerCode = $customerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->poNumber;
    }

    /**
     * @param string $poNumber
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param string $taxAmount
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getForceDuplicate()
    {
      return $this->forceDuplicate;
    }

    /**
     * @param string $forceDuplicate
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setForceDuplicate($forceDuplicate)
    {
      $this->forceDuplicate = $forceDuplicate;
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
     * @return \Arkitecht\Cayan\Level2SaleVault
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
     * @return \Arkitecht\Cayan\Level2SaleVault
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
      $this->merchantTransactionId = $merchantTransactionId;
      return $this;
    }

}
