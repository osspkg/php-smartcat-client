# SmartCat\FileManagementApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1FileManagementFileInfoListPrefixGet()**](FileManagementApi.md#apiIntegrationV1FileManagementFileInfoListPrefixGet) | **GET** /api/integration/v1/file-management/file-info-list/{prefix} | Get list of files whose path starts with given prefix |
| [**apiIntegrationV1FileManagementFileInfoPathGet()**](FileManagementApi.md#apiIntegrationV1FileManagementFileInfoPathGet) | **GET** /api/integration/v1/file-management/file-info/{path} | Get single file info by path |
| [**apiIntegrationV1FileManagementFilePathDelete()**](FileManagementApi.md#apiIntegrationV1FileManagementFilePathDelete) | **DELETE** /api/integration/v1/file-management/file/{path} | Delete a file by path |
| [**apiIntegrationV1FileManagementFilePathGet()**](FileManagementApi.md#apiIntegrationV1FileManagementFilePathGet) | **GET** /api/integration/v1/file-management/file/{path} | Download a file by path |
| [**apiIntegrationV1FileManagementFilePathPut()**](FileManagementApi.md#apiIntegrationV1FileManagementFilePathPut) | **PUT** /api/integration/v1/file-management/file/{path} | Upload file to a specified path in storage |
| [**apiIntegrationV1FileManagementFilesPathPut()**](FileManagementApi.md#apiIntegrationV1FileManagementFilesPathPut) | **PUT** /api/integration/v1/file-management/files/{path} | Upload multiple files to a specified path in storage |


## `apiIntegrationV1FileManagementFileInfoListPrefixGet()`

```php
apiIntegrationV1FileManagementFileInfoListPrefixGet($prefix, $offset, $limit): \SmartCat\Model\FileInfoModel[]
```

Get list of files whose path starts with given prefix

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prefix = 'prefix_example'; // string | Prefix for searching files
$offset = 0; // int | Amount of skipped files in pagination
$limit = 500; // int | Maximum number of returned files

try {
    $result = $apiInstance->apiIntegrationV1FileManagementFileInfoListPrefixGet($prefix, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileManagementApi->apiIntegrationV1FileManagementFileInfoListPrefixGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prefix** | **string**| Prefix for searching files | |
| **offset** | **int**| Amount of skipped files in pagination | [optional] [default to 0] |
| **limit** | **int**| Maximum number of returned files | [optional] [default to 500] |

### Return type

[**\SmartCat\Model\FileInfoModel[]**](../Model/FileInfoModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1FileManagementFileInfoPathGet()`

```php
apiIntegrationV1FileManagementFileInfoPathGet($path): \SmartCat\Model\FileInfoModel
```

Get single file info by path

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | Path of file

try {
    $result = $apiInstance->apiIntegrationV1FileManagementFileInfoPathGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileManagementApi->apiIntegrationV1FileManagementFileInfoPathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Path of file | |

### Return type

[**\SmartCat\Model\FileInfoModel**](../Model/FileInfoModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1FileManagementFilePathDelete()`

```php
apiIntegrationV1FileManagementFilePathDelete($path)
```

Delete a file by path

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | Path of file

try {
    $apiInstance->apiIntegrationV1FileManagementFilePathDelete($path);
} catch (Exception $e) {
    echo 'Exception when calling FileManagementApi->apiIntegrationV1FileManagementFilePathDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Path of file | |

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

## `apiIntegrationV1FileManagementFilePathGet()`

```php
apiIntegrationV1FileManagementFilePathGet($path)
```

Download a file by path

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | Path of file

try {
    $apiInstance->apiIntegrationV1FileManagementFilePathGet($path);
} catch (Exception $e) {
    echo 'Exception when calling FileManagementApi->apiIntegrationV1FileManagementFilePathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Path of file | |

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

## `apiIntegrationV1FileManagementFilePathPut()`

```php
apiIntegrationV1FileManagementFilePathPut($file, $path): \SmartCat\Model\FileInfoModel
```

Upload file to a specified path in storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject
$path = 'path_example'; // string | Path of file

try {
    $result = $apiInstance->apiIntegrationV1FileManagementFilePathPut($file, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileManagementApi->apiIntegrationV1FileManagementFilePathPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **path** | **string**| Path of file | |

### Return type

[**\SmartCat\Model\FileInfoModel**](../Model/FileInfoModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1FileManagementFilesPathPut()`

```php
apiIntegrationV1FileManagementFilesPathPut($files, $path, $unzip): \SmartCat\Model\FileInfoModel[]
```

Upload multiple files to a specified path in storage

Original file names will be used for uploaded files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("/path/to/file.txt"); // \SplFileObject[]
$path = 'path_example'; // string | Prefix for uploaded files
$unzip = false; // bool | Extract files from uploaded zip file(-s) instead of saving zip as-is

try {
    $result = $apiInstance->apiIntegrationV1FileManagementFilesPathPut($files, $path, $unzip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileManagementApi->apiIntegrationV1FileManagementFilesPathPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **files** | **\SplFileObject[]**|  | |
| **path** | **string**| Prefix for uploaded files | |
| **unzip** | **bool**| Extract files from uploaded zip file(-s) instead of saving zip as-is | [optional] [default to false] |

### Return type

[**\SmartCat\Model\FileInfoModel[]**](../Model/FileInfoModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
