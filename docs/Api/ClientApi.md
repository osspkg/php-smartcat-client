# SmartCat\ClientApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1ClientClientIdContactPut()**](ClientApi.md#apiIntegrationV1ClientClientIdContactPut) | **PUT** /api/integration/v1/client/{clientId}/contact | Sets contact details for the specified client |
| [**apiIntegrationV1ClientClientIdGet()**](ClientApi.md#apiIntegrationV1ClientClientIdGet) | **GET** /api/integration/v1/client/{clientId} | Fetch the client account information |
| [**apiIntegrationV1ClientClientIdSetPut()**](ClientApi.md#apiIntegrationV1ClientClientIdSetPut) | **PUT** /api/integration/v1/client/{clientId}/set | Apply the specified net rate to the specified client |
| [**apiIntegrationV1ClientCreatePost()**](ClientApi.md#apiIntegrationV1ClientCreatePost) | **POST** /api/integration/v1/client/create | Create a new client with the specified name and return their ID  Simply return the ID if a client with that name already exists |
| [**apiIntegrationV2ClientClientIdGet()**](ClientApi.md#apiIntegrationV2ClientClientIdGet) | **GET** /api/integration/v2/client/{clientId} | Fetch the client account information |
| [**apiIntegrationV2ClientClientIdPut()**](ClientApi.md#apiIntegrationV2ClientClientIdPut) | **PUT** /api/integration/v2/client/{clientId} | Update client details |


## `apiIntegrationV1ClientClientIdContactPut()`

```php
apiIntegrationV1ClientClientIdContactPut($contactModel, $clientId): \SmartCat\Model\ClientModel
```

Sets contact details for the specified client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactModel = new \SmartCat\Model\ContactModel(); // \SmartCat\Model\ContactModel | Contact details
$clientId = 'clientId_example'; // string | Client ID

try {
    $result = $apiInstance->apiIntegrationV1ClientClientIdContactPut($contactModel, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiIntegrationV1ClientClientIdContactPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactModel** | [**\SmartCat\Model\ContactModel**](../Model/ContactModel.md)| Contact details | |
| **clientId** | **string**| Client ID | |

### Return type

[**\SmartCat\Model\ClientModel**](../Model/ClientModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ClientClientIdGet()`

```php
apiIntegrationV1ClientClientIdGet($clientId): \SmartCat\Model\ClientModel
```

Fetch the client account information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clientId = 'clientId_example'; // string | Client ID

try {
    $result = $apiInstance->apiIntegrationV1ClientClientIdGet($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiIntegrationV1ClientClientIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientId** | **string**| Client ID | |

### Return type

[**\SmartCat\Model\ClientModel**](../Model/ClientModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ClientClientIdSetPut()`

```php
apiIntegrationV1ClientClientIdSetPut($clientId, $netRateId): \SmartCat\Model\ClientModel
```

Apply the specified net rate to the specified client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clientId = 'clientId_example'; // string | Client ID
$netRateId = 'netRateId_example'; // string | Net rate ID

try {
    $result = $apiInstance->apiIntegrationV1ClientClientIdSetPut($clientId, $netRateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiIntegrationV1ClientClientIdSetPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientId** | **string**| Client ID | |
| **netRateId** | **string**| Net rate ID | |

### Return type

[**\SmartCat\Model\ClientModel**](../Model/ClientModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ClientCreatePost()`

```php
apiIntegrationV1ClientCreatePost($body): string
```

Create a new client with the specified name and return their ID  Simply return the ID if a client with that name already exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | Client name

try {
    $result = $apiInstance->apiIntegrationV1ClientCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiIntegrationV1ClientCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**| Client name | |

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

## `apiIntegrationV2ClientClientIdGet()`

```php
apiIntegrationV2ClientClientIdGet($clientId): \SmartCat\Model\ClientModelV2
```

Fetch the client account information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clientId = 'clientId_example'; // string | Client ID

try {
    $result = $apiInstance->apiIntegrationV2ClientClientIdGet($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiIntegrationV2ClientClientIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientId** | **string**| Client ID | |

### Return type

[**\SmartCat\Model\ClientModelV2**](../Model/ClientModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2ClientClientIdPut()`

```php
apiIntegrationV2ClientClientIdPut($updateClientModel, $clientId): \SmartCat\Model\ClientModelV2
```

Update client details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updateClientModel = new \SmartCat\Model\UpdateClientModel(); // \SmartCat\Model\UpdateClientModel | Client update model
$clientId = 'clientId_example'; // string | Client ID

try {
    $result = $apiInstance->apiIntegrationV2ClientClientIdPut($updateClientModel, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiIntegrationV2ClientClientIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateClientModel** | [**\SmartCat\Model\UpdateClientModel**](../Model/UpdateClientModel.md)| Client update model | |
| **clientId** | **string**| Client ID | |

### Return type

[**\SmartCat\Model\ClientModelV2**](../Model/ClientModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
