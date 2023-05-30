# SmartCat\LspServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1LspServicesServiceIdDelete()**](LspServiceApi.md#apiIntegrationV1LspServicesServiceIdDelete) | **DELETE** /api/integration/v1/lsp/services/{serviceId} | Delete an LSP service |
| [**apiIntegrationV2LspServicesBatchGet()**](LspServiceApi.md#apiIntegrationV2LspServicesBatchGet) | **GET** /api/integration/v2/lsp/services/batch | Fetch LSP services |
| [**apiIntegrationV2LspServicesBatchPost()**](LspServiceApi.md#apiIntegrationV2LspServicesBatchPost) | **POST** /api/integration/v2/lsp/services/batch | Create new LSP services |
| [**apiIntegrationV2LspServicesGet()**](LspServiceApi.md#apiIntegrationV2LspServicesGet) | **GET** /api/integration/v2/lsp/services | Fetch LSP services by ID |
| [**apiIntegrationV2LspServicesPost()**](LspServiceApi.md#apiIntegrationV2LspServicesPost) | **POST** /api/integration/v2/lsp/services | Create a new LSP service |
| [**apiIntegrationV2LspServicesServiceIdPut()**](LspServiceApi.md#apiIntegrationV2LspServicesServiceIdPut) | **PUT** /api/integration/v2/lsp/services/{serviceId} | Update an existing LSP service |


## `apiIntegrationV1LspServicesServiceIdDelete()`

```php
apiIntegrationV1LspServicesServiceIdDelete($serviceId)
```

Delete an LSP service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serviceId = 'serviceId_example'; // string | Service ID

try {
    $apiInstance->apiIntegrationV1LspServicesServiceIdDelete($serviceId);
} catch (Exception $e) {
    echo 'Exception when calling LspServiceApi->apiIntegrationV1LspServicesServiceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serviceId** | **string**| Service ID | |

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

## `apiIntegrationV2LspServicesBatchGet()`

```php
apiIntegrationV2LspServicesBatchGet($lastServiceId, $limit): \SmartCat\Model\LspServiceModelV2[]
```

Fetch LSP services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lastServiceId = 'lastServiceId_example'; // string | Fetch the list of services starting from the ID that follows the specified ID
$limit = 100; // int | The required number of results (the default is 100)

try {
    $result = $apiInstance->apiIntegrationV2LspServicesBatchGet($lastServiceId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspServiceApi->apiIntegrationV2LspServicesBatchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastServiceId** | **string**| Fetch the list of services starting from the ID that follows the specified ID | |
| **limit** | **int**| The required number of results (the default is 100) | [default to 100] |

### Return type

[**\SmartCat\Model\LspServiceModelV2[]**](../Model/LspServiceModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2LspServicesBatchPost()`

```php
apiIntegrationV2LspServicesBatchPost($lspUpdateServiceModelV2): \SmartCat\Model\AddBatchResult[]
```

Create new LSP services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lspUpdateServiceModelV2 = array(new \SmartCat\Model\LspUpdateServiceModelV2()); // \SmartCat\Model\LspUpdateServiceModelV2[] | An array of service creation requests

try {
    $result = $apiInstance->apiIntegrationV2LspServicesBatchPost($lspUpdateServiceModelV2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspServiceApi->apiIntegrationV2LspServicesBatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lspUpdateServiceModelV2** | [**\SmartCat\Model\LspUpdateServiceModelV2[]**](../Model/LspUpdateServiceModelV2.md)| An array of service creation requests | |

### Return type

[**\SmartCat\Model\AddBatchResult[]**](../Model/AddBatchResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2LspServicesGet()`

```php
apiIntegrationV2LspServicesGet($serviceIds): \SmartCat\Model\LspServiceModelV2[]
```

Fetch LSP services by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serviceIds = array('serviceIds_example'); // string[] | List of service IDs

try {
    $result = $apiInstance->apiIntegrationV2LspServicesGet($serviceIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspServiceApi->apiIntegrationV2LspServicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serviceIds** | [**string[]**](../Model/string.md)| List of service IDs | |

### Return type

[**\SmartCat\Model\LspServiceModelV2[]**](../Model/LspServiceModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2LspServicesPost()`

```php
apiIntegrationV2LspServicesPost($lspUpdateServiceModelV2): string
```

Create a new LSP service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lspUpdateServiceModelV2 = new \SmartCat\Model\LspUpdateServiceModelV2(); // \SmartCat\Model\LspUpdateServiceModelV2 | An array of service creation requests

try {
    $result = $apiInstance->apiIntegrationV2LspServicesPost($lspUpdateServiceModelV2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspServiceApi->apiIntegrationV2LspServicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lspUpdateServiceModelV2** | [**\SmartCat\Model\LspUpdateServiceModelV2**](../Model/LspUpdateServiceModelV2.md)| An array of service creation requests | |

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

## `apiIntegrationV2LspServicesServiceIdPut()`

```php
apiIntegrationV2LspServicesServiceIdPut($lspUpdateServiceModelV2, $serviceId)
```

Update an existing LSP service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lspUpdateServiceModelV2 = new \SmartCat\Model\LspUpdateServiceModelV2(); // \SmartCat\Model\LspUpdateServiceModelV2 | Service update request
$serviceId = 'serviceId_example'; // string | Service ID

try {
    $apiInstance->apiIntegrationV2LspServicesServiceIdPut($lspUpdateServiceModelV2, $serviceId);
} catch (Exception $e) {
    echo 'Exception when calling LspServiceApi->apiIntegrationV2LspServicesServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lspUpdateServiceModelV2** | [**\SmartCat\Model\LspUpdateServiceModelV2**](../Model/LspUpdateServiceModelV2.md)| Service update request | |
| **serviceId** | **string**| Service ID | |

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
