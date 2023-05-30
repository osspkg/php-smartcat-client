<?php
/**
 * PretranslateRuleModel
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
 * PretranslateRuleModel Class Doc Comment
 *
 * @category Class
 * @description Pretranslation rule model
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PretranslateRuleModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PretranslateRuleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ruleType' => '\SmartCat\Model\PretranslateRuleType',
        'order' => 'int',
        'confirmAtWorkflowStep' => 'string',
        'translationMemoryId' => 'string',
        'minThreshold' => 'int',
        'minSegmentWordsCount' => 'int',
        'minAssuranceLevel' => '\SmartCat\Model\TMTranslationAssuranceLevel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'order' => 'int32',
        'confirmAtWorkflowStep' => 'uuid',
        'translationMemoryId' => 'uuid',
        'minThreshold' => 'int32',
        'minSegmentWordsCount' => 'int32',
        'minAssuranceLevel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ruleType' => false,
		'order' => false,
		'confirmAtWorkflowStep' => true,
		'translationMemoryId' => true,
		'minThreshold' => true,
		'minSegmentWordsCount' => true,
		'minAssuranceLevel' => false
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
        'ruleType' => 'ruleType',
        'order' => 'order',
        'confirmAtWorkflowStep' => 'confirmAtWorkflowStep',
        'translationMemoryId' => 'translationMemoryId',
        'minThreshold' => 'minThreshold',
        'minSegmentWordsCount' => 'minSegmentWordsCount',
        'minAssuranceLevel' => 'minAssuranceLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ruleType' => 'setRuleType',
        'order' => 'setOrder',
        'confirmAtWorkflowStep' => 'setConfirmAtWorkflowStep',
        'translationMemoryId' => 'setTranslationMemoryId',
        'minThreshold' => 'setMinThreshold',
        'minSegmentWordsCount' => 'setMinSegmentWordsCount',
        'minAssuranceLevel' => 'setMinAssuranceLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ruleType' => 'getRuleType',
        'order' => 'getOrder',
        'confirmAtWorkflowStep' => 'getConfirmAtWorkflowStep',
        'translationMemoryId' => 'getTranslationMemoryId',
        'minThreshold' => 'getMinThreshold',
        'minSegmentWordsCount' => 'getMinSegmentWordsCount',
        'minAssuranceLevel' => 'getMinAssuranceLevel'
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
        $this->setIfExists('ruleType', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('confirmAtWorkflowStep', $data ?? [], null);
        $this->setIfExists('translationMemoryId', $data ?? [], null);
        $this->setIfExists('minThreshold', $data ?? [], null);
        $this->setIfExists('minSegmentWordsCount', $data ?? [], null);
        $this->setIfExists('minAssuranceLevel', $data ?? [], null);
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

        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
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
     * Gets ruleType
     *
     * @return \SmartCat\Model\PretranslateRuleType
     */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
     * Sets ruleType
     *
     * @param \SmartCat\Model\PretranslateRuleType $ruleType ruleType
     *
     * @return self
     */
    public function setRuleType($ruleType)
    {
        if (is_null($ruleType)) {
            throw new \InvalidArgumentException('non-nullable ruleType cannot be null');
        }
        $this->container['ruleType'] = $ruleType;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Ordering number of the rule (starting with 1)
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets confirmAtWorkflowStep
     *
     * @return string|null
     */
    public function getConfirmAtWorkflowStep()
    {
        return $this->container['confirmAtWorkflowStep'];
    }

    /**
     * Sets confirmAtWorkflowStep
     *
     * @param string|null $confirmAtWorkflowStep Specify at which workflow stage pretranslation segments must be confirmed  (null if confirmation is not required)
     *
     * @return self
     */
    public function setConfirmAtWorkflowStep($confirmAtWorkflowStep)
    {
        if (is_null($confirmAtWorkflowStep)) {
            array_push($this->openAPINullablesSetToNull, 'confirmAtWorkflowStep');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('confirmAtWorkflowStep', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['confirmAtWorkflowStep'] = $confirmAtWorkflowStep;

        return $this;
    }

    /**
     * Gets translationMemoryId
     *
     * @return string|null
     */
    public function getTranslationMemoryId()
    {
        return $this->container['translationMemoryId'];
    }

    /**
     * Sets translationMemoryId
     *
     * @param string|null $translationMemoryId Translation memory (TM) ID, if the rule involves the use of TM matches
     *
     * @return self
     */
    public function setTranslationMemoryId($translationMemoryId)
    {
        if (is_null($translationMemoryId)) {
            array_push($this->openAPINullablesSetToNull, 'translationMemoryId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('translationMemoryId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['translationMemoryId'] = $translationMemoryId;

        return $this;
    }

    /**
     * Gets minThreshold
     *
     * @return int|null
     */
    public function getMinThreshold()
    {
        return $this->container['minThreshold'];
    }

    /**
     * Sets minThreshold
     *
     * @param int|null $minThreshold Minimum match threshold, if the rule involves the use of TM matches
     *
     * @return self
     */
    public function setMinThreshold($minThreshold)
    {
        if (is_null($minThreshold)) {
            array_push($this->openAPINullablesSetToNull, 'minThreshold');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minThreshold', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minThreshold'] = $minThreshold;

        return $this;
    }

    /**
     * Gets minSegmentWordsCount
     *
     * @return int|null
     */
    public function getMinSegmentWordsCount()
    {
        return $this->container['minSegmentWordsCount'];
    }

    /**
     * Sets minSegmentWordsCount
     *
     * @param int|null $minSegmentWordsCount Minimum segment length, if the rule involves the use of TM matches
     *
     * @return self
     */
    public function setMinSegmentWordsCount($minSegmentWordsCount)
    {
        if (is_null($minSegmentWordsCount)) {
            array_push($this->openAPINullablesSetToNull, 'minSegmentWordsCount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minSegmentWordsCount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minSegmentWordsCount'] = $minSegmentWordsCount;

        return $this;
    }

    /**
     * Gets minAssuranceLevel
     *
     * @return \SmartCat\Model\TMTranslationAssuranceLevel|null
     */
    public function getMinAssuranceLevel()
    {
        return $this->container['minAssuranceLevel'];
    }

    /**
     * Sets minAssuranceLevel
     *
     * @param \SmartCat\Model\TMTranslationAssuranceLevel|null $minAssuranceLevel minAssuranceLevel
     *
     * @return self
     */
    public function setMinAssuranceLevel($minAssuranceLevel)
    {
        if (is_null($minAssuranceLevel)) {
            throw new \InvalidArgumentException('non-nullable minAssuranceLevel cannot be null');
        }
        $this->container['minAssuranceLevel'] = $minAssuranceLevel;

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


