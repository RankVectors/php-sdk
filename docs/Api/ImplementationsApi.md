# com.rankvectors\ImplementationsApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getImplementation()**](ImplementationsApi.md#getImplementation) | **GET** /api/projects/{projectId}/implementations/{implementationId} | Get implementation details |
| [**implementLinks()**](ImplementationsApi.md#implementLinks) | **POST** /api/projects/{projectId}/implementations | Implement link suggestions |
| [**listImplementations()**](ImplementationsApi.md#listImplementations) | **GET** /api/projects/{projectId}/implementations | List implementations |
| [**rollbackImplementation()**](ImplementationsApi.md#rollbackImplementation) | **POST** /api/projects/{projectId}/implementations/{implementationId}/rollback | Rollback implementation |


## `getImplementation()`

```php
getImplementation($project_id, $implementation_id): \com.rankvectors\com.rankvectors.model\GetImplementation200Response
```

Get implementation details

Get detailed information about a specific implementation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\ImplementationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$implementation_id = impl-123; // string | Unique identifier for the implementation

try {
    $result = $apiInstance->getImplementation($project_id, $implementation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImplementationsApi->getImplementation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **implementation_id** | **string**| Unique identifier for the implementation | |

### Return type

[**\com.rankvectors\com.rankvectors.model\GetImplementation200Response**](../Model/GetImplementation200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `implementLinks()`

```php
implementLinks($project_id, $implementation_request): \com.rankvectors\com.rankvectors.model\ImplementationResponse
```

Implement link suggestions

Implement one or more link suggestions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\ImplementationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$implementation_request = {"suggestionIds":["sugg-123"],"platform":"custom","credentials":{"webhookUrl":"https://yourapi.com/rankvectors-webhook","apiKey":"your-webhook-secret-key"}}; // \com.rankvectors\com.rankvectors.model\ImplementationRequest

try {
    $result = $apiInstance->implementLinks($project_id, $implementation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImplementationsApi->implementLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **implementation_request** | [**\com.rankvectors\com.rankvectors.model\ImplementationRequest**](../Model/ImplementationRequest.md)|  | |

### Return type

[**\com.rankvectors\com.rankvectors.model\ImplementationResponse**](../Model/ImplementationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listImplementations()`

```php
listImplementations($project_id, $status, $platform, $limit, $offset): \com.rankvectors\com.rankvectors.model\ListImplementations200Response
```

List implementations

Get implementation history for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\ImplementationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$status = 'status_example'; // string | Filter by implementation status
$platform = 'platform_example'; // string | Filter by platform
$limit = 50; // int | Results per page
$offset = 0; // int | Pagination offset

try {
    $result = $apiInstance->listImplementations($project_id, $status, $platform, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImplementationsApi->listImplementations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **status** | **string**| Filter by implementation status | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **limit** | **int**| Results per page | [optional] [default to 50] |
| **offset** | **int**| Pagination offset | [optional] [default to 0] |

### Return type

[**\com.rankvectors\com.rankvectors.model\ListImplementations200Response**](../Model/ListImplementations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbackImplementation()`

```php
rollbackImplementation($project_id, $implementation_id, $rollback_implementation_request): \com.rankvectors\com.rankvectors.model\RollbackImplementation200Response
```

Rollback implementation

Undo a link implementation and restore original content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\ImplementationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$implementation_id = impl-123; // string | Unique identifier for the implementation
$rollback_implementation_request = new \com.rankvectors\com.rankvectors.model\RollbackImplementationRequest(); // \com.rankvectors\com.rankvectors.model\RollbackImplementationRequest

try {
    $result = $apiInstance->rollbackImplementation($project_id, $implementation_id, $rollback_implementation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImplementationsApi->rollbackImplementation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **implementation_id** | **string**| Unique identifier for the implementation | |
| **rollback_implementation_request** | [**\com.rankvectors\com.rankvectors.model\RollbackImplementationRequest**](../Model/RollbackImplementationRequest.md)|  | |

### Return type

[**\com.rankvectors\com.rankvectors.model\RollbackImplementation200Response**](../Model/RollbackImplementation200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
