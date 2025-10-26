# # Implementation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique implementation identifier |
**status** | **string** | Implementation status |
**platform** | **string** | Platform used |
**implementation_method** | **string** | Implementation method | [optional]
**credits_used** | **float** | Credits consumed |
**created_at** | **\DateTime** | Implementation start timestamp |
**completed_at** | **\DateTime** | Implementation completion timestamp | [optional]
**metadata** | **array<string,mixed>** | Platform-specific metadata | [optional]
**suggestion** | [**\com.rankvectors\com.rankvectors.model\Suggestion**](Suggestion.md) |  |
**rollbacks** | [**\com.rankvectors\com.rankvectors.model\Rollback[]**](Rollback.md) | Rollback history | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
