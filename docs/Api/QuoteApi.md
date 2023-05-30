# SmartCat\QuoteApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1QuoteByVendorProjectIdGet()**](QuoteApi.md#apiIntegrationV1QuoteByVendorProjectIdGet) | **GET** /api/integration/v1/Quote/ByVendor/{projectId} | Fetch information about the project quote |
| [**apiIntegrationV1QuoteIdApprovePost()**](QuoteApi.md#apiIntegrationV1QuoteIdApprovePost) | **POST** /api/integration/v1/Quote/{id}/Approve | Approve a quote |
| [**apiIntegrationV1QuoteIdFileGet()**](QuoteApi.md#apiIntegrationV1QuoteIdFileGet) | **GET** /api/integration/v1/Quote/{id}/File | Download a cost calculation file |
| [**apiIntegrationV1QuoteIdMarkAsPaidPost()**](QuoteApi.md#apiIntegrationV1QuoteIdMarkAsPaidPost) | **POST** /api/integration/v1/Quote/{id}/MarkAsPaid | Mark the quote as paid |
| [**apiIntegrationV1QuoteIdUploadPost()**](QuoteApi.md#apiIntegrationV1QuoteIdUploadPost) | **POST** /api/integration/v1/Quote/{id}/Upload | Upload a project quote details file |
| [**apiIntegrationV1QuoteListByProjectIdsGet()**](QuoteApi.md#apiIntegrationV1QuoteListByProjectIdsGet) | **GET** /api/integration/v1/Quote/ListByProjectIds | Fetch a list of quotes by a list of projects |
| [**apiIntegrationV1QuoteListGet()**](QuoteApi.md#apiIntegrationV1QuoteListGet) | **GET** /api/integration/v1/Quote/List | Fetch the list of quotes for the current account |
| [**apiIntegrationV1QuoteProjectIdGet()**](QuoteApi.md#apiIntegrationV1QuoteProjectIdGet) | **GET** /api/integration/v1/Quote/{projectId} | Fetch information about the project quote |
| [**apiIntegrationV1QuoteUpdatePut()**](QuoteApi.md#apiIntegrationV1QuoteUpdatePut) | **PUT** /api/integration/v1/Quote/Update | Update information on the project quote |


## `apiIntegrationV1QuoteByVendorProjectIdGet()`

```php
apiIntegrationV1QuoteByVendorProjectIdGet($projectId): \SmartCat\Model\QuoteModel[]
```

Fetch information about the project quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1QuoteByVendorProjectIdGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteByVendorProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\QuoteModel[]**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1QuoteIdApprovePost()`

```php
apiIntegrationV1QuoteIdApprovePost($id): \SmartCat\Model\QuoteModel
```

Approve a quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Project quote ID

try {
    $result = $apiInstance->apiIntegrationV1QuoteIdApprovePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteIdApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Project quote ID | |

### Return type

[**\SmartCat\Model\QuoteModel**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1QuoteIdFileGet()`

```php
apiIntegrationV1QuoteIdFileGet($id)
```

Download a cost calculation file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Quote ID

try {
    $apiInstance->apiIntegrationV1QuoteIdFileGet($id);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteIdFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Quote ID | |

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

## `apiIntegrationV1QuoteIdMarkAsPaidPost()`

```php
apiIntegrationV1QuoteIdMarkAsPaidPost($id): \SmartCat\Model\QuoteModel
```

Mark the quote as paid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Project quote ID

try {
    $result = $apiInstance->apiIntegrationV1QuoteIdMarkAsPaidPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteIdMarkAsPaidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Project quote ID | |

### Return type

[**\SmartCat\Model\QuoteModel**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1QuoteIdUploadPost()`

```php
apiIntegrationV1QuoteIdUploadPost($uploadedFile, $id)
```

Upload a project quote details file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uploadedFile = new \SmartCat\Model\UploadedFile(); // \SmartCat\Model\UploadedFile
$id = 'id_example'; // string

try {
    $apiInstance->apiIntegrationV1QuoteIdUploadPost($uploadedFile, $id);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteIdUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile**](../Model/UploadedFile.md)|  | |
| **id** | **string**|  | |

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

## `apiIntegrationV1QuoteListByProjectIdsGet()`

```php
apiIntegrationV1QuoteListByProjectIdsGet($projectIds): \SmartCat\Model\QuoteModel[]
```

Fetch a list of quotes by a list of projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectIds = array('projectIds_example'); // string[] | List of projects

try {
    $result = $apiInstance->apiIntegrationV1QuoteListByProjectIdsGet($projectIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteListByProjectIdsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectIds** | [**string[]**](../Model/string.md)| List of projects | |

### Return type

[**\SmartCat\Model\QuoteModel[]**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1QuoteListGet()`

```php
apiIntegrationV1QuoteListGet(): \SmartCat\Model\QuoteModel[]
```

Fetch the list of quotes for the current account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1QuoteListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\QuoteModel[]**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1QuoteProjectIdGet()`

```php
apiIntegrationV1QuoteProjectIdGet($projectId): \SmartCat\Model\QuoteModel
```

Fetch information about the project quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1QuoteProjectIdGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\QuoteModel**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1QuoteUpdatePut()`

```php
apiIntegrationV1QuoteUpdatePut($quoteModel): \SmartCat\Model\QuoteModel
```

Update information on the project quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteModel = new \SmartCat\Model\QuoteModel(); // \SmartCat\Model\QuoteModel | Project quote model

try {
    $result = $apiInstance->apiIntegrationV1QuoteUpdatePut($quoteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->apiIntegrationV1QuoteUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quoteModel** | [**\SmartCat\Model\QuoteModel**](../Model/QuoteModel.md)| Project quote model | |

### Return type

[**\SmartCat\Model\QuoteModel**](../Model/QuoteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
