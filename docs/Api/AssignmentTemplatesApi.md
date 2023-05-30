# SmartCat\AssignmentTemplatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost()**](AssignmentTemplatesApi.md#apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost) | **POST** /api/integration/v1/assignment-templates/{assignmentTemplateId}/project/{projectId} | Apply an assignment template to the project |
| [**apiIntegrationV1AssignmentTemplatesProjectProjectIdGet()**](AssignmentTemplatesApi.md#apiIntegrationV1AssignmentTemplatesProjectProjectIdGet) | **GET** /api/integration/v1/assignment-templates/project/{projectId} | Get a list of available assignment templates |


## `apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost()`

```php
apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost($assignmentTemplateId, $projectId, $deadlineHours): \SmartCat\Model\AssignmentTemplateApplicationResultModel
```

Apply an assignment template to the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\AssignmentTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assignmentTemplateId = 'assignmentTemplateId_example'; // string | assignment template ID
$projectId = 'projectId_example'; // string | project ID
$deadlineHours = 56; // int | set a deadline in hours

try {
    $result = $apiInstance->apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost($assignmentTemplateId, $projectId, $deadlineHours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentTemplatesApi->apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assignmentTemplateId** | **string**| assignment template ID | |
| **projectId** | **string**| project ID | |
| **deadlineHours** | **int**| set a deadline in hours | [optional] |

### Return type

[**\SmartCat\Model\AssignmentTemplateApplicationResultModel**](../Model/AssignmentTemplateApplicationResultModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1AssignmentTemplatesProjectProjectIdGet()`

```php
apiIntegrationV1AssignmentTemplatesProjectProjectIdGet($projectId): \SmartCat\Model\AssignmentTemplateModel[]
```

Get a list of available assignment templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\AssignmentTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | project ID

try {
    $result = $apiInstance->apiIntegrationV1AssignmentTemplatesProjectProjectIdGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentTemplatesApi->apiIntegrationV1AssignmentTemplatesProjectProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| project ID | |

### Return type

[**\SmartCat\Model\AssignmentTemplateModel[]**](../Model/AssignmentTemplateModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
