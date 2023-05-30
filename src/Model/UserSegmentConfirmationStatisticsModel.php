<?php
/**
 * UserSegmentConfirmationStatisticsModel
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

use \ArrayAccess;
use \SmartCat\ObjectSerializer;

/**
 * UserSegmentConfirmationStatisticsModel Class Doc Comment
 *
 * @category Class
 * @description Item (record) model of segment acknowledgment statistics
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserSegmentConfirmationStatisticsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSegmentConfirmationStatisticsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => '\DateTime',
        'userId' => 'string',
        'accountId' => 'string',
        'projectId' => 'string',
        'documentId' => 'string',
        'language' => 'string',
        'wordcounts' => '\SmartCat\Model\SegmentConfirmationStatisticsWordcountsModel',
        'vendorAccountId' => 'string',
        'externalTag' => 'string',
        'stageType' => '\SmartCat\Model\StageType',
        'jobId' => 'string',
        'changeStamp' => 'string',
        'isConfirmedByPretranslate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => 'date-time',
        'userId' => null,
        'accountId' => 'uuid',
        'projectId' => 'uuid',
        'documentId' => null,
        'language' => null,
        'wordcounts' => null,
        'vendorAccountId' => 'uuid',
        'externalTag' => null,
        'stageType' => null,
        'jobId' => null,
        'changeStamp' => 'uuid',
        'isConfirmedByPretranslate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false,
		'userId' => false,
		'accountId' => false,
		'projectId' => false,
		'documentId' => false,
		'language' => false,
		'wordcounts' => false,
		'vendorAccountId' => true,
		'externalTag' => true,
		'stageType' => false,
		'jobId' => true,
		'changeStamp' => false,
		'isConfirmedByPretranslate' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date' => 'date',
        'userId' => 'userId',
        'accountId' => 'accountId',
        'projectId' => 'projectId',
        'documentId' => 'documentId',
        'language' => 'language',
        'wordcounts' => 'wordcounts',
        'vendorAccountId' => 'vendorAccountId',
        'externalTag' => 'externalTag',
        'stageType' => 'stageType',
        'jobId' => 'jobId',
        'changeStamp' => 'changeStamp',
        'isConfirmedByPretranslate' => 'isConfirmedByPretranslate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'userId' => 'setUserId',
        'accountId' => 'setAccountId',
        'projectId' => 'setProjectId',
        'documentId' => 'setDocumentId',
        'language' => 'setLanguage',
        'wordcounts' => 'setWordcounts',
        'vendorAccountId' => 'setVendorAccountId',
        'externalTag' => 'setExternalTag',
        'stageType' => 'setStageType',
        'jobId' => 'setJobId',
        'changeStamp' => 'setChangeStamp',
        'isConfirmedByPretranslate' => 'setIsConfirmedByPretranslate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'userId' => 'getUserId',
        'accountId' => 'getAccountId',
        'projectId' => 'getProjectId',
        'documentId' => 'getDocumentId',
        'language' => 'getLanguage',
        'wordcounts' => 'getWordcounts',
        'vendorAccountId' => 'getVendorAccountId',
        'externalTag' => 'getExternalTag',
        'stageType' => 'getStageType',
        'jobId' => 'getJobId',
        'changeStamp' => 'getChangeStamp',
        'isConfirmedByPretranslate' => 'getIsConfirmedByPretranslate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('userId', $data ?? [], null);
        $this->setIfExists('accountId', $data ?? [], null);
        $this->setIfExists('projectId', $data ?? [], null);
        $this->setIfExists('documentId', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('wordcounts', $data ?? [], null);
        $this->setIfExists('vendorAccountId', $data ?? [], null);
        $this->setIfExists('externalTag', $data ?? [], null);
        $this->setIfExists('stageType', $data ?? [], null);
        $this->setIfExists('jobId', $data ?? [], null);
        $this->setIfExists('changeStamp', $data ?? [], null);
        $this->setIfExists('isConfirmedByPretranslate', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['documentId'] === null) {
            $invalidProperties[] = "'documentId' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['wordcounts'] === null) {
            $invalidProperties[] = "'wordcounts' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The date for which statistics were collected
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId User ID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        if (is_null($userId)) {
            throw new \InvalidArgumentException('non-nullable userId cannot be null');
        }
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId The account in which the project was created
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        if (is_null($accountId)) {
            throw new \InvalidArgumentException('non-nullable accountId cannot be null');
        }
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId Project ID
     *
     * @return self
     */
    public function setProjectId($projectId)
    {
        if (is_null($projectId)) {
            throw new \InvalidArgumentException('non-nullable projectId cannot be null');
        }
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets documentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
     * Sets documentId
     *
     * @param string $documentId Document ID
     *
     * @return self
     */
    public function setDocumentId($documentId)
    {
        if (is_null($documentId)) {
            throw new \InvalidArgumentException('non-nullable documentId cannot be null');
        }
        $this->container['documentId'] = $documentId;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Target language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets wordcounts
     *
     * @return \SmartCat\Model\SegmentConfirmationStatisticsWordcountsModel
     */
    public function getWordcounts()
    {
        return $this->container['wordcounts'];
    }

    /**
     * Sets wordcounts
     *
     * @param \SmartCat\Model\SegmentConfirmationStatisticsWordcountsModel $wordcounts wordcounts
     *
     * @return self
     */
    public function setWordcounts($wordcounts)
    {
        if (is_null($wordcounts)) {
            throw new \InvalidArgumentException('non-nullable wordcounts cannot be null');
        }
        $this->container['wordcounts'] = $wordcounts;

        return $this;
    }

    /**
     * Gets vendorAccountId
     *
     * @return string|null
     */
    public function getVendorAccountId()
    {
        return $this->container['vendorAccountId'];
    }

    /**
     * Sets vendorAccountId
     *
     * @param string|null $vendorAccountId Vendor account, if the vendor is assigned and the translation was performed by the user of their account
     *
     * @return self
     */
    public function setVendorAccountId($vendorAccountId)
    {
        if (is_null($vendorAccountId)) {
            array_push($this->openAPINullablesSetToNull, 'vendorAccountId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vendorAccountId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vendorAccountId'] = $vendorAccountId;

        return $this;
    }

    /**
     * Gets externalTag
     *
     * @return string|null
     */
    public function getExternalTag()
    {
        return $this->container['externalTag'];
    }

    /**
     * Sets externalTag
     *
     * @param string|null $externalTag External system tag
     *
     * @return self
     */
    public function setExternalTag($externalTag)
    {
        if (is_null($externalTag)) {
            array_push($this->openAPINullablesSetToNull, 'externalTag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('externalTag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['externalTag'] = $externalTag;

        return $this;
    }

    /**
     * Gets stageType
     *
     * @return \SmartCat\Model\StageType|null
     */
    public function getStageType()
    {
        return $this->container['stageType'];
    }

    /**
     * Sets stageType
     *
     * @param \SmartCat\Model\StageType|null $stageType stageType
     *
     * @return self
     */
    public function setStageType($stageType)
    {
        if (is_null($stageType)) {
            throw new \InvalidArgumentException('non-nullable stageType cannot be null');
        }
        $this->container['stageType'] = $stageType;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string|null $jobId Job ID, if a job was created
     *
     * @return self
     */
    public function setJobId($jobId)
    {
        if (is_null($jobId)) {
            array_push($this->openAPINullablesSetToNull, 'jobId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets changeStamp
     *
     * @return string|null
     */
    public function getChangeStamp()
    {
        return $this->container['changeStamp'];
    }

    /**
     * Sets changeStamp
     *
     * @param string|null $changeStamp Change stamp
     *
     * @return self
     */
    public function setChangeStamp($changeStamp)
    {
        if (is_null($changeStamp)) {
            throw new \InvalidArgumentException('non-nullable changeStamp cannot be null');
        }
        $this->container['changeStamp'] = $changeStamp;

        return $this;
    }

    /**
     * Gets isConfirmedByPretranslate
     *
     * @return bool|null
     */
    public function getIsConfirmedByPretranslate()
    {
        return $this->container['isConfirmedByPretranslate'];
    }

    /**
     * Sets isConfirmedByPretranslate
     *
     * @param bool|null $isConfirmedByPretranslate Statistics for segments confirmed by pre-translation
     *
     * @return self
     */
    public function setIsConfirmedByPretranslate($isConfirmedByPretranslate)
    {
        if (is_null($isConfirmedByPretranslate)) {
            throw new \InvalidArgumentException('non-nullable isConfirmedByPretranslate cannot be null');
        }
        $this->container['isConfirmedByPretranslate'] = $isConfirmedByPretranslate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

