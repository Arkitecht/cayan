<?php

namespace Arkitecht\Cayan;

class VaultBoardCredit
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
     * @var string $trackData
     */
    protected $trackData = null;

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
     * @param string $trackData
     * @param string $avsStreetAddress
     * @param string $avsStreetZipCode
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $merchantDefinedToken = null, $trackData = null, $avsStreetAddress = null, $avsStreetZipCode = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->merchantDefinedToken = $merchantDefinedToken;
      $this->trackData = $trackData;
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
     */
    public function setMerchantDefinedToken($merchantDefinedToken)
    {
      $this->merchantDefinedToken = $merchantDefinedToken;
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
     */
    public function setTrackData($trackData)
    {
      $this->trackData = $trackData;
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
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
     * @return \Arkitecht\Cayan\VaultBoardCredit
     */
    public function setAvsStreetZipCode($avsStreetZipCode)
    {
      $this->avsStreetZipCode = $avsStreetZipCode;
      return $this;
    }

}
