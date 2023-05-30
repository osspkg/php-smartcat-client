# SmartCat\CallbackApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1CallbackDelete()**](CallbackApi.md#apiIntegrationV1CallbackDelete) | **DELETE** /api/integration/v1/callback | Delete notifications settings |
| [**apiIntegrationV1CallbackGet()**](CallbackApi.md#apiIntegrationV1CallbackGet) | **GET** /api/integration/v1/callback | Fetch the notifications settings for the account |
| [**apiIntegrationV1CallbackLastErrorsGet()**](CallbackApi.md#apiIntegrationV1CallbackLastErrorsGet) | **GET** /api/integration/v1/callback/lastErrors | Fetch the latest delivery errors |
| [**apiIntegrationV1CallbackPost()**](CallbackApi.md#apiIntegrationV1CallbackPost) | **POST** /api/integration/v1/callback | Create or update the notifications settings |


## `apiIntegrationV1CallbackDelete()`

```php
apiIntegrationV1CallbackDelete()
```

Delete notifications settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\CallbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiIntegrationV1CallbackDelete();
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->apiIntegrationV1CallbackDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiIntegrationV1CallbackGet()`

```php
apiIntegrationV1CallbackGet(): \SmartCat\Model\CallbackPropertyModel
```

Fetch the notifications settings for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\CallbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1CallbackGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->apiIntegrationV1CallbackGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\CallbackPropertyModel**](../Model/CallbackPropertyModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1CallbackLastErrorsGet()`

```php
apiIntegrationV1CallbackLastErrorsGet($limit): \SmartCat\Model\CallbackErrorModel[]
```

Fetch the latest delivery errors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\CallbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 100; // int | Maximum returned errors (no more than 100)

try {
    $result = $apiInstance->apiIntegrationV1CallbackLastErrorsGet($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->apiIntegrationV1CallbackLastErrorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum returned errors (no more than 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\CallbackErrorModel[]**](../Model/CallbackErrorModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1CallbackPost()`

```php
apiIntegrationV1CallbackPost($callbackPropertyModel)
```

Create or update the notifications settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\CallbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$callbackPropertyModel = new \SmartCat\Model\CallbackPropertyModel(); // \SmartCat\Model\CallbackPropertyModel | Notifications settings

try {
    $apiInstance->apiIntegrationV1CallbackPost($callbackPropertyModel);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->apiIntegrationV1CallbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callbackPropertyModel** | [**\SmartCat\Model\CallbackPropertyModel**](../Model/CallbackPropertyModel.md)| Notifications settings | |

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
