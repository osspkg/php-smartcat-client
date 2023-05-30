# # ProjectChangesModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Project name | [optional]
**description** | **string** | Project description | [optional]
**deadline** | **\DateTime** | Project deadline | [optional]
**clientId** | **string** | Client ID | [optional]
**domainId** | **int** | Project group ID | [optional]
**vendorAccountIds** | **string[]** | Vendor account IDs (supports a list containing maximum 1 entry) | [optional]
**externalTag** | **string** | External system tag | [optional]
**specializations** | [**\SmartCat\Model\Specialization[]**](Specialization.md) | Specializations | [optional]
**workflowStages** | [**\SmartCat\Model\StageType[]**](StageType.md) | Translation level workflow stages to be applied to the project. This parameter is optional | [optional]
**customFieldValues** | **array<string,string>** | Custom field values | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
