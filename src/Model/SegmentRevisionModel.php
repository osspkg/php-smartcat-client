<?php
/**
 * SegmentRevisionModel
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
 * SegmentRevisionModel Class Doc Comment
 *
 * @category Class
 * @description Segment translation revision model
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SegmentRevisionModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SegmentRevisionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language' => 'string',
        'creationDate' => '\DateTime',
        'type' => 'int',
        'isConfirmation' => 'bool',
        'targetText' => 'string',
        'prevTargetText' => 'string',
        'sourceText' => 'string',
        'segmentId' => 'string',
        'documentId' => 'string',
        'userId' => 'string',
        'stageId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language' => null,
        'creationDate' => 'date-time',
        'type' => 'int32',
        'isConfirmation' => null,
        'targetText' => null,
        'prevTargetText' => null,
        'sourceText' => null,
        'segmentId' => null,
        'documentId' => null,
        'userId' => null,
        'stageId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language' => false,
		'creationDate' => false,
		'type' => false,
		'isConfirmation' => false,
		'targetText' => false,
		'prevTargetText' => false,
		'sourceText' => false,
		'segmentId' => true,
		'documentId' => true,
		'userId' => true,
		'stageId' => false
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
        'language' => 'language',
        'creationDate' => 'creationDate',
        'type' => 'type',
        'isConfirmation' => 'isConfirmation',
        'targetText' => 'targetText',
        'prevTargetText' => 'prevTargetText',
        'sourceText' => 'sourceText',
        'segmentId' => 'segmentId',
        'documentId' => 'documentId',
        'userId' => 'userId',
        'stageId' => 'stageId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'creationDate' => 'setCreationDate',
        'type' => 'setType',
        'isConfirmation' => 'setIsConfirmation',
        'targetText' => 'setTargetText',
        'prevTargetText' => 'setPrevTargetText',
        'sourceText' => 'setSourceText',
        'segmentId' => 'setSegmentId',
        'documentId' => 'setDocumentId',
        'userId' => 'setUserId',
        'stageId' => 'setStageId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'creationDate' => 'getCreationDate',
        'type' => 'getType',
        'isConfirmation' => 'getIsConfirmation',
        'targetText' => 'getTargetText',
        'prevTargetText' => 'getPrevTargetText',
        'sourceText' => 'getSourceText',
        'segmentId' => 'getSegmentId',
        'documentId' => 'getDocumentId',
        'userId' => 'getUserId',
        'stageId' => 'getStageId'
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
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('isConfirmation', $data ?? [], null);
        $this->setIfExists('targetText', $data ?? [], null);
        $this->setIfExists('prevTargetText', $data ?? [], null);
        $this->setIfExists('sourceText', $data ?? [], null);
        $this->setIfExists('segmentId', $data ?? [], null);
        $this->setIfExists('documentId', $data ?? [], null);
        $this->setIfExists('userId', $data ?? [], null);
        $this->setIfExists('stageId', $data ?? [], null);
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

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['creationDate'] === null) {
            $invalidProperties[] = "'creationDate' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['isConfirmation'] === null) {
            $invalidProperties[] = "'isConfirmation' can't be null";
        }
        if ($this->container['targetText'] === null) {
            $invalidProperties[] = "'targetText' can't be null";
        }
        if ($this->container['prevTargetText'] === null) {
            $invalidProperties[] = "'prevTargetText' can't be null";
        }
        if ($this->container['sourceText'] === null) {
            $invalidProperties[] = "'sourceText' can't be null";
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
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate Revision created date
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Revision type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets isConfirmation
     *
     * @return bool
     */
    public function getIsConfirmation()
    {
        return $this->container['isConfirmation'];
    }

    /**
     * Sets isConfirmation
     *
     * @param bool $isConfirmation Revision type
     *
     * @return self
     */
    public function setIsConfirmation($isConfirmation)
    {
        if (is_null($isConfirmation)) {
            throw new \InvalidArgumentException('non-nullable isConfirmation cannot be null');
        }
        $this->container['isConfirmation'] = $isConfirmation;

        return $this;
    }

    /**
     * Gets targetText
     *
     * @return string
     */
    public function getTargetText()
    {
        return $this->container['targetText'];
    }

    /**
     * Sets targetText
     *
     * @param string $targetText Target text
     *
     * @return self
     */
    public function setTargetText($targetText)
    {
        if (is_null($targetText)) {
            throw new \InvalidArgumentException('non-nullable targetText cannot be null');
        }
        $this->container['targetText'] = $targetText;

        return $this;
    }

    /**
     * Gets prevTargetText
     *
     * @return string
     */
    public function getPrevTargetText()
    {
        return $this->container['prevTargetText'];
    }

    /**
     * Sets prevTargetText
     *
     * @param string $prevTargetText Target text in the previous revision
     *
     * @return self
     */
    public function setPrevTargetText($prevTargetText)
    {
        if (is_null($prevTargetText)) {
            throw new \InvalidArgumentException('non-nullable prevTargetText cannot be null');
        }
        $this->container['prevTargetText'] = $prevTargetText;

        return $this;
    }

    /**
     * Gets sourceText
     *
     * @return string
     */
    public function getSourceText()
    {
        return $this->container['sourceText'];
    }

    /**
     * Sets sourceText
     *
     * @param string $sourceText Source text
     *
     * @return self
     */
    public function setSourceText($sourceText)
    {
        if (is_null($sourceText)) {
            throw new \InvalidArgumentException('non-nullable sourceText cannot be null');
        }
        $this->container['sourceText'] = $sourceText;

        return $this;
    }

    /**
     * Gets segmentId
     *
     * @return string|null
     */
    public function getSegmentId()
    {
        return $this->container['segmentId'];
    }

    /**
     * Sets segmentId
     *
     * @param string|null $segmentId Segment ID
     *
     * @return self
     */
    public function setSegmentId($segmentId)
    {
        if (is_null($segmentId)) {
            array_push($this->openAPINullablesSetToNull, 'segmentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('segmentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['segmentId'] = $segmentId;

        return $this;
    }

    /**
     * Gets documentId
     *
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
     * Sets documentId
     *
     * @param string|null $documentId ID of the target document DocumentId_LanguageId
     *
     * @return self
     */
    public function setDocumentId($documentId)
    {
        if (is_null($documentId)) {
            array_push($this->openAPINullablesSetToNull, 'documentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documentId'] = $documentId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId User ID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        if (is_null($userId)) {
            array_push($this->openAPINullablesSetToNull, 'userId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('userId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets stageId
     *
     * @return string|null
     */
    public function getStageId()
    {
        return $this->container['stageId'];
    }

    /**
     * Sets stageId
     *
     * @param string|null $stageId Workflow stage ID
     *
     * @return self
     */
    public function setStageId($stageId)
    {
        if (is_null($stageId)) {
            throw new \InvalidArgumentException('non-nullable stageId cannot be null');
        }
        $this->container['stageId'] = $stageId;

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

