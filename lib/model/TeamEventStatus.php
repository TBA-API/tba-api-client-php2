<?php
/**
 * TeamEventStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Blue Alliance API v3
 *
 * # Overview    Information and statistics about FIRST Robotics Competition teams and events.   # Authentication   All endpoints require an Auth Key to be passed in the header `X-TBA-Auth-Key`. If you do not have an auth key yet, you can obtain one from your [Account Page](/account).    A `User-Agent` header may need to be set to prevent a 403 Unauthorized error.
 *
 * The version of the OpenAPI document: 3.8.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TBAAPI\v3client\TBAAPI\v3client\model;

use \ArrayAccess;
use \TBAAPI\v3client\ObjectSerializer;

/**
 * TeamEventStatus Class Doc Comment
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeamEventStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Team_Event_Status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'qual' => '\TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusRank',
        'alliance' => '\TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusAlliance',
        'playoff' => '\TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusPlayoff',
        'alliance_status_str' => 'string',
        'playoff_status_str' => 'string',
        'overall_status_str' => 'string',
        'next_match_key' => 'string',
        'last_match_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'qual' => null,
        'alliance' => null,
        'playoff' => null,
        'alliance_status_str' => null,
        'playoff_status_str' => null,
        'overall_status_str' => null,
        'next_match_key' => null,
        'last_match_key' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'qual' => 'qual',
        'alliance' => 'alliance',
        'playoff' => 'playoff',
        'alliance_status_str' => 'alliance_status_str',
        'playoff_status_str' => 'playoff_status_str',
        'overall_status_str' => 'overall_status_str',
        'next_match_key' => 'next_match_key',
        'last_match_key' => 'last_match_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qual' => 'setQual',
        'alliance' => 'setAlliance',
        'playoff' => 'setPlayoff',
        'alliance_status_str' => 'setAllianceStatusStr',
        'playoff_status_str' => 'setPlayoffStatusStr',
        'overall_status_str' => 'setOverallStatusStr',
        'next_match_key' => 'setNextMatchKey',
        'last_match_key' => 'setLastMatchKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qual' => 'getQual',
        'alliance' => 'getAlliance',
        'playoff' => 'getPlayoff',
        'alliance_status_str' => 'getAllianceStatusStr',
        'playoff_status_str' => 'getPlayoffStatusStr',
        'overall_status_str' => 'getOverallStatusStr',
        'next_match_key' => 'getNextMatchKey',
        'last_match_key' => 'getLastMatchKey'
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
        $this->container['qual'] = isset($data['qual']) ? $data['qual'] : null;
        $this->container['alliance'] = isset($data['alliance']) ? $data['alliance'] : null;
        $this->container['playoff'] = isset($data['playoff']) ? $data['playoff'] : null;
        $this->container['alliance_status_str'] = isset($data['alliance_status_str']) ? $data['alliance_status_str'] : null;
        $this->container['playoff_status_str'] = isset($data['playoff_status_str']) ? $data['playoff_status_str'] : null;
        $this->container['overall_status_str'] = isset($data['overall_status_str']) ? $data['overall_status_str'] : null;
        $this->container['next_match_key'] = isset($data['next_match_key']) ? $data['next_match_key'] : null;
        $this->container['last_match_key'] = isset($data['last_match_key']) ? $data['last_match_key'] : null;
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
     * Gets qual
     *
     * @return \TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusRank|null
     */
    public function getQual()
    {
        return $this->container['qual'];
    }

    /**
     * Sets qual
     *
     * @param \TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusRank|null $qual qual
     *
     * @return $this
     */
    public function setQual($qual)
    {
        $this->container['qual'] = $qual;

        return $this;
    }

    /**
     * Gets alliance
     *
     * @return \TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusAlliance|null
     */
    public function getAlliance()
    {
        return $this->container['alliance'];
    }

    /**
     * Sets alliance
     *
     * @param \TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusAlliance|null $alliance alliance
     *
     * @return $this
     */
    public function setAlliance($alliance)
    {
        $this->container['alliance'] = $alliance;

        return $this;
    }

    /**
     * Gets playoff
     *
     * @return \TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusPlayoff|null
     */
    public function getPlayoff()
    {
        return $this->container['playoff'];
    }

    /**
     * Sets playoff
     *
     * @param \TBAAPI\v3client\TBAAPI\v3client\model\TeamEventStatusPlayoff|null $playoff playoff
     *
     * @return $this
     */
    public function setPlayoff($playoff)
    {
        $this->container['playoff'] = $playoff;

        return $this;
    }

    /**
     * Gets alliance_status_str
     *
     * @return string|null
     */
    public function getAllianceStatusStr()
    {
        return $this->container['alliance_status_str'];
    }

    /**
     * Sets alliance_status_str
     *
     * @param string|null $alliance_status_str An HTML formatted string suitable for display to the user containing the team's alliance pick status.
     *
     * @return $this
     */
    public function setAllianceStatusStr($alliance_status_str)
    {
        $this->container['alliance_status_str'] = $alliance_status_str;

        return $this;
    }

    /**
     * Gets playoff_status_str
     *
     * @return string|null
     */
    public function getPlayoffStatusStr()
    {
        return $this->container['playoff_status_str'];
    }

    /**
     * Sets playoff_status_str
     *
     * @param string|null $playoff_status_str An HTML formatter string suitable for display to the user containing the team's playoff status.
     *
     * @return $this
     */
    public function setPlayoffStatusStr($playoff_status_str)
    {
        $this->container['playoff_status_str'] = $playoff_status_str;

        return $this;
    }

    /**
     * Gets overall_status_str
     *
     * @return string|null
     */
    public function getOverallStatusStr()
    {
        return $this->container['overall_status_str'];
    }

    /**
     * Sets overall_status_str
     *
     * @param string|null $overall_status_str An HTML formatted string suitable for display to the user containing the team's overall status summary of the event.
     *
     * @return $this
     */
    public function setOverallStatusStr($overall_status_str)
    {
        $this->container['overall_status_str'] = $overall_status_str;

        return $this;
    }

    /**
     * Gets next_match_key
     *
     * @return string|null
     */
    public function getNextMatchKey()
    {
        return $this->container['next_match_key'];
    }

    /**
     * Sets next_match_key
     *
     * @param string|null $next_match_key TBA match key for the next match the team is scheduled to play in at this event, or null.
     *
     * @return $this
     */
    public function setNextMatchKey($next_match_key)
    {
        $this->container['next_match_key'] = $next_match_key;

        return $this;
    }

    /**
     * Gets last_match_key
     *
     * @return string|null
     */
    public function getLastMatchKey()
    {
        return $this->container['last_match_key'];
    }

    /**
     * Sets last_match_key
     *
     * @param string|null $last_match_key TBA match key for the last match the team played in at this event, or null.
     *
     * @return $this
     */
    public function setLastMatchKey($last_match_key)
    {
        $this->container['last_match_key'] = $last_match_key;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


