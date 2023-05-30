# SmartCat\TranslationMemoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1TranslationmemoryGet()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryGet) | **GET** /api/integration/v1/translationmemory | Fetch the available TMs filtered per account |
| [**apiIntegrationV1TranslationmemoryMatchesPost()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryMatchesPost) | **POST** /api/integration/v1/translationmemory/matches | Fetch matches from the specified TM |
| [**apiIntegrationV1TranslationmemoryPost()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryPost) | **POST** /api/integration/v1/translationmemory | Create an empty TM |
| [**apiIntegrationV1TranslationmemoryTaskGet()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTaskGet) | **GET** /api/integration/v1/translationmemory/task | Fetch a collection of TMX file import tasks |
| [**apiIntegrationV1TranslationmemoryTaskTaskIdDelete()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTaskTaskIdDelete) | **DELETE** /api/integration/v1/translationmemory/task/{taskId} | Removes the specified import task |
| [**apiIntegrationV1TranslationmemoryTmIdDelete()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTmIdDelete) | **DELETE** /api/integration/v1/translationmemory/{tmId} | Delete a TM |
| [**apiIntegrationV1TranslationmemoryTmIdFileGet()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTmIdFileGet) | **GET** /api/integration/v1/translationmemory/{tmId}/file | Export TMX files from the TM database |
| [**apiIntegrationV1TranslationmemoryTmIdGet()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTmIdGet) | **GET** /api/integration/v1/translationmemory/{tmId} | Fetch information about the TM |
| [**apiIntegrationV1TranslationmemoryTmIdPost()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTmIdPost) | **POST** /api/integration/v1/translationmemory/{tmId} | Import TMX files to a TM |
| [**apiIntegrationV1TranslationmemoryTmIdTargetsPut()**](TranslationMemoriesApi.md#apiIntegrationV1TranslationmemoryTmIdTargetsPut) | **PUT** /api/integration/v1/translationmemory/{tmId}/targets | Add an array of target languages to a TM |


## `apiIntegrationV1TranslationmemoryGet()`

```php
apiIntegrationV1TranslationmemoryGet($lastProcessedId, $batchSize, $sourceLanguage, $targetLanguage, $clientId, $searchName): \SmartCat\Model\TranslationMemoryModel[]
```

Fetch the available TMs filtered per account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lastProcessedId = 'lastProcessedId_example'; // string | The latest ID fetched by the previous query
$batchSize = 56; // int | Required size of the returned batch
$sourceLanguage = 'sourceLanguage_example'; // string | Source language (optional)
$targetLanguage = 'targetLanguage_example'; // string | Target language (optional)
$clientId = 'clientId_example'; // string | Client ID (optional)
$searchName = 'searchName_example'; // string | TM partial name (optional)

try {
    $result = $apiInstance->apiIntegrationV1TranslationmemoryGet($lastProcessedId, $batchSize, $sourceLanguage, $targetLanguage, $clientId, $searchName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastProcessedId** | **string**| The latest ID fetched by the previous query | |
| **batchSize** | **int**| Required size of the returned batch | |
| **sourceLanguage** | **string**| Source language (optional) | [optional] |
| **targetLanguage** | **string**| Target language (optional) | [optional] |
| **clientId** | **string**| Client ID (optional) | [optional] |
| **searchName** | **string**| TM partial name (optional) | [optional] |

### Return type

[**\SmartCat\Model\TranslationMemoryModel[]**](../Model/TranslationMemoryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1TranslationmemoryMatchesPost()`

```php
apiIntegrationV1TranslationmemoryMatchesPost($tMMatchesRequest, $tmId): \SmartCat\Model\SegmentWithMatchesModel
```

Fetch matches from the specified TM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tMMatchesRequest = new \SmartCat\Model\TMMatchesRequest(); // \SmartCat\Model\TMMatchesRequest | TM match segments request
$tmId = 'tmId_example'; // string | ID of the TM for the match search

try {
    $result = $apiInstance->apiIntegrationV1TranslationmemoryMatchesPost($tMMatchesRequest, $tmId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryMatchesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tMMatchesRequest** | [**\SmartCat\Model\TMMatchesRequest**](../Model/TMMatchesRequest.md)| TM match segments request | |
| **tmId** | **string**| ID of the TM for the match search | |

### Return type

[**\SmartCat\Model\SegmentWithMatchesModel**](../Model/SegmentWithMatchesModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1TranslationmemoryPost()`

```php
apiIntegrationV1TranslationmemoryPost($createTranslationMemoryModel)
```

Create an empty TM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createTranslationMemoryModel = new \SmartCat\Model\CreateTranslationMemoryModel(); // \SmartCat\Model\CreateTranslationMemoryModel | TM creation model

try {
    $apiInstance->apiIntegrationV1TranslationmemoryPost($createTranslationMemoryModel);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createTranslationMemoryModel** | [**\SmartCat\Model\CreateTranslationMemoryModel**](../Model/CreateTranslationMemoryModel.md)| TM creation model | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1TranslationmemoryTaskGet()`

```php
apiIntegrationV1TranslationmemoryTaskGet(): \SmartCat\Model\TMImportTaskModel[]
```

Fetch a collection of TMX file import tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1TranslationmemoryTaskGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTaskGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\TMImportTaskModel[]**](../Model/TMImportTaskModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1TranslationmemoryTaskTaskIdDelete()`

```php
apiIntegrationV1TranslationmemoryTaskTaskIdDelete($taskId)
```

Removes the specified import task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | ID of a task to be imported to the TM

try {
    $apiInstance->apiIntegrationV1TranslationmemoryTaskTaskIdDelete($taskId);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTaskTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| ID of a task to be imported to the TM | |

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

## `apiIntegrationV1TranslationmemoryTmIdDelete()`

```php
apiIntegrationV1TranslationmemoryTmIdDelete($tmId)
```

Delete a TM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tmId = 'tmId_example'; // string | TM ID

try {
    $apiInstance->apiIntegrationV1TranslationmemoryTmIdDelete($tmId);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTmIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tmId** | **string**| TM ID | |

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

## `apiIntegrationV1TranslationmemoryTmIdFileGet()`

```php
apiIntegrationV1TranslationmemoryTmIdFileGet($tmId, $exportMode, $withTags)
```

Export TMX files from the TM database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tmId = 'tmId_example'; // string | TM ID
$exportMode = new \SmartCat\Model\TMExportMode(); // TMExportMode | Export mode
$withTags = True; // bool | Specifies whether to include tags into export results

try {
    $apiInstance->apiIntegrationV1TranslationmemoryTmIdFileGet($tmId, $exportMode, $withTags);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTmIdFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tmId** | **string**| TM ID | |
| **exportMode** | [**TMExportMode**](../Model/.md)| Export mode | |
| **withTags** | **bool**| Specifies whether to include tags into export results | |

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

## `apiIntegrationV1TranslationmemoryTmIdGet()`

```php
apiIntegrationV1TranslationmemoryTmIdGet($tmId): \SmartCat\Model\TranslationMemoryModel
```

Fetch information about the TM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tmId = 'tmId_example'; // string | TM ID

try {
    $result = $apiInstance->apiIntegrationV1TranslationmemoryTmIdGet($tmId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTmIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tmId** | **string**| TM ID | |

### Return type

[**\SmartCat\Model\TranslationMemoryModel**](../Model/TranslationMemoryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1TranslationmemoryTmIdPost()`

```php
apiIntegrationV1TranslationmemoryTmIdPost($uploadedFile, $tmId, $replaceAllContent, $assuranceLevel)
```

Import TMX files to a TM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uploadedFile = new \SmartCat\Model\UploadedFile(); // \SmartCat\Model\UploadedFile | TMX file to be uploaded
$tmId = 'tmId_example'; // string | TM ID
$replaceAllContent = True; // bool | Complete replacement of the TM contents is required
$assuranceLevel = new \SmartCat\Model\IntegrationApiTMTranslationAssuranceLevel(); // IntegrationApiTMTranslationAssuranceLevel | Translation assurance level. Calculated based on the document editing stage at which the TM unit was saved.

try {
    $apiInstance->apiIntegrationV1TranslationmemoryTmIdPost($uploadedFile, $tmId, $replaceAllContent, $assuranceLevel);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTmIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile**](../Model/UploadedFile.md)| TMX file to be uploaded | |
| **tmId** | **string**| TM ID | |
| **replaceAllContent** | **bool**| Complete replacement of the TM contents is required | |
| **assuranceLevel** | [**IntegrationApiTMTranslationAssuranceLevel**](../Model/.md)| Translation assurance level. Calculated based on the document editing stage at which the TM unit was saved. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1TranslationmemoryTmIdTargetsPut()`

```php
apiIntegrationV1TranslationmemoryTmIdTargetsPut($requestBody, $tmId)
```

Add an array of target languages to a TM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\TranslationMemoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestBody = array('requestBody_example'); // string[] | Array of the required target languages
$tmId = 'tmId_example'; // string | TM ID

try {
    $apiInstance->apiIntegrationV1TranslationmemoryTmIdTargetsPut($requestBody, $tmId);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoriesApi->apiIntegrationV1TranslationmemoryTmIdTargetsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestBody** | [**string[]**](../Model/string.md)| Array of the required target languages | |
| **tmId** | **string**| TM ID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
