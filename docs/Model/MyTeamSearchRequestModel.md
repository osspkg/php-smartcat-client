# # MyTeamSearchRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Number of search request results to be skipped (mandatory parameter) | [optional]
**limit** | **int** | Maximum number of search request results (mandatory parameter, cannot exceed 500) | [optional]
**serviceType** | [**\SmartCat\Model\FreelancerServiceType**](FreelancerServiceType.md) |  | [optional]
**sourceLanguage** | **string** | Source language | [optional]
**targetLanguage** | **string** | Target language | [optional]
**onlyNativeSpeakers** | **bool** | Linguist&#39;s native language | [optional]
**allDialects** | **bool** | Search linguists in all dialects for the language pair | [optional]
**minRate** | **float** | Minimum translation unit rate | [optional]
**maxRate** | **float** | Maximum translation unit rate | [optional]
**rateRangeCurrency** | **string** | Rate range currency | [optional]
**specializations** | [**\SmartCat\Model\Specialization[]**](Specialization.md) | Specializations | [optional]
**specializationKnowledgeLevel** | [**\SmartCat\Model\SpecializationKnowledgeLevel[]**](SpecializationKnowledgeLevel.md) | Required level of expertise in the specified (or any other if undefined) specialization | [optional]
**searchString** | **string** | Full-text search string | [optional]
**daytime** | **bool** | It is daytime now in the linguist&#39;s time zone | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
