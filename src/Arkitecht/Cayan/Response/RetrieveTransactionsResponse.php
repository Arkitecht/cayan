<?php

namespace Arkitecht\Cayan\Response;

class RetrieveTransactionsResponse
{

    /**
     * @var GiftSummary4 $RetrieveTransactionsResult
     */
    protected $RetrieveTransactionsResult = null;

    /**
     * @param GiftSummary4 $RetrieveTransactionsResult
     */
    public function __construct($RetrieveTransactionsResult = null)
    {
      $this->RetrieveTransactionsResult = $RetrieveTransactionsResult;
    }

    /**
     * @return GiftSummary4
     */
    public function getRetrieveTransactionsResult()
    {
      return $this->RetrieveTransactionsResult;
    }

    /**
     * @param GiftSummary4 $RetrieveTransactionsResult
     * @return \Arkitecht\Cayan\RetrieveTransactionsResponse
     */
    public function setRetrieveTransactionsResult($RetrieveTransactionsResult)
    {
      $this->RetrieveTransactionsResult = $RetrieveTransactionsResult;
      return $this;
    }

}
