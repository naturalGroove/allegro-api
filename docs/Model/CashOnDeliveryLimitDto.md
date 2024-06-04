# # CashOnDeliveryLimitDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **float** | Maximum value | [optional]
**currency** | **string** | Supported currency: &#39;PLN&#39; | &#39;CZK | [optional] [default to 'PLN']
**payment_type** | **string** | Type of payment: Money transfer to merchant bank account or internal wallet payout | [optional]
**force_require_iban** | **bool** | Defined that COD required IBAN for process shipment. If true, then request of shipment creation without IBAN will be rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
