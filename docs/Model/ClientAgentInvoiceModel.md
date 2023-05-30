# # ClientAgentInvoiceModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**number** | **string** |  | [optional]
**externalNumber** | **string** |  | [optional]
**payerLegalName** | **string** |  | [optional]
**payerVat** | **string** |  | [optional]
**payerKpp** | **string** |  | [optional]
**status** | **string** |  | [optional]
**dateCreated** | **\DateTime** |  | [optional]
**datePaid** | **\DateTime** |  | [optional]
**dueDate** | **\DateTime** |  | [optional]
**jobs** | [**\SmartCat\Model\ClientAgentInvoiceJobModel[]**](ClientAgentInvoiceJobModel.md) |  | [optional]
**currency** | **string** |  | [optional]
**totalCost** | **float** |  | [optional]
**isInternalClient** | **bool** |  | [optional]
**paymentDestination** | [**\SmartCat\Model\InvoicePaymentReceiveDestination**](InvoicePaymentReceiveDestination.md) |  | [optional]
**bankRequisites** | [**\SmartCat\Model\BankRequisitesModel**](BankRequisitesModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
