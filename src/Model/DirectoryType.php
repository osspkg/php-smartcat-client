<?php
/**
 * DirectoryType
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
 * DirectoryType Class Doc Comment
 *
 * @category Class
 * @description Directory type
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DirectoryType
{
    /**
     * Possible values of this enum
     */
    public const LANGUAGE = 'Language';

    public const VENDOR = 'Vendor';

    public const DOMAIN = 'Domain';

    public const CLIENT = 'Client';

    public const GROUP = 'Group';

    public const PROJECT_STATUS = 'ProjectStatus';

    public const DOCUMENT_STATUS = 'DocumentStatus';

    public const NET_RATE = 'NetRate';

    public const CURRENCY = 'Currency';

    public const FREELANCER_SERVICE_TYPE = 'FreelancerServiceType';

    public const SPECIALIZATION = 'Specialization';

    public const SPECIALIZATION_KNOWLEDGE_LEVEL = 'SpecializationKnowledgeLevel';

    public const LSP_SERVICE_TYPE = 'LspServiceType';

    public const JOB_STATUS = 'JobStatus';

    public const COUNTRY = 'Country';

    public const SUPPLIER_TYPE = 'SupplierType';

    public const WORK_UNIT_TYPE = 'WorkUnitType';

    public const TRANSLATION_ASSURANCE_LEVEL = 'TranslationAssuranceLevel';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LANGUAGE,
            self::VENDOR,
            self::DOMAIN,
            self::CLIENT,
            self::GROUP,
            self::PROJECT_STATUS,
            self::DOCUMENT_STATUS,
            self::NET_RATE,
            self::CURRENCY,
            self::FREELANCER_SERVICE_TYPE,
            self::SPECIALIZATION,
            self::SPECIALIZATION_KNOWLEDGE_LEVEL,
            self::LSP_SERVICE_TYPE,
            self::JOB_STATUS,
            self::COUNTRY,
            self::SUPPLIER_TYPE,
            self::WORK_UNIT_TYPE,
            self::TRANSLATION_ASSURANCE_LEVEL
        ];
    }
}


