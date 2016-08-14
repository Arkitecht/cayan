<?php

namespace Arkitecht\Cayan\Response;

class CaptureSignatureVectorResponse
{

    /**
     * @var SignatureResponse4 $CaptureSignatureVectorResult
     */
    protected $CaptureSignatureVectorResult = null;

    /**
     * @param SignatureResponse4 $CaptureSignatureVectorResult
     */
    public function __construct($CaptureSignatureVectorResult = null)
    {
      $this->CaptureSignatureVectorResult = $CaptureSignatureVectorResult;
    }

    /**
     * @return SignatureResponse4
     */
    public function getCaptureSignatureVectorResult()
    {
      return $this->CaptureSignatureVectorResult;
    }

    /**
     * @param SignatureResponse4 $CaptureSignatureVectorResult
     * @return \Arkitecht\Cayan\CaptureSignatureVectorResponse
     */
    public function setCaptureSignatureVectorResult($CaptureSignatureVectorResult)
    {
      $this->CaptureSignatureVectorResult = $CaptureSignatureVectorResult;
      return $this;
    }

}
