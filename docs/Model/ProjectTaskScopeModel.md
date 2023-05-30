# # ProjectTaskScopeModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentId** | **string** | Document ID | [optional]
**progress** | **float** | Document progress in percent from 0 to 100 | [optional]
**name** | **string** | Document name | [optional]
**extension** | **string** | File extension | [optional]
**lastModified** | **\DateTime** | Last document modification date (date the file was uploaded or updated) | [optional]
**approximateCost** | **float** | Preliminary cost of the work on a particular document  Calculated based on the document volume and the rates of suppliers assigned to the task | [optional]
**cost** | **float** | Amount spent on the work performed on the document | [optional]
**isExternal** | **bool** | The document at the stage will be processed without the use of CAT tools  (work on the document is not performed in the editor) | [optional]
**unitType** | [**\SmartCat\Model\WorkUnitType**](WorkUnitType.md) |  | [optional]
**volumeSize** | **int** | Work volume in units Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskScopeModel.UnitType | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
