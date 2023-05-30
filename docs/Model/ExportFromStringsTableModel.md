# # ExportFromStringsTableModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branch** | **string** | Exporting branch | [optional]
**format** | [**\SmartCat\Model\ExportingDocumentFormat**](ExportingDocumentFormat.md) |  | [optional]
**exportIncompleteTranslationsMode** | [**\SmartCat\Model\ExportIncompleteTranslationsMode**](ExportIncompleteTranslationsMode.md) |  | [optional]
**includeSourceLanguage** | **bool** | Include source language to export | [optional]
**outputFileName** | **string** | Output file or zip bundle name template.  For zip bundle the default name will be \&quot;export-YYYY-MM-DD-hhmmss-{PROJECT}-{COLLECTION}.zip\&quot;. | [optional]
**outputFilePathTemplate** | **string** | Specifies how to name the output file in zip archive when exporting multiple languages at once.  A reasonable default value will be used depending on the chosen file format. | [optional]
**pathSeparator** | **string** | Keys path separator for structurable file formats | [optional]
**languages** | **string[]** | Exporting translation languages | [optional]
**segmentExportMode** | [**\SmartCat\Model\SegmentExportMode**](SegmentExportMode.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
