# # CategoryParameterOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variants_allowed** | **bool** | Parameters with this option enabled can be used for offer variants creation. | [optional]
**variants_equal** | **bool** | All offer variants must have the same values in parameters with this option enabled. | [optional]
**ambiguous_value_id** | **string** | Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined. | [optional]
**depends_on_parameter_id** | **string** | Indicates whether this parameter&#39;s allowed values depend on another parameter&#39;s values. This field is set only for dictionary parameters which have at least one dictionary value with dependent values (see also &#x60;dictionary[].dependsOnValueIds&#x60;). Otherwise this field is null. | [optional]
**describes_product** | **bool** | Indicates if parameter is used to define products. | [optional]
**custom_values_enabled** | **bool** | Indicates if a custom value can be added to a parameter with an ambiguous value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
