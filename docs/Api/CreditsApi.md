# com.rankvectors\CreditsApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCredits()**](CreditsApi.md#addCredits) | **POST** /api/projects/{projectId}/credits | Add credits |
| [**getCredits()**](CreditsApi.md#getCredits) | **GET** /api/projects/{projectId}/credits | Get credit balance |


## `addCredits()`

```php
addCredits($project_id, $add_credits_request): \com.rankvectors\com.rankvectors.model\AddCredits200Response
```

Add credits

Add credits to a project (admin or payment webhook use)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$add_credits_request = new \com.rankvectors\com.rankvectors.model\AddCreditsRequest(); // \com.rankvectors\com.rankvectors.model\AddCreditsRequest

try {
    $result = $apiInstance->addCredits($project_id, $add_credits_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->addCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **add_credits_request** | [**\com.rankvectors\com.rankvectors.model\AddCreditsRequest**](../Model/AddCreditsRequest.md)|  | |

### Return type

[**\com.rankvectors\com.rankvectors.model\AddCredits200Response**](../Model/AddCredits200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredits()`

```php
getCredits($project_id, $include_history, $start_date, $end_date): \com.rankvectors\com.rankvectors.model\CreditBalance
```

Get credit balance

Get credit balance and usage history for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$include_history = false; // bool | Include usage history
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | History start date (ISO 8601)
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | History end date (ISO 8601)

try {
    $result = $apiInstance->getCredits($project_id, $include_history, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **include_history** | **bool**| Include usage history | [optional] [default to false] |
| **start_date** | **\DateTime**| History start date (ISO 8601) | [optional] |
| **end_date** | **\DateTime**| History end date (ISO 8601) | [optional] |

### Return type

[**\com.rankvectors\com.rankvectors.model\CreditBalance**](../Model/CreditBalance.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
