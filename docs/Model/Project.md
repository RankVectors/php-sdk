# # Project

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique project identifier |
**name** | **string** | Project name |
**domain** | **string** | Website domain URL |
**user_id** | **string** | User who owns the project |
**prompt** | **string** | Natural language prompt for crawling | [optional]
**search_query** | **string** | Search query for targeted crawling | [optional]
**sitemap_mode** | **string** | How to handle sitemaps | [optional]
**include_subdomains** | **bool** | Whether to include subdomains | [optional]
**ignore_query_params** | **bool** | Whether to ignore URL query parameters | [optional]
**max_discovery_depth** | **int** | Maximum crawl depth | [optional]
**exclude_paths** | **string[]** | Paths to exclude from crawling | [optional]
**include_paths** | **string[]** | Specific paths to include | [optional]
**crawl_entire_domain** | **bool** | Whether to crawl the entire domain | [optional]
**allow_external_links** | **bool** | Whether to allow external links | [optional]
**max_pages** | **int** | Maximum number of pages to crawl | [optional]
**crawl_delay** | **int** | Delay between crawl requests (ms) | [optional]
**crawl_max_concurrency** | **int** | Maximum concurrent crawl requests | [optional]
**only_main_content** | **bool** | Whether to extract only main content | [optional]
**custom_headers** | **array<string,string>** | Custom headers for crawling | [optional]
**wait_for** | **int** | Wait time for page load (ms) | [optional]
**block_ads** | **bool** | Whether to block ads | [optional]
**proxy_mode** | **string** | Proxy mode for crawling | [optional]
**use_reranking** | **bool** | Whether to use AI reranking | [optional]
**enable_change_tracking** | **bool** | Whether to enable change tracking | [optional]
**created_at** | **\DateTime** | Project creation timestamp |
**updated_at** | **\DateTime** | Last update timestamp |
**_count** | [**\OpenAPI\Client\Model\ProjectCount**](ProjectCount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
