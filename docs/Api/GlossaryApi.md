# SmartCat\GlossaryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1GlossariesGet()**](GlossaryApi.md#apiIntegrationV1GlossariesGet) | **GET** /api/integration/v1/glossaries | Fetch glossaries from the current account |
| [**apiIntegrationV1GlossaryImportPost()**](GlossaryApi.md#apiIntegrationV1GlossaryImportPost) | **POST** /api/integration/v1/glossary/import | Create a task for importing concepts from a glossary file |
| [**apiIntegrationV1GlossaryImportTaskStateTaskIdGet()**](GlossaryApi.md#apiIntegrationV1GlossaryImportTaskStateTaskIdGet) | **GET** /api/integration/v1/glossary/importTaskState/{taskId} | Fetch the status of a concept import task |


## `apiIntegrationV1GlossariesGet()`

```php
apiIntegrationV1GlossariesGet(): \SmartCat\Model\GlossaryModel[]
```

Fetch glossaries from the current account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\GlossaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1GlossariesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryApi->apiIntegrationV1GlossariesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\GlossaryModel[]**](../Model/GlossaryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1GlossaryImportPost()`

```php
apiIntegrationV1GlossaryImportPost($uploadedFile, $glossaryId, $clearBeforeImport): string
```

Create a task for importing concepts from a glossary file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\GlossaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uploadedFile = new \SmartCat\Model\UploadedFile(); // \SmartCat\Model\UploadedFile | File containing imported concepts
$glossaryId = 'glossaryId_example'; // string | Glossary ID
$clearBeforeImport = True; // bool | Specifies whether to delete all glossary concepts before the import

try {
    $result = $apiInstance->apiIntegrationV1GlossaryImportPost($uploadedFile, $glossaryId, $clearBeforeImport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryApi->apiIntegrationV1GlossaryImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile**](../Model/UploadedFile.md)| File containing imported concepts | |
| **glossaryId** | **string**| Glossary ID | |
| **clearBeforeImport** | **bool**| Specifies whether to delete all glossary concepts before the import | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1GlossaryImportTaskStateTaskIdGet()`

```php
apiIntegrationV1GlossaryImportTaskStateTaskIdGet($taskId): string
```

Fetch the status of a concept import task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\GlossaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | Concept import task ID

try {
    $result = $apiInstance->apiIntegrationV1GlossaryImportTaskStateTaskIdGet($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryApi->apiIntegrationV1GlossaryImportTaskStateTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| Concept import task ID | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
