# # ProjectModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Project ID | [optional]
**accountId** | **string** | Account ID | [optional]
**name** | **string** | Project name | [optional]
**description** | **string** | Project description | [optional]
**deadline** | **\DateTime** | Project deadline | [optional]
**creationDate** | **\DateTime** | Creation date | [optional]
**createdByUserId** | **string** | User ID of the project creator | [optional]
**createdByUserEmail** | **string** | Email of the project creator | [optional]
**modificationDate** | **\DateTime** | Last modification date | [optional]
**sourceLanguageId** | **int** | Project source language code | [optional]
**sourceLanguage** | **string** | Project source language | [optional]
**targetLanguages** | **string[]** | Project target languages | [optional]
**status** | [**\SmartCat\Model\ContractsProjectStatus**](ContractsProjectStatus.md) |  | [optional]
**statusModificationDate** | **\DateTime** | Last status change date (including the status of the OnApproval and CancelledBy attributes) | [optional]
**domainId** | **int** | Project group ID | [optional]
**clientId** | **string** | Client ID | [optional]
**vendors** | [**\SmartCat\Model\ProjectVendorModel[]**](ProjectVendorModel.md) | Project vendors | [optional]
**workflowStages** | [**\SmartCat\Model\ProjectWorkflowStageModel[]**](ProjectWorkflowStageModel.md) | Project workflow stages | [optional]
**documents** | [**\SmartCat\Model\DocumentModel[]**](DocumentModel.md) | Project task | [optional]
**externalTag** | **string** | External system tag | [optional]
**specializations** | [**\SmartCat\Model\Specialization[]**](Specialization.md) | Specializations | [optional]
**managers** | **string[]** | Managers | [optional]
**number** | **string** | Project number | [optional]
**customFields** | **array<string,string>** | Custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
