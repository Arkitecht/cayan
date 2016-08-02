<?php

namespace Arkitecht\Cayan;

class CreateTransaction
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
     * @var TransportRequest $request
     */
    protected $request = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param TransportRequest $request
     */
    public function __construct($merchantName, $merchantSiteId, $merchantKey, $request)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->request = $request;
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
     * @return \Arkitecht\Cayan\CreateTransaction
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
     * @return \Arkitecht\Cayan\CreateTransaction
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
     * @return \Arkitecht\Cayan\CreateTransaction
     */
    public function setMerchantKey($merchantKey)
    {
      $this->merchantKey = $merchantKey;
      return $this;
    }

    /**
     * @return TransportRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TransportRequest $request
     * @return \Arkitecht\Cayan\CreateTransaction
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
