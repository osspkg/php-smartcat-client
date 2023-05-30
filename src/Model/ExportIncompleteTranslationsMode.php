<?php
/**
 * ExportIncompleteTranslationsMode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Smartcat API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SmartCat\Model;
use \SmartCat\ObjectSerializer;

/**
 * ExportIncompleteTranslationsMode Class Doc Comment
 *
 * @category Class
 * @description Export mode for incomplete translations
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportIncompleteTranslationsMode
{
    /**
     * Possible values of this enum
     */
    public const FALLBACK_TO_SOURCE_LANGUAGE = 'FallbackToSourceLanguage';

    public const EXPORT_BLANK = 'ExportBlank';

    public const SKIP = 'Skip';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FALLBACK_TO_SOURCE_LANGUAGE,
            self::EXPORT_BLANK,
            self::SKIP
        ];
    }
}


