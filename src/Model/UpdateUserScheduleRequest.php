<?php
/**
 * UpdateUserScheduleRequest
 *
 * PHP version 8.1
 *
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
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Feed\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use eBay\Sell\Feed\ObjectSerializer;

/**
 * UpdateUserScheduleRequest Class Doc Comment
 *
 * @description The type that defines the fields for a schedule update to a schedule generated with the Feed API.
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class UpdateUserScheduleRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UpdateUserScheduleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'preferred_trigger_day_of_month' => 'int',
        'preferred_trigger_day_of_week' => 'string',
        'preferred_trigger_hour' => 'string',
        'schedule_end_date' => 'string',
        'schedule_name' => 'string',
        'schedule_start_date' => 'string',
        'schema_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'preferred_trigger_day_of_month' => 'int32',
        'preferred_trigger_day_of_week' => null,
        'preferred_trigger_hour' => null,
        'schedule_end_date' => null,
        'schedule_name' => null,
        'schedule_start_date' => null,
        'schema_version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'preferred_trigger_day_of_month' => false,
        'preferred_trigger_day_of_week' => false,
        'preferred_trigger_hour' => false,
        'schedule_end_date' => false,
        'schedule_name' => false,
        'schedule_start_date' => false,
        'schema_version' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'preferred_trigger_day_of_month' => 'preferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'preferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'preferredTriggerHour',
        'schedule_end_date' => 'scheduleEndDate',
        'schedule_name' => 'scheduleName',
        'schedule_start_date' => 'scheduleStartDate',
        'schema_version' => 'schemaVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'preferred_trigger_day_of_month' => 'setPreferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'setPreferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'setPreferredTriggerHour',
        'schedule_end_date' => 'setScheduleEndDate',
        'schedule_name' => 'setScheduleName',
        'schedule_start_date' => 'setScheduleStartDate',
        'schema_version' => 'setSchemaVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'preferred_trigger_day_of_month' => 'getPreferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'getPreferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'getPreferredTriggerHour',
        'schedule_end_date' => 'getScheduleEndDate',
        'schedule_name' => 'getScheduleName',
        'schedule_start_date' => 'getScheduleStartDate',
        'schema_version' => 'getSchemaVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('preferred_trigger_day_of_month', $data ?? [], null);
        $this->setIfExists('preferred_trigger_day_of_week', $data ?? [], null);
        $this->setIfExists('preferred_trigger_hour', $data ?? [], null);
        $this->setIfExists('schedule_end_date', $data ?? [], null);
        $this->setIfExists('schedule_name', $data ?? [], null);
        $this->setIfExists('schedule_start_date', $data ?? [], null);
        $this->setIfExists('schema_version', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets preferred_trigger_day_of_month
     *
     * @return int|null
     */
    public function getPreferredTriggerDayOfMonth(): ?int
    {
        return $this->container['preferred_trigger_day_of_month'];
    }

    /**
     * Sets preferred_trigger_day_of_month
     *
     * @param int|null $preferred_trigger_day_of_month The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the actual number of days in the month. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Minimum: </b>1<b><br /><br /><b>Maximum: </b>31
     *
     * @return $this
     */
    public function setPreferredTriggerDayOfMonth(?int $preferred_trigger_day_of_month): static
    {
        if (is_null($preferred_trigger_day_of_month)) {
            throw new InvalidArgumentException('non-nullable preferred_trigger_day_of_month cannot be null');
        }
        $this->container['preferred_trigger_day_of_month'] = $preferred_trigger_day_of_month;

        return $this;
    }

    /**
     * Gets preferred_trigger_day_of_week
     *
     * @return string|null
     */
    public function getPreferredTriggerDayOfWeek(): ?string
    {
        return $this->container['preferred_trigger_day_of_week'];
    }

    /**
     * Sets preferred_trigger_day_of_week
     *
     * @param string|null $preferred_trigger_day_of_week The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPreferredTriggerDayOfWeek(?string $preferred_trigger_day_of_week): static
    {
        if (is_null($preferred_trigger_day_of_week)) {
            throw new InvalidArgumentException('non-nullable preferred_trigger_day_of_week cannot be null');
        }
        $this->container['preferred_trigger_day_of_week'] = $preferred_trigger_day_of_week;

        return $this;
    }

    /**
     * Gets preferred_trigger_hour
     *
     * @return string|null
     */
    public function getPreferredTriggerHour(): ?string
    {
        return $this->container['preferred_trigger_hour'];
    }

    /**
     * Sets preferred_trigger_hour
     *
     * @param string|null $preferred_trigger_hour The preferred two-digit hour of the day to trigger the schedule. <br /><br />This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value. <br /><br /><b>Format:</b> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC:<code> 11Z</code><br /><br /><b>Minimum: </b><code>00Z</code><br /><br /><b>Maximum:</b> <code>23Z</code>
     *
     * @return $this
     */
    public function setPreferredTriggerHour(?string $preferred_trigger_hour): static
    {
        if (is_null($preferred_trigger_hour)) {
            throw new InvalidArgumentException('non-nullable preferred_trigger_hour cannot be null');
        }
        $this->container['preferred_trigger_hour'] = $preferred_trigger_hour;

        return $this;
    }

    /**
     * Gets schedule_end_date
     *
     * @return string|null
     */
    public function getScheduleEndDate(): ?string
    {
        return $this->container['schedule_end_date'];
    }

    /**
     * Sets schedule_end_date
     *
     * @param string|null $schedule_end_date The timestamp on which the schedule (report generation) ends. After this date, the schedule status becomes <code>INACTIVE</code>. <br /><br />Use this field, if available, to end the schedule in the future. This value must be later than <strong>scheduleStartDate</strong> (if supplied). This field is available as specified by the template (<strong>scheduleTemplateId</strong>). The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents UTC October 10, 2021 at 10:00 AM:<br /><code> 2021-10-10T10Z</code>
     *
     * @return $this
     */
    public function setScheduleEndDate(?string $schedule_end_date): static
    {
        if (is_null($schedule_end_date)) {
            throw new InvalidArgumentException('non-nullable schedule_end_date cannot be null');
        }
        $this->container['schedule_end_date'] = $schedule_end_date;

        return $this;
    }

    /**
     * Gets schedule_name
     *
     * @return string|null
     */
    public function getScheduleName(): ?string
    {
        return $this->container['schedule_name'];
    }

    /**
     * Sets schedule_name
     *
     * @param string|null $schedule_name The schedule name assigned by the user for the created schedule.
     *
     * @return $this
     */
    public function setScheduleName(?string $schedule_name): static
    {
        if (is_null($schedule_name)) {
            throw new InvalidArgumentException('non-nullable schedule_name cannot be null');
        }
        $this->container['schedule_name'] = $schedule_name;

        return $this;
    }

    /**
     * Gets schedule_start_date
     *
     * @return string|null
     */
    public function getScheduleStartDate(): ?string
    {
        return $this->container['schedule_start_date'];
    }

    /**
     * Sets schedule_start_date
     *
     * @param string|null $schedule_start_date The timestamp to start generating the report. After this timestamp, the schedule status becomes active until either the <strong>scheduleEndDate</strong> occurs or the <strong>scheduleTemplateId</strong> becomes inactive. <br /><br />Use this field, if available, to start the schedule in the future but before the <strong>scheduleEndDate</strong> (if supplied). This field is available as specified by the template <strong>(scheduleTemplateId)</strong>.  The template can specify this field as optional or required, and optionally provides a default value.<br /><br /><b>Format:</b> UTC <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code><br /><br />For example, the following represents a schedule start date of UTC October 01, 2020 at 12:00 PM:<br /><code> 2020-01-01T12Z</code>
     *
     * @return $this
     */
    public function setScheduleStartDate(?string $schedule_start_date): static
    {
        if (is_null($schedule_start_date)) {
            throw new InvalidArgumentException('non-nullable schedule_start_date cannot be null');
        }
        $this->container['schedule_start_date'] = $schedule_start_date;

        return $this;
    }

    /**
     * Gets schema_version
     *
     * @return string|null
     */
    public function getSchemaVersion(): ?string
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string|null $schema_version The schema version of a schedule.
     *
     * @return $this
     */
    public function setSchemaVersion(?string $schema_version): static
    {
        if (is_null($schema_version)) {
            throw new InvalidArgumentException('non-nullable schema_version cannot be null');
        }
        $this->container['schema_version'] = $schema_version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


