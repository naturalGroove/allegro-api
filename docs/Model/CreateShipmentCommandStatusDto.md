# # CreateShipmentCommandStatusDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**command_id** | **string** | Command UUID | [optional]
**status** | **string** |  | [optional]
**errors** | [**\AllegroApi\Model\Error400[]**](Error400.md) | List of errors. Available only, if operation finished with ERROR. | [optional]
**shipment_id** | **string** | Generated shipment ID. Available only, if operation finished with SUCCESS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
