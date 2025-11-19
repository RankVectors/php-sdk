# OpenAPI\Client\PagesApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchSyncPages()**](PagesApi.md#batchSyncPages) | **POST** /api/projects/{projectId}/pages/batch | Batch sync pages |
| [**listPages()**](PagesApi.md#listPages) | **GET** /api/projects/{projectId}/pages | List pages |


## `batchSyncPages()`

```php
batchSyncPages($project_id, $batch_sync_pages_request): \OpenAPI\Client\Model\BatchSyncPages200Response
```

Batch sync pages

Sync multiple pages to a project (used by WordPress and other integrations)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$batch_sync_pages_request = new \OpenAPI\Client\Model\BatchSyncPagesRequest(); // \OpenAPI\Client\Model\BatchSyncPagesRequest

try {
    $result = $apiInstance->batchSyncPages($project_id, $batch_sync_pages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->batchSyncPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **batch_sync_pages_request** | [**\OpenAPI\Client\Model\BatchSyncPagesRequest**](../Model/BatchSyncPagesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BatchSyncPages200Response**](../Model/BatchSyncPages200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPages()`

```php
listPages($project_id, $limit, $offset): \OpenAPI\Client\Model\ListPages200Response
```

List pages

Get a list of pages for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$limit = 50; // int | Results per page
$offset = 0; // int | Pagination offset

try {
    $result = $apiInstance->listPages($project_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->listPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **limit** | **int**| Results per page | [optional] [default to 50] |
| **offset** | **int**| Pagination offset | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\ListPages200Response**](../Model/ListPages200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
