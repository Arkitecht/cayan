<?php

namespace Arkitecht\Cayan\Response;

class RedeemPointsResponse
{

    /**
     * @var GiftLoyaltyResponse4 $RedeemPointsResult
     */
    protected $RedeemPointsResult = null;

    /**
     * @param GiftLoyaltyResponse4 $RedeemPointsResult
     */
    public function __construct($RedeemPointsResult = null)
    {
      $this->RedeemPointsResult = $RedeemPointsResult;
    }

    /**
     * @return GiftLoyaltyResponse4
     */
    public function getRedeemPointsResult()
    {
      return $this->RedeemPointsResult;
    }

    /**
     * @param GiftLoyaltyResponse4 $RedeemPointsResult
     * @return \Arkitecht\Cayan\RedeemPointsResponse
     */
    public function setRedeemPointsResult($RedeemPointsResult)
    {
      $this->RedeemPointsResult = $RedeemPointsResult;
      return $this;
    }

}
