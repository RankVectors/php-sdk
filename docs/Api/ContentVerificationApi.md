# com.rankvectors\ContentVerificationApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**verifyContent()**](ContentVerificationApi.md#verifyContent) | **POST** /api/projects/{projectId}/verify-content | Verify page content |


## `verifyContent()`

```php
verifyContent($project_id, $verify_content_request): \com.rankvectors\com.rankvectors.model\VerifyContent200Response
```

Verify page content

Check if page content has changed since last crawl

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\ContentVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$verify_content_request = new \com.rankvectors\com.rankvectors.model\VerifyContentRequest(); // \com.rankvectors\com.rankvectors.model\VerifyContentRequest

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
| **verify_content_request** | [**\com.rankvectors\com.rankvectors.model\VerifyContentRequest**](../Model/VerifyContentRequest.md)|  | |

### Return type

[**\com.rankvectors\com.rankvectors.model\VerifyContent200Response**](../Model/VerifyContent200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
