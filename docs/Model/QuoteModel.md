# # QuoteModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Quote ID | [optional]
**creationDate** | **\DateTime** | Quote creation date | [optional]
**accountId** | **string** | Account ID associated with the quote | [optional]
**projectId** | **string** | Project ID associated with the quote | [optional]
**deadline** | **\DateTime** | Project deadline | [optional]
**clientContactName** | **string** | Client&#39;s contact person name | [optional]
**clientContactEmail** | **string** | Client&#39;s contact person email | [optional]
**dueDate** | **\DateTime** | Get approval by | [optional]
**cost** | **float** | Cost | [optional]
**currency** | **string** | Currency | [optional]
**approvalStatus** | [**\SmartCat\Model\ApprovalStatus**](ApprovalStatus.md) |  | [optional]
**approvalStatusModificationDate** | **\DateTime** | Date of the quote approval status change | [optional]
**paymentStatus** | [**\SmartCat\Model\QuotePaymentStatus**](QuotePaymentStatus.md) |  | [optional]
**clientId** | **string** | Project client ID | [optional]
**externalFileDetalization** | [**\SmartCat\Model\ExternalFileDetalizationModel**](ExternalFileDetalizationModel.md) |  | [optional]
**servicesDetalization** | [**\SmartCat\Model\ServicesDetalizationModel**](ServicesDetalizationModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
