<?php

namespace Arkitecht\Cayan;

use GuzzleHttp\Client;


/**
 * Provides a service interface to create new requests for Transport Web and Transport Mobile
 */
class TransportService extends \SoapClient
{

    public $cedIp = 'http://205.219.72.106';
    public $cedPort = '8080';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'CreateTransaction'         => 'Arkitecht\\Cayan\\CreateTransaction',
        'TransportRequest'          => 'Arkitecht\\Cayan\\TransportRequest',
        'DisplayColors'             => 'Arkitecht\\Cayan\\DisplayColors',
        'DisplayOptions'            => 'Arkitecht\\Cayan\\DisplayOptions',
        'HealthCareAmountDetails'   => 'Arkitecht\\Cayan\\HealthCareAmountDetails',
        'CreateTransactionResponse' => 'Arkitecht\\Cayan\\Response\\CreateTransactionResponse',
        'TransportResponse'         => 'Arkitecht\\Cayan\\Response\\TransportResponse',
        'ArrayOfMessage'            => 'Arkitecht\\Cayan\\ArrayOfMessage',
        'Message'                   => 'Arkitecht\\Cayan\\Message',
        'PostAuthorization'         => 'Arkitecht\\Cayan\\PostAuthorization',
    );

    public function __construct($test = false, $options = [])
    {
        if ($test) {
            $options = [
                'trace'    => true,
                'location' => 'https://simulator-transport.merchantware.net/v4/transportService.asmx'
            ];
        }
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);

        $wsdl = 'https://transport.merchantware.net/v4/transportService.asmx?WSDL';

        parent::__construct($wsdl, $options);
    }

    /**
     * Establishes a single-use transaction for Transport Web and Transport Mobile
     *
     * @param CreateTransaction $parameters
     * @return CreateTransactionResponse
     */
    public function createTransaction(CreateTransaction $parameters)
    {
        return $this->__soapCall('CreateTransaction', array($parameters));
    }

    public function initiateTransaction($transportKey, $format = 'JSON')
    {
        $params = [
            'TransportKey' => $transportKey,
        ];

        $response = $this->makeCEDRequest(2, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }


    public function startOrder($order, $format = 'JSON')
    {
        $params = [
            'Action' => 'StartOrder',
            'Order'  => $order
        ];

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function addOrderItem($order, $itemData = [], $format = 'JSON')
    {
        $defaults = [
            'Type'     => 'Sku',
            'UPC'      => '',
            'Category' => 'None'
        ];

        $params = [
            'Action' => 'AddItem',
            'Order'  => $order
        ];

        $params = array_merge($params, $defaults, $itemData);

        $this->checkRequestParams($params, [
            'Order',
            'Type'     => ['Sku', 'Misc'],
            'TypeValue',
            'Quantity',
            'Description',
            'Amount',
            'TaxAmount',
            'OrderTotal',
            'OrderTax',
            'Category' => ['None', 'Ebt', 'Fuel']

        ], 'addOrderItem');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function discountItem($order, $itemData = [], $format = 'JSON')
    {
        $defaults = [
            'Type'                  => 'Sku',
            'UPC'                   => '',
            'Category'              => 'None',
            'DisplayOverride'       => '',
            'DisplayCustomSubTotal' => ''
        ];

        $params = [
            'Action' => 'DiscountItem',
            'Order'  => $order
        ];

        $params = array_merge($params, $defaults, $itemData);

        $this->checkRequestParams($params, [
            'TargetItemID',
            'Type'     => ['Sku', 'Misc'],
            'TypeValue',
            'Quantity',
            'Description',
            'Amount',
            'TaxAmount',
            'OrderTotal',
            'OrderTax',
            'Category' => ['None', 'Ebt', 'Fuel']

        ], 'discountItem');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function deleteItem($order, $itemData = [], $format = 'JSON')
    {
        $defaults = [
            'DisplayCustomSubTotal' => ''
        ];

        $params = [
            'Action' => 'DeleteItem',
            'Order'  => $order
        ];

        $params = array_merge($params, $defaults, $itemData);

        $this->checkRequestParams($params, [
            'TargetItemID',
            'OrderTotal',
            'OrderTax'
        ], 'deleteItem');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function deleteAllItems($order, $itemData = [], $format = 'JSON')
    {
        $defaults = [
            'DisplayCustomSubTotal' => ''
        ];

        $params = [
            'Action' => 'DeleteAllItems',
            'Order'  => $order
        ];

        $params = array_merge($params, $defaults, $itemData);

        $this->checkRequestParams($params, [
            'RetainPaymentData' => ['true', 'false'],
            'OrderTotal',
            'OrderTax'
        ], 'deleteAllItems');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function updateItem($order, $itemData = [], $format = 'JSON')
    {
        $defaults = [
            'Type'     => 'Sku',
            'UPC'      => '',
            'Category' => 'None'
        ];

        $params = [
            'Action' => 'AddItem',
            'Order'  => $order
        ];

        $params = array_merge($params, $defaults, $itemData);

        $this->checkRequestParams($params, [
            'Order',
            'TargetItemID',
            'Type'     => ['Sku', 'Misc'],
            'TypeValue',
            'Quantity',
            'Description',
            'Amount',
            'TaxAmount',
            'OrderTotal',
            'OrderTax',
            'Category' => ['None', 'Ebt', 'Fuel']

        ], 'updateItem');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function updateTotal($order, $orderTotal, $orderTax, $customSubtotal = '', $format = 'JSON')
    {
        $params = [
            'Action'                => 'UpdateTotal',
            'Order'                 => $order,
            'OrderTotal'            => $orderTotal,
            'OrderTax'              => $orderTax,
            'DisplayCustomSubTotal' => $customSubtotal
        ];

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function orderSummary($order, $format = 'JSON')
    {
        $params = [
            'Action' => 'OrderSummary',
            'Order'  => $order
        ];

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function endOrder($order, $externalPaymentType = '', $format = 'JSON')
    {
        $params = [
            'Action'              => 'EndOrder',
            'Order'               => $order,
            'ExternalPaymentType' => $externalPaymentType
        ];

        $this->checkRequestParams($params, [
            'Order',
            'ExternalPaymentType'

        ], 'endOrder');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function getAgreement($order, $agreementData = [], $format = 'JSON')
    {
        $defaults = [
            'AcceptLabel'  => 'Accept',
            'DeclineLabel' => 'Decline'
        ];

        $params = [
            'Action' => 'GetAgreement'
        ];

        $params = array_merge($params, $defaults, $agreementData);

        $this->checkRequestParams($params, [
            'RequestID'
        ], 'getAgreement');

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    function getSignature($requestID, $title = '', $format = 'JSON')
    {
        $params = [
            'Action'    => 'GetSignature',
            'RequestID' => $requestID,
            'Title'     => $title
        ];

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function cancelTransaction($format = 'JSON')
    {
        $params = [
            'Action' => 'Cancel'
        ];

        $response = $this->makeCEDRequest(1, $params, $format);

        return \GuzzleHttp\json_decode($response);
    }

    public function isSuccess($response)
    {
        if (property_exists($response, 'Status') && $response->Status == 'Success')
            return true;

        return false;
    }

    public function isFailure($response)
    {
        return !$this->isSuccess($response);
    }

    private function checkRequestParams($params, $required, $action)
    {
        foreach ($required as $param => $details) {
            if (is_numeric($param)) $param = $details;

            if (!array_key_exists($param, $params) || !isset($params[$param])) {
                throw new \Exception('Required parameter ' . $param . ' missing in call to ' . $action . print_r($params, 1));
            }//else check values
        }
    }

    private function makeCEDRequest($ver = 1, $params = [], $format = 'JSON')
    {
        $uri = $this->cedIp . ':' . $this->cedPort . '/v' . $ver . '/pos';

        $params['Format'] = $format;

        $client = new Client();
        $response = $client->request('GET', $uri, [
            'query' => $params
        ]);

        $json = $response->getBody()->getContents();

        return $json;
    }

    public function postAuthorization($merchantName, $merchantSiteId, $merchantKey, $invoiceNumber, $token, $amount, $registerNumber, $merchantTransactionId)
    {
        $client = new Client();
        $response = $client->request('POST',
            'https://ps1.merchantware.net/Merchantware/ws/RetailTransaction/v4/Credit.asmx/PostAuthorization',
            [
                'form_params' => [
                    'merchantName'          => $merchantName,
                    'merchantSiteId'        => $merchantSiteId,
                    'merchantKey'           => $merchantKey,
                    'invoiceNumber'         => $invoiceNumber,
                    'token'                 => $token,
                    'amount'                => $amount,
                    'registerNumber'        => $registerNumber,
                    'merchantTransactionId' => $merchantTransactionId
                ]
            ]);
        dd($response->getBody()->getContents());
    }

//Auth code is from processor
//Token - is the unique ID of the txn. Token always returned - independent of entry method. Can buy online and return in store
//If you do a void and it fails - we may need to do a rfund
//salekeyed - manually entered
//Vault - store cc info on their system. store vault token.
// integrations@cayan.com


}
