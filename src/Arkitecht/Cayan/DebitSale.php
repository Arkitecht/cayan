<?php

namespace Arkitecht\Cayan;

class DebitSale
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
     * @var string $trackData
     */
    protected $trackData = null;

    /**
     * @var string $pinBlock
     */
    protected $pinBlock = null;

    /**
     * @var string $pinKsn
     */
    protected $pinKsn = null;

    /**
     * @var string $surchargeAmount
     */
    protected $surchargeAmount = null;

    /**
     * @var string $cashbackAmount
     */
    protected $cashbackAmount = null;

    /**
     * @var string $forceDuplicate
     */
    protected $forceDuplicate = null;

    /**
     * @var string $registerNumber
     */
    protected $registerNumber = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $invoiceNumber
     * @param string $amount
     * @param string $trackData
     * @param string $pinBlock
     * @param string $pinKsn
     * @param string $surchargeAmount
     * @param string $cashbackAmount
     * @param string $forceDuplicate
     * @param string $registerNumber
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $amount = null, $trackData = null, $pinBlock = null, $pinKsn = null, $surchargeAmount = null, $cashbackAmount = null, $forceDuplicate = null, $registerNumber = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->amount = $amount;
      $this->trackData = $trackData;
      $this->pinBlock = $pinBlock;
      $this->pinKsn = $pinKsn;
      $this->surchargeAmount = $surchargeAmount;
      $this->cashbackAmount = $cashbackAmount;
      $this->forceDuplicate = $forceDuplicate;
      $this->registerNumber = $registerNumber;
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
     * @return \Arkitecht\Cayan\DebitSale
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
     * @return \Arkitecht\Cayan\DebitSale
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
     * @return \Arkitecht\Cayan\DebitSale
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
     * @return \Arkitecht\Cayan\DebitSale
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
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackData()
    {
      return $this->trackData;
    }

    /**
     * @param string $trackData
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setTrackData($trackData)
    {
      $this->trackData = $trackData;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinBlock()
    {
      return $this->pinBlock;
    }

    /**
     * @param string $pinBlock
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setPinBlock($pinBlock)
    {
      $this->pinBlock = $pinBlock;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinKsn()
    {
      return $this->pinKsn;
    }

    /**
     * @param string $pinKsn
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setPinKsn($pinKsn)
    {
      $this->pinKsn = $pinKsn;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeAmount()
    {
      return $this->surchargeAmount;
    }

    /**
     * @param string $surchargeAmount
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setSurchargeAmount($surchargeAmount)
    {
      $this->surchargeAmount = $surchargeAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCashbackAmount()
    {
      return $this->cashbackAmount;
    }

    /**
     * @param string $cashbackAmount
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setCashbackAmount($cashbackAmount)
    {
      $this->cashbackAmount = $cashbackAmount;
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
     * @return \Arkitecht\Cayan\DebitSale
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
     * @return \Arkitecht\Cayan\DebitSale
     */
    public function setRegisterNumber($registerNumber)
    {
      $this->registerNumber = $registerNumber;
      return $this;
    }

}
