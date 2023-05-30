# SmartCat\PlaceholderFormatApiApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1PlaceholdersGet()**](PlaceholderFormatApiApi.md#apiIntegrationV1PlaceholdersGet) | **GET** /api/integration/v1/placeholders | Fetch all placeholder formats available in the current account |
| [**apiIntegrationV1PlaceholdersPut()**](PlaceholderFormatApiApi.md#apiIntegrationV1PlaceholdersPut) | **PUT** /api/integration/v1/placeholders | Save placeholder formats set for the specified account |
| [**apiIntegrationV1PlaceholdersValidateGet()**](PlaceholderFormatApiApi.md#apiIntegrationV1PlaceholdersValidateGet) | **GET** /api/integration/v1/placeholders/validate | Validate the provided placeholder format |


## `apiIntegrationV1PlaceholdersGet()`

```php
apiIntegrationV1PlaceholdersGet(): \SmartCat\Model\PlaceholderFormatModel[]
```

Fetch all placeholder formats available in the current account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\PlaceholderFormatApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1PlaceholdersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaceholderFormatApiApi->apiIntegrationV1PlaceholdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\PlaceholderFormatModel[]**](../Model/PlaceholderFormatModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1PlaceholdersPut()`

```php
apiIntegrationV1PlaceholdersPut($placeholderFormatModel)
```

Save placeholder formats set for the specified account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\PlaceholderFormatApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeholderFormatModel = array(new \SmartCat\Model\PlaceholderFormatModel()); // \SmartCat\Model\PlaceholderFormatModel[] | Placeholder formats list

try {
    $apiInstance->apiIntegrationV1PlaceholdersPut($placeholderFormatModel);
} catch (Exception $e) {
    echo 'Exception when calling PlaceholderFormatApiApi->apiIntegrationV1PlaceholdersPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placeholderFormatModel** | [**\SmartCat\Model\PlaceholderFormatModel[]**](../Model/PlaceholderFormatModel.md)| Placeholder formats list | [optional] |

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

## `apiIntegrationV1PlaceholdersValidateGet()`

```php
apiIntegrationV1PlaceholdersValidateGet($format)
```

Validate the provided placeholder format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\PlaceholderFormatApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$format = 'format_example'; // string | Placeholder format regular expression

try {
    $apiInstance->apiIntegrationV1PlaceholdersValidateGet($format);
} catch (Exception $e) {
    echo 'Exception when calling PlaceholderFormatApiApi->apiIntegrationV1PlaceholdersValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **format** | **string**| Placeholder format regular expression | [optional] |

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
