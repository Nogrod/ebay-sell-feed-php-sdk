<?php
/**
 * UserScheduleCollection
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Feed\Model;

use \ArrayAccess;
use \eBay\Sell\Feed\ObjectSerializer;

/**
 * UserScheduleCollection Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for a paginated result set of user schedules. The response consists of 0 or more sequenced &lt;em&gt; pages&lt;/em&gt; where each page has 0 or more items.
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserScheduleCollection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserScheduleCollection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'href' => 'string',
        'limit' => 'int',
        'next' => 'string',
        'offset' => 'int',
        'prev' => 'string',
        'schedules' => '\eBay\Sell\Feed\Model\UserScheduleResponse[]',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'href' => null,
        'limit' => 'int32',
        'next' => null,
        'offset' => 'int32',
        'prev' => null,
        'schedules' => null,
        'total' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'href' => false,
		'limit' => false,
		'next' => false,
		'offset' => false,
		'prev' => false,
		'schedules' => false,
		'total' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'href' => 'href',
        'limit' => 'limit',
        'next' => 'next',
        'offset' => 'offset',
        'prev' => 'prev',
        'schedules' => 'schedules',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'href' => 'setHref',
        'limit' => 'setLimit',
        'next' => 'setNext',
        'offset' => 'setOffset',
        'prev' => 'setPrev',
        'schedules' => 'setSchedules',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'href' => 'getHref',
        'limit' => 'getLimit',
        'next' => 'getNext',
        'offset' => 'getOffset',
        'prev' => 'getPrev',
        'schedules' => 'getSchedules',
        'total' => 'getTotal'
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
        $this->setIfExists('href', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('next', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('prev', $data ?? [], null);
        $this->setIfExists('schedules', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The path to the call URI that produced the current page of results.
     *
     * @return self
     */
    public function setHref($href)
    {
        if (is_null($href)) {
            throw new \InvalidArgumentException('non-nullable href cannot be null');
        }
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The value of the <strong>limit</strong> parameter submitted in the request, which is the maximum number of schedules to return per page, from the result set. A result set is the complete set of schedules returned by the method. <p> <span class=\"tablenote\"><strong>Note:</strong> Though this parameter is not required to be submitted in the request, the parameter defaults to 10 if omitted.<p> <span class=\"tablenote\"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer tasks than the <strong>limit</strong> value. To determine the number of pages in a result set, divide the total value (total number of tasks matching input criteria) by this limit value, and then round up to the next integer. For example, if the <strong>total</strong> value was <code>120</code> (120 total tasks) and the <strong>limit</strong> value was <code>50</code> (show 50 tasks per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getSchedules</strong> calls to view all tasks matching the input criteria.</span></p></span></p>
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next The path to the call URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     *
     * @return self
     */
    public function setNext($next)
    {
        if (is_null($next)) {
            throw new \InvalidArgumentException('non-nullable next cannot be null');
        }
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p class=\"tablenote\"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets prev
     *
     * @return string|null
     */
    public function getPrev()
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev
     *
     * @param string|null $prev The path to the call URI for the previous page of results. This is returned if there is a previous page of results from the result set.
     *
     * @return self
     */
    public function setPrev($prev)
    {
        if (is_null($prev)) {
            throw new \InvalidArgumentException('non-nullable prev cannot be null');
        }
        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets schedules
     *
     * @return \eBay\Sell\Feed\Model\UserScheduleResponse[]|null
     */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
     * Sets schedules
     *
     * @param \eBay\Sell\Feed\Model\UserScheduleResponse[]|null $schedules An array of the schedules on this page. An empty array is returned if the filter criteria excludes all tasks.
     *
     * @return self
     */
    public function setSchedules($schedules)
    {
        if (is_null($schedules)) {
            throw new \InvalidArgumentException('non-nullable schedules cannot be null');
        }
        $this->container['schedules'] = $schedules;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total The total number of schedules that match the input criteria.
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


