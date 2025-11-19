# OpenAPI\Client\SuggestionsApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSuggestion()**](SuggestionsApi.md#deleteSuggestion) | **DELETE** /api/projects/{projectId}/suggestions/{suggestionId} | Delete suggestion |
| [**generateSuggestions()**](SuggestionsApi.md#generateSuggestions) | **POST** /api/projects/{projectId}/suggestions | Generate link suggestions |
| [**getSuggestions()**](SuggestionsApi.md#getSuggestions) | **GET** /api/projects/{projectId}/suggestions | Get link suggestions |
| [**updateSuggestion()**](SuggestionsApi.md#updateSuggestion) | **PATCH** /api/projects/{projectId}/suggestions/{suggestionId} | Update suggestion status |


## `deleteSuggestion()`

```php
deleteSuggestion($project_id, $suggestion_id): \OpenAPI\Client\Model\DeleteSuggestion200Response
```

Delete suggestion

Delete a link suggestion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuggestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$suggestion_id = sugg-123; // string | Unique identifier for the suggestion

try {
    $result = $apiInstance->deleteSuggestion($project_id, $suggestion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestionsApi->deleteSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **suggestion_id** | **string**| Unique identifier for the suggestion | |

### Return type

[**\OpenAPI\Client\Model\DeleteSuggestion200Response**](../Model/DeleteSuggestion200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSuggestions()`

```php
generateSuggestions($project_id, $generate_suggestions_request): \OpenAPI\Client\Model\GenerateSuggestions200Response
```

Generate link suggestions

Generate new AI-powered link suggestions for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuggestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$generate_suggestions_request = new \OpenAPI\Client\Model\GenerateSuggestionsRequest(); // \OpenAPI\Client\Model\GenerateSuggestionsRequest

try {
    $result = $apiInstance->generateSuggestions($project_id, $generate_suggestions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestionsApi->generateSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **generate_suggestions_request** | [**\OpenAPI\Client\Model\GenerateSuggestionsRequest**](../Model/GenerateSuggestionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateSuggestions200Response**](../Model/GenerateSuggestions200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestions()`

```php
getSuggestions($project_id, $status): \OpenAPI\Client\Model\Suggestion[]
```

Get link suggestions

Get AI-generated link suggestions for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuggestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$status = pending; // string | Filter suggestions by status

try {
    $result = $apiInstance->getSuggestions($project_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestionsApi->getSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **status** | **string**| Filter suggestions by status | [optional] |

### Return type

[**\OpenAPI\Client\Model\Suggestion[]**](../Model/Suggestion.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSuggestion()`

```php
updateSuggestion($project_id, $suggestion_id, $update_suggestion_request): \OpenAPI\Client\Model\Suggestion
```

Update suggestion status

Update the status of a link suggestion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuggestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$suggestion_id = sugg-123; // string | Unique identifier for the suggestion
$update_suggestion_request = new \OpenAPI\Client\Model\UpdateSuggestionRequest(); // \OpenAPI\Client\Model\UpdateSuggestionRequest

try {
    $result = $apiInstance->updateSuggestion($project_id, $suggestion_id, $update_suggestion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestionsApi->updateSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **suggestion_id** | **string**| Unique identifier for the suggestion | |
| **update_suggestion_request** | [**\OpenAPI\Client\Model\UpdateSuggestionRequest**](../Model/UpdateSuggestionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Suggestion**](../Model/Suggestion.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
