<?php

namespace Arkitecht\Cayan;

class GiftSummary4
{

    /**
     * @var string $ActivationsPurchaseCount
     */
    protected $ActivationsPurchaseCount = null;

    /**
     * @var string $ActivationsPurchaseTotal
     */
    protected $ActivationsPurchaseTotal = null;

    /**
     * @var string $ActivationsReturnedCount
     */
    protected $ActivationsReturnedCount = null;

    /**
     * @var string $ActivationsReturnedTotal
     */
    protected $ActivationsReturnedTotal = null;

    /**
     * @var string $AddPointsCount
     */
    protected $AddPointsCount = null;

    /**
     * @var string $AddPointsTotal
     */
    protected $AddPointsTotal = null;

    /**
     * @var string $AddTipsCount
     */
    protected $AddTipsCount = null;

    /**
     * @var string $AddTipsTotal
     */
    protected $AddTipsTotal = null;

    /**
     * @var string $AddValuesCount
     */
    protected $AddValuesCount = null;

    /**
     * @var string $AddValuesTotal
     */
    protected $AddValuesTotal = null;

    /**
     * @var string $ApprovalStatus
     */
    protected $ApprovalStatus = null;

    /**
     * @var string $BalanceTransferCount
     */
    protected $BalanceTransferCount = null;

    /**
     * @var string $BalanceTransferTotal
     */
    protected $BalanceTransferTotal = null;

    /**
     * @var string $CreditsCount
     */
    protected $CreditsCount = null;

    /**
     * @var string $CreditsTotal
     */
    protected $CreditsTotal = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $ExtraData
     */
    protected $ExtraData = null;

    /**
     * @var string $MiscMessage
     */
    protected $MiscMessage = null;

    /**
     * @var string $PointsCount
     */
    protected $PointsCount = null;

    /**
     * @var string $PointsTotal
     */
    protected $PointsTotal = null;

    /**
     * @var string $RedemptionsCount
     */
    protected $RedemptionsCount = null;

    /**
     * @var string $RedemptionsTotal
     */
    protected $RedemptionsTotal = null;

    /**
     * @var string $ResponseMessage
     */
    protected $ResponseMessage = null;

    /**
     * @var string $TipsCount
     */
    protected $TipsCount = null;

    /**
     * @var string $TipsTotal
     */
    protected $TipsTotal = null;

    /**
     * @var string $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var int $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var string $VoidsCount
     */
    protected $VoidsCount = null;

    /**
     * @var string $VoidsTotal
     */
    protected $VoidsTotal = null;

    /**
     * @param int $TransactionType
     */
    public function __construct($TransactionType = null)
    {
      $this->TransactionType = $TransactionType;
    }

    /**
     * @return string
     */
    public function getActivationsPurchaseCount()
    {
      return $this->ActivationsPurchaseCount;
    }

