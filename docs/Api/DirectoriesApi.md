# SmartCat\DirectoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1DirectoryFormatsGet()**](DirectoriesApi.md#apiIntegrationV1DirectoryFormatsGet) | **GET** /api/integration/v1/directory/formats | Fetch parsing formats supported by the account |
| [**apiIntegrationV1DirectoryGet()**](DirectoriesApi.md#apiIntegrationV1DirectoryGet) | **GET** /api/integration/v1/directory | Fetch the specified directory |


## `apiIntegrationV1DirectoryFormatsGet()`

```php
apiIntegrationV1DirectoryFormatsGet(): \SmartCat\Model\FileFormatModel[]
```

Fetch parsing formats supported by the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DirectoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1DirectoryFormatsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoriesApi->apiIntegrationV1DirectoryFormatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\FileFormatModel[]**](../Model/FileFormatModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1DirectoryGet()`

```php
apiIntegrationV1DirectoryGet($type): \SmartCat\Model\DirectoryModel
```

Fetch the specified directory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DirectoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \SmartCat\Model\DirectoryType(); // DirectoryType | Directory type

try {
    $result = $apiInstance->apiIntegrationV1DirectoryGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoriesApi->apiIntegrationV1DirectoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**DirectoryType**](../Model/.md)| Directory type | |

### Return type

[**\SmartCat\Model\DirectoryModel**](../Model/DirectoryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
