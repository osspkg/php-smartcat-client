# SmartCat\JobApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV3JobGet()**](JobApi.md#apiIntegrationV3JobGet) | **GET** /api/integration/v3/job | Fetch an array of jobs |
| [**apiIntegrationV3JobVerifiedForProjectGet()**](JobApi.md#apiIntegrationV3JobVerifiedForProjectGet) | **GET** /api/integration/v3/job/verifiedForProject | Fetch an array of jobs whose status is VERIFIED |


## `apiIntegrationV3JobGet()`

```php
apiIntegrationV3JobGet($projectId, $skip, $limit): \SmartCat\Model\JobModelV2Extended[]
```

Fetch an array of jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$skip = 0; // int | Number of jobs to be skipped (default: 0)
$limit = 100; // int | Number of jobs to fetch (default: 100)

try {
    $result = $apiInstance->apiIntegrationV3JobGet($projectId, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->apiIntegrationV3JobGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **skip** | **int**| Number of jobs to be skipped (default: 0) | [optional] [default to 0] |
| **limit** | **int**| Number of jobs to fetch (default: 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\JobModelV2Extended[]**](../Model/JobModelV2Extended.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV3JobVerifiedForProjectGet()`

```php
apiIntegrationV3JobVerifiedForProjectGet($projectId, $skip, $limit): \SmartCat\Model\JobModelV2Extended[]
```

Fetch an array of jobs whose status is VERIFIED

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$skip = 0; // int | Number of jobs to be skipped (default: 0)
$limit = 100; // int | Number of jobs to fetch (default: 100)

try {
    $result = $apiInstance->apiIntegrationV3JobVerifiedForProjectGet($projectId, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->apiIntegrationV3JobVerifiedForProjectGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **skip** | **int**| Number of jobs to be skipped (default: 0) | [optional] [default to 0] |
| **limit** | **int**| Number of jobs to fetch (default: 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\JobModelV2Extended[]**](../Model/JobModelV2Extended.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
