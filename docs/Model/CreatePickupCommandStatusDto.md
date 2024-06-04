# # CreatePickupCommandStatusDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**command_id** | **string** | Command UUID | [optional]
**status** | **string** |  | [optional]
**errors** | [**\AllegroApi\Model\Error400[]**](Error400.md) | List of errors. Available only, if operation finished with ERROR. | [optional]
**pickup_id** | **string** | Generated internal pickup ID. Available only, if operation finished with SUCCESS. | [optional]
**carrier_pickup_id** | **string** | Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
