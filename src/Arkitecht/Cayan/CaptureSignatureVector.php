<?php

namespace Arkitecht\Cayan;

class CaptureSignatureVector
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
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $imageData
     */
    protected $imageData = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $token
     * @param string $imageData
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $token = null, $imageData = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->token = $token;
      $this->imageData = $imageData;
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
     * @return \Arkitecht\Cayan\CaptureSignatureVector
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
     * @return \Arkitecht\Cayan\CaptureSignatureVector
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
     * @return \Arkitecht\Cayan\CaptureSignatureVector
     */
    public function setMerchantKey($merchantKey)
    {
      $this->merchantKey = $merchantKey;
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
     * @return \Arkitecht\Cayan\CaptureSignatureVector
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageData()
    {
      return $this->imageData;
    }

    /**
     * @param string $imageData
     * @return \Arkitecht\Cayan\CaptureSignatureVector
     */
    public function setImageData($imageData)
    {
      $this->imageData = $imageData;
      return $this;
    }

}
