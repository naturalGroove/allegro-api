# AllegroApi\ShipmentManagementApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](ShipmentManagementApi.md#cancelShipment) | **POST** /shipment-management/shipments/cancel-commands | Cancel shipment
[**createNewShipment()**](ShipmentManagementApi.md#createNewShipment) | **POST** /shipment-management/shipments/create-commands | Create new shipment
[**createPickup()**](ShipmentManagementApi.md#createPickup) | **POST** /shipment-management/pickups/create-commands | Request shipments pickup
[**createPickupStatus()**](ShipmentManagementApi.md#createPickupStatus) | **GET** /shipment-management/pickups/create-commands/{commandId} | Create pickup command status
[**getDeliveryServices()**](ShipmentManagementApi.md#getDeliveryServices) | **GET** /shipment-management/delivery-services | Get available delivery services
[**getPickupProposals()**](ShipmentManagementApi.md#getPickupProposals) | **POST** /shipment-management/pickup-proposals | Get shipments pickup proposals
[**getShipmentCancellationStatus()**](ShipmentManagementApi.md#getShipmentCancellationStatus) | **GET** /shipment-management/shipments/cancel-commands/{commandId} | Get shipment cancellation status
[**getShipmentCreationStatus()**](ShipmentManagementApi.md#getShipmentCreationStatus) | **GET** /shipment-management/shipments/create-commands/{commandId} | Get shipment creation command status
[**getShipmentDetails()**](ShipmentManagementApi.md#getShipmentDetails) | **GET** /shipment-management/shipments/{shipmentId} | Get shipment details
[**getShipmentLabels()**](ShipmentManagementApi.md#getShipmentLabels) | **POST** /shipment-management/label | Get shipments labels
[**getShipmentProtocol()**](ShipmentManagementApi.md#getShipmentProtocol) | **POST** /shipment-management/protocol | Get shipments protocol


## `cancelShipment()`

```php
cancelShipment($shipment_cancel_command_dto): \AllegroApi\Model\ShipmentCancelCommandDto
```

Cancel shipment

Use this resource to cancel parcel. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-anulowac-paczke\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-cancel-a-shipment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$shipment_cancel_command_dto = new \AllegroApi\Model\ShipmentCancelCommandDto(); // \AllegroApi\Model\ShipmentCancelCommandDto

try {
    $result = $apiInstance->cancelShipment($shipment_cancel_command_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_cancel_command_dto** | [**\AllegroApi\Model\ShipmentCancelCommandDto**](../Model/ShipmentCancelCommandDto.md)|  |

### Return type

[**\AllegroApi\Model\ShipmentCancelCommandDto**](../Model/ShipmentCancelCommandDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewShipment()`

```php
createNewShipment($shipment_create_command_dto): \AllegroApi\Model\ShipmentCreateCommandDto
```

Create new shipment

Use this resource to create shipment for delivery. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-utworzyc-nowa-paczke\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-create-a-new-shipment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$shipment_create_command_dto = new \AllegroApi\Model\ShipmentCreateCommandDto(); // \AllegroApi\Model\ShipmentCreateCommandDto

try {
    $result = $apiInstance->createNewShipment($shipment_create_command_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->createNewShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_create_command_dto** | [**\AllegroApi\Model\ShipmentCreateCommandDto**](../Model/ShipmentCreateCommandDto.md)|  |

### Return type

[**\AllegroApi\Model\ShipmentCreateCommandDto**](../Model/ShipmentCreateCommandDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPickup()`

```php
createPickup($pickup_create_command_dto): \AllegroApi\Model\PickupCreateCommandDto
```

Request shipments pickup

Use this resource to request a pickup of shipments. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-zamowic-odbior-paczek-przez-kuriera\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-request-shipment-pickup-by-a-courier\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$pickup_create_command_dto = new \AllegroApi\Model\PickupCreateCommandDto(); // \AllegroApi\Model\PickupCreateCommandDto

try {
    $result = $apiInstance->createPickup($pickup_create_command_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->createPickup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pickup_create_command_dto** | [**\AllegroApi\Model\PickupCreateCommandDto**](../Model/PickupCreateCommandDto.md)|  |

### Return type

[**\AllegroApi\Model\PickupCreateCommandDto**](../Model/PickupCreateCommandDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPickupStatus()`

```php
createPickupStatus($command_id): \AllegroApi\Model\CreatePickupCommandStatusDto
```

Create pickup command status

Use this resource to get pickup request status. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-zamowienia-odbioru-paczek\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-pickup-request-status\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$command_id = 14e142cf-e8e0-48cc-bcf6-399b5fd90b32; // string | Command UUID.

try {
    $result = $apiInstance->createPickupStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->createPickupStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

### Return type

[**\AllegroApi\Model\CreatePickupCommandStatusDto**](../Model/CreatePickupCommandStatusDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryServices()`

```php
getDeliveryServices(): \AllegroApi\Model\DeliveryServicesDto
```

Get available delivery services

Use this resource to get delivery services available for user. It returns services provided by Allegro and contracts with carriers owned by user and configured by GUI. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-liste-uslug-dostawy\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-a-list-of-delivery-services\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getDeliveryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AllegroApi\Model\DeliveryServicesDto**](../Model/DeliveryServicesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPickupProposals()`

```php
getPickupProposals($pickup_proposals_request_dto): \AllegroApi\Model\PickupProposalsResponseDto[]
```

Get shipments pickup proposals

Use this resource to get parcels pickup date proposals. Pickup takes place, when courier arrives to take parcels for shipment. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-proponowana-date-odbioru-paczek-przez-kuriera\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-pickup-date-proposals\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$pickup_proposals_request_dto = new \AllegroApi\Model\PickupProposalsRequestDto(); // \AllegroApi\Model\PickupProposalsRequestDto

try {
    $result = $apiInstance->getPickupProposals($pickup_proposals_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getPickupProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pickup_proposals_request_dto** | [**\AllegroApi\Model\PickupProposalsRequestDto**](../Model/PickupProposalsRequestDto.md)|  |

### Return type

[**\AllegroApi\Model\PickupProposalsResponseDto[]**](../Model/PickupProposalsResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipmentCancellationStatus()`

```php
getShipmentCancellationStatus($command_id): \AllegroApi\Model\CancelShipmentCommandStatusDto
```

Get shipment cancellation status

Use this resource to get parcel cancellation status. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-anulowania-paczki\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-cancellation-status\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$command_id = 14e142cf-e8e0-48cc-bcf6-399b5fd90b32; // string | Command UUID.

try {
    $result = $apiInstance->getShipmentCancellationStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getShipmentCancellationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

### Return type

[**\AllegroApi\Model\CancelShipmentCommandStatusDto**](../Model/CancelShipmentCommandStatusDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipmentCreationStatus()`

```php
getShipmentCreationStatus($command_id): \AllegroApi\Model\CreateShipmentCommandStatusDto
```

Get shipment creation command status

Use this resource to get shipment creation status. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-utworzenia-paczki\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-the-creation-status-of-a-shipment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$command_id = 14e142cf-e8e0-48cc-bcf6-399b5fd90b32; // string | Command UUID.

try {
    $result = $apiInstance->getShipmentCreationStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getShipmentCreationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

### Return type

[**\AllegroApi\Model\CreateShipmentCommandStatusDto**](../Model/CreateShipmentCommandStatusDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipmentDetails()`

```php
getShipmentDetails($shipment_id): \AllegroApi\Model\ShipmentDto
```

Get shipment details

Use this resource to get parcel details. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-szczegolowe-informacje-o-paczce\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-shipment-details\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment id.

try {
    $result = $apiInstance->getShipmentDetails($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getShipmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment id. |

### Return type

[**\AllegroApi\Model\ShipmentDto**](../Model/ShipmentDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipmentLabels()`

```php
getShipmentLabels($label_request_dto): \SplFileObject
```

Get shipments labels

Use this resource to get label for created shipment. <br/>Returned content type depends on created shipment. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-utworzyc-etykiete-na-paczke\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-create-a-label-for-shipment\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$label_request_dto = new \AllegroApi\Model\LabelRequestDto(); // \AllegroApi\Model\LabelRequestDto

try {
    $result = $apiInstance->getShipmentLabels($label_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getShipmentLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_request_dto** | [**\AllegroApi\Model\LabelRequestDto**](../Model/LabelRequestDto.md)|  |

### Return type

**\SplFileObject**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/octet-stream`, `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipmentProtocol()`

```php
getShipmentProtocol($shipment_ids_dto): \SplFileObject
```

Get shipments protocol

Protocol availability depends on Carrier. Read more: <a href=\"../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-protokol-nadania-przesylek\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-shipment-protocol\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = AllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AllegroApi\Api\ShipmentManagementApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$shipment_ids_dto = new \AllegroApi\Model\ShipmentIdsDto(); // \AllegroApi\Model\ShipmentIdsDto

try {
    $result = $apiInstance->getShipmentProtocol($shipment_ids_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentManagementApi->getShipmentProtocol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_ids_dto** | [**\AllegroApi\Model\ShipmentIdsDto**](../Model/ShipmentIdsDto.md)|  |

### Return type

**\SplFileObject**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/octet-stream`, `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
