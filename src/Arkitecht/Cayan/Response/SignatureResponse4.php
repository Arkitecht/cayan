<?php

namespace Arkitecht\Cayan\Response;

class SignatureResponse4
{

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var int $SignatureType
     */
    protected $SignatureType = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var string $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var string $UploadStatus
     */
    protected $UploadStatus = null;

    /**
     * @param int $SignatureType
     */
    public function __construct($SignatureType = null)
    {
      $this->SignatureType = $SignatureType;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Arkitecht\Cayan\SignatureResponse4
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getSignatureType()
    {
      return $this->SignatureType;
    }

    /**
     * @param int $SignatureType
     * @return \Arkitecht\Cayan\SignatureResponse4
     */
    public function setSignatureType($SignatureType)
    {
      $this->SignatureType = $SignatureType;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return \Arkitecht\Cayan\SignatureResponse4
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
      return $this->TransactionDate;
    }

    /**
     * @param string $TransactionDate
     * @return \Arkitecht\Cayan\SignatureResponse4
     */
    public function setTransactionDate($TransactionDate)
    {
      $this->TransactionDate = $TransactionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadStatus()
    {
      return $this->UploadStatus;
    }

    /**
     * @param string $UploadStatus
     * @return \Arkitecht\Cayan\SignatureResponse4
     */
    public function setUploadStatus($UploadStatus)
    {
      $this->UploadStatus = $UploadStatus;
      return $this;
    }

}
