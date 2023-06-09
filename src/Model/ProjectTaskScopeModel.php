<?php
/**
 * ProjectTaskScopeModel
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
 * ProjectTaskScopeModel Class Doc Comment
 *
 * @category Class
 * @description Model containing information about one work item included in the task
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectTaskScopeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectTaskScopeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'documentId' => 'string',
        'progress' => 'float',
        'name' => 'string',
        'extension' => 'string',
        'lastModified' => '\DateTime',
        'approximateCost' => 'float',
        'cost' => 'float',
        'isExternal' => 'bool',
        'unitType' => '\SmartCat\Model\WorkUnitType',
        'volumeSize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'documentId' => null,
        'progress' => 'double',
        'name' => null,
        'extension' => null,
        'lastModified' => 'date-time',
        'approximateCost' => 'double',
        'cost' => 'double',
        'isExternal' => null,
        'unitType' => null,
        'volumeSize' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'documentId' => false,
		'progress' => false,
		'name' => true,
		'extension' => true,
		'lastModified' => false,
		'approximateCost' => true,
		'cost' => true,
		'isExternal' => false,
		'unitType' => false,
		'volumeSize' => true
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
        'documentId' => 'documentId',
        'progress' => 'progress',
        'name' => 'name',
        'extension' => 'extension',
        'lastModified' => 'lastModified',
        'approximateCost' => 'approximateCost',
        'cost' => 'cost',
        'isExternal' => 'isExternal',
        'unitType' => 'unitType',
        'volumeSize' => 'volumeSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentId' => 'setDocumentId',
        'progress' => 'setProgress',
        'name' => 'setName',
        'extension' => 'setExtension',
        'lastModified' => 'setLastModified',
        'approximateCost' => 'setApproximateCost',
        'cost' => 'setCost',
        'isExternal' => 'setIsExternal',
        'unitType' => 'setUnitType',
        'volumeSize' => 'setVolumeSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentId' => 'getDocumentId',
        'progress' => 'getProgress',
        'name' => 'getName',
        'extension' => 'getExtension',
        'lastModified' => 'getLastModified',
        'approximateCost' => 'getApproximateCost',
        'cost' => 'getCost',
        'isExternal' => 'getIsExternal',
        'unitType' => 'getUnitType',
        'volumeSize' => 'getVolumeSize'
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
        $this->setIfExists('documentId', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('lastModified', $data ?? [], null);
        $this->setIfExists('approximateCost', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('isExternal', $data ?? [], null);
        $this->setIfExists('unitType', $data ?? [], null);
        $this->setIfExists('volumeSize', $data ?? [], null);
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
     * @param string|null $documentId Document ID
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
     * Gets progress
     *
     * @return float|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param float|null $progress Document progress in percent from 0 to 100
     *
     * @return self
     */
    public function setProgress($progress)
    {
        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Document name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension File extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        if (is_null($extension)) {
            array_push($this->openAPINullablesSetToNull, 'extension');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extension', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets lastModified
     *
     * @return \DateTime|null
     */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
     * Sets lastModified
     *
     * @param \DateTime|null $lastModified Last document modification date (date the file was uploaded or updated)
     *
     * @return self
     */
    public function setLastModified($lastModified)
    {
        if (is_null($lastModified)) {
            throw new \InvalidArgumentException('non-nullable lastModified cannot be null');
        }
        $this->container['lastModified'] = $lastModified;

        return $this;
    }

    /**
     * Gets approximateCost
     *
     * @return float|null
     */
    public function getApproximateCost()
    {
        return $this->container['approximateCost'];
    }

    /**
     * Sets approximateCost
     *
     * @param float|null $approximateCost Preliminary cost of the work on a particular document  Calculated based on the document volume and the rates of suppliers assigned to the task
     *
     * @return self
     */
    public function setApproximateCost($approximateCost)
    {
        if (is_null($approximateCost)) {
            array_push($this->openAPINullablesSetToNull, 'approximateCost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('approximateCost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['approximateCost'] = $approximateCost;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost Amount spent on the work performed on the document
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            array_push($this->openAPINullablesSetToNull, 'cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets isExternal
     *
     * @return bool|null
     */
    public function getIsExternal()
    {
        return $this->container['isExternal'];
    }

    /**
     * Sets isExternal
     *
     * @param bool|null $isExternal The document at the stage will be processed without the use of CAT tools  (work on the document is not performed in the editor)
     *
     * @return self
     */
    public function setIsExternal($isExternal)
    {
        if (is_null($isExternal)) {
            throw new \InvalidArgumentException('non-nullable isExternal cannot be null');
        }
        $this->container['isExternal'] = $isExternal;

        return $this;
    }

    /**
     * Gets unitType
     *
     * @return \SmartCat\Model\WorkUnitType|null
     */
    public function getUnitType()
    {
        return $this->container['unitType'];
    }

    /**
     * Sets unitType
     *
     * @param \SmartCat\Model\WorkUnitType|null $unitType unitType
     *
     * @return self
     */
    public function setUnitType($unitType)
    {
        if (is_null($unitType)) {
            throw new \InvalidArgumentException('non-nullable unitType cannot be null');
        }
        $this->container['unitType'] = $unitType;

        return $this;
    }

    /**
     * Gets volumeSize
     *
     * @return int|null
     */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
     * Sets volumeSize
     *
     * @param int|null $volumeSize Work volume in units Smartcat.AppIntegrations.Contracts.ProjectTask.ProjectTaskScopeModel.UnitType
     *
     * @return self
     */
    public function setVolumeSize($volumeSize)
    {
        if (is_null($volumeSize)) {
            array_push($this->openAPINullablesSetToNull, 'volumeSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('volumeSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['volumeSize'] = $volumeSize;

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


