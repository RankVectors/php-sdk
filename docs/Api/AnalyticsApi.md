# OpenAPI\Client\AnalyticsApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProjectAnalytics()**](AnalyticsApi.md#getProjectAnalytics) | **GET** /api/projects/{projectId}/analytics | Get project analytics |


## `getProjectAnalytics()`

```php
getProjectAnalytics($project_id, $start_date, $end_date): \OpenAPI\Client\Model\ProjectAnalytics
```

Get project analytics

Get detailed analytics for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date for analytics
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date for analytics

try {
    $result = $apiInstance->getProjectAnalytics($project_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getProjectAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **start_date** | **\DateTime**| Start date for analytics | [optional] |
| **end_date** | **\DateTime**| End date for analytics | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectAnalytics**](../Model/ProjectAnalytics.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
