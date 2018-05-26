<?php
/**
 * GetCorporationsCorporationIdStarbasesStarbaseIdOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCorporationsCorporationIdStarbasesStarbaseIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStarbasesStarbaseIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_starbases_starbase_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'allow_alliance_members' => 'bool',
        'allow_corporation_members' => 'bool',
        'anchor' => 'string',
        'attack_if_at_war' => 'bool',
        'attack_if_other_security_status_dropping' => 'bool',
        'attack_security_status_threshold' => 'float',
        'attack_standing_threshold' => 'float',
        'fuel_bay_take' => 'string',
        'fuel_bay_view' => 'string',
        'fuels' => '\Swagger\Client\Model\GetCorporationsCorporationIdStarbasesStarbaseIdOkFuels[]',
        'offline' => 'string',
        'online' => 'string',
        'unanchor' => 'string',
        'use_alliance_standings' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'allow_alliance_members' => 'allow_alliance_members',
        'allow_corporation_members' => 'allow_corporation_members',
        'anchor' => 'anchor',
        'attack_if_at_war' => 'attack_if_at_war',
        'attack_if_other_security_status_dropping' => 'attack_if_other_security_status_dropping',
        'attack_security_status_threshold' => 'attack_security_status_threshold',
        'attack_standing_threshold' => 'attack_standing_threshold',
        'fuel_bay_take' => 'fuel_bay_take',
        'fuel_bay_view' => 'fuel_bay_view',
        'fuels' => 'fuels',
        'offline' => 'offline',
        'online' => 'online',
        'unanchor' => 'unanchor',
        'use_alliance_standings' => 'use_alliance_standings'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'allow_alliance_members' => 'setAllowAllianceMembers',
        'allow_corporation_members' => 'setAllowCorporationMembers',
        'anchor' => 'setAnchor',
        'attack_if_at_war' => 'setAttackIfAtWar',
        'attack_if_other_security_status_dropping' => 'setAttackIfOtherSecurityStatusDropping',
        'attack_security_status_threshold' => 'setAttackSecurityStatusThreshold',
        'attack_standing_threshold' => 'setAttackStandingThreshold',
        'fuel_bay_take' => 'setFuelBayTake',
        'fuel_bay_view' => 'setFuelBayView',
        'fuels' => 'setFuels',
        'offline' => 'setOffline',
        'online' => 'setOnline',
        'unanchor' => 'setUnanchor',
        'use_alliance_standings' => 'setUseAllianceStandings'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'allow_alliance_members' => 'getAllowAllianceMembers',
        'allow_corporation_members' => 'getAllowCorporationMembers',
        'anchor' => 'getAnchor',
        'attack_if_at_war' => 'getAttackIfAtWar',
        'attack_if_other_security_status_dropping' => 'getAttackIfOtherSecurityStatusDropping',
        'attack_security_status_threshold' => 'getAttackSecurityStatusThreshold',
        'attack_standing_threshold' => 'getAttackStandingThreshold',
        'fuel_bay_take' => 'getFuelBayTake',
        'fuel_bay_view' => 'getFuelBayView',
        'fuels' => 'getFuels',
        'offline' => 'getOffline',
        'online' => 'getOnline',
        'unanchor' => 'getUnanchor',
        'use_alliance_standings' => 'getUseAllianceStandings'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ANCHOR_ALLIANCE_MEMBER = 'alliance_member';
    const ANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const ANCHOR_CORPORATION_MEMBER = 'corporation_member';
    const ANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const FUEL_BAY_TAKE_ALLIANCE_MEMBER = 'alliance_member';
    const FUEL_BAY_TAKE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const FUEL_BAY_TAKE_CORPORATION_MEMBER = 'corporation_member';
    const FUEL_BAY_TAKE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const FUEL_BAY_VIEW_ALLIANCE_MEMBER = 'alliance_member';
    const FUEL_BAY_VIEW_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const FUEL_BAY_VIEW_CORPORATION_MEMBER = 'corporation_member';
    const FUEL_BAY_VIEW_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const OFFLINE_ALLIANCE_MEMBER = 'alliance_member';
    const OFFLINE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const OFFLINE_CORPORATION_MEMBER = 'corporation_member';
    const OFFLINE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const ONLINE_ALLIANCE_MEMBER = 'alliance_member';
    const ONLINE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const ONLINE_CORPORATION_MEMBER = 'corporation_member';
    const ONLINE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const UNANCHOR_ALLIANCE_MEMBER = 'alliance_member';
    const UNANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const UNANCHOR_CORPORATION_MEMBER = 'corporation_member';
    const UNANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAnchorAllowableValues()
    {
        return [
            self::ANCHOR_ALLIANCE_MEMBER,
            self::ANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::ANCHOR_CORPORATION_MEMBER,
            self::ANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFuelBayTakeAllowableValues()
    {
        return [
            self::FUEL_BAY_TAKE_ALLIANCE_MEMBER,
            self::FUEL_BAY_TAKE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::FUEL_BAY_TAKE_CORPORATION_MEMBER,
            self::FUEL_BAY_TAKE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFuelBayViewAllowableValues()
    {
        return [
            self::FUEL_BAY_VIEW_ALLIANCE_MEMBER,
            self::FUEL_BAY_VIEW_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::FUEL_BAY_VIEW_CORPORATION_MEMBER,
            self::FUEL_BAY_VIEW_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOfflineAllowableValues()
    {
        return [
            self::OFFLINE_ALLIANCE_MEMBER,
            self::OFFLINE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::OFFLINE_CORPORATION_MEMBER,
            self::OFFLINE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOnlineAllowableValues()
    {
        return [
            self::ONLINE_ALLIANCE_MEMBER,
            self::ONLINE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::ONLINE_CORPORATION_MEMBER,
            self::ONLINE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUnanchorAllowableValues()
    {
        return [
            self::UNANCHOR_ALLIANCE_MEMBER,
            self::UNANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::UNANCHOR_CORPORATION_MEMBER,
            self::UNANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allow_alliance_members'] = isset($data['allow_alliance_members']) ? $data['allow_alliance_members'] : null;
        $this->container['allow_corporation_members'] = isset($data['allow_corporation_members']) ? $data['allow_corporation_members'] : null;
        $this->container['anchor'] = isset($data['anchor']) ? $data['anchor'] : null;
        $this->container['attack_if_at_war'] = isset($data['attack_if_at_war']) ? $data['attack_if_at_war'] : null;
        $this->container['attack_if_other_security_status_dropping'] = isset($data['attack_if_other_security_status_dropping']) ? $data['attack_if_other_security_status_dropping'] : null;
        $this->container['attack_security_status_threshold'] = isset($data['attack_security_status_threshold']) ? $data['attack_security_status_threshold'] : null;
        $this->container['attack_standing_threshold'] = isset($data['attack_standing_threshold']) ? $data['attack_standing_threshold'] : null;
        $this->container['fuel_bay_take'] = isset($data['fuel_bay_take']) ? $data['fuel_bay_take'] : null;
        $this->container['fuel_bay_view'] = isset($data['fuel_bay_view']) ? $data['fuel_bay_view'] : null;
        $this->container['fuels'] = isset($data['fuels']) ? $data['fuels'] : null;
        $this->container['offline'] = isset($data['offline']) ? $data['offline'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['unanchor'] = isset($data['unanchor']) ? $data['unanchor'] : null;
        $this->container['use_alliance_standings'] = isset($data['use_alliance_standings']) ? $data['use_alliance_standings'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['allow_alliance_members'] === null) {
            $invalid_properties[] = "'allow_alliance_members' can't be null";
        }
        if ($this->container['allow_corporation_members'] === null) {
            $invalid_properties[] = "'allow_corporation_members' can't be null";
        }
        if ($this->container['anchor'] === null) {
            $invalid_properties[] = "'anchor' can't be null";
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['anchor'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'anchor', must be one of #{allowed_values}.";
        }

        if ($this->container['attack_if_at_war'] === null) {
            $invalid_properties[] = "'attack_if_at_war' can't be null";
        }
        if ($this->container['attack_if_other_security_status_dropping'] === null) {
            $invalid_properties[] = "'attack_if_other_security_status_dropping' can't be null";
        }
        if ($this->container['fuel_bay_take'] === null) {
            $invalid_properties[] = "'fuel_bay_take' can't be null";
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['fuel_bay_take'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'fuel_bay_take', must be one of #{allowed_values}.";
        }

        if ($this->container['fuel_bay_view'] === null) {
            $invalid_properties[] = "'fuel_bay_view' can't be null";
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['fuel_bay_view'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'fuel_bay_view', must be one of #{allowed_values}.";
        }

        if ($this->container['offline'] === null) {
            $invalid_properties[] = "'offline' can't be null";
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['offline'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'offline', must be one of #{allowed_values}.";
        }

        if ($this->container['online'] === null) {
            $invalid_properties[] = "'online' can't be null";
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['online'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'online', must be one of #{allowed_values}.";
        }

        if ($this->container['unanchor'] === null) {
            $invalid_properties[] = "'unanchor' can't be null";
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['unanchor'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'unanchor', must be one of #{allowed_values}.";
        }

        if ($this->container['use_alliance_standings'] === null) {
            $invalid_properties[] = "'use_alliance_standings' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['allow_alliance_members'] === null) {
            return false;
        }
        if ($this->container['allow_corporation_members'] === null) {
            return false;
        }
        if ($this->container['anchor'] === null) {
            return false;
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['anchor'], $allowed_values)) {
            return false;
        }
        if ($this->container['attack_if_at_war'] === null) {
            return false;
        }
        if ($this->container['attack_if_other_security_status_dropping'] === null) {
            return false;
        }
        if ($this->container['fuel_bay_take'] === null) {
            return false;
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['fuel_bay_take'], $allowed_values)) {
            return false;
        }
        if ($this->container['fuel_bay_view'] === null) {
            return false;
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['fuel_bay_view'], $allowed_values)) {
            return false;
        }
        if ($this->container['offline'] === null) {
            return false;
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['offline'], $allowed_values)) {
            return false;
        }
        if ($this->container['online'] === null) {
            return false;
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['online'], $allowed_values)) {
            return false;
        }
        if ($this->container['unanchor'] === null) {
            return false;
        }
        $allowed_values = array("alliance_member", "config_starbase_equipment_role", "corporation_member", "starbase_fuel_technician_role");
        if (!in_array($this->container['unanchor'], $allowed_values)) {
            return false;
        }
        if ($this->container['use_alliance_standings'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allow_alliance_members
     * @return bool
     */
    public function getAllowAllianceMembers()
    {
        return $this->container['allow_alliance_members'];
    }

    /**
     * Sets allow_alliance_members
     * @param bool $allow_alliance_members allow_alliance_members boolean
     * @return $this
     */
    public function setAllowAllianceMembers($allow_alliance_members)
    {
        $this->container['allow_alliance_members'] = $allow_alliance_members;

        return $this;
    }

    /**
     * Gets allow_corporation_members
     * @return bool
     */
    public function getAllowCorporationMembers()
    {
        return $this->container['allow_corporation_members'];
    }

    /**
     * Sets allow_corporation_members
     * @param bool $allow_corporation_members allow_corporation_members boolean
     * @return $this
     */
    public function setAllowCorporationMembers($allow_corporation_members)
    {
        $this->container['allow_corporation_members'] = $allow_corporation_members;

        return $this;
    }

    /**
     * Gets anchor
     * @return string
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     * @param string $anchor Who can anchor starbase (POS) and its structures
     * @return $this
     */
    public function setAnchor($anchor)
    {
        $allowed_values = array('alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role');
        if (!in_array($anchor, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'anchor', must be one of 'alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role'");
        }
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets attack_if_at_war
     * @return bool
     */
    public function getAttackIfAtWar()
    {
        return $this->container['attack_if_at_war'];
    }

    /**
     * Sets attack_if_at_war
     * @param bool $attack_if_at_war attack_if_at_war boolean
     * @return $this
     */
    public function setAttackIfAtWar($attack_if_at_war)
    {
        $this->container['attack_if_at_war'] = $attack_if_at_war;

        return $this;
    }

    /**
     * Gets attack_if_other_security_status_dropping
     * @return bool
     */
    public function getAttackIfOtherSecurityStatusDropping()
    {
        return $this->container['attack_if_other_security_status_dropping'];
    }

    /**
     * Sets attack_if_other_security_status_dropping
     * @param bool $attack_if_other_security_status_dropping attack_if_other_security_status_dropping boolean
     * @return $this
     */
    public function setAttackIfOtherSecurityStatusDropping($attack_if_other_security_status_dropping)
    {
        $this->container['attack_if_other_security_status_dropping'] = $attack_if_other_security_status_dropping;

        return $this;
    }

    /**
     * Gets attack_security_status_threshold
     * @return float
     */
    public function getAttackSecurityStatusThreshold()
    {
        return $this->container['attack_security_status_threshold'];
    }

    /**
     * Sets attack_security_status_threshold
     * @param float $attack_security_status_threshold Starbase (POS) will attack if target's security standing is lower than this value
     * @return $this
     */
    public function setAttackSecurityStatusThreshold($attack_security_status_threshold)
    {
        $this->container['attack_security_status_threshold'] = $attack_security_status_threshold;

        return $this;
    }

    /**
     * Gets attack_standing_threshold
     * @return float
     */
    public function getAttackStandingThreshold()
    {
        return $this->container['attack_standing_threshold'];
    }

    /**
     * Sets attack_standing_threshold
     * @param float $attack_standing_threshold Starbase (POS) will attack if target's standing is lower than this value
     * @return $this
     */
    public function setAttackStandingThreshold($attack_standing_threshold)
    {
        $this->container['attack_standing_threshold'] = $attack_standing_threshold;

        return $this;
    }

    /**
     * Gets fuel_bay_take
     * @return string
     */
    public function getFuelBayTake()
    {
        return $this->container['fuel_bay_take'];
    }

    /**
     * Sets fuel_bay_take
     * @param string $fuel_bay_take Who can take fuel blocks out of the starbase (POS)'s fuel bay
     * @return $this
     */
    public function setFuelBayTake($fuel_bay_take)
    {
        $allowed_values = array('alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role');
        if (!in_array($fuel_bay_take, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'fuel_bay_take', must be one of 'alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role'");
        }
        $this->container['fuel_bay_take'] = $fuel_bay_take;

        return $this;
    }

    /**
     * Gets fuel_bay_view
     * @return string
     */
    public function getFuelBayView()
    {
        return $this->container['fuel_bay_view'];
    }

    /**
     * Sets fuel_bay_view
     * @param string $fuel_bay_view Who can view the starbase (POS)'s fule bay. Characters either need to have required role or belong to the starbase (POS) owner's corporation or alliance, as described by the enum, all other access settings follows the same scheme
     * @return $this
     */
    public function setFuelBayView($fuel_bay_view)
    {
        $allowed_values = array('alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role');
        if (!in_array($fuel_bay_view, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'fuel_bay_view', must be one of 'alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role'");
        }
        $this->container['fuel_bay_view'] = $fuel_bay_view;

        return $this;
    }

    /**
     * Gets fuels
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdStarbasesStarbaseIdOkFuels[]
     */
    public function getFuels()
    {
        return $this->container['fuels'];
    }

    /**
     * Sets fuels
     * @param \Swagger\Client\Model\GetCorporationsCorporationIdStarbasesStarbaseIdOkFuels[] $fuels Fuel blocks and other things that will be consumed when operating a starbase (POS)
     * @return $this
     */
    public function setFuels($fuels)
    {
        $this->container['fuels'] = $fuels;

        return $this;
    }

    /**
     * Gets offline
     * @return string
     */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
     * Sets offline
     * @param string $offline Who can offline starbase (POS) and its structures
     * @return $this
     */
    public function setOffline($offline)
    {
        $allowed_values = array('alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role');
        if (!in_array($offline, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'offline', must be one of 'alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role'");
        }
        $this->container['offline'] = $offline;

        return $this;
    }

    /**
     * Gets online
     * @return string
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     * @param string $online Who can online starbase (POS) and its structures
     * @return $this
     */
    public function setOnline($online)
    {
        $allowed_values = array('alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role');
        if (!in_array($online, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'online', must be one of 'alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role'");
        }
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets unanchor
     * @return string
     */
    public function getUnanchor()
    {
        return $this->container['unanchor'];
    }

    /**
     * Sets unanchor
     * @param string $unanchor Who can unanchor starbase (POS) and its structures
     * @return $this
     */
    public function setUnanchor($unanchor)
    {
        $allowed_values = array('alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role');
        if (!in_array($unanchor, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'unanchor', must be one of 'alliance_member', 'config_starbase_equipment_role', 'corporation_member', 'starbase_fuel_technician_role'");
        }
        $this->container['unanchor'] = $unanchor;

        return $this;
    }

    /**
     * Gets use_alliance_standings
     * @return bool
     */
    public function getUseAllianceStandings()
    {
        return $this->container['use_alliance_standings'];
    }

    /**
     * Sets use_alliance_standings
     * @param bool $use_alliance_standings True if the starbase (POS) is using alliance standings, otherwise using corporation's
     * @return $this
     */
    public function setUseAllianceStandings($use_alliance_standings)
    {
        $this->container['use_alliance_standings'] = $use_alliance_standings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


