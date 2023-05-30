# SmartCat\SegmentConfirmationStatisticsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet()**](SegmentConfirmationStatisticsApi.md#apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet) | **GET** /api/integration/v1/segment-confirmation-statistics/{projectId} | Fetch segment confirmation statistics |
| [**apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet()**](SegmentConfirmationStatisticsApi.md#apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet) | **GET** /api/integration/v2/segment-confirmation-statistics/{projectId} | Fetch segment confirmation statistics |


## `apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet()`

```php
apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet($projectId, $from, $to, $documentId, $targetLanguage, $accountUserId): \SmartCat\Model\SegmentConfirmationStatisticsModel[]
```

Fetch segment confirmation statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\SegmentConfirmationStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable
$documentId = 'documentId_example'; // string | Document ID
$targetLanguage = 'targetLanguage_example'; // string | Target language code
$accountUserId = 'accountUserId_example'; // string | ID of the supplier (user) in the account. If not specified, include all suppliers

try {
    $result = $apiInstance->apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet($projectId, $from, $to, $documentId, $targetLanguage, $accountUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentConfirmationStatisticsApi->apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **from** | **\DateTime**| The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable | [optional] |
| **to** | **\DateTime**| The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable | [optional] |
| **documentId** | **string**| Document ID | [optional] |
| **targetLanguage** | **string**| Target language code | [optional] |
| **accountUserId** | **string**| ID of the supplier (user) in the account. If not specified, include all suppliers | [optional] |

### Return type

[**\SmartCat\Model\SegmentConfirmationStatisticsModel[]**](../Model/SegmentConfirmationStatisticsModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet()`

```php
apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet($projectId, $from, $to, $documentId, $targetLanguage, $userId): \SmartCat\Model\UserSegmentConfirmationStatisticsModel[]
```

Fetch segment confirmation statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\SegmentConfirmationStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period starting date for which statistics are requested. If not specified, this argument is not applicable
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period end date for which statistics are requested. If not specified, this argument is not applicable
$documentId = 'documentId_example'; // string | Document ID
$targetLanguage = 'targetLanguage_example'; // string | Target language code
$userId = 'userId_example'; // string | ID of the supplier (user). If not specified, include all suppliers

try {
    $result = $apiInstance->apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet($projectId, $from, $to, $documentId, $targetLanguage, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentConfirmationStatisticsApi->apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **from** | **\DateTime**| The period starting date for which statistics are requested. If not specified, this argument is not applicable | [optional] |
| **to** | **\DateTime**| The period end date for which statistics are requested. If not specified, this argument is not applicable | [optional] |
| **documentId** | **string**| Document ID | [optional] |
| **targetLanguage** | **string**| Target language code | [optional] |
| **userId** | **string**| ID of the supplier (user). If not specified, include all suppliers | [optional] |

### Return type

[**\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]**](../Model/UserSegmentConfirmationStatisticsModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
