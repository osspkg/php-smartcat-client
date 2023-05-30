# SmartCat\DocumentExportApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1DocumentExportPost()**](DocumentExportApi.md#apiIntegrationV1DocumentExportPost) | **POST** /api/integration/v1/document/export | Request the documents export |
| [**apiIntegrationV1DocumentExportTaskIdGet()**](DocumentExportApi.md#apiIntegrationV1DocumentExportTaskIdGet) | **GET** /api/integration/v1/document/export/{taskId} | Download the export results |


## `apiIntegrationV1DocumentExportPost()`

```php
apiIntegrationV1DocumentExportPost($documentIds, $mode, $type, $stageNumber, $exportingDocumentFormat, $structuringDelimiter): \SmartCat\Model\ExportDocumentTaskModel
```

Request the documents export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentIds = array('documentIds_example'); // string[] | Target language IDs (the syntax is documentId_languageId), where documentId_languageId is a document ID  and languageId is a target language ID
$mode = new \SmartCat\Model\SegmentExportMode(); // SegmentExportMode | Segment export mode:  Current - The current translation, the segment status notwithstanding (what is shown in the editor)  Confirmed - Confirmed segments at the specific stage, as defined by the StageNumber parameter. If the stage is not specified, export all segments confirmed at any stage (this behavior is similar to exporting files using the Smartcat interface)  Complete - Only completed segments, that is the segments that have passed all the stages and were confirmed at the last one
$type = new \SmartCat\Model\ExportDocumentRequestType(); // ExportDocumentRequestType | Export document type, by default Smartcat.AppIntegrations.Contracts.ExportDocumentRequestType.Target
$stageNumber = 'stageNumber_example'; // string | Workflow stage number when downloading an intermediate result
$exportingDocumentFormat = new \SmartCat\Model\ExportingDocumentFormat(); // ExportingDocumentFormat | Exporting file format for export without using source file
$structuringDelimiter = 'structuringDelimiter_example'; // string | Delimiter for structuring keys when exporting without using the source file

try {
    $result = $apiInstance->apiIntegrationV1DocumentExportPost($documentIds, $mode, $type, $stageNumber, $exportingDocumentFormat, $structuringDelimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentExportApi->apiIntegrationV1DocumentExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentIds** | [**string[]**](../Model/string.md)| Target language IDs (the syntax is documentId_languageId), where documentId_languageId is a document ID  and languageId is a target language ID | |
| **mode** | [**SegmentExportMode**](../Model/.md)| Segment export mode:  Current - The current translation, the segment status notwithstanding (what is shown in the editor)  Confirmed - Confirmed segments at the specific stage, as defined by the StageNumber parameter. If the stage is not specified, export all segments confirmed at any stage (this behavior is similar to exporting files using the Smartcat interface)  Complete - Only completed segments, that is the segments that have passed all the stages and were confirmed at the last one | [optional] |
| **type** | [**ExportDocumentRequestType**](../Model/.md)| Export document type, by default Smartcat.AppIntegrations.Contracts.ExportDocumentRequestType.Target | [optional] |
| **stageNumber** | **string**| Workflow stage number when downloading an intermediate result | [optional] |
| **exportingDocumentFormat** | [**ExportingDocumentFormat**](../Model/.md)| Exporting file format for export without using source file | [optional] |
| **structuringDelimiter** | **string**| Delimiter for structuring keys when exporting without using the source file | [optional] |

### Return type

[**\SmartCat\Model\ExportDocumentTaskModel**](../Model/ExportDocumentTaskModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1DocumentExportTaskIdGet()`

```php
apiIntegrationV1DocumentExportTaskIdGet($taskId)
```

Download the export results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | Export task ID

try {
    $apiInstance->apiIntegrationV1DocumentExportTaskIdGet($taskId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentExportApi->apiIntegrationV1DocumentExportTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| Export task ID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
