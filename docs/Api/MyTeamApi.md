# SmartCat\MyTeamApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1AccountMyTeamGet()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamGet) | **GET** /api/integration/v1/account/myTeam | Fetch a MyTeam member model by external ID |
| [**apiIntegrationV1AccountMyTeamPost()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamPost) | **POST** /api/integration/v1/account/myTeam | Add an in-house translator to MyTeam as a linguist |
| [**apiIntegrationV1AccountMyTeamUserIdCommentPut()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamUserIdCommentPut) | **PUT** /api/integration/v1/account/myTeam/{userId}/comment | Add a comment to a MyTeam member profile |
| [**apiIntegrationV1AccountMyTeamUserIdDelete()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamUserIdDelete) | **DELETE** /api/integration/v1/account/myTeam/{userId} | Delete the user from MyTeam |
| [**apiIntegrationV1AccountMyTeamUserIdGet()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamUserIdGet) | **GET** /api/integration/v1/account/myTeam/{userId} | Fetch a MyTeam member model by ID |
| [**apiIntegrationV1AccountMyTeamUserIdPhonePut()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamUserIdPhonePut) | **PUT** /api/integration/v1/account/myTeam/{userId}/phone | Add a MyTeam member&#39;s phone number |
| [**apiIntegrationV1AccountMyTeamUserIdServicesReplacePost()**](MyTeamApi.md#apiIntegrationV1AccountMyTeamUserIdServicesReplacePost) | **POST** /api/integration/v1/account/myTeam/{userId}/services/replace | Replace all services in a MyTeam profile |
| [**apiIntegrationV1AccountSearchMyTeamPost()**](MyTeamApi.md#apiIntegrationV1AccountSearchMyTeamPost) | **POST** /api/integration/v1/account/searchMyTeam | Search for linguists in MyTeam |


## `apiIntegrationV1AccountMyTeamGet()`

```php
apiIntegrationV1AccountMyTeamGet($externalId): \SmartCat\Model\MyTeamMemberModel
```

Fetch a MyTeam member model by external ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$externalId = 'externalId_example'; // string | User external ID

try {
    $result = $apiInstance->apiIntegrationV1AccountMyTeamGet($externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **externalId** | **string**| User external ID | [optional] |

### Return type

[**\SmartCat\Model\MyTeamMemberModel**](../Model/MyTeamMemberModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1AccountMyTeamPost()`

```php
apiIntegrationV1AccountMyTeamPost($inhouseTranslatorCreationModel): \SmartCat\Model\MyTeamMemberModel
```

Add an in-house translator to MyTeam as a linguist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inhouseTranslatorCreationModel = new \SmartCat\Model\InhouseTranslatorCreationModel(); // \SmartCat\Model\InhouseTranslatorCreationModel | Model of adding an in-house translator as a linguist

try {
    $result = $apiInstance->apiIntegrationV1AccountMyTeamPost($inhouseTranslatorCreationModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inhouseTranslatorCreationModel** | [**\SmartCat\Model\InhouseTranslatorCreationModel**](../Model/InhouseTranslatorCreationModel.md)| Model of adding an in-house translator as a linguist | [optional] |

### Return type

[**\SmartCat\Model\MyTeamMemberModel**](../Model/MyTeamMemberModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1AccountMyTeamUserIdCommentPut()`

```php
apiIntegrationV1AccountMyTeamUserIdCommentPut($userId, $body)
```

Add a comment to a MyTeam member profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | User ID
$body = 'body_example'; // string | Commentary

try {
    $apiInstance->apiIntegrationV1AccountMyTeamUserIdCommentPut($userId, $body);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamUserIdCommentPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User ID | |
| **body** | **string**| Commentary | [optional] |

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

## `apiIntegrationV1AccountMyTeamUserIdDelete()`

```php
apiIntegrationV1AccountMyTeamUserIdDelete($userId)
```

Delete the user from MyTeam

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | User ID

try {
    $apiInstance->apiIntegrationV1AccountMyTeamUserIdDelete($userId);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User ID | |

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

## `apiIntegrationV1AccountMyTeamUserIdGet()`

```php
apiIntegrationV1AccountMyTeamUserIdGet($userId): \SmartCat\Model\MyTeamMemberModel
```

Fetch a MyTeam member model by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | User ID

try {
    $result = $apiInstance->apiIntegrationV1AccountMyTeamUserIdGet($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User ID | |

### Return type

[**\SmartCat\Model\MyTeamMemberModel**](../Model/MyTeamMemberModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1AccountMyTeamUserIdPhonePut()`

```php
apiIntegrationV1AccountMyTeamUserIdPhonePut($userId, $body)
```

Add a MyTeam member's phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | User ID
$body = 'body_example'; // string | Phone number

try {
    $apiInstance->apiIntegrationV1AccountMyTeamUserIdPhonePut($userId, $body);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamUserIdPhonePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User ID | |
| **body** | **string**| Phone number | [optional] |

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

## `apiIntegrationV1AccountMyTeamUserIdServicesReplacePost()`

```php
apiIntegrationV1AccountMyTeamUserIdServicesReplacePost($userId, $replaceServicesModel)
```

Replace all services in a MyTeam profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | User ID
$replaceServicesModel = new \SmartCat\Model\ReplaceServicesModel(); // \SmartCat\Model\ReplaceServicesModel | All service replacement model

try {
    $apiInstance->apiIntegrationV1AccountMyTeamUserIdServicesReplacePost($userId, $replaceServicesModel);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountMyTeamUserIdServicesReplacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User ID | |
| **replaceServicesModel** | [**\SmartCat\Model\ReplaceServicesModel**](../Model/ReplaceServicesModel.md)| All service replacement model | [optional] |

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

## `apiIntegrationV1AccountSearchMyTeamPost()`

```php
apiIntegrationV1AccountSearchMyTeamPost($myTeamSearchRequestModel): \SmartCat\Model\MyTeamMemberModel[]
```

Search for linguists in MyTeam

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\MyTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$myTeamSearchRequestModel = new \SmartCat\Model\MyTeamSearchRequestModel(); // \SmartCat\Model\MyTeamSearchRequestModel | Linguist search model

try {
    $result = $apiInstance->apiIntegrationV1AccountSearchMyTeamPost($myTeamSearchRequestModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyTeamApi->apiIntegrationV1AccountSearchMyTeamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **myTeamSearchRequestModel** | [**\SmartCat\Model\MyTeamSearchRequestModel**](../Model/MyTeamSearchRequestModel.md)| Linguist search model | [optional] |

### Return type

[**\SmartCat\Model\MyTeamMemberModel[]**](../Model/MyTeamMemberModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
