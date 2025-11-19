# OpenAPI\Client\ImplementationsApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getImplementation()**](ImplementationsApi.md#getImplementation) | **GET** /api/projects/{projectId}/implementations/{implementationId} | Get implementation details |
| [**implementLinks()**](ImplementationsApi.md#implementLinks) | **POST** /api/projects/{projectId}/implementations | Implement link suggestions |
| [**listImplementations()**](ImplementationsApi.md#listImplementations) | **GET** /api/projects/{projectId}/implementations | List implementations |
| [**rollbackImplementation()**](ImplementationsApi.md#rollbackImplementation) | **POST** /api/projects/{projectId}/implementations/{implementationId}/rollback | Rollback implementation |


## `getImplementation()`

```php
getImplementation($project_id, $implementation_id): \OpenAPI\Client\Model\GetImplementation200Response
```

Get implementation details

Get detailed information about a specific implementation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImplementationsApi(
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

[**\OpenAPI\Client\Model\GetImplementation200Response**](../Model/GetImplementation200Response.md)

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
implementLinks($project_id, $implementation_request): \OpenAPI\Client\Model\ImplementationResponse
```

Implement link suggestions

Implement one or more link suggestions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImplementationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$implementation_request = {"suggestionIds":["sugg-123"],"platform":"custom","credentials":{"webhookUrl":"https://yourapi.com/rankvectors-webhook","apiKey":"your-webhook-secret-key"}}; // \OpenAPI\Client\Model\ImplementationRequest

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
| **implementation_request** | [**\OpenAPI\Client\Model\ImplementationRequest**](../Model/ImplementationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImplementationResponse**](../Model/ImplementationResponse.md)

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
listImplementations($project_id, $status, $platform, $limit, $offset): \OpenAPI\Client\Model\ListImplementations200Response
```

List implementations

Get implementation history for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImplementationsApi(
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

[**\OpenAPI\Client\Model\ListImplementations200Response**](../Model/ListImplementations200Response.md)

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
rollbackImplementation($project_id, $implementation_id, $rollback_implementation_request): \OpenAPI\Client\Model\RollbackImplementation200Response
```

Rollback implementation

Undo a link implementation and restore original content.  Rollback is universally available for all platforms: - WordPress (via custom/webhook) - Shopify (direct API) - Vercel (via custom/webhook) - Webflow (via custom/webhook) - Contentful (via custom/webhook) - Custom (via webhook)  The rollback process restores the original content that was stored during implementation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImplementationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$implementation_id = impl-123; // string | Unique identifier for the implementation
$rollback_implementation_request = new \OpenAPI\Client\Model\RollbackImplementationRequest(); // \OpenAPI\Client\Model\RollbackImplementationRequest

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
| **rollback_implementation_request** | [**\OpenAPI\Client\Model\RollbackImplementationRequest**](../Model/RollbackImplementationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RollbackImplementation200Response**](../Model/RollbackImplementation200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
