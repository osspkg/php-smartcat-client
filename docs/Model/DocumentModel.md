# # DocumentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Document ID | [optional]
**name** | **string** | Document name | [optional]
**fullPath** | **string** | Full path to the document in the project | [optional]
**filename** | **string** | Source file name, including the extension | [optional]
**creationDate** | **\DateTime** | Creation date | [optional]
**deadline** | **\DateTime** | Document translation deadline | [optional]
**sourceLanguage** | **string** | Source language | [optional]
**documentDisassemblingStatus** | [**\SmartCat\Model\DocumentDisassemblingStatus**](DocumentDisassemblingStatus.md) |  | [optional]
**targetLanguage** | **string** | Target language | [optional]
**status** | [**\SmartCat\Model\DocumentStatus**](DocumentStatus.md) |  | [optional]
**wordsCount** | **int** | Word count in the source text | [optional]
**statusModificationDate** | **\DateTime** | Late of the last status change | [optional]
**pretranslateCompleted** | **bool** | Specifies whether pretranslation has completed, if ordered | [optional]
**workflowStages** | [**\SmartCat\Model\DocumentWorkflowStageModel[]**](DocumentWorkflowStageModel.md) | Workflow stages for the document | [optional]
**externalId** | **string** | External identifier assigned by the client upon the document creation | [optional]
**projectId** | **string** | ID of the project associated with the document | [optional]
**metaInfo** | **string** | Additional user information about the document | [optional]
**placeholdersAreEnabled** | **bool** | Specifies whether placeholders are enabled for the document | [optional]
**revisionLabel** | **string** | Document version ID label | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
