# SmartCat\AuditApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1AuditLogsGet()**](AuditApi.md#apiIntegrationV1AuditLogsGet) | **GET** /api/integration/v1/audit/logs | Fetch audit logs with given filter parameters |


## `apiIntegrationV1AuditLogsGet()`

```php
apiIntegrationV1AuditLogsGet($startTime, $endTime, $pageNumber, $pageSize): \SmartCat\Model\AuditLogModel[]
```

Fetch audit logs with given filter parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\AuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Fetch audit logs starting from this date and time
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Fetch audit logs until this date and time
$pageNumber = 1; // int | Number of the page. Starts from 1
$pageSize = 56; // int | Size of the page. Available range: 1 - 5000

try {
    $result = $apiInstance->apiIntegrationV1AuditLogsGet($startTime, $endTime, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->apiIntegrationV1AuditLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **\DateTime**| Fetch audit logs starting from this date and time | [optional] |
| **endTime** | **\DateTime**| Fetch audit logs until this date and time | [optional] |
| **pageNumber** | **int**| Number of the page. Starts from 1 | [optional] [default to 1] |
| **pageSize** | **int**| Size of the page. Available range: 1 - 5000 | [optional] |

### Return type

[**\SmartCat\Model\AuditLogModel[]**](../Model/AuditLogModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
