# SmartCat\ClientIndustryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1ClientIndustryGet()**](ClientIndustryApi.md#apiIntegrationV1ClientIndustryGet) | **GET** /api/integration/v1/clientIndustry | Fetch all the available directory values |
| [**apiIntegrationV1ClientIndustryIdDelete()**](ClientIndustryApi.md#apiIntegrationV1ClientIndustryIdDelete) | **DELETE** /api/integration/v1/clientIndustry/{id} | Delete a list entry |
| [**apiIntegrationV1ClientIndustryIdGet()**](ClientIndustryApi.md#apiIntegrationV1ClientIndustryIdGet) | **GET** /api/integration/v1/clientIndustry/{id} | Fetch a directory entry by ID |
| [**apiIntegrationV1ClientIndustryIdPut()**](ClientIndustryApi.md#apiIntegrationV1ClientIndustryIdPut) | **PUT** /api/integration/v1/clientIndustry/{id} | Update the name of an entry by ID |
| [**apiIntegrationV1ClientIndustryNamePost()**](ClientIndustryApi.md#apiIntegrationV1ClientIndustryNamePost) | **POST** /api/integration/v1/clientIndustry/{name} | Add a directory entry |


## `apiIntegrationV1ClientIndustryGet()`

```php
apiIntegrationV1ClientIndustryGet(): \SmartCat\Model\ClientIndustryModel[]
```

Fetch all the available directory values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientIndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1ClientIndustryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIndustryApi->apiIntegrationV1ClientIndustryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\ClientIndustryModel[]**](../Model/ClientIndustryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ClientIndustryIdDelete()`

```php
apiIntegrationV1ClientIndustryIdDelete($id)
```

Delete a list entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientIndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Entry ID

try {
    $apiInstance->apiIntegrationV1ClientIndustryIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ClientIndustryApi->apiIntegrationV1ClientIndustryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entry ID | |

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

## `apiIntegrationV1ClientIndustryIdGet()`

```php
apiIntegrationV1ClientIndustryIdGet($id): \SmartCat\Model\ClientIndustryModel
```

Fetch a directory entry by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientIndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Directory entry ID

try {
    $result = $apiInstance->apiIntegrationV1ClientIndustryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIndustryApi->apiIntegrationV1ClientIndustryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Directory entry ID | |

### Return type

[**\SmartCat\Model\ClientIndustryModel**](../Model/ClientIndustryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ClientIndustryIdPut()`

```php
apiIntegrationV1ClientIndustryIdPut($id, $name)
```

Update the name of an entry by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientIndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Entry ID
$name = 'name_example'; // string | New entry name

try {
    $apiInstance->apiIntegrationV1ClientIndustryIdPut($id, $name);
} catch (Exception $e) {
    echo 'Exception when calling ClientIndustryApi->apiIntegrationV1ClientIndustryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entry ID | |
| **name** | **string**| New entry name | [optional] |

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

## `apiIntegrationV1ClientIndustryNamePost()`

```php
apiIntegrationV1ClientIndustryNamePost($name): string
```

Add a directory entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientIndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Entry name

try {
    $result = $apiInstance->apiIntegrationV1ClientIndustryNamePost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIndustryApi->apiIntegrationV1ClientIndustryNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Entry name | |

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
