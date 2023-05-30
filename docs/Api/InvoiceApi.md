# SmartCat\InvoiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1InvoiceJobListGet()**](InvoiceApi.md#apiIntegrationV1InvoiceJobListGet) | **GET** /api/integration/v1/invoice/job/list | Fetch an array of freelancer payments by ID |
| [**apiIntegrationV1InvoiceJobPost()**](InvoiceApi.md#apiIntegrationV1InvoiceJobPost) | **POST** /api/integration/v1/invoice/job | Create payment to freelancer |
| [**apiIntegrationV1InvoiceJobsPost()**](InvoiceApi.md#apiIntegrationV1InvoiceJobsPost) | **POST** /api/integration/v1/invoice/jobs | Create an array of freelancer payments |
| [**apiIntegrationV2ClientAgentInvoiceListGet()**](InvoiceApi.md#apiIntegrationV2ClientAgentInvoiceListGet) | **GET** /api/integration/v2/client-agent-invoice/list | Fetch a list of agent invoices |
| [**apiIntegrationV2InvoiceJobListByCreatedDateGet()**](InvoiceApi.md#apiIntegrationV2InvoiceJobListByCreatedDateGet) | **GET** /api/integration/v2/invoice/job/listByCreatedDate | Fetch an array of payments by creation date |
| [**apiIntegrationV2InvoiceJobListByExternalIdGet()**](InvoiceApi.md#apiIntegrationV2InvoiceJobListByExternalIdGet) | **GET** /api/integration/v2/invoice/job/listByExternalId | Fetch an array of payments by ID |
| [**apiIntegrationV2InvoiceJobPost()**](InvoiceApi.md#apiIntegrationV2InvoiceJobPost) | **POST** /api/integration/v2/invoice/job | Create a payment |
| [**apiIntegrationV2InvoiceJobsPost()**](InvoiceApi.md#apiIntegrationV2InvoiceJobsPost) | **POST** /api/integration/v2/invoice/jobs | Create a payments array |
| [**apiIntegrationV2InvoiceListGet()**](InvoiceApi.md#apiIntegrationV2InvoiceListGet) | **GET** /api/integration/v2/invoice/list | Fetch a list of invoices created within the specified period |


## `apiIntegrationV1InvoiceJobListGet()`

```php
apiIntegrationV1InvoiceJobListGet($externalIds): \SmartCat\Model\JobModel[]
```

Fetch an array of freelancer payments by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$externalIds = array('externalIds_example'); // string[] | External payment IDs

try {
    $result = $apiInstance->apiIntegrationV1InvoiceJobListGet($externalIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV1InvoiceJobListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **externalIds** | [**string[]**](../Model/string.md)| External payment IDs | |

### Return type

[**\SmartCat\Model\JobModel[]**](../Model/JobModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1InvoiceJobPost()`

```php
apiIntegrationV1InvoiceJobPost($importJobModel): string
```

Create payment to freelancer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importJobModel = new \SmartCat\Model\ImportJobModel(); // \SmartCat\Model\ImportJobModel | Freelancer payment creation parameters

try {
    $result = $apiInstance->apiIntegrationV1InvoiceJobPost($importJobModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV1InvoiceJobPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importJobModel** | [**\SmartCat\Model\ImportJobModel**](../Model/ImportJobModel.md)| Freelancer payment creation parameters | |

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

## `apiIntegrationV1InvoiceJobsPost()`

```php
apiIntegrationV1InvoiceJobsPost($importJobModel): \SmartCat\Model\JobModel[]
```

Create an array of freelancer payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importJobModel = array(new \SmartCat\Model\ImportJobModel()); // \SmartCat\Model\ImportJobModel[] | Freelancer payment creation parameters

try {
    $result = $apiInstance->apiIntegrationV1InvoiceJobsPost($importJobModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV1InvoiceJobsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importJobModel** | [**\SmartCat\Model\ImportJobModel[]**](../Model/ImportJobModel.md)| Freelancer payment creation parameters | |

### Return type

[**\SmartCat\Model\JobModel[]**](../Model/JobModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2ClientAgentInvoiceListGet()`

```php
apiIntegrationV2ClientAgentInvoiceListGet($dateFrom, $dateTo, $limit): \SmartCat\Model\ClientAgentInvoiceModel[]
```

Fetch a list of agent invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Period start (inclusive)
$dateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Period end (inclusive)
$limit = 56; // int | Limit

try {
    $result = $apiInstance->apiIntegrationV2ClientAgentInvoiceListGet($dateFrom, $dateTo, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV2ClientAgentInvoiceListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dateFrom** | **\DateTime**| Period start (inclusive) | [optional] |
| **dateTo** | **\DateTime**| Period end (inclusive) | [optional] |
| **limit** | **int**| Limit | [optional] |

### Return type

[**\SmartCat\Model\ClientAgentInvoiceModel[]**](../Model/ClientAgentInvoiceModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2InvoiceJobListByCreatedDateGet()`

```php
apiIntegrationV2InvoiceJobListByCreatedDateGet($dateCreatedFrom, $dateCreatedTo, $limit): \SmartCat\Model\JobModelV2[]
```

Fetch an array of payments by creation date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dateCreatedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Fetch the payments created after the specified date
$dateCreatedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Fetch the payments created before the specified date
$limit = 100; // int | Maximum returned items

try {
    $result = $apiInstance->apiIntegrationV2InvoiceJobListByCreatedDateGet($dateCreatedFrom, $dateCreatedTo, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV2InvoiceJobListByCreatedDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dateCreatedFrom** | **\DateTime**| Fetch the payments created after the specified date | |
| **dateCreatedTo** | **\DateTime**| Fetch the payments created before the specified date | |
| **limit** | **int**| Maximum returned items | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\JobModelV2[]**](../Model/JobModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2InvoiceJobListByExternalIdGet()`

```php
apiIntegrationV2InvoiceJobListByExternalIdGet($externalIds): \SmartCat\Model\JobModelV2[]
```

Fetch an array of payments by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$externalIds = array('externalIds_example'); // string[] | External payment ID

try {
    $result = $apiInstance->apiIntegrationV2InvoiceJobListByExternalIdGet($externalIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV2InvoiceJobListByExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **externalIds** | [**string[]**](../Model/string.md)| External payment ID | |

### Return type

[**\SmartCat\Model\JobModelV2[]**](../Model/JobModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2InvoiceJobPost()`

```php
apiIntegrationV2InvoiceJobPost($importJobModelV2): string
```

Create a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importJobModelV2 = new \SmartCat\Model\ImportJobModelV2(); // \SmartCat\Model\ImportJobModelV2 | Payment creation parameters

try {
    $result = $apiInstance->apiIntegrationV2InvoiceJobPost($importJobModelV2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV2InvoiceJobPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importJobModelV2** | [**\SmartCat\Model\ImportJobModelV2**](../Model/ImportJobModelV2.md)| Payment creation parameters | |

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

## `apiIntegrationV2InvoiceJobsPost()`

```php
apiIntegrationV2InvoiceJobsPost($importJobModelV2): \SmartCat\Model\JobModelV2[]
```

Create a payments array

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importJobModelV2 = array(new \SmartCat\Model\ImportJobModelV2()); // \SmartCat\Model\ImportJobModelV2[] | Payment creation parameters

try {
    $result = $apiInstance->apiIntegrationV2InvoiceJobsPost($importJobModelV2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV2InvoiceJobsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importJobModelV2** | [**\SmartCat\Model\ImportJobModelV2[]**](../Model/ImportJobModelV2.md)| Payment creation parameters | |

### Return type

[**\SmartCat\Model\JobModelV2[]**](../Model/JobModelV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2InvoiceListGet()`

```php
apiIntegrationV2InvoiceListGet($dateCreatedFrom, $dateCreatedTo, $limit, $skip): \SmartCat\Model\InvoiceModel[]
```

Fetch a list of invoices created within the specified period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dateCreatedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Period start (inclusive)
$dateCreatedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Period end (inclusive)
$limit = 10; // int | Maximum returned items (not more than 10)
$skip = 0; // int | Number of skipped items

try {
    $result = $apiInstance->apiIntegrationV2InvoiceListGet($dateCreatedFrom, $dateCreatedTo, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->apiIntegrationV2InvoiceListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dateCreatedFrom** | **\DateTime**| Period start (inclusive) | |
| **dateCreatedTo** | **\DateTime**| Period end (inclusive) | |
| **limit** | **int**| Maximum returned items (not more than 10) | [optional] [default to 10] |
| **skip** | **int**| Number of skipped items | [optional] [default to 0] |

### Return type

[**\SmartCat\Model\InvoiceModel[]**](../Model/InvoiceModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
