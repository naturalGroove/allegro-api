# # SaleProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. |
**name** | **string** | Product name. |
**category** | [**\AllegroApi\Model\ProductCategoryWithPath**](ProductCategoryWithPath.md) |  |
**images** | [**\AllegroApi\Model\ImageUrl[]**](ImageUrl.md) | List of product images. | [optional]
**parameters** | [**\AllegroApi\Model\ProductParameterDto[]**](ProductParameterDto.md) | List of product parameters. | [optional]
**offer_requirements** | [**\AllegroApi\Model\OfferRequirements**](OfferRequirements.md) |  | [optional]
**compatibility_list** | [**\AllegroApi\Model\SaleProductCompatibilityList**](SaleProductCompatibilityList.md) |  | [optional]
**tecdoc_specification** | [**\AllegroApi\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**description** | [**\AllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]
**ai_co_created_content** | [**\AllegroApi\Model\AiCoCreatedContent**](AiCoCreatedContent.md) |  | [optional]
**publication** | [**\AllegroApi\Model\SaleProductDtoPublication**](SaleProductDtoPublication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
