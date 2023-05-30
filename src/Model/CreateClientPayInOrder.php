<?php
/**
 * CreateClientPayInOrder
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
 * CreateClientPayInOrder Class Doc Comment
 *
 * @category Class
 * @description Payment request creation model
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateClientPayInOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateClientPayInOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalAmount' => 'float',
        'currency' => 'string',
        'serviceDescription' => 'string',
        'externalId' => 'string',
        'clientCompanyName' => 'string',
        'clientCountry' => 'string',
        'clientVatNumber' => 'string',
        'clientEmail' => 'string',
        'uiLanguage' => 'string',
        'backUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'totalAmount' => 'double',
        'currency' => null,
        'serviceDescription' => null,
        'externalId' => null,
        'clientCompanyName' => null,
        'clientCountry' => null,
        'clientVatNumber' => null,
        'clientEmail' => null,
        'uiLanguage' => null,
        'backUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'totalAmount' => false,
		'currency' => true,
		'serviceDescription' => true,
		'externalId' => true,
		'clientCompanyName' => true,
		'clientCountry' => true,
		'clientVatNumber' => true,
		'clientEmail' => true,
		'uiLanguage' => true,
		'backUrl' => true
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
        'totalAmount' => 'totalAmount',
        'currency' => 'currency',
        'serviceDescription' => 'serviceDescription',
        'externalId' => 'externalId',
        'clientCompanyName' => 'clientCompanyName',
        'clientCountry' => 'clientCountry',
        'clientVatNumber' => 'clientVatNumber',
        'clientEmail' => 'clientEmail',
        'uiLanguage' => 'uiLanguage',
        'backUrl' => 'backUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'currency' => 'setCurrency',
        'serviceDescription' => 'setServiceDescription',
        'externalId' => 'setExternalId',
        'clientCompanyName' => 'setClientCompanyName',
        'clientCountry' => 'setClientCountry',
        'clientVatNumber' => 'setClientVatNumber',
        'clientEmail' => 'setClientEmail',
        'uiLanguage' => 'setUiLanguage',
        'backUrl' => 'setBackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'currency' => 'getCurrency',
        'serviceDescription' => 'getServiceDescription',
        'externalId' => 'getExternalId',
        'clientCompanyName' => 'getClientCompanyName',
        'clientCountry' => 'getClientCountry',
        'clientVatNumber' => 'getClientVatNumber',
        'clientEmail' => 'getClientEmail',
        'uiLanguage' => 'getUiLanguage',
        'backUrl' => 'getBackUrl'
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
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('serviceDescription', $data ?? [], null);
        $this->setIfExists('externalId', $data ?? [], null);
        $this->setIfExists('clientCompanyName', $data ?? [], null);
        $this->setIfExists('clientCountry', $data ?? [], null);
        $this->setIfExists('clientVatNumber', $data ?? [], null);
        $this->setIfExists('clientEmail', $data ?? [], null);
        $this->setIfExists('uiLanguage', $data ?? [], null);
        $this->setIfExists('backUrl', $data ?? [], null);
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
     * Gets totalAmount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param float|null $totalAmount Total amount for payment
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        if (is_null($totalAmount)) {
            throw new \InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency for payment
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets serviceDescription
     *
     * @return string|null
     */
    public function getServiceDescription()
    {
        return $this->container['serviceDescription'];
    }

    /**
     * Sets serviceDescription
     *
     * @param string|null $serviceDescription Description of services covered by payment
     *
     * @return self
     */
    public function setServiceDescription($serviceDescription)
    {
        if (is_null($serviceDescription)) {
            array_push($this->openAPINullablesSetToNull, 'serviceDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceDescription'] = $serviceDescription;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId Number of an invoice for provided services sent by the client to the balance owner
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        if (is_null($externalId)) {
            array_push($this->openAPINullablesSetToNull, 'externalId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('externalId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets clientCompanyName
     *
     * @return string|null
     */
    public function getClientCompanyName()
    {
        return $this->container['clientCompanyName'];
    }

    /**
     * Sets clientCompanyName
     *
     * @param string|null $clientCompanyName Client company name
     *
     * @return self
     */
    public function setClientCompanyName($clientCompanyName)
    {
        if (is_null($clientCompanyName)) {
            array_push($this->openAPINullablesSetToNull, 'clientCompanyName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientCompanyName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientCompanyName'] = $clientCompanyName;

        return $this;
    }

    /**
     * Gets clientCountry
     *
     * @return string|null
     */
    public function getClientCountry()
    {
        return $this->container['clientCountry'];
    }

    /**
     * Sets clientCountry
     *
     * @param string|null $clientCountry Client country
     *
     * @return self
     */
    public function setClientCountry($clientCountry)
    {
        if (is_null($clientCountry)) {
            array_push($this->openAPINullablesSetToNull, 'clientCountry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientCountry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientCountry'] = $clientCountry;

        return $this;
    }

    /**
     * Gets clientVatNumber
     *
     * @return string|null
     */
    public function getClientVatNumber()
    {
        return $this->container['clientVatNumber'];
    }

    /**
     * Sets clientVatNumber
     *
     * @param string|null $clientVatNumber Client VAT
     *
     * @return self
     */
    public function setClientVatNumber($clientVatNumber)
    {
        if (is_null($clientVatNumber)) {
            array_push($this->openAPINullablesSetToNull, 'clientVatNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientVatNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientVatNumber'] = $clientVatNumber;

        return $this;
    }

    /**
     * Gets clientEmail
     *
     * @return string|null
     */
    public function getClientEmail()
    {
        return $this->container['clientEmail'];
    }

    /**
     * Sets clientEmail
     *
     * @param string|null $clientEmail Client email
     *
     * @return self
     */
    public function setClientEmail($clientEmail)
    {
        if (is_null($clientEmail)) {
            array_push($this->openAPINullablesSetToNull, 'clientEmail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientEmail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientEmail'] = $clientEmail;

        return $this;
    }

    /**
     * Gets uiLanguage
     *
     * @return string|null
     */
    public function getUiLanguage()
    {
        return $this->container['uiLanguage'];
    }

    /**
     * Sets uiLanguage
     *
     * @param string|null $uiLanguage UI language for displaying the means of payment
     *
     * @return self
     */
    public function setUiLanguage($uiLanguage)
    {
        if (is_null($uiLanguage)) {
            array_push($this->openAPINullablesSetToNull, 'uiLanguage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uiLanguage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uiLanguage'] = $uiLanguage;

        return $this;
    }

    /**
     * Gets backUrl
     *
     * @return string|null
     */
    public function getBackUrl()
    {
        return $this->container['backUrl'];
    }

    /**
     * Sets backUrl
     *
     * @param string|null $backUrl BackURL for redirection upon the payment completion
     *
     * @return self
     */
    public function setBackUrl($backUrl)
    {
        if (is_null($backUrl)) {
            array_push($this->openAPINullablesSetToNull, 'backUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('backUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['backUrl'] = $backUrl;

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


