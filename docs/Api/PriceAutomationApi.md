# AllegroApi\PriceAutomationApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPriceAutomationRulesForOfferUsingGET()**](PriceAutomationApi.md#getPriceAutomationRulesForOfferUsingGET) | **GET** /sale/price-automation/offers/{offerId}/rules | Get price automation rules assigned to the offer
[**getPriceAutomationRulesUsingGET()**](PriceAutomationApi.md#getPriceAutomationRulesUsingGET) | **GET** /sale/price-automation/rules | Get price automation rules


## `getPriceAutomationRulesForOfferUsingGET()`

```php
getPriceAutomationRulesForOfferUsingGET($offer_id): \AllegroApi\Model\OfferRules
```

Get price automation rules assigned to the offer

Use this resource to get price automation rules for offer. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PriceAutomationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer identifier.

try {
    $result = $apiInstance->getPriceAutomationRulesForOfferUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceAutomationApi->getPriceAutomationRulesForOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer identifier. |

### Return type

[**\AllegroApi\Model\OfferRules**](../Model/OfferRules.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceAutomationRulesUsingGET()`

```php
getPriceAutomationRulesUsingGET(): \AllegroApi\Model\Rules
```

Get price automation rules

Use this resource to get price automation rules. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\PriceAutomationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPriceAutomationRulesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceAutomationApi->getPriceAutomationRulesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\Rules**](../Model/Rules.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
