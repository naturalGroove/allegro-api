# # CheckoutFormPaymentReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Payment id |
**type** | [**\AllegroApi\Model\CheckoutFormPaymentType**](CheckoutFormPaymentType.md) |  |
**provider** | [**\AllegroApi\Model\CheckoutFormPaymentProvider**](CheckoutFormPaymentProvider.md) |  | [optional]
**finished_at** | **\DateTime** | Date when the event occurred | [optional]
**paid_amount** | [**\AllegroApi\Model\Price**](Price.md) |  | [optional]
**reconciliation** | [**\AllegroApi\Model\Price**](Price.md) |  | [optional]
**features** | **string[]** | Payment additional features:  - &#x60;ALLEGRO_PAY&#x60; - The payment was made using Allegro Pay. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
