# # PretranslateRuleModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ruleType** | [**\SmartCat\Model\PretranslateRuleType**](PretranslateRuleType.md) |  |
**order** | **int** | Ordering number of the rule (starting with 1) |
**confirmAtWorkflowStep** | **string** | Specify at which workflow stage pretranslation segments must be confirmed  (null if confirmation is not required) | [optional]
**translationMemoryId** | **string** | Translation memory (TM) ID, if the rule involves the use of TM matches | [optional]
**minThreshold** | **int** | Minimum match threshold, if the rule involves the use of TM matches | [optional]
**minSegmentWordsCount** | **int** | Minimum segment length, if the rule involves the use of TM matches | [optional]
**minAssuranceLevel** | [**\SmartCat\Model\TMTranslationAssuranceLevel**](TMTranslationAssuranceLevel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
