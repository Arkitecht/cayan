<?php

namespace Arkitecht\Cayan\Response;

class AddPointsResponse
{

    /**
     * @var GiftLoyaltyResponse4 $AddPointsResult
     */
    protected $AddPointsResult = null;

    /**
     * @param GiftLoyaltyResponse4 $AddPointsResult
     */
    public function __construct($AddPointsResult = null)
    {
      $this->AddPointsResult = $AddPointsResult;
    }

    /**
     * @return GiftLoyaltyResponse4
     */
    public function getAddPointsResult()
    {
      return $this->AddPointsResult;
    }

    /**
     * @param GiftLoyaltyResponse4 $AddPointsResult
     * @return \Arkitecht\Cayan\AddPointsResponse
     */
    public function setAddPointsResult($AddPointsResult)
    {
      $this->AddPointsResult = $AddPointsResult;
      return $this;
    }

}
