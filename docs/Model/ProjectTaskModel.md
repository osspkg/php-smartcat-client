# # ProjectTaskModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Task ID | [optional]
**number** | **string** | Task number | [optional]
**status** | [**\SmartCat\Model\ProjectTaskStatus**](ProjectTaskStatus.md) |  | [optional]
**progressPercentage** | **float** | Task progress (in percent) | [optional]
**sourceLanguage** | **string** | Source language of the task | [optional]
**targetLanguage** | **string** | Target language of the task | [optional]
**stageType** | [**\SmartCat\Model\StageType**](StageType.md) |  | [optional]
**stageId** | **string** | Stage ID | [optional]
**deadline** | **\DateTime** | Task deadline | [optional]
**cost** | **float** | Actual cost of the work performed within the task | [optional]
**approximateCost** | **float** | Estimated cost of the work, taking into account the assigned suppliers | [optional]
**documentIds** | **string[]** | IDs of the documents included in the task | [optional]
**createDate** | **\DateTime** | Creation date | [optional]
**lastUpdateScopeDate** | **\DateTime** | Last volume modification date (documents updated/added) | [optional]
**individualAssignments** | [**\SmartCat\Model\IndividualAssignmentModel[]**](IndividualAssignmentModel.md) | User assignments to the task | [optional]
**vendorAssignments** | [**\SmartCat\Model\VendorAssignmentModel[]**](VendorAssignmentModel.md) | Agency assignments to the task | [optional]
**invitationStrategyType** | [**\SmartCat\Model\ProjectTaskIndividualInvitationStrategyType**](ProjectTaskIndividualInvitationStrategyType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
