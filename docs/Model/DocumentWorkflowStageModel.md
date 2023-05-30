# # DocumentWorkflowStageModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID | [optional]
**progress** | **float** | Completion percentage | [optional]
**wordsTranslated** | **int** | Translated words count | [optional]
**unassignedWordsCount** | **int** | Unassigned words count | [optional]
**status** | [**\SmartCat\Model\WorkflowStageStatus**](WorkflowStageStatus.md) |  | [optional]
**statusModificationDate** | **\DateTime** | Status change date | [optional]
**executives** | [**\SmartCat\Model\AssignedExecutiveModel[]**](AssignedExecutiveModel.md) | Assigned linguists | [optional]
**vendor** | [**\SmartCat\Model\VendorModel**](VendorModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
