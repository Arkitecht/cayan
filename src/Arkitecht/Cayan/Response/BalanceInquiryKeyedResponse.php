<?php

namespace Arkitecht\Cayan\Response;

class BalanceInquiryKeyedResponse
{

    /**
     * @var GiftLoyaltyResponse4 $BalanceInquiryKeyedResult
     */
    protected $BalanceInquiryKeyedResult = null;

    /**
     * @param GiftLoyaltyResponse4 $BalanceInquiryKeyedResult
     */
    public function __construct($BalanceInquiryKeyedResult = null)
    {
      $this->BalanceInquiryKeyedResult = $BalanceInquiryKeyedResult;
    }

    /**
     * @return GiftLoyaltyResponse4
     */
    public function getBalanceInquiryKeyedResult()
    {
      return $this->BalanceInquiryKeyedResult;
    }

    /**
     * @param GiftLoyaltyResponse4 $BalanceInquiryKeyedResult
     * @return \Arkitecht\Cayan\BalanceInquiryKeyedResponse
     */
    public function setBalanceInquiryKeyedResult($BalanceInquiryKeyedResult)
    {
      $this->BalanceInquiryKeyedResult = $BalanceInquiryKeyedResult;
      return $this;
    }

}
