# AllegroApi\InformationAboutMarketplacesApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketplacesGET()**](InformationAboutMarketplacesApi.md#marketplacesGET) | **GET** /marketplaces | Get details for all marketplaces in allegro


## `marketplacesGET()`

```php
marketplacesGET(): \AllegroApi\Model\AllegroMarketplaces
```

Get details for all marketplaces in allegro

Use this resource to get ID of services, on which seller can display offers. Read more: <a href=\"../../tutorials/wystawianie-i-zarzadzanie-oferta-w-serwisach-zagranicznych-wwzjP4M8gTZ#serwis-bazowy-uzytkownika-oraz-lista-dostepnych-serwisow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn#user-s-base-marketplace-and-list-of-available-marketplaces\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\InformationAboutMarketplacesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketplacesGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutMarketplacesApi->marketplacesGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\AllegroMarketplaces**](../Model/AllegroMarketplaces.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
