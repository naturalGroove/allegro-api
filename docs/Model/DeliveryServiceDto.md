# # DeliveryServiceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\AllegroApi\Model\DeliveryServiceIdDto**](DeliveryServiceIdDto.md) |  | [optional]
**name** | **string** | Name of delivery service. &lt;br/&gt; For Allegro Standard method, name of service will be exactly same and occurs only once: eg. &#39;Allegro Courier DPD&#39;. &lt;br/&gt; For merchant&#39;s controlled method, name is concatenation of method name and credential name: eg. &#39;Courier DPD (My agreement)&#39;. | [optional]
**carrier_id** | **string** |  | [optional]
**additional_services** | [**\AllegroApi\Model\AdditionalServiceDto[]**](AdditionalServiceDto.md) |  | [optional]
**additional_properties** | [**\AllegroApi\Model\AdditionalPropertyDto[]**](AdditionalPropertyDto.md) |  | [optional]
**owner** | **string** | Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement | [optional]
**marketplaces** | **string[]** | List of marketplaces supported by service | [optional]
**package_types** | **string[]** | List of supported package types | [optional]
**cash_on_delivery** | [**\AllegroApi\Model\CashOnDeliveryLimitDto**](CashOnDeliveryLimitDto.md) |  | [optional]
**insurance** | [**\AllegroApi\Model\LimitWithCurrencyDto**](LimitWithCurrencyDto.md) |  | [optional]
**features** | **array<string,string>** | A map of service-specific features. List of key will be builded per services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
