<?php
/**
 * TeamEventStatusRankRanking
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
 * TeamEventStatusRankRanking Class Doc Comment
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeamEventStatusRankRanking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Team_Event_Status_rank_ranking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'matches_played' => 'int',
        'qual_average' => 'double',
        'sort_orders' => 'float[]',
        'record' => '\TBAAPI\v3client\TBAAPI\v3client\model\WLTRecord',
        'rank' => 'int',
        'dq' => 'int',
        'team_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'matches_played' => null,
        'qual_average' => 'double',
        'sort_orders' => null,
        'record' => null,
        'rank' => null,
        'dq' => null,
        'team_key' => null
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
        'matches_played' => 'matches_played',
        'qual_average' => 'qual_average',
        'sort_orders' => 'sort_orders',
        'record' => 'record',
        'rank' => 'rank',
        'dq' => 'dq',
        'team_key' => 'team_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'matches_played' => 'setMatchesPlayed',
        'qual_average' => 'setQualAverage',
        'sort_orders' => 'setSortOrders',
        'record' => 'setRecord',
        'rank' => 'setRank',
        'dq' => 'setDq',
        'team_key' => 'setTeamKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'matches_played' => 'getMatchesPlayed',
        'qual_average' => 'getQualAverage',
        'sort_orders' => 'getSortOrders',
        'record' => 'getRecord',
        'rank' => 'getRank',
        'dq' => 'getDq',
        'team_key' => 'getTeamKey'
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
        $this->container['matches_played'] = isset($data['matches_played']) ? $data['matches_played'] : null;
        $this->container['qual_average'] = isset($data['qual_average']) ? $data['qual_average'] : null;
        $this->container['sort_orders'] = isset($data['sort_orders']) ? $data['sort_orders'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['dq'] = isset($data['dq']) ? $data['dq'] : null;
        $this->container['team_key'] = isset($data['team_key']) ? $data['team_key'] : null;
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
     * Gets matches_played
     *
     * @return int|null
     */
    public function getMatchesPlayed()
    {
        return $this->container['matches_played'];
    }

    /**
     * Sets matches_played
     *
     * @param int|null $matches_played Number of matches played.
     *
     * @return $this
     */
    public function setMatchesPlayed($matches_played)
    {
        $this->container['matches_played'] = $matches_played;

        return $this;
    }

    /**
     * Gets qual_average
     *
     * @return double|null
     */
    public function getQualAverage()
    {
        return $this->container['qual_average'];
    }

    /**
     * Sets qual_average
     *
     * @param double|null $qual_average For some years, average qualification score. Can be null.
     *
     * @return $this
     */
    public function setQualAverage($qual_average)
    {
        $this->container['qual_average'] = $qual_average;

        return $this;
    }

    /**
     * Gets sort_orders
     *
     * @return float[]|null
     */
    public function getSortOrders()
    {
        return $this->container['sort_orders'];
    }

    /**
     * Sets sort_orders
     *
     * @param float[]|null $sort_orders Ordered list of values used to determine the rank. See the `sort_order_info` property for the name of each value.
     *
     * @return $this
     */
    public function setSortOrders($sort_orders)
    {
        $this->container['sort_orders'] = $sort_orders;

        return $this;
    }

    /**
     * Gets record
     *
     * @return \TBAAPI\v3client\TBAAPI\v3client\model\WLTRecord|null
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param \TBAAPI\v3client\TBAAPI\v3client\model\WLTRecord|null $record record
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank Relative rank of this team.
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets dq
     *
     * @return int|null
     */
    public function getDq()
    {
        return $this->container['dq'];
    }

    /**
     * Sets dq
     *
     * @param int|null $dq Number of matches the team was disqualified for.
     *
     * @return $this
     */
    public function setDq($dq)
    {
        $this->container['dq'] = $dq;

        return $this;
    }

    /**
     * Gets team_key
     *
     * @return string|null
     */
    public function getTeamKey()
    {
        return $this->container['team_key'];
    }

    /**
     * Sets team_key
     *
     * @param string|null $team_key TBA team key for this rank.
     *
     * @return $this
     */
    public function setTeamKey($team_key)
    {
        $this->container['team_key'] = $team_key;

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


