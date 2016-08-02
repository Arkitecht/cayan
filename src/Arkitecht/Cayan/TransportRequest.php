<?php

namespace Arkitecht\Cayan;

class TransportRequest
{

    /**
     * @var string $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $ClerkId
     */
    protected $ClerkId = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var string $Dba
     */
    protected $Dba = null;

    /**
     * @var string $SoftwareName
     */
    protected $SoftwareName = null;

    /**
     * @var string $SoftwareVersion
     */
    protected $SoftwareVersion = null;

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Cardholder
     */
    protected $Cardholder = null;

    /**
     * @var string $LogoLocation
     */
    protected $LogoLocation = null;

    /**
     * @var string $RedirectLocation
     */
    protected $RedirectLocation = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var boolean $ForceDuplicate
     */
    protected $ForceDuplicate = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var DisplayColors $DisplayColors
     */
    protected $DisplayColors = null;

    /**
     * @var DisplayOptions $DisplayOptions
     */
    protected $DisplayOptions = null;

    /**
     * @var EntryMode $EntryMode
     */
    protected $EntryMode = null;

    /**
     * @var string $AuthorizationCode
     */
    protected $AuthorizationCode = null;

    /**
     * @var string $TerminalId
     */
    protected $TerminalId = null;

    /**
     * @var HealthCareAmountDetails $HealthCareAmountDetails
     */
    protected $HealthCareAmountDetails = null;

    /**
     * @var boolean $EnablePartialAuthorization
     */
    protected $EnablePartialAuthorization = null;

    /**
     * @param float $Amount
     */
    public function __construct($transactionType, $amount)
    {
        $this->TransactionType = $transactionType;
        $this->Amount = $amount;
        $this->ForceDuplicate = false;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }

    /**
     * @param string $TransactionType
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setTransactionType($TransactionType)
    {
        $this->TransactionType = $TransactionType;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getClerkId()
    {
        return $this->ClerkId;
    }

    /**
     * @param string $ClerkId
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setClerkId($ClerkId)
    {
        $this->ClerkId = $ClerkId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getDba()
    {
        return $this->Dba;
    }

    /**
     * @param string $Dba
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setDba($Dba)
    {
        $this->Dba = $Dba;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoftwareName()
    {
        return $this->SoftwareName;
    }

    /**
     * @param string $SoftwareName
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setSoftwareName($SoftwareName)
    {
        $this->SoftwareName = $SoftwareName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->SoftwareVersion;
    }

    /**
     * @param string $SoftwareVersion
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setSoftwareVersion($SoftwareVersion)
    {
        $this->SoftwareVersion = $SoftwareVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;

        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setZip($Zip)
    {
        $this->Zip = $Zip;

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
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setCardholder($Cardholder)
    {
        $this->Cardholder = $Cardholder;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogoLocation()
    {
        return $this->LogoLocation;
    }

    /**
     * @param string $LogoLocation
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setLogoLocation($LogoLocation)
    {
        $this->LogoLocation = $LogoLocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectLocation()
    {
        return $this->RedirectLocation;
    }

    /**
     * @param string $RedirectLocation
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setRedirectLocation($RedirectLocation)
    {
        $this->RedirectLocation = $RedirectLocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getForceDuplicate()
    {
        return $this->ForceDuplicate;
    }

    /**
     * @param boolean $ForceDuplicate
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setForceDuplicate($ForceDuplicate)
    {
        $this->ForceDuplicate = $ForceDuplicate;

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
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setCustomerCode($CustomerCode)
    {
        $this->CustomerCode = $CustomerCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
        return $this->PoNumber;
    }

    /**
     * @param string $PoNumber
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setPoNumber($PoNumber)
    {
        $this->PoNumber = $PoNumber;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * @param float $TaxAmount
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;

        return $this;
    }

    /**
     * @return DisplayColors
     */
    public function getDisplayColors()
    {
        return $this->DisplayColors;
    }

    /**
     * @param DisplayColors $DisplayColors
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setDisplayColors($DisplayColors)
    {
        $this->DisplayColors = $DisplayColors;

        return $this;
    }

    /**
     * @return DisplayOptions
     */
    public function getDisplayOptions()
    {
        return $this->DisplayOptions;
    }

    /**
     * @param DisplayOptions $DisplayOptions
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setDisplayOptions($DisplayOptions)
    {
        $this->DisplayOptions = $DisplayOptions;

        return $this;
    }

    /**
     * @return EntryMode
     */
    public function getEntryMode()
    {
        return $this->EntryMode;
    }

    /**
     * @param EntryMode $EntryMode
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setEntryMode($EntryMode)
    {
        $this->EntryMode = $EntryMode;

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
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
        $this->AuthorizationCode = $AuthorizationCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->TerminalId;
    }

    /**
     * @param string $TerminalId
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setTerminalId($TerminalId)
    {
        $this->TerminalId = $TerminalId;

        return $this;
    }

    /**
     * @return HealthCareAmountDetails
     */
    public function getHealthCareAmountDetails()
    {
        return $this->HealthCareAmountDetails;
    }

    /**
     * @param HealthCareAmountDetails $HealthCareAmountDetails
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setHealthCareAmountDetails($HealthCareAmountDetails)
    {
        $this->HealthCareAmountDetails = $HealthCareAmountDetails;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePartialAuthorization()
    {
        return $this->EnablePartialAuthorization;
    }

    /**
     * @param boolean $EnablePartialAuthorization
     * @return \Arkitecht\Cayan\TransportRequest
     */
    public function setEnablePartialAuthorization($EnablePartialAuthorization)
    {
        $this->EnablePartialAuthorization = $EnablePartialAuthorization;

        return $this;
    }

}
