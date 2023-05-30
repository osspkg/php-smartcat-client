# SmartCat\ProjectApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIntegrationV1ProjectCancelPost()**](ProjectApi.md#apiIntegrationV1ProjectCancelPost) | **POST** /api/integration/v1/project/cancel | Cancel the project |
| [**apiIntegrationV1ProjectCompletePost()**](ProjectApi.md#apiIntegrationV1ProjectCompletePost) | **POST** /api/integration/v1/project/complete | Complete the workflow for all project documents. As a result, the project status will change to Completed. |
| [**apiIntegrationV1ProjectCopyingTaskIdGet()**](ProjectApi.md#apiIntegrationV1ProjectCopyingTaskIdGet) | **GET** /api/integration/v1/project/copying/{taskId} | Get project copy state |
| [**apiIntegrationV1ProjectCreatePost()**](ProjectApi.md#apiIntegrationV1ProjectCreatePost) | **POST** /api/integration/v1/project/create | Create the project |
| [**apiIntegrationV1ProjectDocumentPost()**](ProjectApi.md#apiIntegrationV1ProjectDocumentPost) | **POST** /api/integration/v1/project/document | Add a document to the project |
| [**apiIntegrationV1ProjectImportResultImportIdGet()**](ProjectApi.md#apiIntegrationV1ProjectImportResultImportIdGet) | **GET** /api/integration/v1/project/import-result/{importId} | Fetch the result of import into the Localization Project |
| [**apiIntegrationV1ProjectLanguageDelete()**](ProjectApi.md#apiIntegrationV1ProjectLanguageDelete) | **DELETE** /api/integration/v1/project/language | Remove a target language from the project |
| [**apiIntegrationV1ProjectLanguagePost()**](ProjectApi.md#apiIntegrationV1ProjectLanguagePost) | **POST** /api/integration/v1/project/language | Add a new target language to the project |
| [**apiIntegrationV1ProjectListGet()**](ProjectApi.md#apiIntegrationV1ProjectListGet) | **GET** /api/integration/v1/project/list | Fetch the list of account projects |
| [**apiIntegrationV1ProjectProjectIdAssignPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdAssignPost) | **POST** /api/integration/v1/project/{projectId}/assign | Automatically assign all new documents/segments to current linguists |
| [**apiIntegrationV1ProjectProjectIdCompletedWorkStatisticsGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdCompletedWorkStatisticsGet) | **GET** /api/integration/v1/project/{projectId}/completedWorkStatistics | Receive statistics for the completed parts of the project |
| [**apiIntegrationV1ProjectProjectIdCopyingPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdCopyingPost) | **POST** /api/integration/v1/project/{projectId}/copying | Run copying a project |
| [**apiIntegrationV1ProjectProjectIdDelete()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdDelete) | **DELETE** /api/integration/v1/project/{projectId} | Delete the project |
| [**apiIntegrationV1ProjectProjectIdEmptyFoldersRemovingStatusGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdEmptyFoldersRemovingStatusGet) | **GET** /api/integration/v1/project/{projectId}/empty-folders-removing-status | Fetch the status of removing empty project folders |
| [**apiIntegrationV1ProjectProjectIdFuzzyRepetitionsPut()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdFuzzyRepetitionsPut) | **PUT** /api/integration/v1/project/{projectId}/fuzzyRepetitions | Enable or disable calculating fuzzy repetitions in the project statistics |
| [**apiIntegrationV1ProjectProjectIdGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdGet) | **GET** /api/integration/v1/project/{projectId} | Receive the project model |
| [**apiIntegrationV1ProjectProjectIdGlossariesGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdGlossariesGet) | **GET** /api/integration/v1/project/{projectId}/glossaries | Fetch the list of glossaries plugged into the project |
| [**apiIntegrationV1ProjectProjectIdGlossariesPut()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdGlossariesPut) | **PUT** /api/integration/v1/project/{projectId}/glossaries | Set a collection of glossaries plugged into the project |
| [**apiIntegrationV1ProjectProjectIdManagersDelete()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdManagersDelete) | **DELETE** /api/integration/v1/project/{projectId}/managers | Delete managers from the project |
| [**apiIntegrationV1ProjectProjectIdManagersPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdManagersPost) | **POST** /api/integration/v1/project/{projectId}/managers | Add managers to the specified project |
| [**apiIntegrationV1ProjectProjectIdMtAvailableGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdMtAvailableGet) | **GET** /api/integration/v1/project/{projectId}/mt/available | Fetch all the MT engines and profiles that can be used in the specified project |
| [**apiIntegrationV1ProjectProjectIdMtGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdMtGet) | **GET** /api/integration/v1/project/{projectId}/mt | Fetch the project&#39;s MT configuration |
| [**apiIntegrationV1ProjectProjectIdMtPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdMtPost) | **POST** /api/integration/v1/project/{projectId}/mt | Set an MT configuration in the project |
| [**apiIntegrationV1ProjectProjectIdPretranslationRulesGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdPretranslationRulesGet) | **GET** /api/integration/v1/project/{projectId}/pretranslation-rules | Fetch the project pre-processing rules |
| [**apiIntegrationV1ProjectProjectIdPretranslationRulesPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdPretranslationRulesPost) | **POST** /api/integration/v1/project/{projectId}/pretranslation-rules | Define project pre-processing rules |
| [**apiIntegrationV1ProjectProjectIdPretranslationRulesPut()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdPretranslationRulesPut) | **PUT** /api/integration/v1/project/{projectId}/pretranslation-rules | Define project pre-processing rules |
| [**apiIntegrationV1ProjectProjectIdPut()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdPut) | **PUT** /api/integration/v1/project/{projectId} | Update a project by ID |
| [**apiIntegrationV1ProjectProjectIdReferenceFilesPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdReferenceFilesPost) | **POST** /api/integration/v1/project/{projectId}/ReferenceFiles | Add reference files to a project |
| [**apiIntegrationV1ProjectProjectIdRunEmptyFoldersRemovingPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdRunEmptyFoldersRemovingPost) | **POST** /api/integration/v1/project/{projectId}/run-empty-folders-removing | Run the empty project folders deletion task |
| [**apiIntegrationV1ProjectProjectIdStatisticsBuildPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdStatisticsBuildPost) | **POST** /api/integration/v1/project/{projectId}/statistics/build | Start processing the project statistics |
| [**apiIntegrationV1ProjectProjectIdStatisticsGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdStatisticsGet) | **GET** /api/integration/v1/project/{projectId}/statistics | (This method is obsolete and has been replaced with /api/integration/v2/project/{projectId}/statistics)  Fetch project statistics |
| [**apiIntegrationV1ProjectProjectIdTranslationmemoriesBylanguagesPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdTranslationmemoriesBylanguagesPost) | **POST** /api/integration/v1/project/{projectId}/translationmemories/bylanguages | Recreate the set of TMs plugged into the project.  A separate set of TMs is created for each target language. |
| [**apiIntegrationV1ProjectProjectIdTranslationmemoriesGet()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdTranslationmemoriesGet) | **GET** /api/integration/v1/project/{projectId}/translationmemories | Receive a list of the TMs plugged into the project |
| [**apiIntegrationV1ProjectProjectIdTranslationmemoriesPost()**](ProjectApi.md#apiIntegrationV1ProjectProjectIdTranslationmemoriesPost) | **POST** /api/integration/v1/project/{projectId}/translationmemories | Recreate the set of TMs plugged into the project.  The set of TMs is identical for all target languages of the project. |
| [**apiIntegrationV1ProjectRestorePost()**](ProjectApi.md#apiIntegrationV1ProjectRestorePost) | **POST** /api/integration/v1/project/restore | Restore the project |
| [**apiIntegrationV2ProjectListGet()**](ProjectApi.md#apiIntegrationV2ProjectListGet) | **GET** /api/integration/v2/project/list | Fetch the list of account projects |
| [**apiIntegrationV2ProjectProjectIdExportPost()**](ProjectApi.md#apiIntegrationV2ProjectProjectIdExportPost) | **POST** /api/integration/v2/project/{projectId}/export | Run export from Software Localization Project |
| [**apiIntegrationV2ProjectProjectIdImportPost()**](ProjectApi.md#apiIntegrationV2ProjectProjectIdImportPost) | **POST** /api/integration/v2/project/{projectId}/import | Import keys and values from files into the Software Localization Project |
| [**apiIntegrationV2ProjectProjectIdStatisticsGet()**](ProjectApi.md#apiIntegrationV2ProjectProjectIdStatisticsGet) | **GET** /api/integration/v2/project/{projectId}/statistics | Fetch project statistics |


## `apiIntegrationV1ProjectCancelPost()`

```php
apiIntegrationV1ProjectCancelPost($projectId)
```

Cancel the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectCancelPost($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectCompletePost()`

```php
apiIntegrationV1ProjectCompletePost($projectId)
```

Complete the workflow for all project documents. As a result, the project status will change to Completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string

try {
    $apiInstance->apiIntegrationV1ProjectCompletePost($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectCompletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**|  | |

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

## `apiIntegrationV1ProjectCopyingTaskIdGet()`

```php
apiIntegrationV1ProjectCopyingTaskIdGet($taskId): \SmartCat\Model\ProjectCopyStateModel
```

Get project copy state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 'taskId_example'; // string | Copy task ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectCopyingTaskIdGet($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectCopyingTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taskId** | **string**| Copy task ID | |

### Return type

[**\SmartCat\Model\ProjectCopyStateModel**](../Model/ProjectCopyStateModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectCreatePost()`

```php
apiIntegrationV1ProjectCreatePost($modelWithFilesCreateProjectModel): \SmartCat\Model\ProjectModel
```

Create the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelWithFilesCreateProjectModel = new \SmartCat\Model\ModelWithFilesCreateProjectModel(); // \SmartCat\Model\ModelWithFilesCreateProjectModel | Project with files creation model

try {
    $result = $apiInstance->apiIntegrationV1ProjectCreatePost($modelWithFilesCreateProjectModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modelWithFilesCreateProjectModel** | [**\SmartCat\Model\ModelWithFilesCreateProjectModel**](../Model/ModelWithFilesCreateProjectModel.md)| Project with files creation model | |

### Return type

[**\SmartCat\Model\ProjectModel**](../Model/ProjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectDocumentPost()`

```php
apiIntegrationV1ProjectDocumentPost($modelWithFilesIReadOnlyList1, $projectId, $disassembleAlgorithmName, $externalId, $metaInfo, $targetLanguages, $presetDisassembleAlgorithm, $enableOcr): \SmartCat\Model\DocumentModel[]
```

Add a document to the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modelWithFilesIReadOnlyList1 = {"externalId":null,"metaInfo":null,"disassembleAlgorithmName":null,"presetDisassembleAlgorithm":null,"disassembleSettings":{"startingRow":1,"columns":{"context":"C","comments":["E"],"lengthLimit":"D","language":{"en":"A","ru":"B"}}},"bilingualFileImportSetings":null,"targetLanguages":null,"enablePlaceholders":null,"enableOcr":null}; // \SmartCat\Model\ModelWithFilesIReadOnlyList1 | Document file upload model
$projectId = 'projectId_example'; // string | Project ID
$disassembleAlgorithmName = 'disassembleAlgorithmName_example'; // string | Optional algorithm of file disassembly
$externalId = 'externalId_example'; // string | External identifier assigned by the client upon the document creation
$metaInfo = 'metaInfo_example'; // string | Additional user information about the document
$targetLanguages = 'targetLanguages_example'; // string | Comma-separated target languages of all documents. Optional parameter. Can be modified per document in the request body. By default, lists the project target languages.
$presetDisassembleAlgorithm = 'presetDisassembleAlgorithm_example'; // string | Optional preset for the file disassembly algorithm
$enableOcr = true; // bool | Optional parameter for disabling OCR (the default is true)

try {
    $result = $apiInstance->apiIntegrationV1ProjectDocumentPost($modelWithFilesIReadOnlyList1, $projectId, $disassembleAlgorithmName, $externalId, $metaInfo, $targetLanguages, $presetDisassembleAlgorithm, $enableOcr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modelWithFilesIReadOnlyList1** | [**\SmartCat\Model\ModelWithFilesIReadOnlyList1**](../Model/ModelWithFilesIReadOnlyList1.md)| Document file upload model | |
| **projectId** | **string**| Project ID | |
| **disassembleAlgorithmName** | **string**| Optional algorithm of file disassembly | [optional] |
| **externalId** | **string**| External identifier assigned by the client upon the document creation | [optional] |
| **metaInfo** | **string**| Additional user information about the document | [optional] |
| **targetLanguages** | **string**| Comma-separated target languages of all documents. Optional parameter. Can be modified per document in the request body. By default, lists the project target languages. | [optional] |
| **presetDisassembleAlgorithm** | **string**| Optional preset for the file disassembly algorithm | [optional] |
| **enableOcr** | **bool**| Optional parameter for disabling OCR (the default is true) | [optional] [default to true] |

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

## `apiIntegrationV1ProjectImportResultImportIdGet()`

```php
apiIntegrationV1ProjectImportResultImportIdGet($importId): \SmartCat\Model\StringsTableImportResult
```

Fetch the result of import into the Localization Project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importId = 'importId_example'; // string | Import task identifier

try {
    $result = $apiInstance->apiIntegrationV1ProjectImportResultImportIdGet($importId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectImportResultImportIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importId** | **string**| Import task identifier | |

### Return type

[**\SmartCat\Model\StringsTableImportResult**](../Model/StringsTableImportResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectLanguageDelete()`

```php
apiIntegrationV1ProjectLanguageDelete($projectId, $targetLanguage)
```

Remove a target language from the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$targetLanguage = 'targetLanguage_example'; // string | Target language

try {
    $apiInstance->apiIntegrationV1ProjectLanguageDelete($projectId, $targetLanguage);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectLanguageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **targetLanguage** | **string**| Target language | |

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

## `apiIntegrationV1ProjectLanguagePost()`

```php
apiIntegrationV1ProjectLanguagePost($projectId, $targetLanguage, $addLanguageToDocuments)
```

Add a new target language to the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$targetLanguage = 'targetLanguage_example'; // string | Target language
$addLanguageToDocuments = true; // bool | An optional parameter that can be used to disable the addition of a language for all project documents (by default - true)

try {
    $apiInstance->apiIntegrationV1ProjectLanguagePost($projectId, $targetLanguage, $addLanguageToDocuments);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectLanguagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **targetLanguage** | **string**| Target language | |
| **addLanguageToDocuments** | **bool**| An optional parameter that can be used to disable the addition of a language for all project documents (by default - true) | [optional] [default to true] |

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

## `apiIntegrationV1ProjectListGet()`

```php
apiIntegrationV1ProjectListGet($createdByUserId, $assignedToUserId, $projectName, $externalTag, $projectType, $clientIds, $includeDocuments, $includeQuotes, $includeCustomFields, $includeClients, $offset, $limit): \SmartCat\Model\ProjectModel[]
```

Fetch the list of account projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createdByUserId = 'createdByUserId_example'; // string | ID of the user who created the project
$assignedToUserId = 'assignedToUserId_example'; // string | User ID for filtering by assignment
$projectName = 'projectName_example'; // string | Partial project name
$externalTag = 'externalTag_example'; // string | Partial external tag of the project
$projectType = new \SmartCat\Model\ProjectTypeFilter(); // ProjectTypeFilter | Type of the project
$clientIds = array('clientIds_example'); // string[] | Comma-separated client IDs
$includeDocuments = true; // bool | Include project documents in response
$includeQuotes = true; // bool | Include project related quotes in response
$includeCustomFields = true; // bool | Include project related custom fields in response
$includeClients = true; // bool | Include project clients in response
$offset = 0; // int | Number of skipped items
$limit = 56; // int | Maximum returned items (not more than 100)

try {
    $result = $apiInstance->apiIntegrationV1ProjectListGet($createdByUserId, $assignedToUserId, $projectName, $externalTag, $projectType, $clientIds, $includeDocuments, $includeQuotes, $includeCustomFields, $includeClients, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createdByUserId** | **string**| ID of the user who created the project | [optional] |
| **assignedToUserId** | **string**| User ID for filtering by assignment | [optional] |
| **projectName** | **string**| Partial project name | [optional] |
| **externalTag** | **string**| Partial external tag of the project | [optional] |
| **projectType** | [**ProjectTypeFilter**](../Model/.md)| Type of the project | [optional] |
| **clientIds** | [**string[]**](../Model/string.md)| Comma-separated client IDs | [optional] |
| **includeDocuments** | **bool**| Include project documents in response | [optional] [default to true] |
| **includeQuotes** | **bool**| Include project related quotes in response | [optional] [default to true] |
| **includeCustomFields** | **bool**| Include project related custom fields in response | [optional] [default to true] |
| **includeClients** | **bool**| Include project clients in response | [optional] [default to true] |
| **offset** | **int**| Number of skipped items | [optional] [default to 0] |
| **limit** | **int**| Maximum returned items (not more than 100) | [optional] |

### Return type

[**\SmartCat\Model\ProjectModel[]**](../Model/ProjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdAssignPost()`

```php
apiIntegrationV1ProjectProjectIdAssignPost($projectId, $mode): \SmartCat\Model\WorkflowStageInDocumentModel[]
```

Automatically assign all new documents/segments to current linguists

Current limitations:  1. Assignments are made to the following stages only: Translation, Editing, Proofreading, Postediting  2. Assignments are made only to documents with an ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$mode = new \SmartCat\Model\AutoAssignmentMode(); // AutoAssignmentMode | Auto-assignment mode

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdAssignPost($projectId, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdAssignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **mode** | [**AutoAssignmentMode**](../Model/.md)| Auto-assignment mode | [optional] |

### Return type

[**\SmartCat\Model\WorkflowStageInDocumentModel[]**](../Model/WorkflowStageInDocumentModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdCompletedWorkStatisticsGet()`

```php
apiIntegrationV1ProjectProjectIdCompletedWorkStatisticsGet($projectId): \SmartCat\Model\ExecutiveStatisticsModel[]
```

Receive statistics for the completed parts of the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdCompletedWorkStatisticsGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdCompletedWorkStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\ExecutiveStatisticsModel[]**](../Model/ExecutiveStatisticsModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdCopyingPost()`

```php
apiIntegrationV1ProjectProjectIdCopyingPost($projectCopyModel, $projectId): string
```

Run copying a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectCopyModel = new \SmartCat\Model\ProjectCopyModel(); // \SmartCat\Model\ProjectCopyModel
$projectId = 'projectId_example'; // string

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdCopyingPost($projectCopyModel, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdCopyingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectCopyModel** | [**\SmartCat\Model\ProjectCopyModel**](../Model/ProjectCopyModel.md)|  | |
| **projectId** | **string**|  | |

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

## `apiIntegrationV1ProjectProjectIdDelete()`

```php
apiIntegrationV1ProjectProjectIdDelete($projectId)
```

Delete the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdDelete($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdEmptyFoldersRemovingStatusGet()`

```php
apiIntegrationV1ProjectProjectIdEmptyFoldersRemovingStatusGet($projectId): \SmartCat\Model\EmptyProjectFoldersRemoveTaskStatus
```

Fetch the status of removing empty project folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdEmptyFoldersRemovingStatusGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdEmptyFoldersRemovingStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\EmptyProjectFoldersRemoveTaskStatus**](../Model/EmptyProjectFoldersRemoveTaskStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdFuzzyRepetitionsPut()`

```php
apiIntegrationV1ProjectProjectIdFuzzyRepetitionsPut($projectId, $withFuzzyMatches)
```

Enable or disable calculating fuzzy repetitions in the project statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string
$withFuzzyMatches = True; // bool

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdFuzzyRepetitionsPut($projectId, $withFuzzyMatches);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdFuzzyRepetitionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**|  | |
| **withFuzzyMatches** | **bool**|  | [optional] |

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

## `apiIntegrationV1ProjectProjectIdGet()`

```php
apiIntegrationV1ProjectProjectIdGet($projectId): \SmartCat\Model\ProjectModel
```

Receive the project model

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\ProjectModel**](../Model/ProjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdGlossariesGet()`

```php
apiIntegrationV1ProjectProjectIdGlossariesGet($projectId): \SmartCat\Model\GlossaryModel[]
```

Fetch the list of glossaries plugged into the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdGlossariesGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdGlossariesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\GlossaryModel[]**](../Model/GlossaryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdGlossariesPut()`

```php
apiIntegrationV1ProjectProjectIdGlossariesPut($requestBody, $projectId)
```

Set a collection of glossaries plugged into the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestBody = array('requestBody_example'); // string[] | Array of glossary IDs
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdGlossariesPut($requestBody, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdGlossariesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestBody** | [**string[]**](../Model/string.md)| Array of glossary IDs | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdManagersDelete()`

```php
apiIntegrationV1ProjectProjectIdManagersDelete($requestBody, $projectId)
```

Delete managers from the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestBody = array('requestBody_example'); // string[] | List of IDs of users labeled as managers
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdManagersDelete($requestBody, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdManagersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestBody** | [**string[]**](../Model/string.md)| List of IDs of users labeled as managers | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdManagersPost()`

```php
apiIntegrationV1ProjectProjectIdManagersPost($requestBody, $projectId)
```

Add managers to the specified project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestBody = array('requestBody_example'); // string[] | User IDs list
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdManagersPost($requestBody, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdManagersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestBody** | [**string[]**](../Model/string.md)| User IDs list | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdMtAvailableGet()`

```php
apiIntegrationV1ProjectProjectIdMtAvailableGet($projectId): \SmartCat\Model\ProjectMTEngineSupportedLanguagesModel[]
```

Fetch all the MT engines and profiles that can be used in the specified project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdMtAvailableGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdMtAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\ProjectMTEngineSupportedLanguagesModel[]**](../Model/ProjectMTEngineSupportedLanguagesModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdMtGet()`

```php
apiIntegrationV1ProjectProjectIdMtGet($projectId): \SmartCat\Model\ProjectMTEngineModel[]
```

Fetch the project's MT configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdMtGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdMtGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\ProjectMTEngineModel[]**](../Model/ProjectMTEngineModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdMtPost()`

```php
apiIntegrationV1ProjectProjectIdMtPost($projectMTEngineModel, $projectId)
```

Set an MT configuration in the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectMTEngineModel = array(new \SmartCat\Model\ProjectMTEngineModel()); // \SmartCat\Model\ProjectMTEngineModel[] | Required MT settings
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdMtPost($projectMTEngineModel, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdMtPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectMTEngineModel** | [**\SmartCat\Model\ProjectMTEngineModel[]**](../Model/ProjectMTEngineModel.md)| Required MT settings | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdPretranslationRulesGet()`

```php
apiIntegrationV1ProjectProjectIdPretranslationRulesGet($projectId): \SmartCat\Model\PretranslateRuleModel[]
```

Fetch the project pre-processing rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdPretranslationRulesGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdPretranslationRulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\PretranslateRuleModel[]**](../Model/PretranslateRuleModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdPretranslationRulesPost()`

```php
apiIntegrationV1ProjectProjectIdPretranslationRulesPost($pretranslateRuleModel, $projectId)
```

Define project pre-processing rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pretranslateRuleModel = array(new \SmartCat\Model\PretranslateRuleModel()); // \SmartCat\Model\PretranslateRuleModel[] | Project pre-processing rules
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdPretranslationRulesPost($pretranslateRuleModel, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdPretranslationRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pretranslateRuleModel** | [**\SmartCat\Model\PretranslateRuleModel[]**](../Model/PretranslateRuleModel.md)| Project pre-processing rules | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdPretranslationRulesPut()`

```php
apiIntegrationV1ProjectProjectIdPretranslationRulesPut($pretranslateRuleModel, $projectId)
```

Define project pre-processing rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pretranslateRuleModel = array(new \SmartCat\Model\PretranslateRuleModel()); // \SmartCat\Model\PretranslateRuleModel[] | Project pre-processing rules
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdPretranslationRulesPut($pretranslateRuleModel, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdPretranslationRulesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pretranslateRuleModel** | [**\SmartCat\Model\PretranslateRuleModel[]**](../Model/PretranslateRuleModel.md)| Project pre-processing rules | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdPut()`

```php
apiIntegrationV1ProjectProjectIdPut($projectChangesModel, $projectId)
```

Update a project by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectChangesModel = new \SmartCat\Model\ProjectChangesModel(); // \SmartCat\Model\ProjectChangesModel | Project changes model
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdPut($projectChangesModel, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectChangesModel** | [**\SmartCat\Model\ProjectChangesModel**](../Model/ProjectChangesModel.md)| Project changes model | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdReferenceFilesPost()`

```php
apiIntegrationV1ProjectProjectIdReferenceFilesPost($uploadedFile, $projectId)
```

Add reference files to a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uploadedFile = array(new \SmartCat\Model\UploadedFile()); // \SmartCat\Model\UploadedFile[] | Files to be uploaded
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdReferenceFilesPost($uploadedFile, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdReferenceFilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile[]**](../Model/UploadedFile.md)| Files to be uploaded | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdRunEmptyFoldersRemovingPost()`

```php
apiIntegrationV1ProjectProjectIdRunEmptyFoldersRemovingPost($projectId)
```

Run the empty project folders deletion task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdRunEmptyFoldersRemovingPost($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdRunEmptyFoldersRemovingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdStatisticsBuildPost()`

```php
apiIntegrationV1ProjectProjectIdStatisticsBuildPost($projectId, $onlyExactMatches)
```

Start processing the project statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$onlyExactMatches = false; // bool | Specifies whether returning 100% and higher matches will suffice (the default is false)

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdStatisticsBuildPost($projectId, $onlyExactMatches);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdStatisticsBuildPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **onlyExactMatches** | **bool**| Specifies whether returning 100% and higher matches will suffice (the default is false) | [optional] [default to false] |

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

## `apiIntegrationV1ProjectProjectIdStatisticsGet()`

```php
apiIntegrationV1ProjectProjectIdStatisticsGet($projectId, $onlyExactMatches): array<string,\SmartCat\Model\ProjectStatisticsObsoleteModel>
```

(This method is obsolete and has been replaced with /api/integration/v2/project/{projectId}/statistics)  Fetch project statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$onlyExactMatches = false; // bool | Specifies whether returning 100% and higher matches will suffice

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdStatisticsGet($projectId, $onlyExactMatches);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **onlyExactMatches** | **bool**| Specifies whether returning 100% and higher matches will suffice | [optional] [default to false] |

### Return type

[**array<string,\SmartCat\Model\ProjectStatisticsObsoleteModel>**](../Model/ProjectStatisticsObsoleteModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdTranslationmemoriesBylanguagesPost()`

```php
apiIntegrationV1ProjectProjectIdTranslationmemoriesBylanguagesPost($translationMemoriesForLanguageModel, $projectId)
```

Recreate the set of TMs plugged into the project.  A separate set of TMs is created for each target language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$translationMemoriesForLanguageModel = array(new \SmartCat\Model\TranslationMemoriesForLanguageModel()); // \SmartCat\Model\TranslationMemoriesForLanguageModel[] | Collections of languages and their respective TMs
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdTranslationmemoriesBylanguagesPost($translationMemoriesForLanguageModel, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdTranslationmemoriesBylanguagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **translationMemoriesForLanguageModel** | [**\SmartCat\Model\TranslationMemoriesForLanguageModel[]**](../Model/TranslationMemoriesForLanguageModel.md)| Collections of languages and their respective TMs | |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV1ProjectProjectIdTranslationmemoriesGet()`

```php
apiIntegrationV1ProjectProjectIdTranslationmemoriesGet($projectId): \SmartCat\Model\ProjectTranslationMemoryModel[]
```

Receive a list of the TMs plugged into the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $result = $apiInstance->apiIntegrationV1ProjectProjectIdTranslationmemoriesGet($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdTranslationmemoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

### Return type

[**\SmartCat\Model\ProjectTranslationMemoryModel[]**](../Model/ProjectTranslationMemoryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV1ProjectProjectIdTranslationmemoriesPost()`

```php
apiIntegrationV1ProjectProjectIdTranslationmemoriesPost($translationMemoryForProjectModel, $projectId, $onlyExactSourceLanguageMatch, $onlyExactTargetLanguageMatch)
```

Recreate the set of TMs plugged into the project.  The set of TMs is identical for all target languages of the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$translationMemoryForProjectModel = array(new \SmartCat\Model\TranslationMemoryForProjectModel()); // \SmartCat\Model\TranslationMemoryForProjectModel[] | Collection of TMs
$projectId = 'projectId_example'; // string | Project ID
$onlyExactSourceLanguageMatch = false; // bool | Specifies whether exact matches in the source language are required (the default is false)
$onlyExactTargetLanguageMatch = false; // bool | Specifies whether exact matches in the target language are required (the default is false)

try {
    $apiInstance->apiIntegrationV1ProjectProjectIdTranslationmemoriesPost($translationMemoryForProjectModel, $projectId, $onlyExactSourceLanguageMatch, $onlyExactTargetLanguageMatch);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectProjectIdTranslationmemoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **translationMemoryForProjectModel** | [**\SmartCat\Model\TranslationMemoryForProjectModel[]**](../Model/TranslationMemoryForProjectModel.md)| Collection of TMs | |
| **projectId** | **string**| Project ID | |
| **onlyExactSourceLanguageMatch** | **bool**| Specifies whether exact matches in the source language are required (the default is false) | [optional] [default to false] |
| **onlyExactTargetLanguageMatch** | **bool**| Specifies whether exact matches in the target language are required (the default is false) | [optional] [default to false] |

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

## `apiIntegrationV1ProjectRestorePost()`

```php
apiIntegrationV1ProjectRestorePost($projectId)
```

Restore the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID

try {
    $apiInstance->apiIntegrationV1ProjectRestorePost($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV1ProjectRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |

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

## `apiIntegrationV2ProjectListGet()`

```php
apiIntegrationV2ProjectListGet($createdByUserId, $assignedToUserId, $projectName, $externalTag, $clientIds, $offset, $limit): \SmartCat\Model\ProjectModel[]
```

Fetch the list of account projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createdByUserId = 'createdByUserId_example'; // string | ID of the user who created the project
$assignedToUserId = 'assignedToUserId_example'; // string | User ID for filtering by assignment
$projectName = 'projectName_example'; // string | Partial project name
$externalTag = 'externalTag_example'; // string | Partial external tag of the project
$clientIds = array('clientIds_example'); // string[] | Comma-separated client ID
$offset = 0; // int | Number of skipped items
$limit = 100; // int | Maximum returned items (not more than 100)

try {
    $result = $apiInstance->apiIntegrationV2ProjectListGet($createdByUserId, $assignedToUserId, $projectName, $externalTag, $clientIds, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV2ProjectListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createdByUserId** | **string**| ID of the user who created the project | [optional] |
| **assignedToUserId** | **string**| User ID for filtering by assignment | [optional] |
| **projectName** | **string**| Partial project name | [optional] |
| **externalTag** | **string**| Partial external tag of the project | [optional] |
| **clientIds** | [**string[]**](../Model/string.md)| Comma-separated client ID | [optional] |
| **offset** | **int**| Number of skipped items | [optional] [default to 0] |
| **limit** | **int**| Maximum returned items (not more than 100) | [optional] [default to 100] |

### Return type

[**\SmartCat\Model\ProjectModel[]**](../Model/ProjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiIntegrationV2ProjectProjectIdExportPost()`

```php
apiIntegrationV2ProjectProjectIdExportPost($projectId, $exportKeysFromSoftwareLocalizationProjectModel, $collections, $languages, $format, $pathSeparator, $completionState, $fallbackToDefaultLanguage, $exportIncompleteAsBlank, $skipIncompleteKeys, $outputFilePathTemplate, $includeDefaultLanguage, $zip, $modifiedSince, $labels): string
```

Run export from Software Localization Project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$exportKeysFromSoftwareLocalizationProjectModel = new \SmartCat\Model\ExportKeysFromSoftwareLocalizationProjectModel(); // \SmartCat\Model\ExportKeysFromSoftwareLocalizationProjectModel | Export keys model
$collections = 'collections_example'; // string | Comma-separated collections list to export (optional, \"main\" as default)
$languages = 'languages_example'; // string | Comma-separated list of languages to export (optional, all target languages by default)
$format = new \SmartCat\Model\ExportingDocumentFormat(); // ExportingDocumentFormat | Export format (optional, JSON by default)
$pathSeparator = 'pathSeparator_example'; // string | Path separator string (optional)  When exporting \"structured-json\" and \"structured-yaml\" file formats,  this separator string will be used to split the key into multiple parts and construct the tree structure.
$completionState = new \SmartCat\Model\ExportingSegmentCompletionState(); // ExportingSegmentCompletionState | Minimal key completion state (optional)  Specifies the state in which any key (segment) must be in order to be exported.
$fallbackToDefaultLanguage = True; // bool | Return default language values instead of incomplete translations (default)
$exportIncompleteAsBlank = True; // bool | Export blank values when no translation is ready
$skipIncompleteKeys = True; // bool | Do not export keys that have no translations (will be used as a default for the \"android-xml\" export file type)
$outputFilePathTemplate = 'outputFilePathTemplate_example'; // string | Output file path template (optional)  Specifies how to name the output file (when exporting multiple languages at once)  A reasonable default value will be used depending on the chosen file format  Defaults:  - \"strings-{LANGUAGE}.json\" will be used with the JSON file format  - \"strings-{LANGUAGE}.yaml\" with the yaml file format  - \"{LOCALE:IOS}.lproj/values.strings\" will be used with the ios-strings file format  - \"src/main/res/values-{LOCALE:ANDROID}/strings.xml\" will be used with the android-xml file format
$includeDefaultLanguage = True; // bool | Specify if the default language should be included in the export
$zip = True; // bool | Force export to a ZIP archive, even for a single file
$modifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Export keys that were changed after the datetime
$labels = 'labels_example'; // string | Comma-separated list of labels to export keys that are marked with labels

try {
    $result = $apiInstance->apiIntegrationV2ProjectProjectIdExportPost($projectId, $exportKeysFromSoftwareLocalizationProjectModel, $collections, $languages, $format, $pathSeparator, $completionState, $fallbackToDefaultLanguage, $exportIncompleteAsBlank, $skipIncompleteKeys, $outputFilePathTemplate, $includeDefaultLanguage, $zip, $modifiedSince, $labels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV2ProjectProjectIdExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **exportKeysFromSoftwareLocalizationProjectModel** | [**\SmartCat\Model\ExportKeysFromSoftwareLocalizationProjectModel**](../Model/ExportKeysFromSoftwareLocalizationProjectModel.md)| Export keys model | [optional] |
| **collections** | **string**| Comma-separated collections list to export (optional, \&quot;main\&quot; as default) | [optional] |
| **languages** | **string**| Comma-separated list of languages to export (optional, all target languages by default) | [optional] |
| **format** | [**ExportingDocumentFormat**](../Model/.md)| Export format (optional, JSON by default) | [optional] |
| **pathSeparator** | **string**| Path separator string (optional)  When exporting \&quot;structured-json\&quot; and \&quot;structured-yaml\&quot; file formats,  this separator string will be used to split the key into multiple parts and construct the tree structure. | [optional] |
| **completionState** | [**ExportingSegmentCompletionState**](../Model/.md)| Minimal key completion state (optional)  Specifies the state in which any key (segment) must be in order to be exported. | [optional] |
| **fallbackToDefaultLanguage** | **bool**| Return default language values instead of incomplete translations (default) | [optional] |
| **exportIncompleteAsBlank** | **bool**| Export blank values when no translation is ready | [optional] |
| **skipIncompleteKeys** | **bool**| Do not export keys that have no translations (will be used as a default for the \&quot;android-xml\&quot; export file type) | [optional] |
| **outputFilePathTemplate** | **string**| Output file path template (optional)  Specifies how to name the output file (when exporting multiple languages at once)  A reasonable default value will be used depending on the chosen file format  Defaults:  - \&quot;strings-{LANGUAGE}.json\&quot; will be used with the JSON file format  - \&quot;strings-{LANGUAGE}.yaml\&quot; with the yaml file format  - \&quot;{LOCALE:IOS}.lproj/values.strings\&quot; will be used with the ios-strings file format  - \&quot;src/main/res/values-{LOCALE:ANDROID}/strings.xml\&quot; will be used with the android-xml file format | [optional] |
| **includeDefaultLanguage** | **bool**| Specify if the default language should be included in the export | [optional] |
| **zip** | **bool**| Force export to a ZIP archive, even for a single file | [optional] |
| **modifiedSince** | **\DateTime**| Export keys that were changed after the datetime | [optional] |
| **labels** | **string**| Comma-separated list of labels to export keys that are marked with labels | [optional] |

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

## `apiIntegrationV2ProjectProjectIdImportPost()`

```php
apiIntegrationV2ProjectProjectIdImportPost($uploadedFile, $projectId, $collection, $language, $targetLanguages, $format, $labels, $pathSeparator, $skipConflictingValues, $overwriteConflictingValues, $autoFileLabels): string
```

Import keys and values from files into the Software Localization Project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uploadedFile = array(new \SmartCat\Model\UploadedFile()); // \SmartCat\Model\UploadedFile[] | Files for import
$projectId = 'projectId_example'; // string | Project identifier
$collection = 'collection_example'; // string | Target collection (optional, \"main\" as default)
$language = 'language_example'; // string | Language of the imported files
$targetLanguages = 'targetLanguages_example'; // string | Comma separated list of target languages  (optional, all target languages of the project by default, can only be specified when importing the source)
$format = new \SmartCat\Model\ExportingDocumentFormat(); // ExportingDocumentFormat | Specifies the file format used to import the file (optional).  Smartcat will try to identify the file format from its extension.
$labels = 'labels_example'; // string | Comma-separated labels that will be attached to the created/updated segments (even if the text is not changed)
$pathSeparator = 'pathSeparator_example'; // string | Path separator string (optional)
$skipConflictingValues = True; // bool | Specifies how to deal with situations when the same key has a different  value in the imported file and in Smartcat - keeps the value in Smartcat by default
$overwriteConflictingValues = True; // bool | When the same key has a different value in the imported file and in Smartcat - use the value from the file
$autoFileLabels = True; // bool | Should Smartcat automatically create labels after file names?

try {
    $result = $apiInstance->apiIntegrationV2ProjectProjectIdImportPost($uploadedFile, $projectId, $collection, $language, $targetLanguages, $format, $labels, $pathSeparator, $skipConflictingValues, $overwriteConflictingValues, $autoFileLabels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV2ProjectProjectIdImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadedFile** | [**\SmartCat\Model\UploadedFile[]**](../Model/UploadedFile.md)| Files for import | |
| **projectId** | **string**| Project identifier | |
| **collection** | **string**| Target collection (optional, \&quot;main\&quot; as default) | [optional] |
| **language** | **string**| Language of the imported files | [optional] |
| **targetLanguages** | **string**| Comma separated list of target languages  (optional, all target languages of the project by default, can only be specified when importing the source) | [optional] |
| **format** | [**ExportingDocumentFormat**](../Model/.md)| Specifies the file format used to import the file (optional).  Smartcat will try to identify the file format from its extension. | [optional] |
| **labels** | **string**| Comma-separated labels that will be attached to the created/updated segments (even if the text is not changed) | [optional] |
| **pathSeparator** | **string**| Path separator string (optional) | [optional] |
| **skipConflictingValues** | **bool**| Specifies how to deal with situations when the same key has a different  value in the imported file and in Smartcat - keeps the value in Smartcat by default | [optional] |
| **overwriteConflictingValues** | **bool**| When the same key has a different value in the imported file and in Smartcat - use the value from the file | [optional] |
| **autoFileLabels** | **bool**| Should Smartcat automatically create labels after file names? | [optional] |

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

## `apiIntegrationV2ProjectProjectIdStatisticsGet()`

```php
apiIntegrationV2ProjectProjectIdStatisticsGet($projectId, $onlyExactMatches)
```

Fetch project statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SmartCat\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string | Project ID
$onlyExactMatches = false; // bool | Specifies whether returning 100% and higher matches will suffice (the default is false)

try {
    $apiInstance->apiIntegrationV2ProjectProjectIdStatisticsGet($projectId, $onlyExactMatches);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiIntegrationV2ProjectProjectIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Project ID | |
| **onlyExactMatches** | **bool**| Specifies whether returning 100% and higher matches will suffice (the default is false) | [optional] [default to false] |

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
