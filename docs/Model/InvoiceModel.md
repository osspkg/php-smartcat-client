# # InvoiceModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Bank account number | [optional]
**currency** | **string** | Invoice currency | [optional]
**cost** | **float** | Invoice total | [optional]
**date** | **\DateTime** | Invoice issue date | [optional]
**status** | [**\SmartCat\Model\InvoiceStatus**](InvoiceStatus.md) |  | [optional]
**payerRequisites** | [**\SmartCat\Model\LegalEntityModel**](LegalEntityModel.md) |  | [optional]
**payeeRequisites** | [**\SmartCat\Model\SmartCatLegalEntityModel**](SmartCatLegalEntityModel.md) |  | [optional]
**jobs** | [**\SmartCat\Model\JobModelV2[]**](JobModelV2.md) | Payments included in the invoice | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
