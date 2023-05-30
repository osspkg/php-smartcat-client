# # JobModelV2Extended

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Task ID | [optional]
**invoiceNumber** | **string** | Bank account number | [optional]
**supplierEmail** | **string** | Vendor email address | [optional]
**supplierName** | **string** | Vendor name | [optional]
**supplierType** | [**\SmartCat\Model\SupplierType**](SupplierType.md) |  | [optional]
**serviceType** | **string** | Service type | [optional]
**jobDescription** | **string** | Description: the name of a document or project | [optional]
**unitsType** | **string** | Job unit type | [optional]
**unitsAmount** | **float** | Job unit count | [optional]
**customerPricePerUnit** | **float** | Job unit price | [optional]
**executivePricePerUnit** | **float** | Job unit price without commission | [optional]
**customerCurrency** | **string** | Price and cost currency | [optional]
**executiveCurrency** | **string** | Linguist&#39;s price and cost currency | [optional]
**customerCost** | **float** | Total job cost | [optional]
**executiveCost** | **float** | Total job cost without commission | [optional]
**externalNumber** | **string** | External payment ID | [optional]
**supplierId** | **string** | Supplier ID | [optional]
**status** | [**\SmartCat\Model\JobStatus**](JobStatus.md) |  | [optional]
**projectId** | **string** | Project ID | [optional]
**deadline** | **\DateTime** | Project deadline | [optional]
**sourceLanguage** | **int** | Source language | [optional]
**targetLanguage** | **int** | Target language | [optional]
**isPaidExternally** | **bool** | Paid externally | [optional]
**documentId** | **string** | Document ID | [optional]
**stageId** | **string** | Workflow stage ID | [optional]
**verifiedDate** | **\DateTime** | The date the job status was set to VERIFIED. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
