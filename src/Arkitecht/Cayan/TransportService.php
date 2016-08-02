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
        'CreateTransactionResponse' => 'Arkitecht\\Cayan\\CreateTransactionResponse',
        'TransportResponse'         => 'Arkitecht\\Cayan\\TransportResponse',
        'ArrayOfMessage'            => 'Arkitecht\\Cayan\\ArrayOfMessage',
        'Message'                   => 'Arkitecht\\Cayan\\Message',
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
        print_r($response);

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

    public function isSuccess($response)
    {
        if ( property_exists($response,'Status') && $response->Status == 'Success' )
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
        $uri = $this->cedIp . ':' . $this->cedPort .'/v' . $ver . '/pos';
        print "URI: $uri";

        $params['Format'] = $format;

        print_r($params);

        $client = new Client();
        $response = $client->request('GET', $uri, [
            'query' => $params
        ]);

        $json = $response->getBody()->getContents();

        return $json;
    }

    //Auth code is from processor
    //Token - is the unique ID of the txn. Token always returned - independent of entry method. Can buy online and return in store
    //If you do a void and it fails - we may need to do a rfund
    //salekeyed - manually entered
    //Vault - store cc info on their system. store vault token.
    // integrations@cayan.com


}
