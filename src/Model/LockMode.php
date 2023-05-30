<?php
/**
 * LockMode
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
 * LockMode Class Doc Comment
 *
 * @category Class
 * @description Mode of locking segments at import
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LockMode
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const BY_STATES = 'ByStates';

    public const CONFIRMED = 'Confirmed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::BY_STATES,
            self::CONFIRMED
        ];
    }
}


