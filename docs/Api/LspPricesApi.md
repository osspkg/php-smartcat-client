# SmartCat\LspPricesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1LspPricesPriceIdDelete()**](LspPricesApi.md#apiIntegrationV1LspPricesPriceIdDelete) | **DELETE** /api/integration/v1/lsp/prices/{priceId} | Delete an LSP service price |
| [**apiIntegrationV2LspPricesBatchGet()**](LspPricesApi.md#apiIntegrationV2LspPricesBatchGet) | **GET** /api/integration/v2/lsp/prices/batch | Fetch LSP service prices |
| [**apiIntegrationV2LspPricesBatchPost()**](LspPricesApi.md#apiIntegrationV2LspPricesBatchPost) | **POST** /api/integration/v2/lsp/prices/batch | Create new LSP service prices |
| [**apiIntegrationV2LspPricesGet()**](LspPricesApi.md#apiIntegrationV2LspPricesGet) | **GET** /api/integration/v2/lsp/prices | Fetch LSP service prices by ID |
| [**apiIntegrationV2LspPricesPost()**](LspPricesApi.md#apiIntegrationV2LspPricesPost) | **POST** /api/integration/v2/lsp/prices | Create a new LSP service price |
| [**apiIntegrationV2LspPricesPriceIdPut()**](LspPricesApi.md#apiIntegrationV2LspPricesPriceIdPut) | **PUT** /api/integration/v2/lsp/prices/{priceId} | Update an existing LSP service price |


## `apiIntegrationV1LspPricesPriceIdDelete()`

```php
apiIntegrationV1LspPricesPriceIdDelete($priceId)
```

Delete an LSP service price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceId = 'priceId_example'; // string | Service price ID

try {
    $apiInstance->apiIntegrationV1LspPricesPriceIdDelete($priceId);
} catch (Exception $e) {
    echo 'Exception when calling LspPricesApi->apiIntegrationV1LspPricesPriceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **priceId** | **string**| Service price ID | |

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

## `apiIntegrationV2LspPricesBatchGet()`

```php
apiIntegrationV2LspPricesBatchGet($lastPriceId, $limit): \SmartCat\Model\LspPriceModelV2[]
```

Fetch LSP service prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lastPriceId = 'lastPriceId_example'; // string | Fetch the list of service prices starting from the ID that follows the specified ID
$limit = 100; // int | The required number of results (the default is 100)

try {
    $result = $apiInstance->apiIntegrationV2LspPricesBatchGet($lastPriceId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspPricesApi->apiIntegrationV2LspPricesBatchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastPriceId** | **string**| Fetch the list of service prices starting from the ID that follows the specified ID | [optional] |
| **limit** | **int**| The required number of results (the default is 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\LspPriceModelV2[]**](../Model/LspPriceModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2LspPricesBatchPost()`

```php
apiIntegrationV2LspPricesBatchPost($lspUpdatePriceModelV2): \SmartCat\Model\AddBatchResult[]
```

Create new LSP service prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lspUpdatePriceModelV2 = array(new \SmartCat\Model\LspUpdatePriceModelV2()); // \SmartCat\Model\LspUpdatePriceModelV2[] | An array of service price creation requests

try {
    $result = $apiInstance->apiIntegrationV2LspPricesBatchPost($lspUpdatePriceModelV2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspPricesApi->apiIntegrationV2LspPricesBatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lspUpdatePriceModelV2** | [**\SmartCat\Model\LspUpdatePriceModelV2[]**](../Model/LspUpdatePriceModelV2.md)| An array of service price creation requests | |

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

## `apiIntegrationV2LspPricesGet()`

```php
apiIntegrationV2LspPricesGet($priceIds): \SmartCat\Model\LspPriceModelV2[]
```

Fetch LSP service prices by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceIds = array('priceIds_example'); // string[] | The list of service price IDs

try {
    $result = $apiInstance->apiIntegrationV2LspPricesGet($priceIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspPricesApi->apiIntegrationV2LspPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **priceIds** | [**string[]**](../Model/string.md)| The list of service price IDs | |

### Return type

[**\SmartCat\Model\LspPriceModelV2[]**](../Model/LspPriceModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2LspPricesPost()`

```php
apiIntegrationV2LspPricesPost($lspUpdatePriceModelV2): string
```

Create a new LSP service price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lspUpdatePriceModelV2 = new \SmartCat\Model\LspUpdatePriceModelV2(); // \SmartCat\Model\LspUpdatePriceModelV2 | Service price creation request

try {
    $result = $apiInstance->apiIntegrationV2LspPricesPost($lspUpdatePriceModelV2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LspPricesApi->apiIntegrationV2LspPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lspUpdatePriceModelV2** | [**\SmartCat\Model\LspUpdatePriceModelV2**](../Model/LspUpdatePriceModelV2.md)| Service price creation request | |

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

## `apiIntegrationV2LspPricesPriceIdPut()`

```php
apiIntegrationV2LspPricesPriceIdPut($lspUpdatePriceModelV2, $priceId)
```

Update an existing LSP service price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\LspPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lspUpdatePriceModelV2 = new \SmartCat\Model\LspUpdatePriceModelV2(); // \SmartCat\Model\LspUpdatePriceModelV2 | Service price update request
$priceId = 'priceId_example'; // string | Service price ID

try {
    $apiInstance->apiIntegrationV2LspPricesPriceIdPut($lspUpdatePriceModelV2, $priceId);
} catch (Exception $e) {
    echo 'Exception when calling LspPricesApi->apiIntegrationV2LspPricesPriceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lspUpdatePriceModelV2** | [**\SmartCat\Model\LspUpdatePriceModelV2**](../Model/LspUpdatePriceModelV2.md)| Service price update request | |
| **priceId** | **string**| Service price ID | |

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
