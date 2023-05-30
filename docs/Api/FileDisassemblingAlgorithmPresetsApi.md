# SmartCat\FileDisassemblingAlgorithmPresetsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1FileDisassemblingAlgorithmPresetsGet()**](FileDisassemblingAlgorithmPresetsApi.md#apiIntegrationV1FileDisassemblingAlgorithmPresetsGet) | **GET** /api/integration/v1/fileDisassemblingAlgorithmPresets | Fetch all presets for the account |
| [**apiIntegrationV1FileDisassemblingAlgorithmPresetsIdDelete()**](FileDisassemblingAlgorithmPresetsApi.md#apiIntegrationV1FileDisassemblingAlgorithmPresetsIdDelete) | **DELETE** /api/integration/v1/fileDisassemblingAlgorithmPresets/{id} | Delete a preset |
| [**apiIntegrationV1FileDisassemblingAlgorithmPresetsIdGet()**](FileDisassemblingAlgorithmPresetsApi.md#apiIntegrationV1FileDisassemblingAlgorithmPresetsIdGet) | **GET** /api/integration/v1/fileDisassemblingAlgorithmPresets/{id} | Fetch a disassembly algorithm preset |
| [**apiIntegrationV1FileDisassemblingAlgorithmPresetsIdPut()**](FileDisassemblingAlgorithmPresetsApi.md#apiIntegrationV1FileDisassemblingAlgorithmPresetsIdPut) | **PUT** /api/integration/v1/fileDisassemblingAlgorithmPresets/{id} | Update a disassembly algorithm preset |
| [**apiIntegrationV1FileDisassemblingAlgorithmPresetsPost()**](FileDisassemblingAlgorithmPresetsApi.md#apiIntegrationV1FileDisassemblingAlgorithmPresetsPost) | **POST** /api/integration/v1/fileDisassemblingAlgorithmPresets | Create a disassembly algorithm preset |


## `apiIntegrationV1FileDisassemblingAlgorithmPresetsGet()`

```php
apiIntegrationV1FileDisassemblingAlgorithmPresetsGet(): \SmartCat\Model\FileDisassemblingAlgorithmPresetViewModel[]
```

Fetch all presets for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileDisassemblingAlgorithmPresetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1FileDisassemblingAlgorithmPresetsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileDisassemblingAlgorithmPresetsApi->apiIntegrationV1FileDisassemblingAlgorithmPresetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\FileDisassemblingAlgorithmPresetViewModel[]**](../Model/FileDisassemblingAlgorithmPresetViewModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1FileDisassemblingAlgorithmPresetsIdDelete()`

```php
apiIntegrationV1FileDisassemblingAlgorithmPresetsIdDelete($id)
```

Delete a preset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileDisassemblingAlgorithmPresetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID of the preset to be deleted

try {
    $apiInstance->apiIntegrationV1FileDisassemblingAlgorithmPresetsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FileDisassemblingAlgorithmPresetsApi->apiIntegrationV1FileDisassemblingAlgorithmPresetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the preset to be deleted | |

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

## `apiIntegrationV1FileDisassemblingAlgorithmPresetsIdGet()`

```php
apiIntegrationV1FileDisassemblingAlgorithmPresetsIdGet($id): \SmartCat\Model\FileDisassemblingAlgorithmPresetViewModel
```

Fetch a disassembly algorithm preset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileDisassemblingAlgorithmPresetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Preset ID

try {
    $result = $apiInstance->apiIntegrationV1FileDisassemblingAlgorithmPresetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileDisassemblingAlgorithmPresetsApi->apiIntegrationV1FileDisassemblingAlgorithmPresetsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Preset ID | |

### Return type

[**\SmartCat\Model\FileDisassemblingAlgorithmPresetViewModel**](../Model/FileDisassemblingAlgorithmPresetViewModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1FileDisassemblingAlgorithmPresetsIdPut()`

```php
apiIntegrationV1FileDisassemblingAlgorithmPresetsIdPut($fileDisassemblingAlgorithmPresetEditModel, $id)
```

Update a disassembly algorithm preset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileDisassemblingAlgorithmPresetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileDisassemblingAlgorithmPresetEditModel = new \SmartCat\Model\FileDisassemblingAlgorithmPresetEditModel(); // \SmartCat\Model\FileDisassemblingAlgorithmPresetEditModel | Update preset model
$id = 'id_example'; // string | ID of the preset to be updated

try {
    $apiInstance->apiIntegrationV1FileDisassemblingAlgorithmPresetsIdPut($fileDisassemblingAlgorithmPresetEditModel, $id);
} catch (Exception $e) {
    echo 'Exception when calling FileDisassemblingAlgorithmPresetsApi->apiIntegrationV1FileDisassemblingAlgorithmPresetsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fileDisassemblingAlgorithmPresetEditModel** | [**\SmartCat\Model\FileDisassemblingAlgorithmPresetEditModel**](../Model/FileDisassemblingAlgorithmPresetEditModel.md)| Update preset model | |
| **id** | **string**| ID of the preset to be updated | |

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

## `apiIntegrationV1FileDisassemblingAlgorithmPresetsPost()`

```php
apiIntegrationV1FileDisassemblingAlgorithmPresetsPost($fileDisassemblingAlgorithmPresetEditModel): \SmartCat\Model\FileDisassemblingAlgorithmPresetCreatedModel
```

Create a disassembly algorithm preset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\FileDisassemblingAlgorithmPresetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileDisassemblingAlgorithmPresetEditModel = new \SmartCat\Model\FileDisassemblingAlgorithmPresetEditModel(); // \SmartCat\Model\FileDisassemblingAlgorithmPresetEditModel | Creation preset model

try {
    $result = $apiInstance->apiIntegrationV1FileDisassemblingAlgorithmPresetsPost($fileDisassemblingAlgorithmPresetEditModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileDisassemblingAlgorithmPresetsApi->apiIntegrationV1FileDisassemblingAlgorithmPresetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fileDisassemblingAlgorithmPresetEditModel** | [**\SmartCat\Model\FileDisassemblingAlgorithmPresetEditModel**](../Model/FileDisassemblingAlgorithmPresetEditModel.md)| Creation preset model | |

### Return type

[**\SmartCat\Model\FileDisassemblingAlgorithmPresetCreatedModel**](../Model/FileDisassemblingAlgorithmPresetCreatedModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
