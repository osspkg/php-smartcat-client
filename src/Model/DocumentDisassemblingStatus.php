<?php
/**
 * DocumentDisassemblingStatus
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
 * DocumentDisassemblingStatus Class Doc Comment
 *
 * @category Class
 * @description Document disassembly status
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentDisassemblingStatus
{
    /**
     * Possible values of this enum
     */
    public const IN_PROGRESS = 'InProgress';

    public const ERROR = 'Error';

    public const SUCCESS = 'Success';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_PROGRESS,
            self::ERROR,
            self::SUCCESS
        ];
    }
}


