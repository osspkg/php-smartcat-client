# SmartCat\ProjectTaskApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1ProjectTaskProjectIdListGet()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdListGet) | **GET** /api/integration/v1/projectTask/{projectId}/list | Get a list of project tasks |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdDeadlinePut()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdDeadlinePut) | **PUT** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/deadline | Set a deadline for the task |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdGet()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdGet) | **GET** /api/integration/v1/projectTask/{projectId}/{projectTaskId} | Get information regarding task projectTaskId for project projectId |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentDelete()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentDelete) | **DELETE** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/individual-assignment | Delete individual assignment |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentPut()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentPut) | **PUT** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/individual-assignment | Assign individual suppliers to perform task projectTaskId |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdMergePost()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdMergePost) | **POST** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/merge | Merge task projectTaskId with tasks request  All merged tasks must belong to the same stage Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskModel.StageId,  have the same target language Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskModel.TargetLanguage and have no agencies/companies assigned to the task  During the merge process, existing supplier assignments will be removed. Tasks will be merged and become inaccessible.  As a result of the operation, a new task is created, which includes all the scope of work from the merged tasks. |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdPayablesGet()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdPayablesGet) | **GET** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/payables | Get information about payments to suppliers for the work on task projectTaskId |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdScopeGet()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdScopeGet) | **GET** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/scope | Get information about the scope of work, regarding task  projectTaskId for project projectId |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSetInvitationStrategyTypePut()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSetInvitationStrategyTypePut) | **PUT** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/set-invitation-strategy-type | Set the mode of access to perform the work for those who accepted the invitation |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitByPartsPartsCountPost()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitByPartsPartsCountPost) | **POST** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/splitByParts/{partsCount} | Split task into partsCount parts |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitPost()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitPost) | **POST** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/split | Move the task volume to another task |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentDelete()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentDelete) | **DELETE** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/vendor-assignment | Remove supplier assignment |
| [**apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentPut()**](ProjectTaskApi.md#apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentPut) | **PUT** /api/integration/v1/projectTask/{projectId}/{projectTaskId}/vendor-assignment | Assign a supplier to perform task  projectTaskId |


## `apiIntegrationV1ProjectTaskProjectIdListGet()`

```php
apiIntegrationV1ProjectTaskProjectIdListGet($projectId, $currency, $skip, $limit): \SmartCat\Model\ProjectTaskModel[]
```

Get a list of project tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$currency = new \SmartCat\Model\Currency(); // Currency | Code of the currency used to recalculate supplier rates and the cost of work  AbbyyLS.Web.Currency
$skip = 0; // int | Number of skipped items
$limit = 20; // int | Maximum number of tasks in the response (no more than 20)

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdListGet($projectId, $currency, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **currency** | [**Currency**](../Model/.md)| Code of the currency used to recalculate supplier rates and the cost of work  AbbyyLS.Web.Currency | |
| **skip** | **int**| Number of skipped items | [optional] [default to 0] |
| **limit** | **int**| Maximum number of tasks in the response (no more than 20) | [optional] [default to 20] |

### Return type

[**\SmartCat\Model\ProjectTaskModel[]**](../Model/ProjectTaskModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdDeadlinePut()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdDeadlinePut($projectId, $projectTaskId, $deadline): bool
```

Set a deadline for the task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$deadline = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Task deadline

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdDeadlinePut($projectId, $projectTaskId, $deadline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdDeadlinePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **deadline** | **\DateTime**| Task deadline | [optional] |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdGet()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdGet($projectId, $projectTaskId, $currency): \SmartCat\Model\ProjectTaskModel
```

Get information regarding task projectTaskId for project projectId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$currency = new \SmartCat\Model\Currency(); // Currency | Code of the currency used to recalculate supplier rates and the cost of work AbbyyLS.Web.Currency

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdGet($projectId, $projectTaskId, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **currency** | [**Currency**](../Model/.md)| Code of the currency used to recalculate supplier rates and the cost of work AbbyyLS.Web.Currency | |

### Return type

[**\SmartCat\Model\ProjectTaskModel**](../Model/ProjectTaskModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentDelete()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentDelete($projectId, $projectTaskId, $userId): bool
```

Delete individual assignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$userId = 'userId_example'; // string | ID of the user whose assignment is to be removed

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentDelete($projectId, $projectTaskId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **userId** | **string**| ID of the user whose assignment is to be removed | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentPut()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentPut($individualAssignmentRequestModel, $projectId, $projectTaskId): bool
```

Assign individual suppliers to perform task projectTaskId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$individualAssignmentRequestModel = new \SmartCat\Model\IndividualAssignmentRequestModel(); // \SmartCat\Model\IndividualAssignmentRequestModel | Request for assignment of individual suppliers
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentPut($individualAssignmentRequestModel, $projectId, $projectTaskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdIndividualAssignmentPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **individualAssignmentRequestModel** | [**\SmartCat\Model\IndividualAssignmentRequestModel**](../Model/IndividualAssignmentRequestModel.md)| Request for assignment of individual suppliers | |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdMergePost()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdMergePost($projectId, $projectTaskId, $projectTaskMergeRequest): \SmartCat\Model\MergeProjectTasksResponse
```

Merge task projectTaskId with tasks request  All merged tasks must belong to the same stage Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskModel.StageId,  have the same target language Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskModel.TargetLanguage and have no agencies/companies assigned to the task  During the merge process, existing supplier assignments will be removed. Tasks will be merged and become inaccessible.  As a result of the operation, a new task is created, which includes all the scope of work from the merged tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$projectTaskMergeRequest = new \SmartCat\Model\ProjectTaskMergeRequest(); // \SmartCat\Model\ProjectTaskMergeRequest | Data required to merge tasks

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdMergePost($projectId, $projectTaskId, $projectTaskMergeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdMergePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **projectTaskMergeRequest** | [**\SmartCat\Model\ProjectTaskMergeRequest**](../Model/ProjectTaskMergeRequest.md)| Data required to merge tasks | [optional] |

### Return type

[**\SmartCat\Model\MergeProjectTasksResponse**](../Model/MergeProjectTasksResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdPayablesGet()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdPayablesGet($projectId, $projectTaskId, $currency, $skip, $limit): \SmartCat\Model\ProjectTaskJobModel[]
```

Get information about payments to suppliers for the work on task projectTaskId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$currency = new \SmartCat\Model\Currency(); // Currency | Code of the currency used to calculate the cost of work
$skip = 0; // int | Number of skipped items
$limit = 100; // int | Maximum number of elements in the response (no more than 100)

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdPayablesGet($projectId, $projectTaskId, $currency, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdPayablesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **currency** | [**Currency**](../Model/.md)| Code of the currency used to calculate the cost of work | |
| **skip** | **int**| Number of skipped items | [optional] [default to 0] |
| **limit** | **int**| Maximum number of elements in the response (no more than 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\ProjectTaskJobModel[]**](../Model/ProjectTaskJobModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdScopeGet()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdScopeGet($projectId, $projectTaskId, $currency, $skip, $limit): \SmartCat\Model\ProjectTaskScopeModel[]
```

Get information about the scope of work, regarding task  projectTaskId for project projectId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$currency = new \SmartCat\Model\Currency(); // Currency | Code of the currency used to calculate the cost of work
$skip = 0; // int | Number of skipped items
$limit = 100; // int | Maximum number of elements in the response (no more than 100)

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdScopeGet($projectId, $projectTaskId, $currency, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdScopeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **currency** | [**Currency**](../Model/.md)| Code of the currency used to calculate the cost of work | |
| **skip** | **int**| Number of skipped items | [optional] [default to 0] |
| **limit** | **int**| Maximum number of elements in the response (no more than 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\ProjectTaskScopeModel[]**](../Model/ProjectTaskScopeModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSetInvitationStrategyTypePut()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSetInvitationStrategyTypePut($projectId, $projectTaskId, $invitationStrategyType): bool
```

Set the mode of access to perform the work for those who accepted the invitation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$invitationStrategyType = new \SmartCat\Model\ProjectTaskIndividualInvitationStrategyType(); // ProjectTaskIndividualInvitationStrategyType | Mode of access to the work for those who accepted the invitation

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSetInvitationStrategyTypePut($projectId, $projectTaskId, $invitationStrategyType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSetInvitationStrategyTypePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **invitationStrategyType** | [**ProjectTaskIndividualInvitationStrategyType**](../Model/.md)| Mode of access to the work for those who accepted the invitation | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitByPartsPartsCountPost()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitByPartsPartsCountPost($projectId, $projectTaskId, $partsCount, $preserveAssignments): \SmartCat\Model\SplitProjectTaskByPartsResponse
```

Split task into partsCount parts

Available for accounts with subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$partsCount = 56; // int | Number of parts to divide the task into
$preserveAssignments = false; // bool | Specifies whether assignments should be moved from the parent task

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitByPartsPartsCountPost($projectId, $projectTaskId, $partsCount, $preserveAssignments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitByPartsPartsCountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **partsCount** | **int**| Number of parts to divide the task into | |
| **preserveAssignments** | **bool**| Specifies whether assignments should be moved from the parent task | [optional] [default to false] |

### Return type

[**\SmartCat\Model\SplitProjectTaskByPartsResponse**](../Model/SplitProjectTaskByPartsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitPost()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitPost($projectId, $projectTaskId, $splitProjectTaskRequest): \SmartCat\Model\SplitProjectTaskResponse
```

Move the task volume to another task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$splitProjectTaskRequest = new \SmartCat\Model\SplitProjectTaskRequest(); // \SmartCat\Model\SplitProjectTaskRequest | Data required to move the task volume

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitPost($projectId, $projectTaskId, $splitProjectTaskRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdSplitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **splitProjectTaskRequest** | [**\SmartCat\Model\SplitProjectTaskRequest**](../Model/SplitProjectTaskRequest.md)| Data required to move the task volume | [optional] |

### Return type

[**\SmartCat\Model\SplitProjectTaskResponse**](../Model/SplitProjectTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentDelete()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentDelete($projectId, $projectTaskId, $vendorAccountId): bool
```

Remove supplier assignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID
$vendorAccountId = 'vendorAccountId_example'; // string | Identifier of the supplier account whose assignment is to be removed

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentDelete($projectId, $projectTaskId, $vendorAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |
| **vendorAccountId** | **string**| Identifier of the supplier account whose assignment is to be removed | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentPut()`

```php
apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentPut($vendorAssignmentRequestModel, $projectId, $projectTaskId): bool
```

Assign a supplier to perform task  projectTaskId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vendorAssignmentRequestModel = new \SmartCat\Model\VendorAssignmentRequestModel(); // \SmartCat\Model\VendorAssignmentRequestModel | Request for assignment of a supplier
$projectId = 'projectId_example'; // string | Project ID
$projectTaskId = 'projectTaskId_example'; // string | Task ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentPut($vendorAssignmentRequestModel, $projectId, $projectTaskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTaskApi->apiIntegrationV1ProjectTaskProjectIdProjectTaskIdVendorAssignmentPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vendorAssignmentRequestModel** | [**\SmartCat\Model\VendorAssignmentRequestModel**](../Model/VendorAssignmentRequestModel.md)| Request for assignment of a supplier | |
| **projectId** | **string**| Project ID | |
| **projectTaskId** | **string**| Task ID | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
