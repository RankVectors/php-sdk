# OpenAPI\Client\APIKeysApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiKey()**](APIKeysApi.md#createApiKey) | **POST** /api/api-keys | Create API key |
| [**deleteApiKey()**](APIKeysApi.md#deleteApiKey) | **DELETE** /api/api-keys/{id} | Delete API key |
| [**listApiKeys()**](APIKeysApi.md#listApiKeys) | **GET** /api/api-keys | List API keys |
| [**updateApiKey()**](APIKeysApi.md#updateApiKey) | **PATCH** /api/api-keys/{id} | Update API key |


## `createApiKey()`

```php
createApiKey($create_api_key_request): \OpenAPI\Client\Model\ApiKeyResponse
```

Create API key

Create a new API key for the authenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request = new \OpenAPI\Client\Model\CreateApiKeyRequest(); // \OpenAPI\Client\Model\CreateApiKeyRequest

try {
    $result = $apiInstance->createApiKey($create_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_key_request** | [**\OpenAPI\Client\Model\CreateApiKeyRequest**](../Model/CreateApiKeyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKey()`

```php
deleteApiKey($id): \OpenAPI\Client\Model\DeleteSuggestion200Response
```

Delete API key

Delete an API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | API key ID

try {
    $result = $apiInstance->deleteApiKey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| API key ID | |

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

## `listApiKeys()`

```php
listApiKeys(): \OpenAPI\Client\Model\ApiKey[]
```

List API keys

Get all API keys for the authenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listApiKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApiKey[]**](../Model/ApiKey.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKey()`

```php
updateApiKey($id, $update_api_key_request): \OpenAPI\Client\Model\ApiKey
```

Update API key

Update an API key (activate/deactivate or change name)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | API key ID
$update_api_key_request = new \OpenAPI\Client\Model\UpdateApiKeyRequest(); // \OpenAPI\Client\Model\UpdateApiKeyRequest

try {
    $result = $apiInstance->updateApiKey($id, $update_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| API key ID | |
| **update_api_key_request** | [**\OpenAPI\Client\Model\UpdateApiKeyRequest**](../Model/UpdateApiKeyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
