<?php

namespace Arkitecht\Cayan;


/**
 * Provides payment, processing, and related services for both credit and debit cards.
 */
class CreditService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApplyTip' => 'Arkitecht\\Cayan\\ApplyTip',
      'ApplyTipResponse' => 'Arkitecht\\Cayan\\Response\\ApplyTipResponse',
      'CreditResponse4' => 'Arkitecht\\Cayan\\Response\\CreditResponse4',
      'CaptureSignatureTiff' => 'Arkitecht\\Cayan\\CaptureSignatureTiff',
      'CaptureSignatureTiffResponse' => 'Arkitecht\\Cayan\\Response\\CaptureSignatureTiffResponse',
      'SignatureResponse4' => 'Arkitecht\\Cayan\\Response\\SignatureResponse4',
      'CaptureSignatureVector' => 'Arkitecht\\Cayan\\CaptureSignatureVector',
      'CaptureSignatureVectorResponse' => 'Arkitecht\\Cayan\\Response\\CaptureSignatureVectorResponse',
      'DebitSale' => 'Arkitecht\\Cayan\\DebitSale',
      'DebitSaleResponse' => 'Arkitecht\\Cayan\\Response\\DebitSaleResponse',
      'ForceSale' => 'Arkitecht\\Cayan\\ForceSale',
      'ForceSaleResponse' => 'Arkitecht\\Cayan\\Response\\ForceSaleResponse',
      'Level2Sale' => 'Arkitecht\\Cayan\\Level2Sale',
      'Level2SaleResponse' => 'Arkitecht\\Cayan\\Response\\Level2SaleResponse',
      'CreditLevel2Response4' => 'Arkitecht\\Cayan\\Response\\CreditLevel2Response4',
      'Level2SaleKeyed' => 'Arkitecht\\Cayan\\Level2SaleKeyed',
      'Level2SaleKeyedResponse' => 'Arkitecht\\Cayan\\Response\\Level2SaleKeyedResponse',
      'PostAuthorization' => 'Arkitecht\\Cayan\\PostAuthorization',
      'PostAuthorizationResponse' => 'Arkitecht\\Cayan\\Response\\PostAuthorizationResponse',
      'PreAuthorization' => 'Arkitecht\\Cayan\\PreAuthorization',
      'PreAuthorizationResponse' => 'Arkitecht\\Cayan\\Response\\PreAuthorizationResponse',
      'PreAuthorizationKeyed' => 'Arkitecht\\Cayan\\PreAuthorizationKeyed',
      'PreAuthorizationKeyedResponse' => 'Arkitecht\\Cayan\\Response\\PreAuthorizationKeyedResponse',
      'Refund' => 'Arkitecht\\Cayan\\Refund',
      'RefundResponse' => 'Arkitecht\\Cayan\\Response\\RefundResponse',
      'RepeatSale' => 'Arkitecht\\Cayan\\RepeatSale',
      'RepeatSaleResponse' => 'Arkitecht\\Cayan\\Response\\RepeatSaleResponse',
      'Sale' => 'Arkitecht\\Cayan\\Sale',
      'SaleResponse' => 'Arkitecht\\Cayan\\Response\\SaleResponse',
      'SaleKeyed' => 'Arkitecht\\Cayan\\SaleKeyed',
      'SaleKeyedResponse' => 'Arkitecht\\Cayan\\Response\\SaleKeyedResponse',
      'SettleBatch' => 'Arkitecht\\Cayan\\SettleBatch',
      'SettleBatchResponse' => 'Arkitecht\\Cayan\\Response\\SettleBatchResponse',
      'BatchResponse4' => 'Arkitecht\\Cayan\\Response\\BatchResponse4',
      'VoidPreAuthorization' => 'Arkitecht\\Cayan\\VoidPreAuthorization',
      'VoidPreAuthorizationResponse' => 'Arkitecht\\Cayan\\Response\\VoidPreAuthorizationResponse',
      'Void' => 'Arkitecht\\Cayan\\Void',
      'VoidResponse' => 'Arkitecht\\Cayan\\Response\\VoidResponse',
      'Level2SaleVault' => 'Arkitecht\\Cayan\\Level2SaleVault',
      'Level2SaleVaultResponse' => 'Arkitecht\\Cayan\\Response\\Level2SaleVaultResponse',
      'PreAuthorizationVault' => 'Arkitecht\\Cayan\\PreAuthorizationVault',
      'PreAuthorizationVaultResponse' => 'Arkitecht\\Cayan\\Response\\PreAuthorizationVaultResponse',
      'SaleVault' => 'Arkitecht\\Cayan\\SaleVault',
      'SaleVaultResponse' => 'Arkitecht\\Cayan\\Response\\SaleVaultResponse',
      'VaultBoardCredit' => 'Arkitecht\\Cayan\\VaultBoardCredit',
      'VaultBoardCreditResponse' => 'Arkitecht\\Cayan\\Response\\VaultBoardCreditResponse',
      'VaultBoardingResponse' => 'Arkitecht\\Cayan\\Response\\VaultBoardingResponse',
      'VaultBoardCreditKeyed' => 'Arkitecht\\Cayan\\VaultBoardCreditKeyed',
      'VaultBoardCreditKeyedResponse' => 'Arkitecht\\Cayan\\Response\\VaultBoardCreditKeyedResponse',
      'VaultBoardCreditByReference' => 'Arkitecht\\Cayan\\VaultBoardCreditByReference',
      'VaultBoardCreditByReferenceResponse' => 'Arkitecht\\Cayan\\Response\\VaultBoardCreditByReferenceResponse',
      'VaultDeleteToken' => 'Arkitecht\\Cayan\\VaultDeleteToken',
      'VaultDeleteTokenResponse' => 'Arkitecht\\Cayan\\Response\\VaultDeleteTokenResponse',
      'VaultFindPaymentInfo' => 'Arkitecht\\Cayan\\VaultFindPaymentInfo',
      'VaultFindPaymentInfoResponse' => 'Arkitecht\\Cayan\\Response\\VaultFindPaymentInfoResponse',
      'VaultPaymentInfoResponse' => 'Arkitecht\\Cayan\\Response\\VaultPaymentInfoResponse',
      'EmvAuthorize' => 'Arkitecht\\Cayan\\EmvAuthorize',
      'EmvAuthorizeResponse' => 'Arkitecht\\Cayan\\Response\\EmvAuthorizeResponse',
      'EmvAuthorizeResponse4' => 'Arkitecht\\Cayan\\Response\\EmvAuthorizeResponse4',
      'EmvComplete' => 'Arkitecht\\Cayan\\EmvComplete',
      'EmvCompleteResponse' => 'Arkitecht\\Cayan\\Response\\EmvCompleteResponse',
      'EmvCompleteResponse4' => 'Arkitecht\\Cayan\\Response\\EmvCompleteResponse4',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ps1.merchantware.net/Merchantware/ws/RetailTransaction/v4/Credit.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ApplyTip $parameters
     * @return ApplyTipResponse
     */
    public function ApplyTip(ApplyTip $parameters)
    {
      return $this->__soapCall('ApplyTip', array($parameters));
    }

    /**
     * @param CaptureSignatureTiff $parameters
     * @return CaptureSignatureTiffResponse
     */
    public function CaptureSignatureTiff(CaptureSignatureTiff $parameters)
    {
      return $this->__soapCall('CaptureSignatureTiff', array($parameters));
    }

    /**
     * @param CaptureSignatureVector $parameters
     * @return CaptureSignatureVectorResponse
     */
    public function CaptureSignatureVector(CaptureSignatureVector $parameters)
    {
      return $this->__soapCall('CaptureSignatureVector', array($parameters));
    }

    /**
     * @param DebitSale $parameters
     * @return DebitSaleResponse
     */
    public function DebitSale(DebitSale $parameters)
    {
      return $this->__soapCall('DebitSale', array($parameters));
    }

    /**
     * @param ForceSale $parameters
     * @return ForceSaleResponse
     */
    public function ForceSale(ForceSale $parameters)
    {
      return $this->__soapCall('ForceSale', array($parameters));
    }

    /**
     * @param Level2Sale $parameters
     * @return Level2SaleResponse
     */
    public function Level2Sale(Level2Sale $parameters)
    {
      return $this->__soapCall('Level2Sale', array($parameters));
    }

    /**
     * @param Level2SaleKeyed $parameters
     * @return Level2SaleKeyedResponse
     */
    public function Level2SaleKeyed(Level2SaleKeyed $parameters)
    {
      return $this->__soapCall('Level2SaleKeyed', array($parameters));
    }

    /**
     * @param PostAuthorization $parameters
     * @return PostAuthorizationResponse
     */
    public function PostAuthorization(PostAuthorization $parameters)
    {
      return $this->__soapCall('PostAuthorization', array($parameters));
    }

    /**
     * @param PreAuthorization $parameters
     * @return PreAuthorizationResponse
     */
    public function PreAuthorization(PreAuthorization $parameters)
    {
      return $this->__soapCall('PreAuthorization', array($parameters));
    }

    /**
     * @param PreAuthorizationKeyed $parameters
     * @return PreAuthorizationKeyedResponse
     */
    public function PreAuthorizationKeyed(PreAuthorizationKeyed $parameters)
    {
      return $this->__soapCall('PreAuthorizationKeyed', array($parameters));
    }

    /**
     * @param Refund $parameters
     * @return RefundResponse
     */
    public function Refund(Refund $parameters)
    {
      return $this->__soapCall('Refund', array($parameters));
    }

    /**
     * @param RepeatSale $parameters
     * @return RepeatSaleResponse
     */
    public function RepeatSale(RepeatSale $parameters)
    {
      return $this->__soapCall('RepeatSale', array($parameters));
    }

    /**
     * @param Sale $parameters
     * @return SaleResponse
     */
    public function Sale(Sale $parameters)
    {
      return $this->__soapCall('Sale', array($parameters));
    }

    /**
     * @param SaleKeyed $parameters
     * @return SaleKeyedResponse
     */
    public function SaleKeyed(SaleKeyed $parameters)
    {
      return $this->__soapCall('SaleKeyed', array($parameters));
    }

    /**
     * @param SettleBatch $parameters
     * @return SettleBatchResponse
     */
    public function SettleBatch(SettleBatch $parameters)
    {
      return $this->__soapCall('SettleBatch', array($parameters));
    }

    /**
     * @param VoidPreAuthorization $parameters
     * @return VoidPreAuthorizationResponse
     */
    public function VoidPreAuthorization(VoidPreAuthorization $parameters)
    {
      return $this->__soapCall('VoidPreAuthorization', array($parameters));
    }

    /**
     * @param Void $parameters
     * @return VoidResponse
     */
    public function Void(Void $parameters)
    {
      return $this->__soapCall('Void', array($parameters));
    }

    /**
     * @param Level2SaleVault $parameters
     * @return Level2SaleVaultResponse
     */
    public function Level2SaleVault(Level2SaleVault $parameters)
    {
      return $this->__soapCall('Level2SaleVault', array($parameters));
    }

    /**
     * @param PreAuthorizationVault $parameters
     * @return PreAuthorizationVaultResponse
     */
    public function PreAuthorizationVault(PreAuthorizationVault $parameters)
    {
      return $this->__soapCall('PreAuthorizationVault', array($parameters));
    }

    /**
     * @param SaleVault $parameters
     * @return SaleVaultResponse
     */
    public function SaleVault(SaleVault $parameters)
    {
      return $this->__soapCall('SaleVault', array($parameters));
    }

    /**
     * @param VaultBoardCredit $parameters
     * @return VaultBoardCreditResponse
     */
    public function VaultBoardCredit(VaultBoardCredit $parameters)
    {
      return $this->__soapCall('VaultBoardCredit', array($parameters));
    }

    /**
     * @param VaultBoardCreditKeyed $parameters
     * @return VaultBoardCreditKeyedResponse
     */
    public function VaultBoardCreditKeyed(VaultBoardCreditKeyed $parameters)
    {
      return $this->__soapCall('VaultBoardCreditKeyed', array($parameters));
    }

    /**
     * @param VaultBoardCreditByReference $parameters
     * @return VaultBoardCreditByReferenceResponse
     */
    public function VaultBoardCreditByReference(VaultBoardCreditByReference $parameters)
    {
      return $this->__soapCall('VaultBoardCreditByReference', array($parameters));
    }

    /**
     * @param VaultDeleteToken $parameters
     * @return VaultDeleteTokenResponse
     */
    public function VaultDeleteToken(VaultDeleteToken $parameters)
    {
      return $this->__soapCall('VaultDeleteToken', array($parameters));
    }

    /**
     * @param VaultFindPaymentInfo $parameters
     * @return VaultFindPaymentInfoResponse
     */
    public function VaultFindPaymentInfo(VaultFindPaymentInfo $parameters)
    {
      return $this->__soapCall('VaultFindPaymentInfo', array($parameters));
    }

    /**
     * @param EmvAuthorize $parameters
     * @return EmvAuthorizeResponse
     */
    public function EmvAuthorize(EmvAuthorize $parameters)
    {
      return $this->__soapCall('EmvAuthorize', array($parameters));
    }

    /**
     * @param EmvComplete $parameters
     * @return EmvCompleteResponse
     */
    public function EmvComplete(EmvComplete $parameters)
    {
      return $this->__soapCall('EmvComplete', array($parameters));
    }

}
