<?php
/**
 * Match
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
 * Match Class Doc Comment
 *
 * @category Class
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Match implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Match';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'key' => 'string',
        'comp_level' => 'string',
        'set_number' => 'int',
        'match_number' => 'int',
        'alliances' => '\TBA-API\v3client\TBA-API\v3client\model\MatchSimpleAlliances',
        'winning_alliance' => 'string',
        'event_key' => 'string',
        'time' => 'int',
        'actual_time' => 'int',
        'predicted_time' => 'int',
        'post_result_time' => 'int',
        'score_breakdown' => 'object',
        'videos' => '\TBA-API\v3client\TBA-API\v3client\model\MatchVideos[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'key' => null,
        'comp_level' => null,
        'set_number' => null,
        'match_number' => null,
        'alliances' => null,
        'winning_alliance' => null,
        'event_key' => null,
        'time' => 'int64',
        'actual_time' => 'int64',
        'predicted_time' => 'int64',
        'post_result_time' => 'int64',
        'score_breakdown' => null,
        'videos' => null
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
        'key' => 'key',
        'comp_level' => 'comp_level',
        'set_number' => 'set_number',
        'match_number' => 'match_number',
        'alliances' => 'alliances',
        'winning_alliance' => 'winning_alliance',
        'event_key' => 'event_key',
        'time' => 'time',
        'actual_time' => 'actual_time',
        'predicted_time' => 'predicted_time',
        'post_result_time' => 'post_result_time',
        'score_breakdown' => 'score_breakdown',
        'videos' => 'videos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'comp_level' => 'setCompLevel',
        'set_number' => 'setSetNumber',
        'match_number' => 'setMatchNumber',
        'alliances' => 'setAlliances',
        'winning_alliance' => 'setWinningAlliance',
        'event_key' => 'setEventKey',
        'time' => 'setTime',
        'actual_time' => 'setActualTime',
        'predicted_time' => 'setPredictedTime',
        'post_result_time' => 'setPostResultTime',
        'score_breakdown' => 'setScoreBreakdown',
        'videos' => 'setVideos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'comp_level' => 'getCompLevel',
        'set_number' => 'getSetNumber',
        'match_number' => 'getMatchNumber',
        'alliances' => 'getAlliances',
        'winning_alliance' => 'getWinningAlliance',
        'event_key' => 'getEventKey',
        'time' => 'getTime',
        'actual_time' => 'getActualTime',
        'predicted_time' => 'getPredictedTime',
        'post_result_time' => 'getPostResultTime',
        'score_breakdown' => 'getScoreBreakdown',
        'videos' => 'getVideos'
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

    const COMP_LEVEL_QM = 'qm';
    const COMP_LEVEL_EF = 'ef';
    const COMP_LEVEL_QF = 'qf';
    const COMP_LEVEL_SF = 'sf';
    const COMP_LEVEL_F = 'f';
    const WINNING_ALLIANCE_RED = 'red';
    const WINNING_ALLIANCE_BLUE = 'blue';
    const WINNING_ALLIANCE_EMPTY = '';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompLevelAllowableValues()
    {
        return [
            self::COMP_LEVEL_QM,
            self::COMP_LEVEL_EF,
            self::COMP_LEVEL_QF,
            self::COMP_LEVEL_SF,
            self::COMP_LEVEL_F,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWinningAllianceAllowableValues()
    {
        return [
            self::WINNING_ALLIANCE_RED,
            self::WINNING_ALLIANCE_BLUE,
            self::WINNING_ALLIANCE_EMPTY,
        ];
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['comp_level'] = isset($data['comp_level']) ? $data['comp_level'] : null;
        $this->container['set_number'] = isset($data['set_number']) ? $data['set_number'] : null;
        $this->container['match_number'] = isset($data['match_number']) ? $data['match_number'] : null;
        $this->container['alliances'] = isset($data['alliances']) ? $data['alliances'] : null;
        $this->container['winning_alliance'] = isset($data['winning_alliance']) ? $data['winning_alliance'] : null;
        $this->container['event_key'] = isset($data['event_key']) ? $data['event_key'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['actual_time'] = isset($data['actual_time']) ? $data['actual_time'] : null;
        $this->container['predicted_time'] = isset($data['predicted_time']) ? $data['predicted_time'] : null;
        $this->container['post_result_time'] = isset($data['post_result_time']) ? $data['post_result_time'] : null;
        $this->container['score_breakdown'] = isset($data['score_breakdown']) ? $data['score_breakdown'] : null;
        $this->container['videos'] = isset($data['videos']) ? $data['videos'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['comp_level'] === null) {
            $invalidProperties[] = "'comp_level' can't be null";
        }
        $allowedValues = $this->getCompLevelAllowableValues();
        if (!is_null($this->container['comp_level']) && !in_array($this->container['comp_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'comp_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['set_number'] === null) {
            $invalidProperties[] = "'set_number' can't be null";
        }
        if ($this->container['match_number'] === null) {
            $invalidProperties[] = "'match_number' can't be null";
        }
        $allowedValues = $this->getWinningAllianceAllowableValues();
        if (!is_null($this->container['winning_alliance']) && !in_array($this->container['winning_alliance'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'winning_alliance', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['event_key'] === null) {
            $invalidProperties[] = "'event_key' can't be null";
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
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key TBA match key with the format `yyyy[EVENT_CODE]_[COMP_LEVEL]m[MATCH_NUMBER]`, where `yyyy` is the year, and `EVENT_CODE` is the event code of the event, `COMP_LEVEL` is (qm, ef, qf, sf, f), and `MATCH_NUMBER` is the match number in the competition level. A set number may be appended to the competition level if more than one match in required per set.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets comp_level
     *
     * @return string
     */
    public function getCompLevel()
    {
        return $this->container['comp_level'];
    }

    /**
     * Sets comp_level
     *
     * @param string $comp_level The competition level the match was played at.
     *
     * @return $this
     */
    public function setCompLevel($comp_level)
    {
        $allowedValues = $this->getCompLevelAllowableValues();
        if (!in_array($comp_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'comp_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['comp_level'] = $comp_level;

        return $this;
    }

    /**
     * Gets set_number
     *
     * @return int
     */
    public function getSetNumber()
    {
        return $this->container['set_number'];
    }

    /**
     * Sets set_number
     *
     * @param int $set_number The set number in a series of matches where more than one match is required in the match series.
     *
     * @return $this
     */
    public function setSetNumber($set_number)
    {
        $this->container['set_number'] = $set_number;

        return $this;
    }

    /**
     * Gets match_number
     *
     * @return int
     */
    public function getMatchNumber()
    {
        return $this->container['match_number'];
    }

    /**
     * Sets match_number
     *
     * @param int $match_number The match number of the match in the competition level.
     *
     * @return $this
     */
    public function setMatchNumber($match_number)
    {
        $this->container['match_number'] = $match_number;

        return $this;
    }

    /**
     * Gets alliances
     *
     * @return \TBA-API\v3client\TBA-API\v3client\model\MatchSimpleAlliances|null
     */
    public function getAlliances()
    {
        return $this->container['alliances'];
    }

    /**
     * Sets alliances
     *
     * @param \TBA-API\v3client\TBA-API\v3client\model\MatchSimpleAlliances|null $alliances alliances
     *
     * @return $this
     */
    public function setAlliances($alliances)
    {
        $this->container['alliances'] = $alliances;

        return $this;
    }

    /**
     * Gets winning_alliance
     *
     * @return string|null
     */
    public function getWinningAlliance()
    {
        return $this->container['winning_alliance'];
    }

    /**
     * Sets winning_alliance
     *
     * @param string|null $winning_alliance The color (red/blue) of the winning alliance. Will contain an empty string in the event of no winner, or a tie.
     *
     * @return $this
     */
    public function setWinningAlliance($winning_alliance)
    {
        $allowedValues = $this->getWinningAllianceAllowableValues();
        if (!is_null($winning_alliance) && !in_array($winning_alliance, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'winning_alliance', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['winning_alliance'] = $winning_alliance;

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
     * @param string $event_key Event key of the event the match was played at.
     *
     * @return $this
     */
    public function setEventKey($event_key)
    {
        $this->container['event_key'] = $event_key;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int|null $time UNIX timestamp (seconds since 1-Jan-1970 00:00:00) of the scheduled match time, as taken from the published schedule.
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets actual_time
     *
     * @return int|null
     */
    public function getActualTime()
    {
        return $this->container['actual_time'];
    }

    /**
     * Sets actual_time
     *
     * @param int|null $actual_time UNIX timestamp (seconds since 1-Jan-1970 00:00:00) of actual match start time.
     *
     * @return $this
     */
    public function setActualTime($actual_time)
    {
        $this->container['actual_time'] = $actual_time;

        return $this;
    }

    /**
     * Gets predicted_time
     *
     * @return int|null
     */
    public function getPredictedTime()
    {
        return $this->container['predicted_time'];
    }

    /**
     * Sets predicted_time
     *
     * @param int|null $predicted_time UNIX timestamp (seconds since 1-Jan-1970 00:00:00) of the TBA predicted match start time.
     *
     * @return $this
     */
    public function setPredictedTime($predicted_time)
    {
        $this->container['predicted_time'] = $predicted_time;

        return $this;
    }

    /**
     * Gets post_result_time
     *
     * @return int|null
     */
    public function getPostResultTime()
    {
        return $this->container['post_result_time'];
    }

    /**
     * Sets post_result_time
     *
     * @param int|null $post_result_time UNIX timestamp (seconds since 1-Jan-1970 00:00:00) when the match result was posted.
     *
     * @return $this
     */
    public function setPostResultTime($post_result_time)
    {
        $this->container['post_result_time'] = $post_result_time;

        return $this;
    }

    /**
     * Gets score_breakdown
     *
     * @return object|null
     */
    public function getScoreBreakdown()
    {
        return $this->container['score_breakdown'];
    }

    /**
     * Sets score_breakdown
     *
     * @param object|null $score_breakdown Score breakdown for auto, teleop, etc. points. Varies from year to year. May be null.
     *
     * @return $this
     */
    public function setScoreBreakdown($score_breakdown)
    {
        $this->container['score_breakdown'] = $score_breakdown;

        return $this;
    }

    /**
     * Gets videos
     *
     * @return \TBA-API\v3client\TBA-API\v3client\model\MatchVideos[]|null
     */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
     * Sets videos
     *
     * @param \TBA-API\v3client\TBA-API\v3client\model\MatchVideos[]|null $videos Array of video objects associated with this match.
     *
     * @return $this
     */
    public function setVideos($videos)
    {
        $this->container['videos'] = $videos;

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


