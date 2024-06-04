# AllegroApi\ResponsiblePersonsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**responsiblePersonsGET()**](ResponsiblePersonsApi.md#responsiblePersonsGET) | **GET** /sale/responsible-persons | Get the list of responsible persons
[**responsiblePersonsPOST()**](ResponsiblePersonsApi.md#responsiblePersonsPOST) | **POST** /sale/responsible-persons | Create responsible person
[**responsiblePersonsPUT()**](ResponsiblePersonsApi.md#responsiblePersonsPUT) | **PUT** /sale/responsible-persons/{id} | Update responsible person


## `responsiblePersonsGET()`

```php
responsiblePersonsGET(): \AllegroApi\Model\ResponsiblePersonsGET200Response
```

Get the list of responsible persons

Use this resource to get a list of responsible persons for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ResponsiblePersonsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->responsiblePersonsGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsiblePersonsApi->responsiblePersonsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\ResponsiblePersonsGET200Response**](../Model/ResponsiblePersonsGET200Response.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsiblePersonsPOST()`

```php
responsiblePersonsPOST($create_responsible_person_request): \AllegroApi\Model\ResponsiblePersonResponse
```

Create responsible person

Use this resource to create a new responsible person for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ResponsiblePersonsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_responsible_person_request = new \AllegroApi\Model\CreateResponsiblePersonRequest(); // \AllegroApi\Model\CreateResponsiblePersonRequest

try {
    $result = $apiInstance->responsiblePersonsPOST($create_responsible_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsiblePersonsApi->responsiblePersonsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_responsible_person_request** | [**\AllegroApi\Model\CreateResponsiblePersonRequest**](../Model/CreateResponsiblePersonRequest.md)|  |

### Return type

[**\AllegroApi\Model\ResponsiblePersonResponse**](../Model/ResponsiblePersonResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsiblePersonsPUT()`

```php
responsiblePersonsPUT($id, $update_responsible_person_request): \AllegroApi\Model\ResponsiblePersonResponse
```

Update responsible person

Use this resource to update the responsible person for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ResponsiblePersonsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Responsible person ID.
$update_responsible_person_request = new \AllegroApi\Model\UpdateResponsiblePersonRequest(); // \AllegroApi\Model\UpdateResponsiblePersonRequest

try {
    $result = $apiInstance->responsiblePersonsPUT($id, $update_responsible_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsiblePersonsApi->responsiblePersonsPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Responsible person ID. |
 **update_responsible_person_request** | [**\AllegroApi\Model\UpdateResponsiblePersonRequest**](../Model/UpdateResponsiblePersonRequest.md)|  |

### Return type

[**\AllegroApi\Model\ResponsiblePersonResponse**](../Model/ResponsiblePersonResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
