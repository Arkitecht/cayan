<?php

namespace Arkitecht\Cayan;

class TransferBalance
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
     * @var string $sourceCardNumber
     */
    protected $sourceCardNumber = null;

    /**
     * @var string $recipientCardNumber
     */
    protected $recipientCardNumber = null;

    /**
     * @var string $extraData
     */
    protected $extraData = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $invoiceNumber
     * @param string $sourceCardNumber
     * @param string $recipientCardNumber
     * @param string $extraData
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $sourceCardNumber = null, $recipientCardNumber = null, $extraData = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->sourceCardNumber = $sourceCardNumber;
      $this->recipientCardNumber = $recipientCardNumber;
      $this->extraData = $extraData;
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
     * @return \Arkitecht\Cayan\TransferBalance
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
     * @return \Arkitecht\Cayan\TransferBalance
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
     * @return \Arkitecht\Cayan\TransferBalance
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
     * @return \Arkitecht\Cayan\TransferBalance
     */
    public function setInvoiceNumber($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceCardNumber()
    {
      return $this->sourceCardNumber;
    }

    /**
     * @param string $sourceCardNumber
     * @return \Arkitecht\Cayan\TransferBalance
     */
    public function setSourceCardNumber($sourceCardNumber)
    {
      $this->sourceCardNumber = $sourceCardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCardNumber()
    {
      return $this->recipientCardNumber;
    }

    /**
     * @param string $recipientCardNumber
     * @return \Arkitecht\Cayan\TransferBalance
     */
    public function setRecipientCardNumber($recipientCardNumber)
    {
      $this->recipientCardNumber = $recipientCardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraData()
    {
      return $this->extraData;
    }

    /**
     * @param string $extraData
     * @return \Arkitecht\Cayan\TransferBalance
     */
    public function setExtraData($extraData)
    {
      $this->extraData = $extraData;
      return $this;
    }

}
