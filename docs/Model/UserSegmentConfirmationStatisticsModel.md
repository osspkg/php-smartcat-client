# # UserSegmentConfirmationStatisticsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | The date for which statistics were collected |
**userId** | **string** | User ID |
**accountId** | **string** | The account in which the project was created |
**projectId** | **string** | Project ID |
**documentId** | **string** | Document ID |
**language** | **string** | Target language |
**wordcounts** | [**\SmartCat\Model\SegmentConfirmationStatisticsWordcountsModel**](SegmentConfirmationStatisticsWordcountsModel.md) |  |
**vendorAccountId** | **string** | Vendor account, if the vendor is assigned and the translation was performed by the user of their account | [optional]
**externalTag** | **string** | External system tag | [optional]
**stageType** | [**\SmartCat\Model\StageType**](StageType.md) |  | [optional]
**jobId** | **string** | Job ID, if a job was created | [optional]
**changeStamp** | **string** | Change stamp | [optional]
**isConfirmedByPretranslate** | **bool** | Statistics for segments confirmed by pre-translation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
