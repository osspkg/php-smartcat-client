# SmartCat\ProjectBackupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1BackupProjectProjectIdPost()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectProjectIdPost) | **POST** /api/integration/v1/backup/project/{projectId} | Run a project backup creation task |
| [**apiIntegrationV1BackupProjectTasksCreateGet()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectTasksCreateGet) | **GET** /api/integration/v1/backup/project/tasks/create | Fetch pending backup creation tasks |
| [**apiIntegrationV1BackupProjectTasksCreateTaskIdDelete()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectTasksCreateTaskIdDelete) | **DELETE** /api/integration/v1/backup/project/tasks/create/{taskId} | Cancel a project&#39;s backup copy creation task |
| [**apiIntegrationV1BackupProjectTasksCreateTaskIdDownloadGet()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectTasksCreateTaskIdDownloadGet) | **GET** /api/integration/v1/backup/project/tasks/create/{taskId}/download | Download a project&#39;s backup copy |
| [**apiIntegrationV1BackupProjectTasksRestoreGet()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectTasksRestoreGet) | **GET** /api/integration/v1/backup/project/tasks/restore | Fetch pending project backup upload tasks |
| [**apiIntegrationV1BackupProjectTasksRestoreTaskIdDelete()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectTasksRestoreTaskIdDelete) | **DELETE** /api/integration/v1/backup/project/tasks/restore/{taskId} | Cancel the task of restoring a project from a backup copy |
| [**apiIntegrationV1BackupProjectUploadPost()**](ProjectBackupsApi.md#apiIntegrationV1BackupProjectUploadPost) | **POST** /api/integration/v1/backup/project/upload | Restore a project from a backup copy file |


## `apiIntegrationV1BackupProjectProjectIdPost()`

```php
apiIntegrationV1BackupProjectProjectIdPost($createBackupModel, $projectId): string
```

Run a project backup creation task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createBackupModel = new \SmartCat\Model\CreateBackupModel(); // \SmartCat\Model\CreateBackupModel | Backup creation settings
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1BackupProjectProjectIdPost($createBackupModel, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectProjectIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createBackupModel** | [**\SmartCat\Model\CreateBackupModel**](../Model/CreateBackupModel.md)| Backup creation settings | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1BackupProjectTasksCreateGet()`

```php
apiIntegrationV1BackupProjectTasksCreateGet(): \SmartCat\Model\CreateProjectBackupTaskState[]
```

Fetch pending backup creation tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1BackupProjectTasksCreateGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectTasksCreateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\CreateProjectBackupTaskState[]**](../Model/CreateProjectBackupTaskState.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1BackupProjectTasksCreateTaskIdDelete()`

```php
apiIntegrationV1BackupProjectTasksCreateTaskIdDelete($taskId)
```

Cancel a project's backup copy creation task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | Backup copy creation task ID

try {
    $apiInstance->apiIntegrationV1BackupProjectTasksCreateTaskIdDelete($taskId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectTasksCreateTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| Backup copy creation task ID | |

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

## `apiIntegrationV1BackupProjectTasksCreateTaskIdDownloadGet()`

```php
apiIntegrationV1BackupProjectTasksCreateTaskIdDownloadGet($taskId)
```

Download a project's backup copy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | Backup copy creation task ID

try {
    $apiInstance->apiIntegrationV1BackupProjectTasksCreateTaskIdDownloadGet($taskId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectTasksCreateTaskIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| Backup copy creation task ID | |

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

## `apiIntegrationV1BackupProjectTasksRestoreGet()`

```php
apiIntegrationV1BackupProjectTasksRestoreGet(): \SmartCat\Model\RestoreProjectBackupTaskState[]
```

Fetch pending project backup upload tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiIntegrationV1BackupProjectTasksRestoreGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectTasksRestoreGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SmartCat\Model\RestoreProjectBackupTaskState[]**](../Model/RestoreProjectBackupTaskState.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1BackupProjectTasksRestoreTaskIdDelete()`

```php
apiIntegrationV1BackupProjectTasksRestoreTaskIdDelete($taskId)
```

Cancel the task of restoring a project from a backup copy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | Backup copy restore task ID

try {
    $apiInstance->apiIntegrationV1BackupProjectTasksRestoreTaskIdDelete($taskId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectTasksRestoreTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| Backup copy restore task ID | |

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

## `apiIntegrationV1BackupProjectUploadPost()`

```php
apiIntegrationV1BackupProjectUploadPost($uploadedFile): string
```

Restore a project from a backup copy file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectBackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uploadedFile = new \SmartCat\Model\UploadedFile(); // \SmartCat\Model\UploadedFile | A project backup file with the extension .scbak

try {
    $result = $apiInstance->apiIntegrationV1BackupProjectUploadPost($uploadedFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBackupsApi->apiIntegrationV1BackupProjectUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile**](../Model/UploadedFile.md)| A project backup file with the extension .scbak | |

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
