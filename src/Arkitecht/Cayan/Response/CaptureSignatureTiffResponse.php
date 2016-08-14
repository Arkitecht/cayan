<?php

namespace Arkitecht\Cayan\Response;

class CaptureSignatureTiffResponse
{

    /**
     * @var SignatureResponse4 $CaptureSignatureTiffResult
     */
    protected $CaptureSignatureTiffResult = null;

    /**
     * @param SignatureResponse4 $CaptureSignatureTiffResult
     */
    public function __construct($CaptureSignatureTiffResult = null)
    {
      $this->CaptureSignatureTiffResult = $CaptureSignatureTiffResult;
    }

    /**
     * @return SignatureResponse4
     */
    public function getCaptureSignatureTiffResult()
    {
      return $this->CaptureSignatureTiffResult;
    }

    /**
     * @param SignatureResponse4 $CaptureSignatureTiffResult
     * @return \Arkitecht\Cayan\CaptureSignatureTiffResponse
     */
    public function setCaptureSignatureTiffResult($CaptureSignatureTiffResult)
    {
      $this->CaptureSignatureTiffResult = $CaptureSignatureTiffResult;
      return $this;
    }

}
