<?php

namespace Arkitecht\Cayan\Response;

class AddPointsKeyedResponse
{

    /**
     * @var GiftLoyaltyResponse4 $AddPointsKeyedResult
     */
    protected $AddPointsKeyedResult = null;

    /**
     * @param GiftLoyaltyResponse4 $AddPointsKeyedResult
     */
    public function __construct($AddPointsKeyedResult = null)
    {
      $this->AddPointsKeyedResult = $AddPointsKeyedResult;
    }

    /**
     * @return GiftLoyaltyResponse4
     */
    public function getAddPointsKeyedResult()
    {
      return $this->AddPointsKeyedResult;
    }

    /**
     * @param GiftLoyaltyResponse4 $AddPointsKeyedResult
     * @return \Arkitecht\Cayan\AddPointsKeyedResponse
     */
    public function setAddPointsKeyedResult($AddPointsKeyedResult)
    {
      $this->AddPointsKeyedResult = $AddPointsKeyedResult;
      return $this;
    }

}
