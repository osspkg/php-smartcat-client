<?php
/**
 * InvoiceStatus
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
 * InvoiceStatus Class Doc Comment
 *
 * @category Class
 * @description Invoice status
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceStatus
{
    /**
     * Possible values of this enum
     */
    public const SENT = 'Sent';

    public const PAID = 'Paid';

    public const PAYMENT_IN_PROCESS = 'PaymentInProcess';

    public const CANCELLED = 'Cancelled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SENT,
            self::PAID,
            self::PAYMENT_IN_PROCESS,
            self::CANCELLED
        ];
    }
}


