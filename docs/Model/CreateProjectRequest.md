# # CreateProjectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Project name |
**domain** | **string** | Website domain URL |
**prompt** | **string** | Natural language prompt for crawling | [optional]
**search_query** | **string** | Search query for targeted crawling | [optional]
**sitemap_mode** | **string** | How to handle sitemaps | [optional] [default to 'include']
**include_subdomains** | **bool** | Whether to include subdomains | [optional] [default to true]
**ignore_query_params** | **bool** | Whether to ignore URL query parameters | [optional] [default to true]
**max_discovery_depth** | **int** | Maximum crawl depth | [optional]
**exclude_paths** | **string[]** | Paths to exclude from crawling | [optional]
**include_paths** | **string[]** | Specific paths to include | [optional]
**crawl_entire_domain** | **bool** | Whether to crawl the entire domain | [optional] [default to false]
**allow_external_links** | **bool** | Whether to allow external links | [optional] [default to false]
**max_pages** | **int** | Maximum number of pages to crawl | [optional] [default to 100]
**crawl_delay** | **int** | Delay between crawl requests (ms) | [optional]
**crawl_max_concurrency** | **int** | Maximum concurrent crawl requests | [optional]
**only_main_content** | **bool** | Whether to extract only main content | [optional] [default to true]
**custom_headers** | **array<string,string>** | Custom headers for crawling | [optional]
**wait_for** | **int** | Wait time for page load (ms) | [optional] [default to 0]
**block_ads** | **bool** | Whether to block ads | [optional] [default to true]
**proxy_mode** | **string** | Proxy mode for crawling | [optional] [default to 'auto']
**use_reranking** | **bool** | Whether to use AI reranking | [optional] [default to true]
**enable_change_tracking** | **bool** | Whether to enable change tracking | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
