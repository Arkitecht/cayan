<?php

namespace Arkitecht\Cayan;

class Giftcard extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ActivateCard' => 'Arkitecht\\Cayan\\ActivateCard',
      'ActivateCardResponse' =>'Arkitecht\\Cayan\\Response\\ActivateCardResponse',
      'GiftResponse4' => 'Arkitecht\\Cayan\\GiftResponse4',
      'AddPoints' => 'Arkitecht\\Cayan\\AddPoints',
      'AddPointsResponse' =>'Arkitecht\\Cayan\\Response\\AddPointsResponse',
      'GiftLoyaltyResponse4' => 'Arkitecht\\Cayan\\GiftLoyaltyResponse4',
      'AddValue' => 'Arkitecht\\Cayan\\AddValue',
      'AddValueResponse' =>'Arkitecht\\Cayan\\Response\\AddValueResponse',
      'BalanceInquiry' => 'Arkitecht\\Cayan\\BalanceInquiry',
      'BalanceInquiryResponse' =>'Arkitecht\\Cayan\\Response\\BalanceInquiryResponse',
      'ForceSale' => 'Arkitecht\\Cayan\\ForceSaleCustom',
      'ForceSaleResponse' => 'Arkitecht\\Cayan\\ForceSaleResponseCustom',
      'RedeemPoints' => 'Arkitecht\\Cayan\\RedeemPoints',
      'RedeemPointsResponse' =>'Arkitecht\\Cayan\\Response\\RedeemPointsResponse',
      'Sale' => 'Arkitecht\\Cayan\\SaleCustom',
      'SaleResponse' => 'Arkitecht\\Cayan\\SaleResponseCustom',
      'ActivateCardKeyed' => 'Arkitecht\\Cayan\\ActivateCardKeyed',
      'ActivateCardKeyedResponse' =>'Arkitecht\\Cayan\\Response\\Response\\ActivateCardKeyedResponse',
      'AddPointsKeyed' => 'Arkitecht\\Cayan\\AddPointsKeyed',
      'AddPointsKeyedResponse' =>'Arkitecht\\Cayan\\Response\\AddPointsKeyedResponse',
      'AddValueKeyed' => 'Arkitecht\\Cayan\\AddValueKeyed',
      'AddValueKeyedResponse' =>'Arkitecht\\Cayan\\Response\\AddValueKeyedResponse',
      'ApplyTip' => 'Arkitecht\\Cayan\\ApplyTipCustom',
      'ApplyTipResponse' => 'Arkitecht\\Cayan\\ApplyTipResponseCustom',
      'BalanceInquiryKeyed' => 'Arkitecht\\Cayan\\BalanceInquiryKeyed',
      'BalanceInquiryKeyedResponse' =>'Arkitecht\\Cayan\\Response\\BalanceInquiryKeyedResponse',
      'ForceSaleKeyed' => 'Arkitecht\\Cayan\\ForceSaleKeyed',
      'ForceSaleKeyedResponse' =>'Arkitecht\\Cayan\\Response\\ForceSaleKeyedResponse',
      'RedeemPointsKeyed' => 'Arkitecht\\Cayan\\RedeemPointsKeyed',
      'RedeemPointsKeyedResponse' =>'Arkitecht\\Cayan\\Response\\RedeemPointsKeyedResponse',
      'RetrieveTransactions' => 'Arkitecht\\Cayan\\RetrieveTransactions',
      'RetrieveTransactionsResponse' =>'Arkitecht\\Cayan\\Response\\RetrieveTransactionsResponse',
      'GiftSummary4' => 'Arkitecht\\Cayan\\GiftSummary4',
      'SaleKeyed' => 'Arkitecht\\Cayan\\SaleKeyedCustom',
      'SaleKeyedResponse' => 'Arkitecht\\Cayan\\SaleKeyedResponseCustom',
      'TransferBalance' => 'Arkitecht\\Cayan\\TransferBalance',
      'TransferBalanceResponse' =>'Arkitecht\\Cayan\\Response\\TransferBalanceResponse',
      'VoidSale' => 'Arkitecht\\Cayan\\VoidSale',
      'VoidSaleResponse' =>'Arkitecht\\Cayan\\Response\\VoidSaleResponse',
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
        $wsdl = 'https://ps1.merchantware.net/Merchantware/ws/ExtensionServices/v4/Giftcard.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ActivateCard $parameters
     * @return ActivateCardResponse
     */
    public function ActivateCard(ActivateCard $parameters)
    {
      return $this->__soapCall('ActivateCard', array($parameters));
    }

    /**
     * @param AddPoints $parameters
     * @return AddPointsResponse
     */
    public function AddPoints(AddPoints $parameters)
    {
      return $this->__soapCall('AddPoints', array($parameters));
    }

    /**
     * @param AddValue $parameters
     * @return AddValueResponse
     */
    public function AddValue(AddValue $parameters)
    {
      return $this->__soapCall('AddValue', array($parameters));
    }

    /**
     * @param BalanceInquiry $parameters
     * @return BalanceInquiryResponse
     */
    public function BalanceInquiry(BalanceInquiry $parameters)
    {
      return $this->__soapCall('BalanceInquiry', array($parameters));
    }

    /**
     * @param ForceSaleCustom $parameters
     * @return ForceSaleResponse
     */
    public function ForceSale($parameters)
    {
      return $this->__soapCall('ForceSale', array($parameters));
    }

    /**
     * @param RedeemPoints $parameters
     * @return RedeemPointsResponse
     */
    public function RedeemPoints(RedeemPoints $parameters)
    {
      return $this->__soapCall('RedeemPoints', array($parameters));
    }

    /**
     * @param SaleCustom $parameters
     * @return SaleResponse
     */
    public function Sale($parameters)
    {
      return $this->__soapCall('Sale', array($parameters));
    }

    /**
     * @param ActivateCardKeyed $parameters
     * @return ActivateCardKeyedResponse
     */
    public function ActivateCardKeyed(ActivateCardKeyed $parameters)
    {
      return $this->__soapCall('ActivateCardKeyed', array($parameters));
    }

    /**
     * @param AddPointsKeyed $parameters
     * @return AddPointsKeyedResponse
     */
    public function AddPointsKeyed(AddPointsKeyed $parameters)
    {
      return $this->__soapCall('AddPointsKeyed', array($parameters));
    }

    /**
     * @param AddValueKeyed $parameters
     * @return AddValueKeyedResponse
     */
    public function AddValueKeyed(AddValueKeyed $parameters)
    {
      return $this->__soapCall('AddValueKeyed', array($parameters));
    }

    /**
     * @param ApplyTipCustom $parameters
     * @return ApplyTipResponse
     */
    public function ApplyTip($parameters)
    {
      return $this->__soapCall('ApplyTip', array($parameters));
    }

    /**
     * @param BalanceInquiryKeyed $parameters
     * @return BalanceInquiryKeyedResponse
     */
    public function BalanceInquiryKeyed(BalanceInquiryKeyed $parameters)
    {
      return $this->__soapCall('BalanceInquiryKeyed', array($parameters));
    }

    /**
     * @param ForceSaleKeyed $parameters
     * @return ForceSaleKeyedResponse
     */
    public function ForceSaleKeyed(ForceSaleKeyed $parameters)
    {
      return $this->__soapCall('ForceSaleKeyed', array($parameters));
    }

    /**
     * @param RedeemPointsKeyed $parameters
     * @return RedeemPointsKeyedResponse
     */
    public function RedeemPointsKeyed(RedeemPointsKeyed $parameters)
    {
      return $this->__soapCall('RedeemPointsKeyed', array($parameters));
    }

    /**
     * The RetrieveTransactions method is no longer supported.
     *
     * @param RetrieveTransactions $parameters
     * @return RetrieveTransactionsResponse
     */
    public function RetrieveTransactions(RetrieveTransactions $parameters)
    {
      return $this->__soapCall('RetrieveTransactions', array($parameters));
    }

    /**
     * @param SaleKeyedCustom $parameters
     * @return SaleKeyedResponse
     */
    public function SaleKeyed($parameters)
    {
      return $this->__soapCall('SaleKeyed', array($parameters));
    }

    /**
     * @param TransferBalance $parameters
     * @return TransferBalanceResponse
     */
    public function TransferBalance(TransferBalance $parameters)
    {
      return $this->__soapCall('TransferBalance', array($parameters));
    }

    /**
     * @param VoidSale $parameters
     * @return VoidSaleResponse
     */
    public function VoidSale(VoidSale $parameters)
    {
      return $this->__soapCall('VoidSale', array($parameters));
    }

}
