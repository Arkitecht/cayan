<?php

namespace Arkitecht\Cayan\Response;

class AddValueResponse
{

    /**
     * @var GiftResponse4 $AddValueResult
     */
    protected $AddValueResult = null;

    /**
     * @param GiftResponse4 $AddValueResult
     */
    public function __construct($AddValueResult = null)
    {
      $this->AddValueResult = $AddValueResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getAddValueResult()
    {
      return $this->AddValueResult;
    }

    /**
     * @param GiftResponse4 $AddValueResult
     * @return \Arkitecht\Cayan\AddValueResponse
     */
    public function setAddValueResult($AddValueResult)
    {
      $this->AddValueResult = $AddValueResult;
      return $this;
    }

}
