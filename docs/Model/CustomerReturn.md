# # CustomerReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**reference_number** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**buyer** | [**\AllegroApi\Model\CustomerReturnBuyer**](CustomerReturnBuyer.md) |  | [optional]
**items** | [**\AllegroApi\Model\CustomerReturnItem[]**](CustomerReturnItem.md) | List of returned items. | [optional]
**refund** | [**\AllegroApi\Model\CustomerReturnRefund**](CustomerReturnRefund.md) |  | [optional]
**parcels** | [**\AllegroApi\Model\CustomerReturnReturnParcel[]**](CustomerReturnReturnParcel.md) | List of returned parcels. | [optional]
**rejection** | [**\AllegroApi\Model\CustomerReturnRejection**](CustomerReturnRejection.md) |  | [optional]
**marketplace_id** | **string** | The marketplace ID where operation was made. | [optional]
**status** | **string** | Current return timeline statuses. The allowed values are:   * CREATED - The return has been declared,   * DISPATCHED - The returned items have been dispatched,   * IN_TRANSIT - The returned items are in transit,   * DELIVERED - The returned items have been delivered,   * FINISHED - The payment has been refunded, return process is finished,   * REJECTED - The return has been rejected,   * COMMISSION_REFUND_CLAIMED - The sales commission refund (transaction rebate) application has been claimed,   * COMMISSION_REFUNDED - The sales commission was refunded,   * WAREHOUSE_DELIVERED - The returned items have been delivered to Allegro Warehouse,   * WAREHOUSE_VERIFICATION - The returned items are under verification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
