# SmartCat\AccountApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1AccountGet()**](AccountApi.md#apiIntegrationV1AccountGet) | **GET** /api/integration/v1/account | Fetch the account details |
| [**apiIntegrationV1AccountMtenginesGet()**](AccountApi.md#apiIntegrationV1AccountMtenginesGet) | **GET** /api/integration/v1/account/mtengines | Fetch the list of MT services available for the account |


## `apiIntegrationV1AccountGet()`

```php
apiIntegrationV1AccountGet(): \SmartCat\Model\AccountModel
```

Fetch the account details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1AccountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->apiIntegrationV1AccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\AccountModel**](../Model/AccountModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1AccountMtenginesGet()`

```php
apiIntegrationV1AccountMtenginesGet(): \SmartCat\Model\MTEngineModel[]
```

Fetch the list of MT services available for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1AccountMtenginesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->apiIntegrationV1AccountMtenginesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\MTEngineModel[]**](../Model/MTEngineModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
