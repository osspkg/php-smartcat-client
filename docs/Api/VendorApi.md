# SmartCat\VendorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1VendorListGet()**](VendorApi.md#apiIntegrationV1VendorListGet) | **GET** /api/integration/v1/vendor/list | Fetch the list of vendors |
| [**apiIntegrationV1VendorVendorAccountIdGet()**](VendorApi.md#apiIntegrationV1VendorVendorAccountIdGet) | **GET** /api/integration/v1/vendor/{vendorAccountId} | Fetch a vendor by ID |


## `apiIntegrationV1VendorListGet()`

```php
apiIntegrationV1VendorListGet(): \SmartCat\Model\VendorModel[]
```

Fetch the list of vendors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\VendorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1VendorListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->apiIntegrationV1VendorListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\VendorModel[]**](../Model/VendorModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1VendorVendorAccountIdGet()`

```php
apiIntegrationV1VendorVendorAccountIdGet($vendorAccountId): \SmartCat\Model\VendorModel
```

Fetch a vendor by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\VendorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vendorAccountId = 'vendorAccountId_example'; // string | Vendor IDVendor ID

try {
    $result = $apiInstance->apiIntegrationV1VendorVendorAccountIdGet($vendorAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->apiIntegrationV1VendorVendorAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vendorAccountId** | **string**| Vendor IDVendor ID | |

### Return type

[**\SmartCat\Model\VendorModel**](../Model/VendorModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
