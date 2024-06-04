# # LineItemVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The voucher code. | [optional]
**type** | **string** | Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * &#x60;NOTEBOOKS_FOR_TEACHERS&#x60; - a voucher for teacher&#39;s notebook action. |
**status** | **string** | Describes the status of the current voucher. The status of voucher can be as follows: * &#x60;ACTIVE&#x60; - an active voucher, ready to use, * &#x60;CANCELLED&#x60; - a cancelled voucher, disabled to use. | [optional]
**external_transaction_id** | **string** | The external transaction id. The value may differ depending on the status type. | [optional]
**value** | [**\AllegroApi\Model\LineItemVoucherValue**](LineItemVoucherValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