    /**
     * @param string $ActivationsPurchaseCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setActivationsPurchaseCount($ActivationsPurchaseCount)
    {
      $this->ActivationsPurchaseCount = $ActivationsPurchaseCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getActivationsPurchaseTotal()
    {
      return $this->ActivationsPurchaseTotal;
    }

    /**
     * @param string $ActivationsPurchaseTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setActivationsPurchaseTotal($ActivationsPurchaseTotal)
    {
      $this->ActivationsPurchaseTotal = $ActivationsPurchaseTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getActivationsReturnedCount()
    {
      return $this->ActivationsReturnedCount;
    }

    /**
     * @param string $ActivationsReturnedCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setActivationsReturnedCount($ActivationsReturnedCount)
    {
      $this->ActivationsReturnedCount = $ActivationsReturnedCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getActivationsReturnedTotal()
    {
      return $this->ActivationsReturnedTotal;
    }

    /**
     * @param string $ActivationsReturnedTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setActivationsReturnedTotal($ActivationsReturnedTotal)
    {
      $this->ActivationsReturnedTotal = $ActivationsReturnedTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddPointsCount()
    {
      return $this->AddPointsCount;
    }

    /**
     * @param string $AddPointsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setAddPointsCount($AddPointsCount)
    {
      $this->AddPointsCount = $AddPointsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddPointsTotal()
    {
      return $this->AddPointsTotal;
    }

    /**
     * @param string $AddPointsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setAddPointsTotal($AddPointsTotal)
    {
      $this->AddPointsTotal = $AddPointsTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddTipsCount()
    {
      return $this->AddTipsCount;
    }

    /**
     * @param string $AddTipsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setAddTipsCount($AddTipsCount)
    {
      $this->AddTipsCount = $AddTipsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddTipsTotal()
    {
      return $this->AddTipsTotal;
    }

    /**
     * @param string $AddTipsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setAddTipsTotal($AddTipsTotal)
    {
      $this->AddTipsTotal = $AddTipsTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddValuesCount()
    {
      return $this->AddValuesCount;
    }

    /**
     * @param string $AddValuesCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setAddValuesCount($AddValuesCount)
    {
      $this->AddValuesCount = $AddValuesCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddValuesTotal()
    {
      return $this->AddValuesTotal;
    }

    /**
     * @param string $AddValuesTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setAddValuesTotal($AddValuesTotal)
    {
      $this->AddValuesTotal = $AddValuesTotal;
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
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setApprovalStatus($ApprovalStatus)
    {
      $this->ApprovalStatus = $ApprovalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBalanceTransferCount()
    {
      return $this->BalanceTransferCount;
    }

    /**
     * @param string $BalanceTransferCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setBalanceTransferCount($BalanceTransferCount)
    {
      $this->BalanceTransferCount = $BalanceTransferCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBalanceTransferTotal()
    {
      return $this->BalanceTransferTotal;
    }

    /**
     * @param string $BalanceTransferTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setBalanceTransferTotal($BalanceTransferTotal)
    {
      $this->BalanceTransferTotal = $BalanceTransferTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditsCount()
    {
      return $this->CreditsCount;
    }

    /**
     * @param string $CreditsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setCreditsCount($CreditsCount)
    {
      $this->CreditsCount = $CreditsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditsTotal()
    {
      return $this->CreditsTotal;
    }

    /**
     * @param string $CreditsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setCreditsTotal($CreditsTotal)
    {
      $this->CreditsTotal = $CreditsTotal;
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
     * @return \Arkitecht\Cayan\GiftSummary4
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
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setExtraData($ExtraData)
    {
      $this->ExtraData = $ExtraData;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscMessage()
    {
      return $this->MiscMessage;
    }

    /**
     * @param string $MiscMessage
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setMiscMessage($MiscMessage)
    {
      $this->MiscMessage = $MiscMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointsCount()
    {
      return $this->PointsCount;
    }

    /**
     * @param string $PointsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setPointsCount($PointsCount)
    {
      $this->PointsCount = $PointsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointsTotal()
    {
      return $this->PointsTotal;
    }

    /**
     * @param string $PointsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setPointsTotal($PointsTotal)
    {
      $this->PointsTotal = $PointsTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getRedemptionsCount()
    {
      return $this->RedemptionsCount;
    }

    /**
     * @param string $RedemptionsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setRedemptionsCount($RedemptionsCount)
    {
      $this->RedemptionsCount = $RedemptionsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRedemptionsTotal()
    {
      return $this->RedemptionsTotal;
    }

    /**
     * @param string $RedemptionsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setRedemptionsTotal($RedemptionsTotal)
    {
      $this->RedemptionsTotal = $RedemptionsTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
      return $this->ResponseMessage;
    }

    /**
     * @param string $ResponseMessage
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setResponseMessage($ResponseMessage)
    {
      $this->ResponseMessage = $ResponseMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipsCount()
    {
      return $this->TipsCount;
    }

    /**
     * @param string $TipsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setTipsCount($TipsCount)
    {
      $this->TipsCount = $TipsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipsTotal()
    {
      return $this->TipsTotal;
    }

    /**
     * @param string $TipsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setTipsTotal($TipsTotal)
    {
      $this->TipsTotal = $TipsTotal;
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
     * @return \Arkitecht\Cayan\GiftSummary4
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
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoidsCount()
    {
      return $this->VoidsCount;
    }

    /**
     * @param string $VoidsCount
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setVoidsCount($VoidsCount)
    {
      $this->VoidsCount = $VoidsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoidsTotal()
    {
      return $this->VoidsTotal;
    }

    /**
     * @param string $VoidsTotal
     * @return \Arkitecht\Cayan\GiftSummary4
     */
    public function setVoidsTotal($VoidsTotal)
    {
      $this->VoidsTotal = $VoidsTotal;
      return $this;
    }

}
