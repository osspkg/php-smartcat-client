<?php
/**
 * JobStatus
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
 * JobStatus Class Doc Comment
 *
 * @category Class
 * @description Payment status
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JobStatus
{
    /**
     * Possible values of this enum
     */
    public const IN_PROGRESS = 'InProgress';

    public const INVITATION_PENDING = 'InvitationPending';

    public const WAITING_FOR_ASSIGNMENT = 'WaitingForAssignment';

    public const WAITING_FOR_PAYMENT = 'WaitingForPayment';

    public const VERIFIED = 'Verified';

    public const PAID_BY_CUSTOMER = 'PaidByCustomer';

    public const PAID_TO_FREELANCER = 'PaidToFreelancer';

    public const MARKED_AS_PAID = 'MarkedAsPaid';

    public const INVITATION_CANCELED = 'InvitationCanceled';

    public const INVITATION_DECLINED = 'InvitationDeclined';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_PROGRESS,
            self::INVITATION_PENDING,
            self::WAITING_FOR_ASSIGNMENT,
            self::WAITING_FOR_PAYMENT,
            self::VERIFIED,
            self::PAID_BY_CUSTOMER,
            self::PAID_TO_FREELANCER,
            self::MARKED_AS_PAID,
            self::INVITATION_CANCELED,
            self::INVITATION_DECLINED
        ];
    }
}

