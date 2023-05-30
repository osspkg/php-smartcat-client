# SmartCat\DocumentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1DocumentAssignFreelancersPost()**](DocumentApi.md#apiIntegrationV1DocumentAssignFreelancersPost) | **POST** /api/integration/v1/document/assignFreelancers | Divide the document into equal blocks by the number of words and assign one block to each specified freelancer |
| [**apiIntegrationV1DocumentAssignFromMyTeamPost()**](DocumentApi.md#apiIntegrationV1DocumentAssignFromMyTeamPost) | **POST** /api/integration/v1/document/assignFromMyTeam | Send Rocket invitations to MyTeam linguists:  send invitations, assign the first one to accept the job to every unassigned document segment |
| [**apiIntegrationV1DocumentAssignPost()**](DocumentApi.md#apiIntegrationV1DocumentAssignPost) | **POST** /api/integration/v1/document/assign | Specify the linguist assignment and segment distribution model |
| [**apiIntegrationV1DocumentAssignVendorsPost()**](DocumentApi.md#apiIntegrationV1DocumentAssignVendorsPost) | **POST** /api/integration/v1/document/assignVendors | Assign a vendor to a document workflow stage |
| [**apiIntegrationV1DocumentCompletePost()**](DocumentApi.md#apiIntegrationV1DocumentCompletePost) | **POST** /api/integration/v1/document/complete | Change the document status to Completed |
| [**apiIntegrationV1DocumentDelete()**](DocumentApi.md#apiIntegrationV1DocumentDelete) | **DELETE** /api/integration/v1/document | Delete one or several documents |
| [**apiIntegrationV1DocumentGet()**](DocumentApi.md#apiIntegrationV1DocumentGet) | **GET** /api/integration/v1/document | Fetch the document details |
| [**apiIntegrationV1DocumentRenamePut()**](DocumentApi.md#apiIntegrationV1DocumentRenamePut) | **PUT** /api/integration/v1/document/rename | Rename the assigned document |
| [**apiIntegrationV1DocumentSetStageUnitCountPost()**](DocumentApi.md#apiIntegrationV1DocumentSetStageUnitCountPost) | **POST** /api/integration/v1/document/setStageUnitCount | Specify the unit count for a document workflow stage |
| [**apiIntegrationV1DocumentStatisticsGet()**](DocumentApi.md#apiIntegrationV1DocumentStatisticsGet) | **GET** /api/integration/v1/document/statistics | Fetch statistics |
| [**apiIntegrationV1DocumentTranslatePut()**](DocumentApi.md#apiIntegrationV1DocumentTranslatePut) | **PUT** /api/integration/v1/document/translate | Translate the specified document using the specified translation file |
| [**apiIntegrationV1DocumentTranslateResultGet()**](DocumentApi.md#apiIntegrationV1DocumentTranslateResultGet) | **GET** /api/integration/v1/document/translate/result | Fetch a detailed report on translation import results |
| [**apiIntegrationV1DocumentTranslateStatusGet()**](DocumentApi.md#apiIntegrationV1DocumentTranslateStatusGet) | **GET** /api/integration/v1/document/translate/status | Fetch the status of adding document translation |
| [**apiIntegrationV1DocumentTranslateWithXliffPut()**](DocumentApi.md#apiIntegrationV1DocumentTranslateWithXliffPut) | **PUT** /api/integration/v1/document/translateWithXliff | Import an XLIFF file with document translations |
| [**apiIntegrationV1DocumentUnassignPost()**](DocumentApi.md#apiIntegrationV1DocumentUnassignPost) | **POST** /api/integration/v1/document/unassign | Unassign a linguist |
| [**apiIntegrationV1DocumentUpdateMetaInfoPut()**](DocumentApi.md#apiIntegrationV1DocumentUpdateMetaInfoPut) | **PUT** /api/integration/v1/document/updateMetaInfo | Update document meta info |
| [**apiIntegrationV1DocumentUpdatePut()**](DocumentApi.md#apiIntegrationV1DocumentUpdatePut) | **PUT** /api/integration/v1/document/update | (This method is obsolete and has been replaced with /api/integration/v2/document/update)  Update the specified document |
| [**apiIntegrationV2DocumentUpdatePut()**](DocumentApi.md#apiIntegrationV2DocumentUpdatePut) | **PUT** /api/integration/v2/document/update | Update the specified document |


## `apiIntegrationV1DocumentAssignFreelancersPost()`

```php
apiIntegrationV1DocumentAssignFreelancersPost($requestBody, $documentId, $stageNumber)
```

Divide the document into equal blocks by the number of words and assign one block to each specified freelancer

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestBody = array('requestBody_example'); // string[] | Assigned freelancers' user IDs
$documentId = 'documentId_example'; // string | Document ID
$stageNumber = 'stageNumber_example'; // string | Workflow stage number

try {
    $apiInstance->apiIntegrationV1DocumentAssignFreelancersPost($requestBody, $documentId, $stageNumber);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentAssignFreelancersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestBody** | [**string[]**](../Model/string.md)| Assigned freelancers&#39; user IDs | [optional] |
| **documentId** | **string**| Document ID | [optional] |
| **stageNumber** | **string**| Workflow stage number | [optional] |

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

## `apiIntegrationV1DocumentAssignFromMyTeamPost()`

```php
apiIntegrationV1DocumentAssignFromMyTeamPost($assignMyTeamExecutivesRequestModel): int
```

Send Rocket invitations to MyTeam linguists:  send invitations, assign the first one to accept the job to every unassigned document segment

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assignMyTeamExecutivesRequestModel = new \SmartCat\Model\AssignMyTeamExecutivesRequestModel(); // \SmartCat\Model\AssignMyTeamExecutivesRequestModel | MyTeam linguists assignment model

try {
    $result = $apiInstance->apiIntegrationV1DocumentAssignFromMyTeamPost($assignMyTeamExecutivesRequestModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentAssignFromMyTeamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assignMyTeamExecutivesRequestModel** | [**\SmartCat\Model\AssignMyTeamExecutivesRequestModel**](../Model/AssignMyTeamExecutivesRequestModel.md)| MyTeam linguists assignment model | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1DocumentAssignPost()`

```php
apiIntegrationV1DocumentAssignPost($assignExecutivesRequestModel, $documentId, $stageNumber)
```

Specify the linguist assignment and segment distribution model

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language  AssignmentMode option descriptions:<br />  - AssignmentMode.DistributeAmongAll: Distribute segments among all the assigned linguists<br />  - AssignmentMode.Rocket: Send invitations and assign all unassigned segments to the first linguist who accepts<br />  - AssignmentMode.InviteOnly: Only invite linguists, segments will be assigned later manually<br />  Note: If the segment count is not specified, the task will be equally divided among all linguists<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assignExecutivesRequestModel = new \SmartCat\Model\AssignExecutivesRequestModel(); // \SmartCat\Model\AssignExecutivesRequestModel | Assignment request - list of assigned executors
$documentId = 'documentId_example'; // string | Document ID
$stageNumber = 'stageNumber_example'; // string | Workflow stage number

try {
    $apiInstance->apiIntegrationV1DocumentAssignPost($assignExecutivesRequestModel, $documentId, $stageNumber);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentAssignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assignExecutivesRequestModel** | [**\SmartCat\Model\AssignExecutivesRequestModel**](../Model/AssignExecutivesRequestModel.md)| Assignment request - list of assigned executors | [optional] |
| **documentId** | **string**| Document ID | [optional] |
| **stageNumber** | **string**| Workflow stage number | [optional] |

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

## `apiIntegrationV1DocumentAssignVendorsPost()`

```php
apiIntegrationV1DocumentAssignVendorsPost($documentId, $stageNumber, $vendorAccountId)
```

Assign a vendor to a document workflow stage

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID
$stageNumber = 'stageNumber_example'; // string | Workflow stage number
$vendorAccountId = 'vendorAccountId_example'; // string | Vendor account ID

try {
    $apiInstance->apiIntegrationV1DocumentAssignVendorsPost($documentId, $stageNumber, $vendorAccountId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentAssignVendorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | [optional] |
| **stageNumber** | **string**| Workflow stage number | [optional] |
| **vendorAccountId** | **string**| Vendor account ID | [optional] |

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

## `apiIntegrationV1DocumentCompletePost()`

```php
apiIntegrationV1DocumentCompletePost($documentId)
```

Change the document status to Completed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID

try {
    $apiInstance->apiIntegrationV1DocumentCompletePost($documentId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentCompletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | [optional] |

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

## `apiIntegrationV1DocumentDelete()`

```php
apiIntegrationV1DocumentDelete($documentIds)
```

Delete one or several documents

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language  API call example: ?documentIds=61331_25&documentIds=61332_9..<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentIds = array('documentIds_example'); // string[] | Array of document IDs

try {
    $apiInstance->apiIntegrationV1DocumentDelete($documentIds);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentIds** | [**string[]**](../Model/string.md)| Array of document IDs | |

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

## `apiIntegrationV1DocumentGet()`

```php
apiIntegrationV1DocumentGet($documentId): \SmartCat\Model\DocumentModel
```

Fetch the document details

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID

try {
    $result = $apiInstance->apiIntegrationV1DocumentGet($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | |

### Return type

[**\SmartCat\Model\DocumentModel**](../Model/DocumentModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1DocumentRenamePut()`

```php
apiIntegrationV1DocumentRenamePut($documentId, $name)
```

Rename the assigned document

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID
$name = 'name_example'; // string | New name

try {
    $apiInstance->apiIntegrationV1DocumentRenamePut($documentId, $name);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentRenamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | |
| **name** | **string**| New name | |

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

## `apiIntegrationV1DocumentSetStageUnitCountPost()`

```php
apiIntegrationV1DocumentSetStageUnitCountPost($setStageUnitsCountModel, $projectId, $stageNumber, $targetLanguageId)
```

Specify the unit count for a document workflow stage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setStageUnitsCountModel = array(new \SmartCat\Model\SetStageUnitsCountModel()); // \SmartCat\Model\SetStageUnitsCountModel[] | Document unit count setup model
$projectId = 'projectId_example'; // string | Project ID
$stageNumber = 'stageNumber_example'; // string | Workflow stage number
$targetLanguageId = 56; // int | Document target language ID

try {
    $apiInstance->apiIntegrationV1DocumentSetStageUnitCountPost($setStageUnitsCountModel, $projectId, $stageNumber, $targetLanguageId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentSetStageUnitCountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setStageUnitsCountModel** | [**\SmartCat\Model\SetStageUnitsCountModel[]**](../Model/SetStageUnitsCountModel.md)| Document unit count setup model | [optional] |
| **projectId** | **string**| Project ID | [optional] |
| **stageNumber** | **string**| Workflow stage number | [optional] |
| **targetLanguageId** | **int**| Document target language ID | [optional] |

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

## `apiIntegrationV1DocumentStatisticsGet()`

```php
apiIntegrationV1DocumentStatisticsGet($documentId, $onlyExactMatches): \SmartCat\Model\DocumentStatisticsModel
```

Fetch statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID
$onlyExactMatches = false; // bool | Specifies whether returning 100% and higher matches will suffice

try {
    $result = $apiInstance->apiIntegrationV1DocumentStatisticsGet($documentId, $onlyExactMatches);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | |
| **onlyExactMatches** | **bool**| Specifies whether returning 100% and higher matches will suffice | [optional] [default to false] |

### Return type

[**\SmartCat\Model\DocumentStatisticsModel**](../Model/DocumentStatisticsModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1DocumentTranslatePut()`

```php
apiIntegrationV1DocumentTranslatePut($documentId, $uploadedFile, $overwrite, $confirmTranslation)
```

Translate the specified document using the specified translation file

- Available only for the file formats that support true updates (currently these are resource files with unique resource IDs)  - Sets a task to processing. When the API call is completed, the translation might be not finished yet  - Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID
$uploadedFile = new \SmartCat\Model\UploadedFile(); // \SmartCat\Model\UploadedFile | Translation file
$overwrite = false; // bool | Specifies whether to overwrite the available translations
$confirmTranslation = false; // bool | Confirm updated segments

try {
    $apiInstance->apiIntegrationV1DocumentTranslatePut($documentId, $uploadedFile, $overwrite, $confirmTranslation);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentTranslatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile**](../Model/UploadedFile.md)| Translation file | [optional] |
| **overwrite** | **bool**| Specifies whether to overwrite the available translations | [optional] [default to false] |
| **confirmTranslation** | **bool**| Confirm updated segments | [optional] [default to false] |

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

## `apiIntegrationV1DocumentTranslateResultGet()`

```php
apiIntegrationV1DocumentTranslateResultGet($documentId)
```

Fetch a detailed report on translation import results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID

try {
    $apiInstance->apiIntegrationV1DocumentTranslateResultGet($documentId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentTranslateResultGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | |

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

## `apiIntegrationV1DocumentTranslateStatusGet()`

```php
apiIntegrationV1DocumentTranslateStatusGet($documentId): \SmartCat\Model\TranslationTaskStatus
```

Fetch the status of adding document translation

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | Document ID

try {
    $result = $apiInstance->apiIntegrationV1DocumentTranslateStatusGet($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentTranslateStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document ID | |

### Return type

[**\SmartCat\Model\TranslationTaskStatus**](../Model/TranslationTaskStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1DocumentTranslateWithXliffPut()`

```php
apiIntegrationV1DocumentTranslateWithXliffPut($documentId, $uploadedFile, $confirmTranslation, $overwriteUpdatedSegments)
```

Import an XLIFF file with document translations

This method is available only for modified XLIFF files that were exported using the POST /api/integration/v1/document/export method  The API call body can include one XLIFF file only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$documentId = 'documentId_example'; // string | ID of the document to update
$uploadedFile = array(new \SmartCat\Model\UploadedFile()); // \SmartCat\Model\UploadedFile[] | XLIFF file with segment translations
$confirmTranslation = True; // bool | Confirm updated segments
$overwriteUpdatedSegments = True; // bool | Specifies whether to overwrite the segments that have been updated since the last export of the XLIFF file

try {
    $apiInstance->apiIntegrationV1DocumentTranslateWithXliffPut($documentId, $uploadedFile, $confirmTranslation, $overwriteUpdatedSegments);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentTranslateWithXliffPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| ID of the document to update | |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile[]**](../Model/UploadedFile.md)| XLIFF file with segment translations | [optional] |
| **confirmTranslation** | **bool**| Confirm updated segments | [optional] |
| **overwriteUpdatedSegments** | **bool**| Specifies whether to overwrite the segments that have been updated since the last export of the XLIFF file | [optional] |

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

## `apiIntegrationV1DocumentUnassignPost()`

```php
apiIntegrationV1DocumentUnassignPost($body, $documentId, $stageNumber)
```

Unassign a linguist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | Unassigned executor ID
$documentId = 'documentId_example'; // string | Document ID
$stageNumber = 'stageNumber_example'; // string | Workflow stage number

try {
    $apiInstance->apiIntegrationV1DocumentUnassignPost($body, $documentId, $stageNumber);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentUnassignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**| Unassigned executor ID | [optional] |
| **documentId** | **string**| Document ID | [optional] |
| **stageNumber** | **string**| Workflow stage number | [optional] |

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

## `apiIntegrationV1DocumentUpdateMetaInfoPut()`

```php
apiIntegrationV1DocumentUpdateMetaInfoPut($body, $documentId)
```

Update document meta info

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | New value
$documentId = 'documentId_example'; // string | Document ID

try {
    $apiInstance->apiIntegrationV1DocumentUpdateMetaInfoPut($body, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentUpdateMetaInfoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**| New value | |
| **documentId** | **string**| Document ID | |

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

## `apiIntegrationV1DocumentUpdatePut()`

```php
apiIntegrationV1DocumentUpdatePut($modelWithFilesUploadDocumentPropertiesModel, $documentId, $disassembleAlgorithmName, $presetDisassembleAlgorithm): \SmartCat\Model\DocumentModel[]
```

(This method is obsolete and has been replaced with /api/integration/v2/document/update)  Update the specified document

Document ID is represented as int1_int2, where int1 identifies the document, and int2 identifies its target language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelWithFilesUploadDocumentPropertiesModel = new \SmartCat\Model\ModelWithFilesUploadDocumentPropertiesModel(); // \SmartCat\Model\ModelWithFilesUploadDocumentPropertiesModel | Document with a file update model
$documentId = 'documentId_example'; // string | Document ID
$disassembleAlgorithmName = 'disassembleAlgorithmName_example'; // string | Optional algorithm for file disassembly
$presetDisassembleAlgorithm = 'presetDisassembleAlgorithm_example'; // string | Optional preset for the file disassembly algorithm

try {
    $result = $apiInstance->apiIntegrationV1DocumentUpdatePut($modelWithFilesUploadDocumentPropertiesModel, $documentId, $disassembleAlgorithmName, $presetDisassembleAlgorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV1DocumentUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modelWithFilesUploadDocumentPropertiesModel** | [**\SmartCat\Model\ModelWithFilesUploadDocumentPropertiesModel**](../Model/ModelWithFilesUploadDocumentPropertiesModel.md)| Document with a file update model | |
| **documentId** | **string**| Document ID | |
| **disassembleAlgorithmName** | **string**| Optional algorithm for file disassembly | [optional] |
| **presetDisassembleAlgorithm** | **string**| Optional preset for the file disassembly algorithm | [optional] |

### Return type

[**\SmartCat\Model\DocumentModel[]**](../Model/DocumentModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2DocumentUpdatePut()`

```php
apiIntegrationV2DocumentUpdatePut($modelWithFilesUploadDocumentPropertiesModel, $documentId, $disassembleAlgorithmName, $presetDisassembleAlgorithm): \SmartCat\Model\DocumentModel[]
```

Update the specified document

Document ID is represented as int1, where int1 identifies the document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelWithFilesUploadDocumentPropertiesModel = new \SmartCat\Model\ModelWithFilesUploadDocumentPropertiesModel(); // \SmartCat\Model\ModelWithFilesUploadDocumentPropertiesModel | Document with a file update model
$documentId = 'documentId_example'; // string | Document ID
$disassembleAlgorithmName = 'disassembleAlgorithmName_example'; // string | Optional algorithm for file disassembly
$presetDisassembleAlgorithm = 'presetDisassembleAlgorithm_example'; // string | Optional preset for the file disassembly algorithm

try {
    $result = $apiInstance->apiIntegrationV2DocumentUpdatePut($modelWithFilesUploadDocumentPropertiesModel, $documentId, $disassembleAlgorithmName, $presetDisassembleAlgorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->apiIntegrationV2DocumentUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modelWithFilesUploadDocumentPropertiesModel** | [**\SmartCat\Model\ModelWithFilesUploadDocumentPropertiesModel**](../Model/ModelWithFilesUploadDocumentPropertiesModel.md)| Document with a file update model | |
| **documentId** | **string**| Document ID | |
| **disassembleAlgorithmName** | **string**| Optional algorithm for file disassembly | [optional] |
| **presetDisassembleAlgorithm** | **string**| Optional preset for the file disassembly algorithm | [optional] |

### Return type

[**\SmartCat\Model\DocumentModel[]**](../Model/DocumentModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
