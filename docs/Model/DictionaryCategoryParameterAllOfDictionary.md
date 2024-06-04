# # DictionaryCategoryParameterAllOfDictionary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the dictionary value. Use it to set the value in an offer or in a product. | [optional]
**value** | **string** | The label of the dictionary value in Polish. | [optional]
**depends_on_value_ids** | **string[]** | The IDs of dictionary values from another parameter that this parameter value can be combined with. The other parameter has the id from &#x60;options.dependsOnParameterId&#x60;. Empty if this parameter value can be combined with any value from other parameters. Otherwise, this value might be set in the offer only when one of the given values of &#x60;dependsOnValueIds&#x60; is set as well. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
