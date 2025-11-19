# OpenAPI\Client\ContentVerificationApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPageChanges()**](ContentVerificationApi.md#getPageChanges) | **GET** /api/projects/{projectId}/changes | Get page changes |
| [**verifyContent()**](ContentVerificationApi.md#verifyContent) | **POST** /api/projects/{projectId}/verify-content | Verify page content |


## `getPageChanges()`

```php
getPageChanges($project_id, $status, $page_id, $limit): \OpenAPI\Client\Model\GetPageChanges200Response
```

Get page changes

Get change history for pages in a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$status = 'status_example'; // string | Filter by change status
$page_id = 'page_id_example'; // string | Filter by page ID
$limit = 50; // int | Results per page

try {
    $result = $apiInstance->getPageChanges($project_id, $status, $page_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentVerificationApi->getPageChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **status** | **string**| Filter by change status | [optional] |
| **page_id** | **string**| Filter by page ID | [optional] |
| **limit** | **int**| Results per page | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\GetPageChanges200Response**](../Model/GetPageChanges200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyContent()`

```php
verifyContent($project_id, $verify_content_request): \OpenAPI\Client\Model\VerifyContent200Response
```

Verify page content

Check if page content has changed since last crawl

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$verify_content_request = new \OpenAPI\Client\Model\VerifyContentRequest(); // \OpenAPI\Client\Model\VerifyContentRequest

try {
    $result = $apiInstance->verifyContent($project_id, $verify_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentVerificationApi->verifyContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **verify_content_request** | [**\OpenAPI\Client\Model\VerifyContentRequest**](../Model/VerifyContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VerifyContent200Response**](../Model/VerifyContent200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
