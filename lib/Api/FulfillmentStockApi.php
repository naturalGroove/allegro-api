<?php
/**
 * FulfillmentStockApi
 * PHP version 7.2
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Api;

use AllegroApi\Configuration;
use AllegroApi\DebugPlugin;
use AllegroApi\Exception\ApiException;
use AllegroApi\HeaderSelector;
use AllegroApi\ObjectSerializer;
use GuzzleHttp\Psr7\MultipartStream;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\Common\PluginClientFactory;
use Http\Client\Exception\HttpException;
use Http\Client\HttpAsyncClient;
use Http\Discovery\HttpAsyncClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\RequestFactory;
use Http\Promise\Promise;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

use function sprintf;

/**
 * FulfillmentStockApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentStockApi
{
    /**
     * @var PluginClient
     */
    protected $httpClient;

    /**
     * @var PluginClient
     */
    protected $httpAsyncClient;

    /**
     * @var UriFactoryInterface
     */
    protected $uriFactory;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    public function __construct(
        ClientInterface $httpClient = null,
        Configuration $config = null,
        HttpAsyncClient $httpAsyncClient = null,
        UriFactoryInterface $uriFactory = null,
        RequestFactoryInterface $requestFactory = null,
        StreamFactoryInterface $streamFactory = null,
        HeaderSelector $selector = null,
        ?array $plugins = null,
        $hostIndex = 0
    ) {
        $this->config = $config ?? (new Configuration())->setHost('https://api.allegro.pl');
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = $streamFactory ?? Psr17FactoryDiscovery::findStreamFactory();

        $plugins = $plugins ?? [
            new RedirectPlugin(['strict' => true]),
            new ErrorPlugin(),
        ];

        if ($this->config->getDebug()) {
            $plugins[] = new DebugPlugin(fopen($this->config->getDebugFile(), 'ab'));
        }

        $this->httpClient = (new PluginClientFactory())->createClient(
            $httpClient ?? Psr18ClientDiscovery::find(),
            $plugins
        );

        $this->httpAsyncClient = (new PluginClientFactory())->createClient(
            $httpAsyncClient ?? HttpAsyncClientDiscovery::find(),
            $plugins
        );

        $this->uriFactory = $uriFactory ?? Psr17FactoryDiscovery::findUriFactory();

        $this->headerSelector = $selector ?? new HeaderSelector();

        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getFulfillmentStock
     *
     * Get available stock
     *
     * @param  string $accept_language Expected language of product name translation. (optional, default to 'en-US')
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability. (optional)
     * @param  string $product_status Filtering search results by status. (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated TO_BE_PAID_SOON - products for which storage will soon be payable. (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal. (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal. (optional)
     *
     *@throws \AllegroApi\Exception\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AllegroApi\Model\StockProductList|\AllegroApi\Model\ErrorsHolder
     */
    public function getFulfillmentStock($accept_language = 'en-US', $offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        [$response] = $this->getFulfillmentStockWithHttpInfo($accept_language, $offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);
        return $response;
    }

    /**
     * Operation getFulfillmentStockWithHttpInfo
     *
     * Get available stock
     *
     * @param  string $accept_language Expected language of product name translation. (optional, default to 'en-US')
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability. (optional)
     * @param  string $product_status Filtering search results by status. (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated TO_BE_PAID_SOON - products for which storage will soon be payable. (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal. (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal. (optional)
     *
     *@throws \AllegroApi\Exception\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AllegroApi\Model\StockProductList|\AllegroApi\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFulfillmentStockWithHttpInfo($accept_language = 'en-US', $offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        $request = $this->getFulfillmentStockRequest($accept_language, $offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\StockProductList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\StockProductList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\StockProductList';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\StockProductList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFulfillmentStockAsync
     *
     * Get available stock
     *
     * @param  string $accept_language Expected language of product name translation. (optional, default to 'en-US')
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability. (optional)
     * @param  string $product_status Filtering search results by status. (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated TO_BE_PAID_SOON - products for which storage will soon be payable. (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal. (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal. (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function getFulfillmentStockAsync($accept_language = 'en-US', $offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        return $this->getFulfillmentStockAsyncWithHttpInfo($accept_language, $offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFulfillmentStockAsyncWithHttpInfo
     *
     * Get available stock
     *
     * @param  string $accept_language Expected language of product name translation. (optional, default to 'en-US')
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability. (optional)
     * @param  string $product_status Filtering search results by status. (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated TO_BE_PAID_SOON - products for which storage will soon be payable. (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal. (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal. (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function getFulfillmentStockAsyncWithHttpInfo($accept_language = 'en-US', $offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        $returnType = '\AllegroApi\Model\StockProductList';
        $request = $this->getFulfillmentStockRequest($accept_language, $offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);

        return $this->httpAsyncClient->sendAsyncRequest($request)
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFulfillmentStock'
     *
     * @param  string $accept_language Expected language of product name translation. (optional, default to 'en-US')
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability. (optional)
     * @param  string $product_status Filtering search results by status. (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated TO_BE_PAID_SOON - products for which storage will soon be payable. (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal. (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal. (optional)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function getFulfillmentStockRequest($accept_language = 'en-US', $offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 0.');
        }

        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FulfillmentStockApi.getFulfillmentStock, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 1.');
        }

        if ($phrase !== null && strlen($phrase) < 3) {
            throw new \InvalidArgumentException('invalid length for "$phrase" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 3.');
        }

        $resourcePath = '/fulfillment/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['offset'] = $offset;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($phrase !== null) {
            if('form' === 'form' && is_array($phrase)) {
                foreach($phrase as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['phrase'] = $phrase;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($product_id !== null) {
            if('form' === 'form' && is_array($product_id)) {
                foreach($product_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['productId'] = $product_id;
            }
        }
        // query params
        if ($product_availability !== null) {
            if('form' === 'form' && is_array($product_availability)) {
                foreach($product_availability as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['productAvailability'] = $product_availability;
            }
        }
        // query params
        if ($product_status !== null) {
            if('form' === 'form' && is_array($product_status)) {
                foreach($product_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['productStatus'] = $product_status;
            }
        }
        // query params
        if ($storage_fee !== null) {
            if('form' === 'form' && is_array($storage_fee)) {
                foreach($storage_fee as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['storageFee'] = $storage_fee;
            }
        }
        // query params
        if ($asn_status !== null) {
            if('form' === 'form' && is_array($asn_status)) {
                foreach($asn_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['asnStatus'] = $asn_status;
            }
        }
        // query params
        if ($out_of_stock_in_from !== null) {
            if('form' === 'form' && is_array($out_of_stock_in_from)) {
                foreach($out_of_stock_in_from as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['outOfStockInFrom'] = $out_of_stock_in_from;
            }
        }
        // query params
        if ($out_of_stock_in_to !== null) {
            if('form' === 'form' && is_array($out_of_stock_in_to)) {
                foreach($out_of_stock_in_to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['outOfStockInTo'] = $out_of_stock_in_to;
            }
        }

        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json', 'text/csv', 'application/json'],
            '',
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('GET', $uri, $headers, $httpBody);
    }

    /**
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $headers
     * @param string|StreamInterface|null $body
     *
     * @return RequestInterface
     */
    protected function createRequest(string $method, $uri, array $headers = [], $body = null): RequestInterface
    {
        if ($this->requestFactory instanceof RequestFactory) {
            return $this->requestFactory->createRequest(
                $method,
                $uri,
                $headers,
                $body
            );
        }

        if (is_string($body) && '' !== $body && null === $this->streamFactory) {
            throw new \RuntimeException('Cannot create request: A stream factory is required to create a request with a non-empty string body.');
        }

        $request = $this->requestFactory->createRequest($method, $uri);

        foreach ($headers as $key => $value) {
            $request = $request->withHeader($key, $value);
        }

        if (null !== $body && '' !== $body) {
            $request = $request->withBody(
                is_string($body) ? $this->streamFactory->createStream($body) : $body
            );
        }

        return $request;
    }

    private function createUri(
        string $operationHost,
        string $resourcePath,
        array $queryParams
    ): UriInterface {
        $parsedUrl = parse_url($operationHost);

        $host = $parsedUrl['host'] ?? null;
        $scheme = $parsedUrl['scheme'] ?? null;
        $basePath = $parsedUrl['path'] ?? null;
        $port = $parsedUrl['port'] ?? null;
        $user = $parsedUrl['user'] ?? null;
        $password = $parsedUrl['pass'] ?? null;

        $uri = $this->uriFactory->createUri($basePath . $resourcePath)
            ->withHost($host)
            ->withScheme($scheme)
            ->withPort($port)
            ->withQuery(ObjectSerializer::buildQuery($queryParams));

        if ($user) {
            $uri = $uri->withUserInfo($user, $password);
        }

        return $uri;
    }
}
