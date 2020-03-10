<?php
/**
 * MatchScoreBreakdown2018Alliance
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
 * MatchScoreBreakdown2018Alliance Class Doc Comment
 *
 * @category Class
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MatchScoreBreakdown2018Alliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Match_Score_Breakdown_2018_Alliance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adjust_points' => 'int',
        'auto_ownership_points' => 'int',
        'auto_points' => 'int',
        'auto_quest_ranking_point' => 'bool',
        'auto_robot1' => 'string',
        'auto_robot2' => 'string',
        'auto_robot3' => 'string',
        'auto_run_points' => 'int',
        'auto_scale_ownership_sec' => 'int',
        'auto_switch_at_zero' => 'bool',
        'auto_switch_ownership_sec' => 'int',
        'endgame_points' => 'int',
        'endgame_robot1' => 'string',
        'endgame_robot2' => 'string',
        'endgame_robot3' => 'string',
        'face_the_boss_ranking_point' => 'bool',
        'foul_count' => 'int',
        'foul_points' => 'int',
        'rp' => 'int',
        'tech_foul_count' => 'int',
        'teleop_ownership_points' => 'int',
        'teleop_points' => 'int',
        'teleop_scale_boost_sec' => 'int',
        'teleop_scale_force_sec' => 'int',
        'teleop_scale_ownership_sec' => 'int',
        'teleop_switch_boost_sec' => 'int',
        'teleop_switch_force_sec' => 'int',
        'teleop_switch_ownership_sec' => 'int',
        'total_points' => 'int',
        'vault_boost_played' => 'int',
        'vault_boost_total' => 'int',
        'vault_force_played' => 'int',
        'vault_force_total' => 'int',
        'vault_levitate_played' => 'int',
        'vault_levitate_total' => 'int',
        'vault_points' => 'int',
        'tba_game_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'adjust_points' => null,
        'auto_ownership_points' => null,
        'auto_points' => null,
        'auto_quest_ranking_point' => null,
        'auto_robot1' => null,
        'auto_robot2' => null,
        'auto_robot3' => null,
        'auto_run_points' => null,
        'auto_scale_ownership_sec' => null,
        'auto_switch_at_zero' => null,
        'auto_switch_ownership_sec' => null,
        'endgame_points' => null,
        'endgame_robot1' => null,
        'endgame_robot2' => null,
        'endgame_robot3' => null,
        'face_the_boss_ranking_point' => null,
        'foul_count' => null,
        'foul_points' => null,
        'rp' => null,
        'tech_foul_count' => null,
        'teleop_ownership_points' => null,
        'teleop_points' => null,
        'teleop_scale_boost_sec' => null,
        'teleop_scale_force_sec' => null,
        'teleop_scale_ownership_sec' => null,
        'teleop_switch_boost_sec' => null,
        'teleop_switch_force_sec' => null,
        'teleop_switch_ownership_sec' => null,
        'total_points' => null,
        'vault_boost_played' => null,
        'vault_boost_total' => null,
        'vault_force_played' => null,
        'vault_force_total' => null,
        'vault_levitate_played' => null,
        'vault_levitate_total' => null,
        'vault_points' => null,
        'tba_game_data' => null
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
        'adjust_points' => 'adjustPoints',
        'auto_ownership_points' => 'autoOwnershipPoints',
        'auto_points' => 'autoPoints',
        'auto_quest_ranking_point' => 'autoQuestRankingPoint',
        'auto_robot1' => 'autoRobot1',
        'auto_robot2' => 'autoRobot2',
        'auto_robot3' => 'autoRobot3',
        'auto_run_points' => 'autoRunPoints',
        'auto_scale_ownership_sec' => 'autoScaleOwnershipSec',
        'auto_switch_at_zero' => 'autoSwitchAtZero',
        'auto_switch_ownership_sec' => 'autoSwitchOwnershipSec',
        'endgame_points' => 'endgamePoints',
        'endgame_robot1' => 'endgameRobot1',
        'endgame_robot2' => 'endgameRobot2',
        'endgame_robot3' => 'endgameRobot3',
        'face_the_boss_ranking_point' => 'faceTheBossRankingPoint',
        'foul_count' => 'foulCount',
        'foul_points' => 'foulPoints',
        'rp' => 'rp',
        'tech_foul_count' => 'techFoulCount',
        'teleop_ownership_points' => 'teleopOwnershipPoints',
        'teleop_points' => 'teleopPoints',
        'teleop_scale_boost_sec' => 'teleopScaleBoostSec',
        'teleop_scale_force_sec' => 'teleopScaleForceSec',
        'teleop_scale_ownership_sec' => 'teleopScaleOwnershipSec',
        'teleop_switch_boost_sec' => 'teleopSwitchBoostSec',
        'teleop_switch_force_sec' => 'teleopSwitchForceSec',
        'teleop_switch_ownership_sec' => 'teleopSwitchOwnershipSec',
        'total_points' => 'totalPoints',
        'vault_boost_played' => 'vaultBoostPlayed',
        'vault_boost_total' => 'vaultBoostTotal',
        'vault_force_played' => 'vaultForcePlayed',
        'vault_force_total' => 'vaultForceTotal',
        'vault_levitate_played' => 'vaultLevitatePlayed',
        'vault_levitate_total' => 'vaultLevitateTotal',
        'vault_points' => 'vaultPoints',
        'tba_game_data' => 'tba_gameData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjust_points' => 'setAdjustPoints',
        'auto_ownership_points' => 'setAutoOwnershipPoints',
        'auto_points' => 'setAutoPoints',
        'auto_quest_ranking_point' => 'setAutoQuestRankingPoint',
        'auto_robot1' => 'setAutoRobot1',
        'auto_robot2' => 'setAutoRobot2',
        'auto_robot3' => 'setAutoRobot3',
        'auto_run_points' => 'setAutoRunPoints',
        'auto_scale_ownership_sec' => 'setAutoScaleOwnershipSec',
        'auto_switch_at_zero' => 'setAutoSwitchAtZero',
        'auto_switch_ownership_sec' => 'setAutoSwitchOwnershipSec',
        'endgame_points' => 'setEndgamePoints',
        'endgame_robot1' => 'setEndgameRobot1',
        'endgame_robot2' => 'setEndgameRobot2',
        'endgame_robot3' => 'setEndgameRobot3',
        'face_the_boss_ranking_point' => 'setFaceTheBossRankingPoint',
        'foul_count' => 'setFoulCount',
        'foul_points' => 'setFoulPoints',
        'rp' => 'setRp',
        'tech_foul_count' => 'setTechFoulCount',
        'teleop_ownership_points' => 'setTeleopOwnershipPoints',
        'teleop_points' => 'setTeleopPoints',
        'teleop_scale_boost_sec' => 'setTeleopScaleBoostSec',
        'teleop_scale_force_sec' => 'setTeleopScaleForceSec',
        'teleop_scale_ownership_sec' => 'setTeleopScaleOwnershipSec',
        'teleop_switch_boost_sec' => 'setTeleopSwitchBoostSec',
        'teleop_switch_force_sec' => 'setTeleopSwitchForceSec',
        'teleop_switch_ownership_sec' => 'setTeleopSwitchOwnershipSec',
        'total_points' => 'setTotalPoints',
        'vault_boost_played' => 'setVaultBoostPlayed',
        'vault_boost_total' => 'setVaultBoostTotal',
        'vault_force_played' => 'setVaultForcePlayed',
        'vault_force_total' => 'setVaultForceTotal',
        'vault_levitate_played' => 'setVaultLevitatePlayed',
        'vault_levitate_total' => 'setVaultLevitateTotal',
        'vault_points' => 'setVaultPoints',
        'tba_game_data' => 'setTbaGameData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjust_points' => 'getAdjustPoints',
        'auto_ownership_points' => 'getAutoOwnershipPoints',
        'auto_points' => 'getAutoPoints',
        'auto_quest_ranking_point' => 'getAutoQuestRankingPoint',
        'auto_robot1' => 'getAutoRobot1',
        'auto_robot2' => 'getAutoRobot2',
        'auto_robot3' => 'getAutoRobot3',
        'auto_run_points' => 'getAutoRunPoints',
        'auto_scale_ownership_sec' => 'getAutoScaleOwnershipSec',
        'auto_switch_at_zero' => 'getAutoSwitchAtZero',
        'auto_switch_ownership_sec' => 'getAutoSwitchOwnershipSec',
        'endgame_points' => 'getEndgamePoints',
        'endgame_robot1' => 'getEndgameRobot1',
        'endgame_robot2' => 'getEndgameRobot2',
        'endgame_robot3' => 'getEndgameRobot3',
        'face_the_boss_ranking_point' => 'getFaceTheBossRankingPoint',
        'foul_count' => 'getFoulCount',
        'foul_points' => 'getFoulPoints',
        'rp' => 'getRp',
        'tech_foul_count' => 'getTechFoulCount',
        'teleop_ownership_points' => 'getTeleopOwnershipPoints',
        'teleop_points' => 'getTeleopPoints',
        'teleop_scale_boost_sec' => 'getTeleopScaleBoostSec',
        'teleop_scale_force_sec' => 'getTeleopScaleForceSec',
        'teleop_scale_ownership_sec' => 'getTeleopScaleOwnershipSec',
        'teleop_switch_boost_sec' => 'getTeleopSwitchBoostSec',
        'teleop_switch_force_sec' => 'getTeleopSwitchForceSec',
        'teleop_switch_ownership_sec' => 'getTeleopSwitchOwnershipSec',
        'total_points' => 'getTotalPoints',
        'vault_boost_played' => 'getVaultBoostPlayed',
        'vault_boost_total' => 'getVaultBoostTotal',
        'vault_force_played' => 'getVaultForcePlayed',
        'vault_force_total' => 'getVaultForceTotal',
        'vault_levitate_played' => 'getVaultLevitatePlayed',
        'vault_levitate_total' => 'getVaultLevitateTotal',
        'vault_points' => 'getVaultPoints',
        'tba_game_data' => 'getTbaGameData'
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
        $this->container['adjust_points'] = isset($data['adjust_points']) ? $data['adjust_points'] : null;
        $this->container['auto_ownership_points'] = isset($data['auto_ownership_points']) ? $data['auto_ownership_points'] : null;
        $this->container['auto_points'] = isset($data['auto_points']) ? $data['auto_points'] : null;
        $this->container['auto_quest_ranking_point'] = isset($data['auto_quest_ranking_point']) ? $data['auto_quest_ranking_point'] : null;
        $this->container['auto_robot1'] = isset($data['auto_robot1']) ? $data['auto_robot1'] : null;
        $this->container['auto_robot2'] = isset($data['auto_robot2']) ? $data['auto_robot2'] : null;
        $this->container['auto_robot3'] = isset($data['auto_robot3']) ? $data['auto_robot3'] : null;
        $this->container['auto_run_points'] = isset($data['auto_run_points']) ? $data['auto_run_points'] : null;
        $this->container['auto_scale_ownership_sec'] = isset($data['auto_scale_ownership_sec']) ? $data['auto_scale_ownership_sec'] : null;
        $this->container['auto_switch_at_zero'] = isset($data['auto_switch_at_zero']) ? $data['auto_switch_at_zero'] : null;
        $this->container['auto_switch_ownership_sec'] = isset($data['auto_switch_ownership_sec']) ? $data['auto_switch_ownership_sec'] : null;
        $this->container['endgame_points'] = isset($data['endgame_points']) ? $data['endgame_points'] : null;
        $this->container['endgame_robot1'] = isset($data['endgame_robot1']) ? $data['endgame_robot1'] : null;
        $this->container['endgame_robot2'] = isset($data['endgame_robot2']) ? $data['endgame_robot2'] : null;
        $this->container['endgame_robot3'] = isset($data['endgame_robot3']) ? $data['endgame_robot3'] : null;
        $this->container['face_the_boss_ranking_point'] = isset($data['face_the_boss_ranking_point']) ? $data['face_the_boss_ranking_point'] : null;
        $this->container['foul_count'] = isset($data['foul_count']) ? $data['foul_count'] : null;
        $this->container['foul_points'] = isset($data['foul_points']) ? $data['foul_points'] : null;
        $this->container['rp'] = isset($data['rp']) ? $data['rp'] : null;
        $this->container['tech_foul_count'] = isset($data['tech_foul_count']) ? $data['tech_foul_count'] : null;
        $this->container['teleop_ownership_points'] = isset($data['teleop_ownership_points']) ? $data['teleop_ownership_points'] : null;
        $this->container['teleop_points'] = isset($data['teleop_points']) ? $data['teleop_points'] : null;
        $this->container['teleop_scale_boost_sec'] = isset($data['teleop_scale_boost_sec']) ? $data['teleop_scale_boost_sec'] : null;
        $this->container['teleop_scale_force_sec'] = isset($data['teleop_scale_force_sec']) ? $data['teleop_scale_force_sec'] : null;
        $this->container['teleop_scale_ownership_sec'] = isset($data['teleop_scale_ownership_sec']) ? $data['teleop_scale_ownership_sec'] : null;
        $this->container['teleop_switch_boost_sec'] = isset($data['teleop_switch_boost_sec']) ? $data['teleop_switch_boost_sec'] : null;
        $this->container['teleop_switch_force_sec'] = isset($data['teleop_switch_force_sec']) ? $data['teleop_switch_force_sec'] : null;
        $this->container['teleop_switch_ownership_sec'] = isset($data['teleop_switch_ownership_sec']) ? $data['teleop_switch_ownership_sec'] : null;
        $this->container['total_points'] = isset($data['total_points']) ? $data['total_points'] : null;
        $this->container['vault_boost_played'] = isset($data['vault_boost_played']) ? $data['vault_boost_played'] : null;
        $this->container['vault_boost_total'] = isset($data['vault_boost_total']) ? $data['vault_boost_total'] : null;
        $this->container['vault_force_played'] = isset($data['vault_force_played']) ? $data['vault_force_played'] : null;
        $this->container['vault_force_total'] = isset($data['vault_force_total']) ? $data['vault_force_total'] : null;
        $this->container['vault_levitate_played'] = isset($data['vault_levitate_played']) ? $data['vault_levitate_played'] : null;
        $this->container['vault_levitate_total'] = isset($data['vault_levitate_total']) ? $data['vault_levitate_total'] : null;
        $this->container['vault_points'] = isset($data['vault_points']) ? $data['vault_points'] : null;
        $this->container['tba_game_data'] = isset($data['tba_game_data']) ? $data['tba_game_data'] : null;
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
     * Gets auto_ownership_points
     *
     * @return int|null
     */
    public function getAutoOwnershipPoints()
    {
        return $this->container['auto_ownership_points'];
    }

    /**
     * Sets auto_ownership_points
     *
     * @param int|null $auto_ownership_points auto_ownership_points
     *
     * @return $this
     */
    public function setAutoOwnershipPoints($auto_ownership_points)
    {
        $this->container['auto_ownership_points'] = $auto_ownership_points;

        return $this;
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
     * Gets auto_quest_ranking_point
     *
     * @return bool|null
     */
    public function getAutoQuestRankingPoint()
    {
        return $this->container['auto_quest_ranking_point'];
    }

    /**
     * Sets auto_quest_ranking_point
     *
     * @param bool|null $auto_quest_ranking_point auto_quest_ranking_point
     *
     * @return $this
     */
    public function setAutoQuestRankingPoint($auto_quest_ranking_point)
    {
        $this->container['auto_quest_ranking_point'] = $auto_quest_ranking_point;

        return $this;
    }

    /**
     * Gets auto_robot1
     *
     * @return string|null
     */
    public function getAutoRobot1()
    {
        return $this->container['auto_robot1'];
    }

    /**
     * Sets auto_robot1
     *
     * @param string|null $auto_robot1 auto_robot1
     *
     * @return $this
     */
    public function setAutoRobot1($auto_robot1)
    {
        $this->container['auto_robot1'] = $auto_robot1;

        return $this;
    }

    /**
     * Gets auto_robot2
     *
     * @return string|null
     */
    public function getAutoRobot2()
    {
        return $this->container['auto_robot2'];
    }

    /**
     * Sets auto_robot2
     *
     * @param string|null $auto_robot2 auto_robot2
     *
     * @return $this
     */
    public function setAutoRobot2($auto_robot2)
    {
        $this->container['auto_robot2'] = $auto_robot2;

        return $this;
    }

    /**
     * Gets auto_robot3
     *
     * @return string|null
     */
    public function getAutoRobot3()
    {
        return $this->container['auto_robot3'];
    }

    /**
     * Sets auto_robot3
     *
     * @param string|null $auto_robot3 auto_robot3
     *
     * @return $this
     */
    public function setAutoRobot3($auto_robot3)
    {
        $this->container['auto_robot3'] = $auto_robot3;

        return $this;
    }

    /**
     * Gets auto_run_points
     *
     * @return int|null
     */
    public function getAutoRunPoints()
    {
        return $this->container['auto_run_points'];
    }

    /**
     * Sets auto_run_points
     *
     * @param int|null $auto_run_points auto_run_points
     *
     * @return $this
     */
    public function setAutoRunPoints($auto_run_points)
    {
        $this->container['auto_run_points'] = $auto_run_points;

        return $this;
    }

    /**
     * Gets auto_scale_ownership_sec
     *
     * @return int|null
     */
    public function getAutoScaleOwnershipSec()
    {
        return $this->container['auto_scale_ownership_sec'];
    }

    /**
     * Sets auto_scale_ownership_sec
     *
     * @param int|null $auto_scale_ownership_sec auto_scale_ownership_sec
     *
     * @return $this
     */
    public function setAutoScaleOwnershipSec($auto_scale_ownership_sec)
    {
        $this->container['auto_scale_ownership_sec'] = $auto_scale_ownership_sec;

        return $this;
    }

    /**
     * Gets auto_switch_at_zero
     *
     * @return bool|null
     */
    public function getAutoSwitchAtZero()
    {
        return $this->container['auto_switch_at_zero'];
    }

    /**
     * Sets auto_switch_at_zero
     *
     * @param bool|null $auto_switch_at_zero auto_switch_at_zero
     *
     * @return $this
     */
    public function setAutoSwitchAtZero($auto_switch_at_zero)
    {
        $this->container['auto_switch_at_zero'] = $auto_switch_at_zero;

        return $this;
    }

    /**
     * Gets auto_switch_ownership_sec
     *
     * @return int|null
     */
    public function getAutoSwitchOwnershipSec()
    {
        return $this->container['auto_switch_ownership_sec'];
    }

    /**
     * Sets auto_switch_ownership_sec
     *
     * @param int|null $auto_switch_ownership_sec auto_switch_ownership_sec
     *
     * @return $this
     */
    public function setAutoSwitchOwnershipSec($auto_switch_ownership_sec)
    {
        $this->container['auto_switch_ownership_sec'] = $auto_switch_ownership_sec;

        return $this;
    }

    /**
     * Gets endgame_points
     *
     * @return int|null
     */
    public function getEndgamePoints()
    {
        return $this->container['endgame_points'];
    }

    /**
     * Sets endgame_points
     *
     * @param int|null $endgame_points endgame_points
     *
     * @return $this
     */
    public function setEndgamePoints($endgame_points)
    {
        $this->container['endgame_points'] = $endgame_points;

        return $this;
    }

    /**
     * Gets endgame_robot1
     *
     * @return string|null
     */
    public function getEndgameRobot1()
    {
        return $this->container['endgame_robot1'];
    }

    /**
     * Sets endgame_robot1
     *
     * @param string|null $endgame_robot1 endgame_robot1
     *
     * @return $this
     */
    public function setEndgameRobot1($endgame_robot1)
    {
        $this->container['endgame_robot1'] = $endgame_robot1;

        return $this;
    }

    /**
     * Gets endgame_robot2
     *
     * @return string|null
     */
    public function getEndgameRobot2()
    {
        return $this->container['endgame_robot2'];
    }

    /**
     * Sets endgame_robot2
     *
     * @param string|null $endgame_robot2 endgame_robot2
     *
     * @return $this
     */
    public function setEndgameRobot2($endgame_robot2)
    {
        $this->container['endgame_robot2'] = $endgame_robot2;

        return $this;
    }

    /**
     * Gets endgame_robot3
     *
     * @return string|null
     */
    public function getEndgameRobot3()
    {
        return $this->container['endgame_robot3'];
    }

    /**
     * Sets endgame_robot3
     *
     * @param string|null $endgame_robot3 endgame_robot3
     *
     * @return $this
     */
    public function setEndgameRobot3($endgame_robot3)
    {
        $this->container['endgame_robot3'] = $endgame_robot3;

        return $this;
    }

    /**
     * Gets face_the_boss_ranking_point
     *
     * @return bool|null
     */
    public function getFaceTheBossRankingPoint()
    {
        return $this->container['face_the_boss_ranking_point'];
    }

    /**
     * Sets face_the_boss_ranking_point
     *
     * @param bool|null $face_the_boss_ranking_point face_the_boss_ranking_point
     *
     * @return $this
     */
    public function setFaceTheBossRankingPoint($face_the_boss_ranking_point)
    {
        $this->container['face_the_boss_ranking_point'] = $face_the_boss_ranking_point;

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
     * Gets rp
     *
     * @return int|null
     */
    public function getRp()
    {
        return $this->container['rp'];
    }

    /**
     * Sets rp
     *
     * @param int|null $rp rp
     *
     * @return $this
     */
    public function setRp($rp)
    {
        $this->container['rp'] = $rp;

        return $this;
    }

    /**
     * Gets tech_foul_count
     *
     * @return int|null
     */
    public function getTechFoulCount()
    {
        return $this->container['tech_foul_count'];
    }

    /**
     * Sets tech_foul_count
     *
     * @param int|null $tech_foul_count tech_foul_count
     *
     * @return $this
     */
    public function setTechFoulCount($tech_foul_count)
    {
        $this->container['tech_foul_count'] = $tech_foul_count;

        return $this;
    }

    /**
     * Gets teleop_ownership_points
     *
     * @return int|null
     */
    public function getTeleopOwnershipPoints()
    {
        return $this->container['teleop_ownership_points'];
    }

    /**
     * Sets teleop_ownership_points
     *
     * @param int|null $teleop_ownership_points teleop_ownership_points
     *
     * @return $this
     */
    public function setTeleopOwnershipPoints($teleop_ownership_points)
    {
        $this->container['teleop_ownership_points'] = $teleop_ownership_points;

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
     * Gets teleop_scale_boost_sec
     *
     * @return int|null
     */
    public function getTeleopScaleBoostSec()
    {
        return $this->container['teleop_scale_boost_sec'];
    }

    /**
     * Sets teleop_scale_boost_sec
     *
     * @param int|null $teleop_scale_boost_sec teleop_scale_boost_sec
     *
     * @return $this
     */
    public function setTeleopScaleBoostSec($teleop_scale_boost_sec)
    {
        $this->container['teleop_scale_boost_sec'] = $teleop_scale_boost_sec;

        return $this;
    }

    /**
     * Gets teleop_scale_force_sec
     *
     * @return int|null
     */
    public function getTeleopScaleForceSec()
    {
        return $this->container['teleop_scale_force_sec'];
    }

    /**
     * Sets teleop_scale_force_sec
     *
     * @param int|null $teleop_scale_force_sec teleop_scale_force_sec
     *
     * @return $this
     */
    public function setTeleopScaleForceSec($teleop_scale_force_sec)
    {
        $this->container['teleop_scale_force_sec'] = $teleop_scale_force_sec;

        return $this;
    }

    /**
     * Gets teleop_scale_ownership_sec
     *
     * @return int|null
     */
    public function getTeleopScaleOwnershipSec()
    {
        return $this->container['teleop_scale_ownership_sec'];
    }

    /**
     * Sets teleop_scale_ownership_sec
     *
     * @param int|null $teleop_scale_ownership_sec teleop_scale_ownership_sec
     *
     * @return $this
     */
    public function setTeleopScaleOwnershipSec($teleop_scale_ownership_sec)
    {
        $this->container['teleop_scale_ownership_sec'] = $teleop_scale_ownership_sec;

        return $this;
    }

    /**
     * Gets teleop_switch_boost_sec
     *
     * @return int|null
     */
    public function getTeleopSwitchBoostSec()
    {
        return $this->container['teleop_switch_boost_sec'];
    }

    /**
     * Sets teleop_switch_boost_sec
     *
     * @param int|null $teleop_switch_boost_sec teleop_switch_boost_sec
     *
     * @return $this
     */
    public function setTeleopSwitchBoostSec($teleop_switch_boost_sec)
    {
        $this->container['teleop_switch_boost_sec'] = $teleop_switch_boost_sec;

        return $this;
    }

    /**
     * Gets teleop_switch_force_sec
     *
     * @return int|null
     */
    public function getTeleopSwitchForceSec()
    {
        return $this->container['teleop_switch_force_sec'];
    }

    /**
     * Sets teleop_switch_force_sec
     *
     * @param int|null $teleop_switch_force_sec teleop_switch_force_sec
     *
     * @return $this
     */
    public function setTeleopSwitchForceSec($teleop_switch_force_sec)
    {
        $this->container['teleop_switch_force_sec'] = $teleop_switch_force_sec;

        return $this;
    }

    /**
     * Gets teleop_switch_ownership_sec
     *
     * @return int|null
     */
    public function getTeleopSwitchOwnershipSec()
    {
        return $this->container['teleop_switch_ownership_sec'];
    }

    /**
     * Sets teleop_switch_ownership_sec
     *
     * @param int|null $teleop_switch_ownership_sec teleop_switch_ownership_sec
     *
     * @return $this
     */
    public function setTeleopSwitchOwnershipSec($teleop_switch_ownership_sec)
    {
        $this->container['teleop_switch_ownership_sec'] = $teleop_switch_ownership_sec;

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
     * Gets vault_boost_played
     *
     * @return int|null
     */
    public function getVaultBoostPlayed()
    {
        return $this->container['vault_boost_played'];
    }

    /**
     * Sets vault_boost_played
     *
     * @param int|null $vault_boost_played vault_boost_played
     *
     * @return $this
     */
    public function setVaultBoostPlayed($vault_boost_played)
    {
        $this->container['vault_boost_played'] = $vault_boost_played;

        return $this;
    }

    /**
     * Gets vault_boost_total
     *
     * @return int|null
     */
    public function getVaultBoostTotal()
    {
        return $this->container['vault_boost_total'];
    }

    /**
     * Sets vault_boost_total
     *
     * @param int|null $vault_boost_total vault_boost_total
     *
     * @return $this
     */
    public function setVaultBoostTotal($vault_boost_total)
    {
        $this->container['vault_boost_total'] = $vault_boost_total;

        return $this;
    }

    /**
     * Gets vault_force_played
     *
     * @return int|null
     */
    public function getVaultForcePlayed()
    {
        return $this->container['vault_force_played'];
    }

    /**
     * Sets vault_force_played
     *
     * @param int|null $vault_force_played vault_force_played
     *
     * @return $this
     */
    public function setVaultForcePlayed($vault_force_played)
    {
        $this->container['vault_force_played'] = $vault_force_played;

        return $this;
    }

    /**
     * Gets vault_force_total
     *
     * @return int|null
     */
    public function getVaultForceTotal()
    {
        return $this->container['vault_force_total'];
    }

    /**
     * Sets vault_force_total
     *
     * @param int|null $vault_force_total vault_force_total
     *
     * @return $this
     */
    public function setVaultForceTotal($vault_force_total)
    {
        $this->container['vault_force_total'] = $vault_force_total;

        return $this;
    }

    /**
     * Gets vault_levitate_played
     *
     * @return int|null
     */
    public function getVaultLevitatePlayed()
    {
        return $this->container['vault_levitate_played'];
    }

    /**
     * Sets vault_levitate_played
     *
     * @param int|null $vault_levitate_played vault_levitate_played
     *
     * @return $this
     */
    public function setVaultLevitatePlayed($vault_levitate_played)
    {
        $this->container['vault_levitate_played'] = $vault_levitate_played;

        return $this;
    }

    /**
     * Gets vault_levitate_total
     *
     * @return int|null
     */
    public function getVaultLevitateTotal()
    {
        return $this->container['vault_levitate_total'];
    }

    /**
     * Sets vault_levitate_total
     *
     * @param int|null $vault_levitate_total vault_levitate_total
     *
     * @return $this
     */
    public function setVaultLevitateTotal($vault_levitate_total)
    {
        $this->container['vault_levitate_total'] = $vault_levitate_total;

        return $this;
    }

    /**
     * Gets vault_points
     *
     * @return int|null
     */
    public function getVaultPoints()
    {
        return $this->container['vault_points'];
    }

    /**
     * Sets vault_points
     *
     * @param int|null $vault_points vault_points
     *
     * @return $this
     */
    public function setVaultPoints($vault_points)
    {
        $this->container['vault_points'] = $vault_points;

        return $this;
    }

    /**
     * Gets tba_game_data
     *
     * @return string|null
     */
    public function getTbaGameData()
    {
        return $this->container['tba_game_data'];
    }

    /**
     * Sets tba_game_data
     *
     * @param string|null $tba_game_data Unofficial TBA-computed value of the FMS provided GameData given to the alliance teams at the start of the match. 3 Character String containing `L` and `R` only. The first character represents the near switch, the 2nd the scale, and the 3rd the far, opposing, switch from the alliance's perspective. An `L` in a position indicates the platform on the left will be lit for the alliance while an `R` will indicate the right platform will be lit for the alliance. See also [WPI Screen Steps](https://wpilib.screenstepslive.com/s/currentCS/m/getting_started/l/826278-2018-game-data-details).
     *
     * @return $this
     */
    public function setTbaGameData($tba_game_data)
    {
        $this->container['tba_game_data'] = $tba_game_data;

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


