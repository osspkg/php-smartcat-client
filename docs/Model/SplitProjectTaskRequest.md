# # SplitProjectTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentIds** | **string[]** | IDs of the documents to be moved to the task Smartcat.AppIntegrations.Contracts.ProjectTask.Split.SplitProjectTaskRequest.TargetProjectTaskId  Only documents whose progress Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskScopeModel.Progress is less than 100 percent can be moved | [optional]
**targetProjectTaskId** | **string** | ID of the target task to which the documents are to be moved  Target task must belong to the same stage and target language as the original task  The parameter can be set to &#x60;null&#x60;. In this case a new task will be created and the documents will be moved to it | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
