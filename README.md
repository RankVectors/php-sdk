# rankvectors/rankvectors

Intelligent internal linking optimization API using AI. 

RankVectors helps you automatically discover and implement optimal internal links 
across your website to improve SEO performance and user experience.

## Key Features
- **AI-Powered Analysis**: Uses OpenAI embeddings to find optimal linking opportunities
- **Smart Crawling**: Automatically crawls and analyzes your website content
- **Automated Implementation**: Implement links via webhooks or manual instructions
- **Page-Based Plans**: Predictable pricing by number of pages monitored
- **Multi-Platform Support**: Works with any CMS or platform via REST API

## Getting Started
1. Create a project with your website URL
2. Start a crawl to analyze your content
3. Generate AI-powered link suggestions
4. Implement suggestions via API or webhook
5. Track performance and manage page usage and limits

## Authentication
Most API endpoints support authentication using your RankVectors API key.
Include your API key in the `Authorization` header:
```
Authorization: Bearer YOUR_API_KEY
```

Get your API key from your RankVectors dashboard: Settings → API Keys

**Note**: Some endpoints (marked in the documentation) support both API key authentication and web session authentication (Stack Auth). 
API key authentication is required for SDK usage and external integrations like WordPress plugins.


For more information, please visit [https://rankvectors.com/docs](https://rankvectors.com/docs).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/rankvectors/rankvectors-php-sdk.git"
    }
  ],
  "require": {
    "rankvectors/rankvectors-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/rankvectors/rankvectors/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.rankvectors.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**createApiKey**](docs/Api/APIKeysApi.md#createapikey) | **POST** /api/api-keys | Create API key
*APIKeysApi* | [**deleteApiKey**](docs/Api/APIKeysApi.md#deleteapikey) | **DELETE** /api/api-keys/{id} | Delete API key
*APIKeysApi* | [**listApiKeys**](docs/Api/APIKeysApi.md#listapikeys) | **GET** /api/api-keys | List API keys
*APIKeysApi* | [**updateApiKey**](docs/Api/APIKeysApi.md#updateapikey) | **PATCH** /api/api-keys/{id} | Update API key
*AnalyticsApi* | [**getProjectAnalytics**](docs/Api/AnalyticsApi.md#getprojectanalytics) | **GET** /api/projects/{projectId}/analytics | Get project analytics
*ContentVerificationApi* | [**getPageChanges**](docs/Api/ContentVerificationApi.md#getpagechanges) | **GET** /api/projects/{projectId}/changes | Get page changes
*ContentVerificationApi* | [**verifyContent**](docs/Api/ContentVerificationApi.md#verifycontent) | **POST** /api/projects/{projectId}/verify-content | Verify page content
*CrawlingApi* | [**getCrawlHistory**](docs/Api/CrawlingApi.md#getcrawlhistory) | **GET** /api/projects/{projectId}/crawl | Get crawl history
*CrawlingApi* | [**startCrawl**](docs/Api/CrawlingApi.md#startcrawl) | **POST** /api/projects/{projectId}/crawl | Start website crawl
*ImplementationsApi* | [**getImplementation**](docs/Api/ImplementationsApi.md#getimplementation) | **GET** /api/projects/{projectId}/implementations/{implementationId} | Get implementation details
*ImplementationsApi* | [**implementLinks**](docs/Api/ImplementationsApi.md#implementlinks) | **POST** /api/projects/{projectId}/implementations | Implement link suggestions
*ImplementationsApi* | [**listImplementations**](docs/Api/ImplementationsApi.md#listimplementations) | **GET** /api/projects/{projectId}/implementations | List implementations
*ImplementationsApi* | [**rollbackImplementation**](docs/Api/ImplementationsApi.md#rollbackimplementation) | **POST** /api/projects/{projectId}/implementations/{implementationId}/rollback | Rollback implementation
*PagesApi* | [**batchSyncPages**](docs/Api/PagesApi.md#batchsyncpages) | **POST** /api/projects/{projectId}/pages/batch | Batch sync pages
*PagesApi* | [**listPages**](docs/Api/PagesApi.md#listpages) | **GET** /api/projects/{projectId}/pages | List pages
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /api/projects | Create a new project
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /api/projects/{projectId} | Delete a project
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /api/projects/{projectId} | Get project details
*ProjectsApi* | [**listProjects**](docs/Api/ProjectsApi.md#listprojects) | **GET** /api/projects | List all projects
*ProjectsApi* | [**syncProject**](docs/Api/ProjectsApi.md#syncproject) | **POST** /api/projects/{projectId}/sync | Sync project
*SuggestionsApi* | [**deleteSuggestion**](docs/Api/SuggestionsApi.md#deletesuggestion) | **DELETE** /api/projects/{projectId}/suggestions/{suggestionId} | Delete suggestion
*SuggestionsApi* | [**generateSuggestions**](docs/Api/SuggestionsApi.md#generatesuggestions) | **POST** /api/projects/{projectId}/suggestions | Generate link suggestions
*SuggestionsApi* | [**getSuggestions**](docs/Api/SuggestionsApi.md#getsuggestions) | **GET** /api/projects/{projectId}/suggestions | Get link suggestions
*SuggestionsApi* | [**updateSuggestion**](docs/Api/SuggestionsApi.md#updatesuggestion) | **PATCH** /api/projects/{projectId}/suggestions/{suggestionId} | Update suggestion status
*UserApi* | [**getUserInfo**](docs/Api/UserApi.md#getuserinfo) | **GET** /api/user/me | Get authenticated user information
*WebhooksApi* | [**getImplementationInstructions**](docs/Api/WebhooksApi.md#getimplementationinstructions) | **GET** /api/webhook/implement-link | Get implementation instructions
*WebhooksApi* | [**reportImplementationStatus**](docs/Api/WebhooksApi.md#reportimplementationstatus) | **POST** /api/webhook/implement-link | Report implementation status

## Models

- [ApiKey](docs/Model/ApiKey.md)
- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [BatchSyncPages200Response](docs/Model/BatchSyncPages200Response.md)
- [BatchSyncPagesRequest](docs/Model/BatchSyncPagesRequest.md)
- [ChangeResult](docs/Model/ChangeResult.md)
- [ContentVerification](docs/Model/ContentVerification.md)
- [Crawl](docs/Model/Crawl.md)
- [CreateApiKeyRequest](docs/Model/CreateApiKeyRequest.md)
- [CreateProjectRequest](docs/Model/CreateProjectRequest.md)
- [CustomCredentials](docs/Model/CustomCredentials.md)
- [DeleteProject200Response](docs/Model/DeleteProject200Response.md)
- [DeleteSuggestion200Response](docs/Model/DeleteSuggestion200Response.md)
- [Error](docs/Model/Error.md)
- [GenerateSuggestions200Response](docs/Model/GenerateSuggestions200Response.md)
- [GenerateSuggestionsRequest](docs/Model/GenerateSuggestionsRequest.md)
- [GetImplementation200Response](docs/Model/GetImplementation200Response.md)
- [GetPageChanges200Response](docs/Model/GetPageChanges200Response.md)
- [GetPageChanges200ResponseSummary](docs/Model/GetPageChanges200ResponseSummary.md)
- [GetUserInfo200Response](docs/Model/GetUserInfo200Response.md)
- [GetUserInfo200ResponseLinks](docs/Model/GetUserInfo200ResponseLinks.md)
- [GetUserInfo200ResponseUser](docs/Model/GetUserInfo200ResponseUser.md)
- [Implementation](docs/Model/Implementation.md)
- [ImplementationInstructions](docs/Model/ImplementationInstructions.md)
- [ImplementationRequest](docs/Model/ImplementationRequest.md)
- [ImplementationResponse](docs/Model/ImplementationResponse.md)
- [ImplementationResult](docs/Model/ImplementationResult.md)
- [ImplementationSummary](docs/Model/ImplementationSummary.md)
- [LinkOpportunity](docs/Model/LinkOpportunity.md)
- [ListImplementations200Response](docs/Model/ListImplementations200Response.md)
- [ListPages200Response](docs/Model/ListPages200Response.md)
- [Page](docs/Model/Page.md)
- [PageAllowance](docs/Model/PageAllowance.md)
- [PageAllowanceInfo](docs/Model/PageAllowanceInfo.md)
- [PageAllowanceUsageHistoryInner](docs/Model/PageAllowanceUsageHistoryInner.md)
- [PageChange](docs/Model/PageChange.md)
- [PageChangePage](docs/Model/PageChangePage.md)
- [PageData](docs/Model/PageData.md)
- [PageInfo](docs/Model/PageInfo.md)
- [PageLimitStatus](docs/Model/PageLimitStatus.md)
- [PagePricing](docs/Model/PagePricing.md)
- [PagePricingPagePacksInner](docs/Model/PagePricingPagePacksInner.md)
- [PagePricingTiersInner](docs/Model/PagePricingTiersInner.md)
- [PeriodCharges](docs/Model/PeriodCharges.md)
- [Project](docs/Model/Project.md)
- [ProjectAnalytics](docs/Model/ProjectAnalytics.md)
- [ProjectAnalyticsContentStats](docs/Model/ProjectAnalyticsContentStats.md)
- [ProjectAnalyticsImplementationStats](docs/Model/ProjectAnalyticsImplementationStats.md)
- [ProjectAnalyticsSuggestionStats](docs/Model/ProjectAnalyticsSuggestionStats.md)
- [ProjectAnalyticsSyncStats](docs/Model/ProjectAnalyticsSyncStats.md)
- [ProjectCount](docs/Model/ProjectCount.md)
- [ReportImplementationStatus200Response](docs/Model/ReportImplementationStatus200Response.md)
- [ReportImplementationStatusRequest](docs/Model/ReportImplementationStatusRequest.md)
- [Rollback](docs/Model/Rollback.md)
- [RollbackImplementation200Response](docs/Model/RollbackImplementation200Response.md)
- [RollbackImplementationRequest](docs/Model/RollbackImplementationRequest.md)
- [StartCrawlRequest](docs/Model/StartCrawlRequest.md)
- [StepByStepInstructions](docs/Model/StepByStepInstructions.md)
- [Suggestion](docs/Model/Suggestion.md)
- [SyncProject200Response](docs/Model/SyncProject200Response.md)
- [SyncProjectRequest](docs/Model/SyncProjectRequest.md)
- [UpdateApiKeyRequest](docs/Model/UpdateApiKeyRequest.md)
- [UpdateSuggestionRequest](docs/Model/UpdateSuggestionRequest.md)
- [UsageHistoryItem](docs/Model/UsageHistoryItem.md)
- [VerifyContent200Response](docs/Model/VerifyContent200Response.md)
- [VerifyContentRequest](docs/Model/VerifyContentRequest.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

tj@rankvectors.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.1`
    - Generator version: `7.16.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
