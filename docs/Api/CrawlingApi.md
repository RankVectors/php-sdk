# com.rankvectors\CrawlingApi

All URIs are relative to https://api.rankvectors.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCrawlHistory()**](CrawlingApi.md#getCrawlHistory) | **GET** /api/projects/{projectId}/crawl | Get crawl history |
| [**startCrawl()**](CrawlingApi.md#startCrawl) | **POST** /api/projects/{projectId}/crawl | Start website crawl |


## `getCrawlHistory()`

```php
getCrawlHistory($project_id): \com.rankvectors\com.rankvectors.model\Crawl[]
```

Get crawl history

Get the crawl history for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\CrawlingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project

try {
    $result = $apiInstance->getCrawlHistory($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlingApi->getCrawlHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |

### Return type

[**\com.rankvectors\com.rankvectors.model\Crawl[]**](../Model/Crawl.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startCrawl()`

```php
startCrawl($project_id, $start_crawl_request): \com.rankvectors\com.rankvectors.model\Crawl
```

Start website crawl

Start crawling a website to analyze content for link opportunities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.rankvectors\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new com.rankvectors\Api\CrawlingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = proj-123; // string | Unique identifier for the project
$start_crawl_request = new \com.rankvectors\com.rankvectors.model\StartCrawlRequest(); // \com.rankvectors\com.rankvectors.model\StartCrawlRequest

try {
    $result = $apiInstance->startCrawl($project_id, $start_crawl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlingApi->startCrawl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**| Unique identifier for the project | |
| **start_crawl_request** | [**\com.rankvectors\com.rankvectors.model\StartCrawlRequest**](../Model/StartCrawlRequest.md)|  | [optional] |

### Return type

[**\com.rankvectors\com.rankvectors.model\Crawl**](../Model/Crawl.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
