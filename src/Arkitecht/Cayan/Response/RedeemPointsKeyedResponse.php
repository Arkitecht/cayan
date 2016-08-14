<?php

namespace Arkitecht\Cayan\Response;

class RedeemPointsKeyedResponse
{

    /**
     * @var GiftLoyaltyResponse4 $RedeemPointsKeyedResult
     */
    protected $RedeemPointsKeyedResult = null;

    /**
     * @param GiftLoyaltyResponse4 $RedeemPointsKeyedResult
     */
    public function __construct($RedeemPointsKeyedResult = null)
    {
      $this->RedeemPointsKeyedResult = $RedeemPointsKeyedResult;
    }

    /**
     * @return GiftLoyaltyResponse4
     */
    public function getRedeemPointsKeyedResult()
    {
      return $this->RedeemPointsKeyedResult;
    }

    /**
     * @param GiftLoyaltyResponse4 $RedeemPointsKeyedResult
     * @return \Arkitecht\Cayan\RedeemPointsKeyedResponse
     */
    public function setRedeemPointsKeyedResult($RedeemPointsKeyedResult)
    {
      $this->RedeemPointsKeyedResult = $RedeemPointsKeyedResult;
      return $this;
    }

}
