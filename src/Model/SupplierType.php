<?php
/**
 * SupplierType
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
 * SupplierType Class Doc Comment
 *
 * @category Class
 * @description Supplier type
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupplierType
{
    /**
     * Possible values of this enum
     */
    public const FREELANCER = 'Freelancer';

    public const COMPANY = 'Company';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FREELANCER,
            self::COMPANY
        ];
    }
}


