<?php

namespace Arkitecht\Cayan\Response;

class CreditLevel2Response4
{

    /**
     * @var string $Amount
     */
    protected $Amount = null;

    /**
     * @var string $ApprovalStatus
     */
    protected $ApprovalStatus = null;

    /**
     * @var string $AuthorizationCode
     */
    protected $AuthorizationCode = null;

    /**
     * @var string $AvsResponse
     */
    protected $AvsResponse = null;

    /**
     * @var string $Cardholder
     */
    protected $Cardholder = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var int $CardType
     */
    protected $CardType = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var string $CvResponse
     */
    protected $CvResponse = null;

    /**
     * @var int $EntryMode
     */
    protected $EntryMode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $ExtraData
     */
    protected $ExtraData = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var string $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var string $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var int $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @param int $CardType
     * @param int $EntryMode
     * @param int $TransactionType
     */
    public function __construct($CardType = null, $EntryMode = null, $TransactionType = null)
    {
      $this->CardType = $CardType;
      $this->EntryMode = $EntryMode;
      $this->TransactionType = $TransactionType;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->ApprovalStatus;
    }

    /**
     * @param string $ApprovalStatus
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setApprovalStatus($ApprovalStatus)
    {
      $this->ApprovalStatus = $ApprovalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
      return $this->AuthorizationCode;
    }

    /**
     * @param string $AuthorizationCode
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
      $this->AuthorizationCode = $AuthorizationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvsResponse()
    {
      return $this->AvsResponse;
    }

    /**
     * @param string $AvsResponse
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setAvsResponse($AvsResponse)
    {
      $this->AvsResponse = $AvsResponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardholder()
    {
      return $this->Cardholder;
    }

    /**
     * @param string $Cardholder
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setCardholder($Cardholder)
    {
      $this->Cardholder = $Cardholder;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCardType()
    {
      return $this->CardType;
    }

    /**
     * @param int $CardType
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setCardType($CardType)
    {
      $this->CardType = $CardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
      return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setCustomerCode($CustomerCode)
    {
      $this->CustomerCode = $CustomerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvResponse()
    {
      return $this->CvResponse;
    }

    /**
     * @param string $CvResponse
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setCvResponse($CvResponse)
    {
      $this->CvResponse = $CvResponse;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntryMode()
    {
      return $this->EntryMode;
    }

    /**
     * @param int $EntryMode
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setEntryMode($EntryMode)
    {
      $this->EntryMode = $EntryMode;
      return $this;
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
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraData()
    {
      return $this->ExtraData;
    }

    /**
     * @param string $ExtraData
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setExtraData($ExtraData)
    {
      $this->ExtraData = $ExtraData;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param string $TaxAmount
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
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
     * @return \Arkitecht\Cayan\CreditLevel2Response4
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
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setTransactionDate($TransactionDate)
    {
      $this->TransactionDate = $TransactionDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param int $TransactionType
     * @return \Arkitecht\Cayan\CreditLevel2Response4
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

}
