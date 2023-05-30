# SmartCat\SmartTranslationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1SmartTranslationTranslatePost()**](SmartTranslationApi.md#apiIntegrationV1SmartTranslationTranslatePost) | **POST** /api/integration/v1/smartTranslation/translate | Fetch translation |


## `apiIntegrationV1SmartTranslationTranslatePost()`

```php
apiIntegrationV1SmartTranslationTranslatePost($smartTranslationRequest): \SmartCat\Model\SmartTranslationResponse
```

Fetch translation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\SmartTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$smartTranslationRequest = new \SmartCat\Model\SmartTranslationRequest(); // \SmartCat\Model\SmartTranslationRequest

try {
    $result = $apiInstance->apiIntegrationV1SmartTranslationTranslatePost($smartTranslationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTranslationApi->apiIntegrationV1SmartTranslationTranslatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **smartTranslationRequest** | [**\SmartCat\Model\SmartTranslationRequest**](../Model/SmartTranslationRequest.md)|  | [optional] |

### Return type

[**\SmartCat\Model\SmartTranslationResponse**](../Model/SmartTranslationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
