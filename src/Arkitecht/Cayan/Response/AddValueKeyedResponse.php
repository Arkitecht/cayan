<?php

namespace Arkitecht\Cayan\Response;

class AddValueKeyedResponse
{

    /**
     * @var GiftResponse4 $AddValueKeyedResult
     */
    protected $AddValueKeyedResult = null;

    /**
     * @param GiftResponse4 $AddValueKeyedResult
     */
    public function __construct($AddValueKeyedResult = null)
    {
      $this->AddValueKeyedResult = $AddValueKeyedResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getAddValueKeyedResult()
    {
      return $this->AddValueKeyedResult;
    }

    /**
     * @param GiftResponse4 $AddValueKeyedResult
     * @return \Arkitecht\Cayan\AddValueKeyedResponse
     */
    public function setAddValueKeyedResult($AddValueKeyedResult)
    {
      $this->AddValueKeyedResult = $AddValueKeyedResult;
      return $this;
    }

}
