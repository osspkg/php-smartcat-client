# # SegmentSearchRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**searchString** | **string** | Requested text | [optional]
**projectIds** | **string[]** | Project IDs | [optional]
**targetLanguageIds** | **int[]** | Language IDs of target segments by which the results are filtered | [optional]
**isCaseSensitive** | **bool** | Specifies whether the search is case-sensitive | [optional]
**scope** | [**\SmartCat\Model\ScopeOfSubstringSearchInProject[]**](ScopeOfSubstringSearchInProject.md) | Specifies to which segment parts the text search is applicable | [optional]
**skip** | **int** | Specifies how many first results to skip | [optional]
**limit** | **int** | Maximum returned results | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
