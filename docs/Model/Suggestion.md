# # Suggestion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique suggestion identifier |
**project_id** | **string** | Project identifier |
**status** | **string** | Suggestion status |
**relevance_score** | **float** | AI-calculated relevance score (0-1) |
**anchor_text** | **string** | Suggested anchor text |
**context** | **string** | Context where the link should be placed | [optional]
**source_page** | [**\OpenAPI\Client\Model\PageInfo**](PageInfo.md) |  |
**target_page** | [**\OpenAPI\Client\Model\PageInfo**](PageInfo.md) |  |
**reasoning** | **string** | AI reasoning for the suggestion | [optional]
**created_at** | **\DateTime** | Suggestion creation timestamp |
**updated_at** | **\DateTime** | Last update timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
