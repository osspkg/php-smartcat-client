<?php
/**
 * AutopilotTeamDashboardDto
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
 * AutopilotTeamDashboardDto Class Doc Comment
 *
 * @category Class
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AutopilotTeamDashboardDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AutopilotTeamDashboardDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'geoZone' => 'string',
        'organizationWorkspaceData' => '\SmartCat\Model\AutopilotTeamDashboardOrganizationWorkspaceDto',
        'projectData' => '\SmartCat\Model\AutopilotTeamDashboardProjectDto',
        'tasksData' => '\SmartCat\Model\AutopilotTeamDashboardTasksDto',
        'autopilotStatusOn' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'geoZone' => null,
        'organizationWorkspaceData' => null,
        'projectData' => null,
        'tasksData' => null,
        'autopilotStatusOn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'geoZone' => true,
		'organizationWorkspaceData' => false,
		'projectData' => false,
		'tasksData' => false,
		'autopilotStatusOn' => false
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
        'geoZone' => 'geoZone',
        'organizationWorkspaceData' => 'organizationWorkspaceData',
        'projectData' => 'projectData',
        'tasksData' => 'tasksData',
        'autopilotStatusOn' => 'autopilotStatusOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'geoZone' => 'setGeoZone',
        'organizationWorkspaceData' => 'setOrganizationWorkspaceData',
        'projectData' => 'setProjectData',
        'tasksData' => 'setTasksData',
        'autopilotStatusOn' => 'setAutopilotStatusOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'geoZone' => 'getGeoZone',
        'organizationWorkspaceData' => 'getOrganizationWorkspaceData',
        'projectData' => 'getProjectData',
        'tasksData' => 'getTasksData',
        'autopilotStatusOn' => 'getAutopilotStatusOn'
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
        $this->setIfExists('geoZone', $data ?? [], null);
        $this->setIfExists('organizationWorkspaceData', $data ?? [], null);
        $this->setIfExists('projectData', $data ?? [], null);
        $this->setIfExists('tasksData', $data ?? [], null);
        $this->setIfExists('autopilotStatusOn', $data ?? [], null);
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
     * Gets geoZone
     *
     * @return string|null
     */
    public function getGeoZone()
    {
        return $this->container['geoZone'];
    }

    /**
     * Sets geoZone
     *
     * @param string|null $geoZone geoZone
     *
     * @return self
     */
    public function setGeoZone($geoZone)
    {
        if (is_null($geoZone)) {
            array_push($this->openAPINullablesSetToNull, 'geoZone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('geoZone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['geoZone'] = $geoZone;

        return $this;
    }

    /**
     * Gets organizationWorkspaceData
     *
     * @return \SmartCat\Model\AutopilotTeamDashboardOrganizationWorkspaceDto|null
     */
    public function getOrganizationWorkspaceData()
    {
        return $this->container['organizationWorkspaceData'];
    }

    /**
     * Sets organizationWorkspaceData
     *
     * @param \SmartCat\Model\AutopilotTeamDashboardOrganizationWorkspaceDto|null $organizationWorkspaceData organizationWorkspaceData
     *
     * @return self
     */
    public function setOrganizationWorkspaceData($organizationWorkspaceData)
    {
        if (is_null($organizationWorkspaceData)) {
            throw new \InvalidArgumentException('non-nullable organizationWorkspaceData cannot be null');
        }
        $this->container['organizationWorkspaceData'] = $organizationWorkspaceData;

        return $this;
    }

    /**
     * Gets projectData
     *
     * @return \SmartCat\Model\AutopilotTeamDashboardProjectDto|null
     */
    public function getProjectData()
    {
        return $this->container['projectData'];
    }

    /**
     * Sets projectData
     *
     * @param \SmartCat\Model\AutopilotTeamDashboardProjectDto|null $projectData projectData
     *
     * @return self
     */
    public function setProjectData($projectData)
    {
        if (is_null($projectData)) {
            throw new \InvalidArgumentException('non-nullable projectData cannot be null');
        }
        $this->container['projectData'] = $projectData;

        return $this;
    }

    /**
     * Gets tasksData
     *
     * @return \SmartCat\Model\AutopilotTeamDashboardTasksDto|null
     */
    public function getTasksData()
    {
        return $this->container['tasksData'];
    }

    /**
     * Sets tasksData
     *
     * @param \SmartCat\Model\AutopilotTeamDashboardTasksDto|null $tasksData tasksData
     *
     * @return self
     */
    public function setTasksData($tasksData)
    {
        if (is_null($tasksData)) {
            throw new \InvalidArgumentException('non-nullable tasksData cannot be null');
        }
        $this->container['tasksData'] = $tasksData;

        return $this;
    }

    /**
     * Gets autopilotStatusOn
     *
     * @return bool|null
     */
    public function getAutopilotStatusOn()
    {
        return $this->container['autopilotStatusOn'];
    }

    /**
     * Sets autopilotStatusOn
     *
     * @param bool|null $autopilotStatusOn autopilotStatusOn
     *
     * @return self
     */
    public function setAutopilotStatusOn($autopilotStatusOn)
    {
        if (is_null($autopilotStatusOn)) {
            throw new \InvalidArgumentException('non-nullable autopilotStatusOn cannot be null');
        }
        $this->container['autopilotStatusOn'] = $autopilotStatusOn;

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


