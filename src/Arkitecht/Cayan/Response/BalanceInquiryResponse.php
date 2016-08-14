<?php

namespace Arkitecht\Cayan\Response;

class BalanceInquiryResponse
{

    /**
     * @var GiftLoyaltyResponse4 $BalanceInquiryResult
     */
    protected $BalanceInquiryResult = null;

    /**
     * @param GiftLoyaltyResponse4 $BalanceInquiryResult
     */
    public function __construct($BalanceInquiryResult = null)
    {
      $this->BalanceInquiryResult = $BalanceInquiryResult;
    }

    /**
     * @return GiftLoyaltyResponse4
     */
    public function getBalanceInquiryResult()
    {
      return $this->BalanceInquiryResult;
    }

    /**
     * @param GiftLoyaltyResponse4 $BalanceInquiryResult
     * @return \Arkitecht\Cayan\BalanceInquiryResponse
     */
    public function setBalanceInquiryResult($BalanceInquiryResult)
    {
      $this->BalanceInquiryResult = $BalanceInquiryResult;
      return $this;
    }

}
