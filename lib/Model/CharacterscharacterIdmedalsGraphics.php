<?php
/**
 * CharacterscharacterIdmedalsGraphics
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
 * CharacterscharacterIdmedalsGraphics Class Doc Comment
 *
 * @category    Class */
 // @description graphic object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CharacterscharacterIdmedalsGraphics implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'characterscharacter_idmedals_graphics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'color' => 'int',
        'graphic' => 'string',
        'layer' => 'int',
        'part' => 'int'
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
        'color' => 'color',
        'graphic' => 'graphic',
        'layer' => 'layer',
        'part' => 'part'
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
        'color' => 'setColor',
        'graphic' => 'setGraphic',
        'layer' => 'setLayer',
        'part' => 'setPart'
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
        'color' => 'getColor',
        'graphic' => 'getGraphic',
        'layer' => 'getLayer',
        'part' => 'getPart'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['graphic'] = isset($data['graphic']) ? $data['graphic'] : null;
        $this->container['layer'] = isset($data['layer']) ? $data['layer'] : null;
        $this->container['part'] = isset($data['part']) ? $data['part'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['graphic'] === null) {
            $invalid_properties[] = "'graphic' can't be null";
        }
        if ($this->container['layer'] === null) {
            $invalid_properties[] = "'layer' can't be null";
        }
        if ($this->container['part'] === null) {
            $invalid_properties[] = "'part' can't be null";
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
        if ($this->container['graphic'] === null) {
            return false;
        }
        if ($this->container['layer'] === null) {
            return false;
        }
        if ($this->container['part'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets color
     * @return int
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param int $color color integer
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets graphic
     * @return string
     */
    public function getGraphic()
    {
        return $this->container['graphic'];
    }

    /**
     * Sets graphic
     * @param string $graphic graphic string
     * @return $this
     */
    public function setGraphic($graphic)
    {
        $this->container['graphic'] = $graphic;

        return $this;
    }

    /**
     * Gets layer
     * @return int
     */
    public function getLayer()
    {
        return $this->container['layer'];
    }

    /**
     * Sets layer
     * @param int $layer layer integer
     * @return $this
     */
    public function setLayer($layer)
    {
        $this->container['layer'] = $layer;

        return $this;
    }

    /**
     * Gets part
     * @return int
     */
    public function getPart()
    {
        return $this->container['part'];
    }

    /**
     * Sets part
     * @param int $part part integer
     * @return $this
     */
    public function setPart($part)
    {
        $this->container['part'] = $part;

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


