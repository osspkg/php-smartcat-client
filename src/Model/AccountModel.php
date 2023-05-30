<?php
/**
 * AccountModel
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
 * AccountModel Class Doc Comment
 *
 * @category Class
 * @description Account information for external systems
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'isPersonal' => 'bool',
        'type' => 'string',
        'endCustomerValue' => '\SmartCat\Model\EndCustomerValue',
        'dateCreated' => '\DateTime',
        'interInstallationAccountId' => 'string',
        'createdByUserId' => 'string',
        'organizationId' => 'string',
        'isDisabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'isPersonal' => null,
        'type' => null,
        'endCustomerValue' => null,
        'dateCreated' => 'date-time',
        'interInstallationAccountId' => 'uuid',
        'createdByUserId' => null,
        'organizationId' => 'uuid',
        'isDisabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => true,
		'isPersonal' => false,
		'type' => true,
		'endCustomerValue' => false,
		'dateCreated' => false,
		'interInstallationAccountId' => false,
		'createdByUserId' => true,
		'organizationId' => true,
		'isDisabled' => false
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
        'id' => 'id',
        'name' => 'name',
        'isPersonal' => 'isPersonal',
        'type' => 'type',
        'endCustomerValue' => 'endCustomerValue',
        'dateCreated' => 'dateCreated',
        'interInstallationAccountId' => 'interInstallationAccountId',
        'createdByUserId' => 'createdByUserId',
        'organizationId' => 'organizationId',
        'isDisabled' => 'isDisabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'isPersonal' => 'setIsPersonal',
        'type' => 'setType',
        'endCustomerValue' => 'setEndCustomerValue',
        'dateCreated' => 'setDateCreated',
        'interInstallationAccountId' => 'setInterInstallationAccountId',
        'createdByUserId' => 'setCreatedByUserId',
        'organizationId' => 'setOrganizationId',
        'isDisabled' => 'setIsDisabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'isPersonal' => 'getIsPersonal',
        'type' => 'getType',
        'endCustomerValue' => 'getEndCustomerValue',
        'dateCreated' => 'getDateCreated',
        'interInstallationAccountId' => 'getInterInstallationAccountId',
        'createdByUserId' => 'getCreatedByUserId',
        'organizationId' => 'getOrganizationId',
        'isDisabled' => 'getIsDisabled'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('isPersonal', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('endCustomerValue', $data ?? [], null);
        $this->setIfExists('dateCreated', $data ?? [], null);
        $this->setIfExists('interInstallationAccountId', $data ?? [], null);
        $this->setIfExists('createdByUserId', $data ?? [], null);
        $this->setIfExists('organizationId', $data ?? [], null);
        $this->setIfExists('isDisabled', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * @param string|null $name Name
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
     * Gets isPersonal
     *
     * @return bool|null
     */
    public function getIsPersonal()
    {
        return $this->container['isPersonal'];
    }

    /**
     * Sets isPersonal
     *
     * @param bool|null $isPersonal Specifies whether it is the user's personal account
     *
     * @return self
     */
    public function setIsPersonal($isPersonal)
    {
        if (is_null($isPersonal)) {
            throw new \InvalidArgumentException('non-nullable isPersonal cannot be null');
        }
        $this->container['isPersonal'] = $isPersonal;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Account type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets endCustomerValue
     *
     * @return \SmartCat\Model\EndCustomerValue|null
     */
    public function getEndCustomerValue()
    {
        return $this->container['endCustomerValue'];
    }

    /**
     * Sets endCustomerValue
     *
     * @param \SmartCat\Model\EndCustomerValue|null $endCustomerValue endCustomerValue
     *
     * @return self
     */
    public function setEndCustomerValue($endCustomerValue)
    {
        if (is_null($endCustomerValue)) {
            throw new \InvalidArgumentException('non-nullable endCustomerValue cannot be null');
        }
        $this->container['endCustomerValue'] = $endCustomerValue;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime|null $dateCreated Creation date
     *
     * @return self
     */
    public function setDateCreated($dateCreated)
    {
        if (is_null($dateCreated)) {
            throw new \InvalidArgumentException('non-nullable dateCreated cannot be null');
        }
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets interInstallationAccountId
     *
     * @return string|null
     */
    public function getInterInstallationAccountId()
    {
        return $this->container['interInstallationAccountId'];
    }

    /**
     * Sets interInstallationAccountId
     *
     * @param string|null $interInstallationAccountId Account ID for interacting with resources shared between installations
     *
     * @return self
     */
    public function setInterInstallationAccountId($interInstallationAccountId)
    {
        if (is_null($interInstallationAccountId)) {
            throw new \InvalidArgumentException('non-nullable interInstallationAccountId cannot be null');
        }
        $this->container['interInstallationAccountId'] = $interInstallationAccountId;

        return $this;
    }

    /**
     * Gets createdByUserId
     *
     * @return string|null
     */
    public function getCreatedByUserId()
    {
        return $this->container['createdByUserId'];
    }

    /**
     * Sets createdByUserId
     *
     * @param string|null $createdByUserId User ID who created the account
     *
     * @return self
     */
    public function setCreatedByUserId($createdByUserId)
    {
        if (is_null($createdByUserId)) {
            array_push($this->openAPINullablesSetToNull, 'createdByUserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdByUserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdByUserId'] = $createdByUserId;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param string|null $organizationId Organization ID to which the account belongs
     *
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        if (is_null($organizationId)) {
            array_push($this->openAPINullablesSetToNull, 'organizationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organizationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets isDisabled
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
     * Sets isDisabled
     *
     * @param bool|null $isDisabled Attribute of \"disabled\" personal account
     *
     * @return self
     */
    public function setIsDisabled($isDisabled)
    {
        if (is_null($isDisabled)) {
            throw new \InvalidArgumentException('non-nullable isDisabled cannot be null');
        }
        $this->container['isDisabled'] = $isDisabled;

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

