# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getImplementationInstructions()**](WebhooksApi.md#getImplementationInstructions) | **GET** /api/webhook/implement-link | Get implementation instructions |
| [**reportImplementationStatus()**](WebhooksApi.md#reportImplementationStatus) | **POST** /api/webhook/implement-link | Report implementation status |


## `getImplementationInstructions()`

```php
getImplementationInstructions($suggestion_id): \OpenAPI\Client\Model\ImplementationInstructions
```

Get implementation instructions

Get step-by-step instructions for implementing a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$suggestion_id = sugg-123; // string | ID of the suggestion to implement

try {
    $result = $apiInstance->getImplementationInstructions($suggestion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getImplementationInstructions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **suggestion_id** | **string**| ID of the suggestion to implement | |

### Return type

[**\OpenAPI\Client\Model\ImplementationInstructions**](../Model/ImplementationInstructions.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportImplementationStatus()`

```php
reportImplementationStatus($report_implementation_status_request): \OpenAPI\Client\Model\ReportImplementationStatus200Response
```

Report implementation status

Report the status of a link implementation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_implementation_status_request = new \OpenAPI\Client\Model\ReportImplementationStatusRequest(); // \OpenAPI\Client\Model\ReportImplementationStatusRequest

try {
    $result = $apiInstance->reportImplementationStatus($report_implementation_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->reportImplementationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_implementation_status_request** | [**\OpenAPI\Client\Model\ReportImplementationStatusRequest**](../Model/ReportImplementationStatusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportImplementationStatus200Response**](../Model/ReportImplementationStatus200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
