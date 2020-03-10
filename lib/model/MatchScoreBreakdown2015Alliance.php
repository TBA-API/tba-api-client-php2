<?php
/**
 * MatchScoreBreakdown2015Alliance
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
 * MatchScoreBreakdown2015Alliance Class Doc Comment
 *
 * @category Class
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MatchScoreBreakdown2015Alliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Match_Score_Breakdown_2015_Alliance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_points' => 'int',
        'teleop_points' => 'int',
        'container_points' => 'int',
        'tote_points' => 'int',
        'litter_points' => 'int',
        'foul_points' => 'int',
        'adjust_points' => 'int',
        'total_points' => 'int',
        'foul_count' => 'int',
        'tote_count_far' => 'int',
        'tote_count_near' => 'int',
        'tote_set' => 'bool',
        'tote_stack' => 'bool',
        'container_count_level1' => 'int',
        'container_count_level2' => 'int',
        'container_count_level3' => 'int',
        'container_count_level4' => 'int',
        'container_count_level5' => 'int',
        'container_count_level6' => 'int',
        'container_set' => 'bool',
        'litter_count_container' => 'int',
        'litter_count_landfill' => 'int',
        'litter_count_unprocessed' => 'int',
        'robot_set' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'auto_points' => null,
        'teleop_points' => null,
        'container_points' => null,
        'tote_points' => null,
        'litter_points' => null,
        'foul_points' => null,
        'adjust_points' => null,
        'total_points' => null,
        'foul_count' => null,
        'tote_count_far' => null,
        'tote_count_near' => null,
        'tote_set' => null,
        'tote_stack' => null,
        'container_count_level1' => null,
        'container_count_level2' => null,
        'container_count_level3' => null,
        'container_count_level4' => null,
        'container_count_level5' => null,
        'container_count_level6' => null,
        'container_set' => null,
        'litter_count_container' => null,
        'litter_count_landfill' => null,
        'litter_count_unprocessed' => null,
        'robot_set' => null
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
        'auto_points' => 'auto_points',
        'teleop_points' => 'teleop_points',
        'container_points' => 'container_points',
        'tote_points' => 'tote_points',
        'litter_points' => 'litter_points',
        'foul_points' => 'foul_points',
        'adjust_points' => 'adjust_points',
        'total_points' => 'total_points',
        'foul_count' => 'foul_count',
        'tote_count_far' => 'tote_count_far',
        'tote_count_near' => 'tote_count_near',
        'tote_set' => 'tote_set',
        'tote_stack' => 'tote_stack',
        'container_count_level1' => 'container_count_level1',
        'container_count_level2' => 'container_count_level2',
        'container_count_level3' => 'container_count_level3',
        'container_count_level4' => 'container_count_level4',
        'container_count_level5' => 'container_count_level5',
        'container_count_level6' => 'container_count_level6',
        'container_set' => 'container_set',
        'litter_count_container' => 'litter_count_container',
        'litter_count_landfill' => 'litter_count_landfill',
        'litter_count_unprocessed' => 'litter_count_unprocessed',
        'robot_set' => 'robot_set'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_points' => 'setAutoPoints',
        'teleop_points' => 'setTeleopPoints',
        'container_points' => 'setContainerPoints',
        'tote_points' => 'setTotePoints',
        'litter_points' => 'setLitterPoints',
        'foul_points' => 'setFoulPoints',
        'adjust_points' => 'setAdjustPoints',
        'total_points' => 'setTotalPoints',
        'foul_count' => 'setFoulCount',
        'tote_count_far' => 'setToteCountFar',
        'tote_count_near' => 'setToteCountNear',
        'tote_set' => 'setToteSet',
        'tote_stack' => 'setToteStack',
        'container_count_level1' => 'setContainerCountLevel1',
        'container_count_level2' => 'setContainerCountLevel2',
        'container_count_level3' => 'setContainerCountLevel3',
        'container_count_level4' => 'setContainerCountLevel4',
        'container_count_level5' => 'setContainerCountLevel5',
        'container_count_level6' => 'setContainerCountLevel6',
        'container_set' => 'setContainerSet',
        'litter_count_container' => 'setLitterCountContainer',
        'litter_count_landfill' => 'setLitterCountLandfill',
        'litter_count_unprocessed' => 'setLitterCountUnprocessed',
        'robot_set' => 'setRobotSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_points' => 'getAutoPoints',
        'teleop_points' => 'getTeleopPoints',
        'container_points' => 'getContainerPoints',
        'tote_points' => 'getTotePoints',
        'litter_points' => 'getLitterPoints',
        'foul_points' => 'getFoulPoints',
        'adjust_points' => 'getAdjustPoints',
        'total_points' => 'getTotalPoints',
        'foul_count' => 'getFoulCount',
        'tote_count_far' => 'getToteCountFar',
        'tote_count_near' => 'getToteCountNear',
        'tote_set' => 'getToteSet',
        'tote_stack' => 'getToteStack',
        'container_count_level1' => 'getContainerCountLevel1',
        'container_count_level2' => 'getContainerCountLevel2',
        'container_count_level3' => 'getContainerCountLevel3',
        'container_count_level4' => 'getContainerCountLevel4',
        'container_count_level5' => 'getContainerCountLevel5',
        'container_count_level6' => 'getContainerCountLevel6',
        'container_set' => 'getContainerSet',
        'litter_count_container' => 'getLitterCountContainer',
        'litter_count_landfill' => 'getLitterCountLandfill',
        'litter_count_unprocessed' => 'getLitterCountUnprocessed',
        'robot_set' => 'getRobotSet'
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
        $this->container['auto_points'] = isset($data['auto_points']) ? $data['auto_points'] : null;
        $this->container['teleop_points'] = isset($data['teleop_points']) ? $data['teleop_points'] : null;
        $this->container['container_points'] = isset($data['container_points']) ? $data['container_points'] : null;
        $this->container['tote_points'] = isset($data['tote_points']) ? $data['tote_points'] : null;
        $this->container['litter_points'] = isset($data['litter_points']) ? $data['litter_points'] : null;
        $this->container['foul_points'] = isset($data['foul_points']) ? $data['foul_points'] : null;
        $this->container['adjust_points'] = isset($data['adjust_points']) ? $data['adjust_points'] : null;
        $this->container['total_points'] = isset($data['total_points']) ? $data['total_points'] : null;
        $this->container['foul_count'] = isset($data['foul_count']) ? $data['foul_count'] : null;
        $this->container['tote_count_far'] = isset($data['tote_count_far']) ? $data['tote_count_far'] : null;
        $this->container['tote_count_near'] = isset($data['tote_count_near']) ? $data['tote_count_near'] : null;
        $this->container['tote_set'] = isset($data['tote_set']) ? $data['tote_set'] : null;
        $this->container['tote_stack'] = isset($data['tote_stack']) ? $data['tote_stack'] : null;
        $this->container['container_count_level1'] = isset($data['container_count_level1']) ? $data['container_count_level1'] : null;
        $this->container['container_count_level2'] = isset($data['container_count_level2']) ? $data['container_count_level2'] : null;
        $this->container['container_count_level3'] = isset($data['container_count_level3']) ? $data['container_count_level3'] : null;
        $this->container['container_count_level4'] = isset($data['container_count_level4']) ? $data['container_count_level4'] : null;
        $this->container['container_count_level5'] = isset($data['container_count_level5']) ? $data['container_count_level5'] : null;
        $this->container['container_count_level6'] = isset($data['container_count_level6']) ? $data['container_count_level6'] : null;
        $this->container['container_set'] = isset($data['container_set']) ? $data['container_set'] : null;
        $this->container['litter_count_container'] = isset($data['litter_count_container']) ? $data['litter_count_container'] : null;
        $this->container['litter_count_landfill'] = isset($data['litter_count_landfill']) ? $data['litter_count_landfill'] : null;
        $this->container['litter_count_unprocessed'] = isset($data['litter_count_unprocessed']) ? $data['litter_count_unprocessed'] : null;
        $this->container['robot_set'] = isset($data['robot_set']) ? $data['robot_set'] : null;
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
     * Gets auto_points
     *
     * @return int|null
     */
    public function getAutoPoints()
    {
        return $this->container['auto_points'];
    }

    /**
     * Sets auto_points
     *
     * @param int|null $auto_points auto_points
     *
     * @return $this
     */
    public function setAutoPoints($auto_points)
    {
        $this->container['auto_points'] = $auto_points;

        return $this;
    }

    /**
     * Gets teleop_points
     *
     * @return int|null
     */
    public function getTeleopPoints()
    {
        return $this->container['teleop_points'];
    }

    /**
     * Sets teleop_points
     *
     * @param int|null $teleop_points teleop_points
     *
     * @return $this
     */
    public function setTeleopPoints($teleop_points)
    {
        $this->container['teleop_points'] = $teleop_points;

        return $this;
    }

    /**
     * Gets container_points
     *
     * @return int|null
     */
    public function getContainerPoints()
    {
        return $this->container['container_points'];
    }

    /**
     * Sets container_points
     *
     * @param int|null $container_points container_points
     *
     * @return $this
     */
    public function setContainerPoints($container_points)
    {
        $this->container['container_points'] = $container_points;

        return $this;
    }

    /**
     * Gets tote_points
     *
     * @return int|null
     */
    public function getTotePoints()
    {
        return $this->container['tote_points'];
    }

    /**
     * Sets tote_points
     *
     * @param int|null $tote_points tote_points
     *
     * @return $this
     */
    public function setTotePoints($tote_points)
    {
        $this->container['tote_points'] = $tote_points;

        return $this;
    }

    /**
     * Gets litter_points
     *
     * @return int|null
     */
    public function getLitterPoints()
    {
        return $this->container['litter_points'];
    }

    /**
     * Sets litter_points
     *
     * @param int|null $litter_points litter_points
     *
     * @return $this
     */
    public function setLitterPoints($litter_points)
    {
        $this->container['litter_points'] = $litter_points;

        return $this;
    }

    /**
     * Gets foul_points
     *
     * @return int|null
     */
    public function getFoulPoints()
    {
        return $this->container['foul_points'];
    }

    /**
     * Sets foul_points
     *
     * @param int|null $foul_points foul_points
     *
     * @return $this
     */
    public function setFoulPoints($foul_points)
    {
        $this->container['foul_points'] = $foul_points;

        return $this;
    }

    /**
     * Gets adjust_points
     *
     * @return int|null
     */
    public function getAdjustPoints()
    {
        return $this->container['adjust_points'];
    }

    /**
     * Sets adjust_points
     *
     * @param int|null $adjust_points adjust_points
     *
     * @return $this
     */
    public function setAdjustPoints($adjust_points)
    {
        $this->container['adjust_points'] = $adjust_points;

        return $this;
    }

    /**
     * Gets total_points
     *
     * @return int|null
     */
    public function getTotalPoints()
    {
        return $this->container['total_points'];
    }

    /**
     * Sets total_points
     *
     * @param int|null $total_points total_points
     *
     * @return $this
     */
    public function setTotalPoints($total_points)
    {
        $this->container['total_points'] = $total_points;

        return $this;
    }

    /**
     * Gets foul_count
     *
     * @return int|null
     */
    public function getFoulCount()
    {
        return $this->container['foul_count'];
    }

    /**
     * Sets foul_count
     *
     * @param int|null $foul_count foul_count
     *
     * @return $this
     */
    public function setFoulCount($foul_count)
    {
        $this->container['foul_count'] = $foul_count;

        return $this;
    }

    /**
     * Gets tote_count_far
     *
     * @return int|null
     */
    public function getToteCountFar()
    {
        return $this->container['tote_count_far'];
    }

    /**
     * Sets tote_count_far
     *
     * @param int|null $tote_count_far tote_count_far
     *
     * @return $this
     */
    public function setToteCountFar($tote_count_far)
    {
        $this->container['tote_count_far'] = $tote_count_far;

        return $this;
    }

    /**
     * Gets tote_count_near
     *
     * @return int|null
     */
    public function getToteCountNear()
    {
        return $this->container['tote_count_near'];
    }

    /**
     * Sets tote_count_near
     *
     * @param int|null $tote_count_near tote_count_near
     *
     * @return $this
     */
    public function setToteCountNear($tote_count_near)
    {
        $this->container['tote_count_near'] = $tote_count_near;

        return $this;
    }

    /**
     * Gets tote_set
     *
     * @return bool|null
     */
    public function getToteSet()
    {
        return $this->container['tote_set'];
    }

    /**
     * Sets tote_set
     *
     * @param bool|null $tote_set tote_set
     *
     * @return $this
     */
    public function setToteSet($tote_set)
    {
        $this->container['tote_set'] = $tote_set;

        return $this;
    }

    /**
     * Gets tote_stack
     *
     * @return bool|null
     */
    public function getToteStack()
    {
        return $this->container['tote_stack'];
    }

    /**
     * Sets tote_stack
     *
     * @param bool|null $tote_stack tote_stack
     *
     * @return $this
     */
    public function setToteStack($tote_stack)
    {
        $this->container['tote_stack'] = $tote_stack;

        return $this;
    }

    /**
     * Gets container_count_level1
     *
     * @return int|null
     */
    public function getContainerCountLevel1()
    {
        return $this->container['container_count_level1'];
    }

    /**
     * Sets container_count_level1
     *
     * @param int|null $container_count_level1 container_count_level1
     *
     * @return $this
     */
    public function setContainerCountLevel1($container_count_level1)
    {
        $this->container['container_count_level1'] = $container_count_level1;

        return $this;
    }

    /**
     * Gets container_count_level2
     *
     * @return int|null
     */
    public function getContainerCountLevel2()
    {
        return $this->container['container_count_level2'];
    }

    /**
     * Sets container_count_level2
     *
     * @param int|null $container_count_level2 container_count_level2
     *
     * @return $this
     */
    public function setContainerCountLevel2($container_count_level2)
    {
        $this->container['container_count_level2'] = $container_count_level2;

        return $this;
    }

    /**
     * Gets container_count_level3
     *
     * @return int|null
     */
    public function getContainerCountLevel3()
    {
        return $this->container['container_count_level3'];
    }

    /**
     * Sets container_count_level3
     *
     * @param int|null $container_count_level3 container_count_level3
     *
     * @return $this
     */
    public function setContainerCountLevel3($container_count_level3)
    {
        $this->container['container_count_level3'] = $container_count_level3;

        return $this;
    }

    /**
     * Gets container_count_level4
     *
     * @return int|null
     */
    public function getContainerCountLevel4()
    {
        return $this->container['container_count_level4'];
    }

    /**
     * Sets container_count_level4
     *
     * @param int|null $container_count_level4 container_count_level4
     *
     * @return $this
     */
    public function setContainerCountLevel4($container_count_level4)
    {
        $this->container['container_count_level4'] = $container_count_level4;

        return $this;
    }

    /**
     * Gets container_count_level5
     *
     * @return int|null
     */
    public function getContainerCountLevel5()
    {
        return $this->container['container_count_level5'];
    }

    /**
     * Sets container_count_level5
     *
     * @param int|null $container_count_level5 container_count_level5
     *
     * @return $this
     */
    public function setContainerCountLevel5($container_count_level5)
    {
        $this->container['container_count_level5'] = $container_count_level5;

        return $this;
    }

    /**
     * Gets container_count_level6
     *
     * @return int|null
     */
    public function getContainerCountLevel6()
    {
        return $this->container['container_count_level6'];
    }

    /**
     * Sets container_count_level6
     *
     * @param int|null $container_count_level6 container_count_level6
     *
     * @return $this
     */
    public function setContainerCountLevel6($container_count_level6)
    {
        $this->container['container_count_level6'] = $container_count_level6;

        return $this;
    }

    /**
     * Gets container_set
     *
     * @return bool|null
     */
    public function getContainerSet()
    {
        return $this->container['container_set'];
    }

    /**
     * Sets container_set
     *
     * @param bool|null $container_set container_set
     *
     * @return $this
     */
    public function setContainerSet($container_set)
    {
        $this->container['container_set'] = $container_set;

        return $this;
    }

    /**
     * Gets litter_count_container
     *
     * @return int|null
     */
    public function getLitterCountContainer()
    {
        return $this->container['litter_count_container'];
    }

    /**
     * Sets litter_count_container
     *
     * @param int|null $litter_count_container litter_count_container
     *
     * @return $this
     */
    public function setLitterCountContainer($litter_count_container)
    {
        $this->container['litter_count_container'] = $litter_count_container;

        return $this;
    }

    /**
     * Gets litter_count_landfill
     *
     * @return int|null
     */
    public function getLitterCountLandfill()
    {
        return $this->container['litter_count_landfill'];
    }

    /**
     * Sets litter_count_landfill
     *
     * @param int|null $litter_count_landfill litter_count_landfill
     *
     * @return $this
     */
    public function setLitterCountLandfill($litter_count_landfill)
    {
        $this->container['litter_count_landfill'] = $litter_count_landfill;

        return $this;
    }

    /**
     * Gets litter_count_unprocessed
     *
     * @return int|null
     */
    public function getLitterCountUnprocessed()
    {
        return $this->container['litter_count_unprocessed'];
    }

    /**
     * Sets litter_count_unprocessed
     *
     * @param int|null $litter_count_unprocessed litter_count_unprocessed
     *
     * @return $this
     */
    public function setLitterCountUnprocessed($litter_count_unprocessed)
    {
        $this->container['litter_count_unprocessed'] = $litter_count_unprocessed;

        return $this;
    }

    /**
     * Gets robot_set
     *
     * @return bool|null
     */
    public function getRobotSet()
    {
        return $this->container['robot_set'];
    }

    /**
     * Sets robot_set
     *
     * @param bool|null $robot_set robot_set
     *
     * @return $this
     */
    public function setRobotSet($robot_set)
    {
        $this->container['robot_set'] = $robot_set;

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


