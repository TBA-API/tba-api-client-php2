<?php
/**
 * DistrictRankingEventPoints
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
 * OpenAPI Generator version: 4.3.1
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
 * DistrictRankingEventPoints Class Doc Comment
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DistrictRankingEventPoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'District_Ranking_event_points';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'district_cmp' => 'bool',
        'total' => 'int',
        'alliance_points' => 'int',
        'elim_points' => 'int',
        'award_points' => 'int',
        'event_key' => 'string',
        'qual_points' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'district_cmp' => null,
        'total' => null,
        'alliance_points' => null,
        'elim_points' => null,
        'award_points' => null,
        'event_key' => null,
        'qual_points' => null
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
        'district_cmp' => 'district_cmp',
        'total' => 'total',
        'alliance_points' => 'alliance_points',
        'elim_points' => 'elim_points',
        'award_points' => 'award_points',
        'event_key' => 'event_key',
        'qual_points' => 'qual_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'district_cmp' => 'setDistrictCmp',
        'total' => 'setTotal',
        'alliance_points' => 'setAlliancePoints',
        'elim_points' => 'setElimPoints',
        'award_points' => 'setAwardPoints',
        'event_key' => 'setEventKey',
        'qual_points' => 'setQualPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'district_cmp' => 'getDistrictCmp',
        'total' => 'getTotal',
        'alliance_points' => 'getAlliancePoints',
        'elim_points' => 'getElimPoints',
        'award_points' => 'getAwardPoints',
        'event_key' => 'getEventKey',
        'qual_points' => 'getQualPoints'
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
        $this->container['district_cmp'] = isset($data['district_cmp']) ? $data['district_cmp'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['alliance_points'] = isset($data['alliance_points']) ? $data['alliance_points'] : null;
        $this->container['elim_points'] = isset($data['elim_points']) ? $data['elim_points'] : null;
        $this->container['award_points'] = isset($data['award_points']) ? $data['award_points'] : null;
        $this->container['event_key'] = isset($data['event_key']) ? $data['event_key'] : null;
        $this->container['qual_points'] = isset($data['qual_points']) ? $data['qual_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['district_cmp'] === null) {
            $invalidProperties[] = "'district_cmp' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['alliance_points'] === null) {
            $invalidProperties[] = "'alliance_points' can't be null";
        }
        if ($this->container['elim_points'] === null) {
            $invalidProperties[] = "'elim_points' can't be null";
        }
        if ($this->container['award_points'] === null) {
            $invalidProperties[] = "'award_points' can't be null";
        }
        if ($this->container['event_key'] === null) {
            $invalidProperties[] = "'event_key' can't be null";
        }
        if ($this->container['qual_points'] === null) {
            $invalidProperties[] = "'qual_points' can't be null";
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
     * Gets district_cmp
     *
     * @return bool
     */
    public function getDistrictCmp()
    {
        return $this->container['district_cmp'];
    }

    /**
     * Sets district_cmp
     *
     * @param bool $district_cmp `true` if this event is a District Championship event.
     *
     * @return $this
     */
    public function setDistrictCmp($district_cmp)
    {
        $this->container['district_cmp'] = $district_cmp;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total Total points awarded at this event.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets alliance_points
     *
     * @return int
     */
    public function getAlliancePoints()
    {
        return $this->container['alliance_points'];
    }

    /**
     * Sets alliance_points
     *
     * @param int $alliance_points Points awarded for alliance selection.
     *
     * @return $this
     */
    public function setAlliancePoints($alliance_points)
    {
        $this->container['alliance_points'] = $alliance_points;

        return $this;
    }

    /**
     * Gets elim_points
     *
     * @return int
     */
    public function getElimPoints()
    {
        return $this->container['elim_points'];
    }

    /**
     * Sets elim_points
     *
     * @param int $elim_points Points awarded for elimination match performance.
     *
     * @return $this
     */
    public function setElimPoints($elim_points)
    {
        $this->container['elim_points'] = $elim_points;

        return $this;
    }

    /**
     * Gets award_points
     *
     * @return int
     */
    public function getAwardPoints()
    {
        return $this->container['award_points'];
    }

    /**
     * Sets award_points
     *
     * @param int $award_points Points awarded for event awards.
     *
     * @return $this
     */
    public function setAwardPoints($award_points)
    {
        $this->container['award_points'] = $award_points;

        return $this;
    }

    /**
     * Gets event_key
     *
     * @return string
     */
    public function getEventKey()
    {
        return $this->container['event_key'];
    }

    /**
     * Sets event_key
     *
     * @param string $event_key TBA Event key for this event.
     *
     * @return $this
     */
    public function setEventKey($event_key)
    {
        $this->container['event_key'] = $event_key;

        return $this;
    }

    /**
     * Gets qual_points
     *
     * @return int
     */
    public function getQualPoints()
    {
        return $this->container['qual_points'];
    }

    /**
     * Sets qual_points
     *
     * @param int $qual_points Points awarded for qualification match performance.
     *
     * @return $this
     */
    public function setQualPoints($qual_points)
    {
        $this->container['qual_points'] = $qual_points;

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


