<?php
/**
 * Event
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
 * Event Class Doc Comment
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'key' => 'string',
        'name' => 'string',
        'event_code' => 'string',
        'event_type' => 'int',
        'district' => '\TBAAPI\v3client\TBAAPI\v3client\model\DistrictList',
        'city' => 'string',
        'state_prov' => 'string',
        'country' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'year' => 'int',
        'short_name' => 'string',
        'event_type_string' => 'string',
        'week' => 'int',
        'address' => 'string',
        'postal_code' => 'string',
        'gmaps_place_id' => 'string',
        'gmaps_url' => 'string',
        'lat' => 'double',
        'lng' => 'double',
        'location_name' => 'string',
        'timezone' => 'string',
        'website' => 'string',
        'first_event_id' => 'string',
        'first_event_code' => 'string',
        'webcasts' => '\TBAAPI\v3client\TBAAPI\v3client\model\Webcast[]',
        'division_keys' => 'string[]',
        'parent_event_key' => 'string',
        'playoff_type' => 'int',
        'playoff_type_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'key' => null,
        'name' => null,
        'event_code' => null,
        'event_type' => null,
        'district' => null,
        'city' => null,
        'state_prov' => null,
        'country' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'year' => null,
        'short_name' => null,
        'event_type_string' => null,
        'week' => null,
        'address' => null,
        'postal_code' => null,
        'gmaps_place_id' => null,
        'gmaps_url' => 'url',
        'lat' => 'double',
        'lng' => 'double',
        'location_name' => null,
        'timezone' => null,
        'website' => null,
        'first_event_id' => null,
        'first_event_code' => null,
        'webcasts' => null,
        'division_keys' => null,
        'parent_event_key' => null,
        'playoff_type' => null,
        'playoff_type_string' => null
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
        'name' => 'name',
        'event_code' => 'event_code',
        'event_type' => 'event_type',
        'district' => 'district',
        'city' => 'city',
        'state_prov' => 'state_prov',
        'country' => 'country',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'year' => 'year',
        'short_name' => 'short_name',
        'event_type_string' => 'event_type_string',
        'week' => 'week',
        'address' => 'address',
        'postal_code' => 'postal_code',
        'gmaps_place_id' => 'gmaps_place_id',
        'gmaps_url' => 'gmaps_url',
        'lat' => 'lat',
        'lng' => 'lng',
        'location_name' => 'location_name',
        'timezone' => 'timezone',
        'website' => 'website',
        'first_event_id' => 'first_event_id',
        'first_event_code' => 'first_event_code',
        'webcasts' => 'webcasts',
        'division_keys' => 'division_keys',
        'parent_event_key' => 'parent_event_key',
        'playoff_type' => 'playoff_type',
        'playoff_type_string' => 'playoff_type_string'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'name' => 'setName',
        'event_code' => 'setEventCode',
        'event_type' => 'setEventType',
        'district' => 'setDistrict',
        'city' => 'setCity',
        'state_prov' => 'setStateProv',
        'country' => 'setCountry',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'year' => 'setYear',
        'short_name' => 'setShortName',
        'event_type_string' => 'setEventTypeString',
        'week' => 'setWeek',
        'address' => 'setAddress',
        'postal_code' => 'setPostalCode',
        'gmaps_place_id' => 'setGmapsPlaceId',
        'gmaps_url' => 'setGmapsUrl',
        'lat' => 'setLat',
        'lng' => 'setLng',
        'location_name' => 'setLocationName',
        'timezone' => 'setTimezone',
        'website' => 'setWebsite',
        'first_event_id' => 'setFirstEventId',
        'first_event_code' => 'setFirstEventCode',
        'webcasts' => 'setWebcasts',
        'division_keys' => 'setDivisionKeys',
        'parent_event_key' => 'setParentEventKey',
        'playoff_type' => 'setPlayoffType',
        'playoff_type_string' => 'setPlayoffTypeString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'name' => 'getName',
        'event_code' => 'getEventCode',
        'event_type' => 'getEventType',
        'district' => 'getDistrict',
        'city' => 'getCity',
        'state_prov' => 'getStateProv',
        'country' => 'getCountry',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'year' => 'getYear',
        'short_name' => 'getShortName',
        'event_type_string' => 'getEventTypeString',
        'week' => 'getWeek',
        'address' => 'getAddress',
        'postal_code' => 'getPostalCode',
        'gmaps_place_id' => 'getGmapsPlaceId',
        'gmaps_url' => 'getGmapsUrl',
        'lat' => 'getLat',
        'lng' => 'getLng',
        'location_name' => 'getLocationName',
        'timezone' => 'getTimezone',
        'website' => 'getWebsite',
        'first_event_id' => 'getFirstEventId',
        'first_event_code' => 'getFirstEventCode',
        'webcasts' => 'getWebcasts',
        'division_keys' => 'getDivisionKeys',
        'parent_event_key' => 'getParentEventKey',
        'playoff_type' => 'getPlayoffType',
        'playoff_type_string' => 'getPlayoffTypeString'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['event_code'] = isset($data['event_code']) ? $data['event_code'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state_prov'] = isset($data['state_prov']) ? $data['state_prov'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['event_type_string'] = isset($data['event_type_string']) ? $data['event_type_string'] : null;
        $this->container['week'] = isset($data['week']) ? $data['week'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['gmaps_place_id'] = isset($data['gmaps_place_id']) ? $data['gmaps_place_id'] : null;
        $this->container['gmaps_url'] = isset($data['gmaps_url']) ? $data['gmaps_url'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lng'] = isset($data['lng']) ? $data['lng'] : null;
        $this->container['location_name'] = isset($data['location_name']) ? $data['location_name'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['first_event_id'] = isset($data['first_event_id']) ? $data['first_event_id'] : null;
        $this->container['first_event_code'] = isset($data['first_event_code']) ? $data['first_event_code'] : null;
        $this->container['webcasts'] = isset($data['webcasts']) ? $data['webcasts'] : null;
        $this->container['division_keys'] = isset($data['division_keys']) ? $data['division_keys'] : null;
        $this->container['parent_event_key'] = isset($data['parent_event_key']) ? $data['parent_event_key'] : null;
        $this->container['playoff_type'] = isset($data['playoff_type']) ? $data['playoff_type'] : null;
        $this->container['playoff_type_string'] = isset($data['playoff_type_string']) ? $data['playoff_type_string'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['event_code'] === null) {
            $invalidProperties[] = "'event_code' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
        }
        if ($this->container['event_type_string'] === null) {
            $invalidProperties[] = "'event_type_string' can't be null";
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
     * @param string $key TBA event key with the format yyyy[EVENT_CODE], where yyyy is the year, and EVENT_CODE is the event code of the event.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Official name of event on record either provided by FIRST or organizers of offseason event.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets event_code
     *
     * @return string
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param string $event_code Event short code, as provided by FIRST.
     *
     * @return $this
     */
    public function setEventCode($event_code)
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return int
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param int $event_type Event Type, as defined here: https://github.com/the-blue-alliance/the-blue-alliance/blob/master/consts/event_type.py#L2
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets district
     *
     * @return \TBAAPI\v3client\TBAAPI\v3client\model\DistrictList|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param \TBAAPI\v3client\TBAAPI\v3client\model\DistrictList|null $district district
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City, town, village, etc. the event is located in.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_prov
     *
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->container['state_prov'];
    }

    /**
     * Sets state_prov
     *
     * @param string|null $state_prov State or Province the event is located in.
     *
     * @return $this
     */
    public function setStateProv($state_prov)
    {
        $this->container['state_prov'] = $state_prov;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country the event is located in.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Event start date in `yyyy-mm-dd` format.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Event end date in `yyyy-mm-dd` format.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year Year the event data is for.
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name Same as `name` but doesn't include event specifiers, such as 'Regional' or 'District'. May be null.
     *
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets event_type_string
     *
     * @return string
     */
    public function getEventTypeString()
    {
        return $this->container['event_type_string'];
    }

    /**
     * Sets event_type_string
     *
     * @param string $event_type_string Event Type, eg Regional, District, or Offseason.
     *
     * @return $this
     */
    public function setEventTypeString($event_type_string)
    {
        $this->container['event_type_string'] = $event_type_string;

        return $this;
    }

    /**
     * Gets week
     *
     * @return int|null
     */
    public function getWeek()
    {
        return $this->container['week'];
    }

    /**
     * Sets week
     *
     * @param int|null $week Week of the event relative to the first official season event, zero-indexed. Only valid for Regionals, Districts, and District Championships. Null otherwise. (Eg. A season with a week 0 'preseason' event does not count, and week 1 events will show 0 here. Seasons with a week 0.5 regional event will show week 0 for those event(s) and week 1 for week 1 events and so on.)
     *
     * @return $this
     */
    public function setWeek($week)
    {
        $this->container['week'] = $week;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address of the event's venue, if available.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal code from the event address.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets gmaps_place_id
     *
     * @return string|null
     */
    public function getGmapsPlaceId()
    {
        return $this->container['gmaps_place_id'];
    }

    /**
     * Sets gmaps_place_id
     *
     * @param string|null $gmaps_place_id Google Maps Place ID for the event address.
     *
     * @return $this
     */
    public function setGmapsPlaceId($gmaps_place_id)
    {
        $this->container['gmaps_place_id'] = $gmaps_place_id;

        return $this;
    }

    /**
     * Gets gmaps_url
     *
     * @return string|null
     */
    public function getGmapsUrl()
    {
        return $this->container['gmaps_url'];
    }

    /**
     * Sets gmaps_url
     *
     * @param string|null $gmaps_url Link to address location on Google Maps.
     *
     * @return $this
     */
    public function setGmapsUrl($gmaps_url)
    {
        $this->container['gmaps_url'] = $gmaps_url;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return double|null
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param double|null $lat Latitude for the event address.
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lng
     *
     * @return double|null
     */
    public function getLng()
    {
        return $this->container['lng'];
    }

    /**
     * Sets lng
     *
     * @param double|null $lng Longitude for the event address.
     *
     * @return $this
     */
    public function setLng($lng)
    {
        $this->container['lng'] = $lng;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string|null $location_name Name of the location at the address for the event, eg. Blue Alliance High School.
     *
     * @return $this
     */
    public function setLocationName($location_name)
    {
        $this->container['location_name'] = $location_name;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone Timezone name.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website The event's website, if any.
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets first_event_id
     *
     * @return string|null
     */
    public function getFirstEventId()
    {
        return $this->container['first_event_id'];
    }

    /**
     * Sets first_event_id
     *
     * @param string|null $first_event_id The FIRST internal Event ID, used to link to the event on the FRC webpage.
     *
     * @return $this
     */
    public function setFirstEventId($first_event_id)
    {
        $this->container['first_event_id'] = $first_event_id;

        return $this;
    }

    /**
     * Gets first_event_code
     *
     * @return string|null
     */
    public function getFirstEventCode()
    {
        return $this->container['first_event_code'];
    }

    /**
     * Sets first_event_code
     *
     * @param string|null $first_event_code Public facing event code used by FIRST (on frc-events.firstinspires.org, for example)
     *
     * @return $this
     */
    public function setFirstEventCode($first_event_code)
    {
        $this->container['first_event_code'] = $first_event_code;

        return $this;
    }

    /**
     * Gets webcasts
     *
     * @return \TBAAPI\v3client\TBAAPI\v3client\model\Webcast[]|null
     */
    public function getWebcasts()
    {
        return $this->container['webcasts'];
    }

    /**
     * Sets webcasts
     *
     * @param \TBAAPI\v3client\TBAAPI\v3client\model\Webcast[]|null $webcasts webcasts
     *
     * @return $this
     */
    public function setWebcasts($webcasts)
    {
        $this->container['webcasts'] = $webcasts;

        return $this;
    }

    /**
     * Gets division_keys
     *
     * @return string[]|null
     */
    public function getDivisionKeys()
    {
        return $this->container['division_keys'];
    }

    /**
     * Sets division_keys
     *
     * @param string[]|null $division_keys An array of event keys for the divisions at this event.
     *
     * @return $this
     */
    public function setDivisionKeys($division_keys)
    {
        $this->container['division_keys'] = $division_keys;

        return $this;
    }

    /**
     * Gets parent_event_key
     *
     * @return string|null
     */
    public function getParentEventKey()
    {
        return $this->container['parent_event_key'];
    }

    /**
     * Sets parent_event_key
     *
     * @param string|null $parent_event_key The TBA Event key that represents the event's parent. Used to link back to the event from a division event. It is also the inverse relation of `divison_keys`.
     *
     * @return $this
     */
    public function setParentEventKey($parent_event_key)
    {
        $this->container['parent_event_key'] = $parent_event_key;

        return $this;
    }

    /**
     * Gets playoff_type
     *
     * @return int|null
     */
    public function getPlayoffType()
    {
        return $this->container['playoff_type'];
    }

    /**
     * Sets playoff_type
     *
     * @param int|null $playoff_type Playoff Type, as defined here: https://github.com/the-blue-alliance/the-blue-alliance/blob/master/consts/playoff_type.py#L4, or null.
     *
     * @return $this
     */
    public function setPlayoffType($playoff_type)
    {
        $this->container['playoff_type'] = $playoff_type;

        return $this;
    }

    /**
     * Gets playoff_type_string
     *
     * @return string|null
     */
    public function getPlayoffTypeString()
    {
        return $this->container['playoff_type_string'];
    }

    /**
     * Sets playoff_type_string
     *
     * @param string|null $playoff_type_string String representation of the `playoff_type`, or null.
     *
     * @return $this
     */
    public function setPlayoffTypeString($playoff_type_string)
    {
        $this->container['playoff_type_string'] = $playoff_type_string;

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


