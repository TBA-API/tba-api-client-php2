<?php
/**
 * DistrictRanking
 *
 * PHP version 5
 *
 * @category Class
 * @package  TBA-API\v3client
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

namespace TBA-API\v3client\TBA-API\v3client\model;

use \ArrayAccess;
use \TBA-API\v3client\ObjectSerializer;

/**
 * DistrictRanking Class Doc Comment
 *
 * @category Class
 * @description Rank of a team in a district.
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DistrictRanking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'District_Ranking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'team_key' => 'string',
        'rank' => 'int',
        'rookie_bonus' => 'int',
        'point_total' => 'int',
        'event_points' => '\TBA-API\v3client\TBA-API\v3client\model\DistrictRankingEventPoints[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'team_key' => null,
        'rank' => null,
        'rookie_bonus' => null,
        'point_total' => null,
        'event_points' => null
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
        'team_key' => 'team_key',
        'rank' => 'rank',
        'rookie_bonus' => 'rookie_bonus',
        'point_total' => 'point_total',
        'event_points' => 'event_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'team_key' => 'setTeamKey',
        'rank' => 'setRank',
        'rookie_bonus' => 'setRookieBonus',
        'point_total' => 'setPointTotal',
        'event_points' => 'setEventPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'team_key' => 'getTeamKey',
        'rank' => 'getRank',
        'rookie_bonus' => 'getRookieBonus',
        'point_total' => 'getPointTotal',
        'event_points' => 'getEventPoints'
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
        $this->container['team_key'] = isset($data['team_key']) ? $data['team_key'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['rookie_bonus'] = isset($data['rookie_bonus']) ? $data['rookie_bonus'] : null;
        $this->container['point_total'] = isset($data['point_total']) ? $data['point_total'] : null;
        $this->container['event_points'] = isset($data['event_points']) ? $data['event_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['team_key'] === null) {
            $invalidProperties[] = "'team_key' can't be null";
        }
        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        if ($this->container['point_total'] === null) {
            $invalidProperties[] = "'point_total' can't be null";
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
     * Gets team_key
     *
     * @return string
     */
    public function getTeamKey()
    {
        return $this->container['team_key'];
    }

    /**
     * Sets team_key
     *
     * @param string $team_key TBA team key for the team.
     *
     * @return $this
     */
    public function setTeamKey($team_key)
    {
        $this->container['team_key'] = $team_key;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank Numerical rank of the team, 1 being top rank.
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets rookie_bonus
     *
     * @return int|null
     */
    public function getRookieBonus()
    {
        return $this->container['rookie_bonus'];
    }

    /**
     * Sets rookie_bonus
     *
     * @param int|null $rookie_bonus Any points added to a team as a result of the rookie bonus.
     *
     * @return $this
     */
    public function setRookieBonus($rookie_bonus)
    {
        $this->container['rookie_bonus'] = $rookie_bonus;

        return $this;
    }

    /**
     * Gets point_total
     *
     * @return int
     */
    public function getPointTotal()
    {
        return $this->container['point_total'];
    }

    /**
     * Sets point_total
     *
     * @param int $point_total Total district points for the team.
     *
     * @return $this
     */
    public function setPointTotal($point_total)
    {
        $this->container['point_total'] = $point_total;

        return $this;
    }

    /**
     * Gets event_points
     *
     * @return \TBA-API\v3client\TBA-API\v3client\model\DistrictRankingEventPoints[]|null
     */
    public function getEventPoints()
    {
        return $this->container['event_points'];
    }

    /**
     * Sets event_points
     *
     * @param \TBA-API\v3client\TBA-API\v3client\model\DistrictRankingEventPoints[]|null $event_points List of events that contributed to the point total for the team.
     *
     * @return $this
     */
    public function setEventPoints($event_points)
    {
        $this->container['event_points'] = $event_points;

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


