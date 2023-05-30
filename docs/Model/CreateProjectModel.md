# # CreateProjectModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Project name | [optional]
**type** | [**\SmartCat\Model\ProjectType**](ProjectType.md) |  | [optional]
**number** | [**\SmartCat\Model\CreateProjectNumberModel**](CreateProjectNumberModel.md) |  | [optional]
**description** | **string** | Project description | [optional]
**deadline** | **\DateTime** | Project deadline | [optional]
**sourceLanguage** | **string** | Project source language | [optional]
**targetLanguages** | **string[]** | Project target languages | [optional]
**creatorUserId** | **string** | User identifier who creates the project | [optional]
**domainId** | **int** | Project group ID | [optional]
**clientId** | **string** | Client ID | [optional]
**vendorAccountIds** | **string[]** | Vendor accounts IDs | [optional]
**assignToVendor** | **bool** | Project assigned to a vendor | [optional]
**useMT** | **bool** | Specifies whether the project uses MT | [optional]
**pretranslate** | **bool** | Specifies whether to enable the automatic pretranslation. If yes, two pretranslation rules are applied:  1. For the TM with the Write permission  2. For the MT, if enabled | [optional]
**translationMemoryName** | **string** | The name of the account TM that will have both Write and Read permissions | [optional]
**useTranslationMemory** | **bool** | Specifies whether to enable read and write TM for the project | [optional]
**minTranslationAssuranceLevel** | [**\SmartCat\Model\IntegrationApiTMTranslationAssuranceLevel**](IntegrationApiTMTranslationAssuranceLevel.md) |  | [optional]
**autoPropagateRepetitions** | **bool** | Specifies whether to enable auto-propagation of repeated segments at the project level (default is True) | [optional]
**documentProperties** | [**\SmartCat\Model\CreateDocumentPropertyModel[]**](CreateDocumentPropertyModel.md) | Document properties as they are ordered in a request. This parameter is optional | [optional]
**workflowStages** | [**\SmartCat\Model\StageType[]**](StageType.md) | Project workflow stages for the created project. This parameter is optional | [optional]
**isForTesting** | **bool** | Specifies whether the project is used for testing | [optional]
**externalTag** | **string** | External system tag | [optional]
**specializations** | [**\SmartCat\Model\Specialization[]**](Specialization.md) | Specializations | [optional]
**customFieldValues** | **array<string,string>** | Custom field values | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
