<?php

namespace Arkitecht\Cayan;

class VaultBoardCreditByReference
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
     * @var string $referenceNumber
     */
    protected $referenceNumber = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $merchantDefinedToken
     * @param string $referenceNumber
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $merchantDefinedToken = null, $referenceNumber = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->merchantDefinedToken = $merchantDefinedToken;
      $this->referenceNumber = $referenceNumber;
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
     * @return \Arkitecht\Cayan\VaultBoardCreditByReference
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
     * @return \Arkitecht\Cayan\VaultBoardCreditByReference
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
     * @return \Arkitecht\Cayan\VaultBoardCreditByReference
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
     * @return \Arkitecht\Cayan\VaultBoardCreditByReference
     */
    public function setMerchantDefinedToken($merchantDefinedToken)
    {
      $this->merchantDefinedToken = $merchantDefinedToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->referenceNumber;
    }

    /**
     * @param string $referenceNumber
     * @return \Arkitecht\Cayan\VaultBoardCreditByReference
     */
    public function setReferenceNumber($referenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
      return $this;
    }

}
